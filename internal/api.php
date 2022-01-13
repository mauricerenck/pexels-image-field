<?php

namespace mauricerenck\PexelsImageField;

use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Model\Source;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use WBW\Library\Pexels\Request\GetPhotoRequest;
use Kirby\Toolkit\V;
use File;
use \Response;
use \Exception;

return [
    'routes' => [
        [
            'pattern' => 'pexels/download',
            'method' => 'POST',
            'action' => function () {
                // Create the API provider.
                $formData = kirby()->request()->data();

                if (!V::url($formData['downloadUrl'])) {
                    return new Response('Invalid Image Url', 'text/plain', 500);
                }

                $page = page(str_replace(['/pages/', '+'], ['/', '/'], $formData['pageId']));

                if (is_null($page)) {
                    return new Response('Page Not Found', 'text/plain', 404);
                }

                $urlParts = explode('/', $formData['downloadUrl']);
                $filename = array_pop($urlParts);

                try {
                    $ch = curl_init($formData['downloadUrl']);
                    $fp = fopen($page->contentFileDirectory() . '/' . $filename, 'wb');
                    curl_setopt($ch, CURLOPT_FILE, $fp);
                    curl_setopt($ch, CURLOPT_HEADER, 0);
                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
                    curl_exec($ch);
                    curl_close($ch);
                } catch (Exception $e) {
                    return new Response($e, 'text/plain', 500);
                }

                try {
                    $file = $page->file($filename);
                    $file->update([
                        'photographer' => $formData['photographer'],
                        'photographerUrl' => $formData['photographerUrl'],
                    ]);
                } catch (Exception $e) {
                    return new Response($e, 'text/plain', 500);
                }

                return new Response(json_encode('ok'), 'application/json');
            },
        ],
        [
            'pattern' => 'pexels/search/(:any)/(:any)',
            'action' => function (string $query, string $page) {
                // Create the API provider.
                $provider = new ApiProvider(option('mauricerenck.PexelsImageField.apiKey', ''));

                // Create a Search photos request.
                $request = new SearchPhotosRequest();
                $request->setQuery($query);
                $request->setPerPage(option('mauricerenck.PexelsImageField.images', 12));
                $request->setPage($page);
                // $request->setOrientation('landscape'); // Optional
                // $request->setSize('large'); // Optional
                // $request->setLocale('en-US'); // Optional

                // Call the API and get the response.
                $response = $provider->searchPhotos($request);

                // Handle the response.
                $response->getLimit();
                $response->getRemaining();
                $response->getReset();

                $response->getPerPage();
                $response->getPage();
                $response->getTotalResults();

                $response->getPrevPage();
                $response->getNextPage();

                $response->getUrl();

                /** @var Photo $current */

                $photos = [];
                foreach ($response->getPhotos() as $current) {
                    // $current->getWidth();
                    // $current->getHeight();

                    $src = $current->getSrc();

                    $photos[] = [
                        // 'src' => $current->getUrl(),
                        'id' => $current->getId(),
                        'small' => $src->getTiny(),
                        'large' => $src->getLarge(),
                        'photographer' => $current->getPhotographer(),
                        'photographerUrl' => $current->getPhotographerUrl(),
                        'downloadUrl' => $src->getOriginal()
                    ];

                    // $current->getPhotographer();
                    // $current->getPhotographerUrl();
                    // $current->getPhotographerId();

                    // /** @var Source src */
                    // $src = $current->getSrc();
                    // $src->getOriginal();
                    // $src->getLarge2x();
                    // $src->getLarge();
                    // $src->getMedium();
                    $src->getSmall();
                    // $src->getPortrait();
                    // $src->getLandscape();
                    // $src->getTiny();
                }

                return \json_encode([
                    'page' => $response->getPage(),
                    'perPage' => $response->getPerPage(),
                    'remaining' => $response->getRemaining(),
                    'totalResults' => $response->getTotalResults(),
                    'photos' => $photos,
                    'next' => $response->getPrevPage(),
                    'prev' => $response->getNextPage()
                ]);
            }
        ],
    ]
];

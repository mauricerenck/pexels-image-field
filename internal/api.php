<?php

namespace mauricerenck\PexelsImageField;

use WBW\Library\Pexels\Model\Photo;
use WBW\Library\Pexels\Provider\ApiProvider;
use WBW\Library\Pexels\Request\SearchPhotosRequest;
use Kirby\Toolkit\V;
use Kirby\Filesystem\F;
use Kirby\Http\Response;
use Kirby\Http\Remote;
use \Exception;
use Kirby\Cms\File;

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

                $page = kirby()->page(str_replace(['/pages/', '+'], ['', '/'], $formData['pageId']));

                if (is_null($page)) {
                    return new Response('Page Not Found', 'text/plain', 404);
                }

                $cleanedDownloadUrl = explode('?', $formData['downloadUrl'])[0];
                $urlParts = explode('/', $cleanedDownloadUrl);
                $filename = array_pop($urlParts);

                try {
                    $imageFile = Remote::get($formData['downloadUrl']);

                    $temporaryFilename = $page->root() . '/temp_' . $filename;
                    F::write($temporaryFilename, $imageFile->content());

                    $file = File::create([
                        'source'     => $temporaryFilename,
                        'parent'     => $page,
                        'filename'   => $filename,
                        'template' => 'pexelsimage',
                        'blueprint' => ['pexelsimage'],
                        'content'   => [
                            'photographer' => $formData['photographer'],
                            'photographerUrl' => $formData['photographerUrl'],
                        ]
                    ], true);

                    return new Response(json_encode($file), 'application/json');
                } catch (Exception $e) {
                    return new Response($e, 'text/plain', 500);
                }

                return new Response(json_encode('unknown error'), 'application/json', 500);
            },
        ],
        [
            'pattern' => 'pexels/search/(:any)/(:any)/(:any)',
            'action' => function (string $query, string $page, string $downloadSize) {
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
                $response = $provider->sendRequest($request);

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

                    switch($downloadSize) {
                        case 'large':
                            $downloadUrl = $src->getLarge();
                            break;
                        case 'medium':
                            $downloadUrl = $src->getMedium();
                            break;
                        case 'small':
                            $downloadUrl = $src->getSmall();
                            break;
                        case 'portrait':
                            $downloadUrl = $src->getPortrait();
                            break;
                        case 'landscape':
                            $downloadUrl = $src->getLandscape();
                            break;
                        case 'tiny':
                            $downloadUrl = $src->getTiny();
                            break;
                        case 'original':
                            $downloadUrl = $src->getOriginal();
                            break;
                        default:
                            $downloadUrl = $src->getLarge();
                            break;
                    }

                    $photos[] = [
                        // 'src' => $current->getUrl(),
                        'id' => $current->getId(),
                        'small' => $src->getTiny(),
                        'large' => $src->getLarge(),
                        'photographer' => $current->getPhotographer(),
                        'photographerUrl' => $current->getPhotographerUrl(),
                        'downloadUrl' => $downloadUrl,
                        'width' => $current->getWidth(),
                        'height' => $current->getHeight(),
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
                    // $src->getSmall();
                    // $src->getPortrait();
                    // $src->getLandscape();
                    // $src->getTiny();
                }

                $data = json_encode([
                    'page' => $response->getPage(),
                    'perPage' => $response->getPerPage(),
                    'remaining' => $response->getRemaining(),
                    'totalResults' => $response->getTotalResults(),
                    'photos' => $photos,
                    'next' => $response->getPrevPage(),
                    'prev' => $response->getNextPage()
                ]);

                return new Response($data, 'application/json');
            }
        ],
    ]
];

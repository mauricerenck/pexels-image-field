<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Symfony\Service;

/**
 * Uploaded file service trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Symfony\Service
 */
trait UploadedFileServiceTrait {

    /**
     * Uploaded file service.
     *
     * @var UploadedFileService|null
     */
    private $uploadedFileService;

    /**
     * Get the uploaded file service.
     *
     * @return UploadedFileService|null Returns the uploaded file service.
     */
    public function getUploadedFileService(): ?UploadedFileService {
        return $this->uploadedFileService;
    }

    /**
     * Set the uploaded file service.
     *
     * @param UploadedFileService|null $uploadedFileService The uploaded file service.
     * @return self Returns this instance.
     */
    protected function setUploadedFileService(?UploadedFileService $uploadedFileService): self {
        $this->uploadedFileService = $uploadedFileService;
        return $this;
    }
}

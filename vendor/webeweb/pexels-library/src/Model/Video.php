<?php

/*
 * This file is part of the pexels-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Pexels\Model;

use WBW\Library\Traits\Strings\StringRawDataTrait;

/**
 * Video.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Pexels\Model
 */
class Video extends AbstractMedia {

    use StringRawDataTrait;

    /**
     * Duration.
     *
     * @var int|null
     */
    private $duration;

    /**
     * Full res.
     *
     * @var mixed
     */
    private $fullRes;

    /**
     * Image.
     *
     * @var string|null
     */
    private $image;

    /**
     * User.
     *
     * @var User|null
     */
    private $user;

    /**
     * Video files.
     *
     * @var VideoFile[]
     */
    private $videoFiles;

    /**
     * Video pictures.
     *
     * @var VideoPicture[]
     */
    private $videoPictures;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setVideoFiles([]);
        $this->setVideoPictures([]);
    }

    /**
     * Add a video file.
     *
     * @param VideoFile $videoFile The video file.
     * @return Video Returns this video.
     */
    public function addVideoFile(VideoFile $videoFile): Video {
        $this->videoFiles[] = $videoFile;
        return $this;
    }

    /**
     * Add a video picture.
     *
     * @param VideoPicture $videoPicture The video picture.
     * @return Video Returns this video.
     */
    public function addVideoPicture(VideoPicture $videoPicture): Video {
        $this->videoPictures[] = $videoPicture;
        return $this;
    }

    /**
     * Get the duration.
     *
     * @return int|null Returns the duration.
     */
    public function getDuration(): ?int {
        return $this->duration;
    }

    /**
     * Get the full res.
     *
     * @return mixed Returns the full res.
     */
    public function getFullRes() {
        return $this->fullRes;
    }

    /**
     * Get the image.
     *
     * @return string|null Returns the image.
     */
    public function getImage(): ?string {
        return $this->image;
    }

    /**
     * Get the user.
     *
     * @return User|null Returns the user.
     */
    public function getUser(): ?User {
        return $this->user;
    }

    /**
     * Get the video files.
     *
     * @return VideoFile[] Returns teh video files.
     */
    public function getVideoFiles(): array {
        return $this->videoFiles;
    }

    /**
     * Get the video pictures.
     *
     * @return VideoPicture[] Returns teh video pictures.
     */
    public function getVideoPictures(): array {
        return $this->videoPictures;
    }

    /**
     * Set the duration.
     *
     * @param int|null $duration The duration.
     * @return Video Returns this video.
     */
    public function setDuration(?int $duration): Video {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Set the full re.
     *
     * @param mixed $fullRes The full res.
     * @return Video Returns this video.
     */
    public function setFullRes($fullRes): Video {
        $this->fullRes = $fullRes;
        return $this;
    }

    /**
     * Set the image.
     *
     * @param string|null $image The image.
     * @return Video Returns this video.
     */
    public function setImage(?string $image): Video {
        $this->image = $image;
        return $this;
    }

    /**
     * Set the user.
     *
     * @param User|null $user The user.
     * @return Video Returns this video.
     */
    public function setUser(?User $user): Video {
        $this->user = $user;
        return $this;
    }

    /**
     * Set the video files.
     *
     * @param VideoFile[] $videoFiles The video files.
     * @return Video Returns this video.
     */
    protected function setVideoFiles(array $videoFiles): Video {
        $this->videoFiles = $videoFiles;
        return $this;
    }

    /**
     * Set the video pictures.
     *
     * @param VideoPicture[] $videoPictures The video pictures.
     * @return Video Returns this video.
     */
    protected function setVideoPictures(array $videoPictures): Video {
        $this->videoPictures = $videoPictures;
        return $this;
    }
}

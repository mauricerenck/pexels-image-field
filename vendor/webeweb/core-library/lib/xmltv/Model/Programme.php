<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Model;

use DateTime;
use WBW\Library\XmlTv\Serializer\JsonSerializer;
use WBW\Library\XmlTv\Serializer\SerializerHelper;
use WBW\Library\XmlTv\Serializer\XmlSerializer;
use WBW\Library\XmlTv\Traits\Arrays\ArrayCategoriesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayCountriesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayDescsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayEpisodeNumsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayIconsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayKeywordsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayRatingsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayReviewsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArraySecondaryTitlesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayStarRatingsTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArraySubtitlesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayTitlesTrait;
use WBW\Library\XmlTv\Traits\Arrays\ArrayUrlsTrait;
use WBW\Library\XmlTv\Traits\Objects\LanguageLanguageTrait;
use WBW\Library\XmlTv\Traits\Strings\StringChannelTrait;
use WBW\Library\XmlTv\Traits\Strings\StringStartTrait;

/**
 * Programme.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Model
 */
class Programme extends AbstractModel {

    use ArrayCategoriesTrait;
    use ArrayCountriesTrait;
    use ArrayDescsTrait;
    use ArrayEpisodeNumsTrait;
    use ArrayIconsTrait;
    use ArrayKeywordsTrait;
    use ArrayRatingsTrait;
    use ArrayReviewsTrait;
    use ArrayStarRatingsTrait;
    use ArraySecondaryTitlesTrait;
    use ArraySubtitlesTrait;
    use ArrayTitlesTrait;
    use ArrayUrlsTrait;
    use LanguageLanguageTrait;
    use StringChannelTrait;
    use StringStartTrait;

    /**
     * DOM node name.
     *
     * @var string
     */
    public const DOM_NODE_NAME = "programme";

    /**
     * Audio.
     *
     * @var Audio|null
     */
    private $audio;

    /**
     * Clump Idx
     *
     * @var string|null
     */
    private $clumpIdx;

    /**
     * Credits.
     *
     * @var Credits|null
     */
    private $credits;

    /**
     * Date.
     *
     * @var Date|null
     */
    private $date;

    /**
     * Last chance.
     *
     * @var LastChance|null
     */
    private $lastChance;

    /**
     * Length.
     *
     * @var Length|null
     */
    private $length;

    /**
     * New.
     *
     * @var bool|null
     */
    private $new;

    /**
     * Original language.
     *
     * @var OrigLanguage|null
     */
    private $origLanguage;

    /**
     * PDC start.
     *
     * @var string|null
     */
    private $pdcStart;

    /**
     * Premiere.
     *
     * @var Premiere|null
     */
    private $premiere;

    /**
     * Previously shown.
     *
     * @var PreviouslyShown|null
     */
    private $previouslyShown;

    /**
     * Show view.
     *
     * @var string|null
     */
    private $showView;

    /**
     * Stop.
     *
     * @var string|null
     */
    private $stop;

    /**
     * Video.
     *
     * @var Video|null
     */
    private $video;

    /**
     * Video plus.
     *
     * @var string|null
     */
    private $videoPlus;

    /**
     * VPS start.
     *
     * @var string|null
     */
    private $vpsStart;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setCategories([]);
        $this->setCountries([]);
        $this->setDescs([]);
        $this->setEpisodeNums([]);
        $this->setIcons([]);
        $this->setKeywords([]);
        $this->setRatings([]);
        $this->setReviews([]);
        $this->setSecondaryTitles([]);
        $this->setStarRatings([]);
        $this->setSubtitles([]);
        $this->setTitles([]);
        $this->setUrls([]);
    }

    /**
     * Get the audio.
     *
     * @return Audio|null Returns the audio.
     */
    public function getAudio(): ?Audio {
        return $this->audio;
    }

    /**
     * Get the clump idx.
     *
     * @return string|null Returns the clump idx.
     */
    public function getClumpIdx(): ?string {
        return $this->clumpIdx;
    }

    /**
     * Get the credits.
     *
     * @return Credits|null Returns the credits.
     */
    public function getCredits(): ?Credits {
        return $this->credits;
    }

    /**
     * Get the date.
     *
     * @return Date|null Returns the date.
     */
    public function getDate(): ?Date {
        return $this->date;
    }

    /**
     * Get the last chance.
     *
     * @return LastChance|null Returns the last chance.
     */
    public function getLastChance(): ?LastChance {
        return $this->lastChance;
    }

    /**
     * Get the length.
     *
     * @return Length|null Returns the length.
     */
    public function getLength(): ?Length {
        return $this->length;
    }

    /**
     * Get the new.
     *
     * @return bool|null Returns the new.
     */
    public function getNew(): ?bool {
        return $this->new;
    }

    /**
     * Get the original language.
     *
     * @return OrigLanguage|null Returns the original language.
     */
    public function getOrigLanguage(): ?OrigLanguage {
        return $this->origLanguage;
    }

    /**
     * Get the PDC start.
     *
     * @return string|null Returns the PDC start.
     */
    public function getPdcStart(): ?string {
        return $this->pdcStart;
    }

    /**
     * Get the PDC start into DateTime.
     *
     * @return DateTime|null Returns the stop into DateTime in case of success, null otherwise.
     */
    public function getPdcStartDateTime(): ?DateTime {
        return SerializerHelper::deserializeDateTime($this->pdcStart);
    }

    /**
     * Get the premiere.
     *
     * @return Premiere|null Returns the premiere.
     */
    public function getPremiere(): ?Premiere {
        return $this->premiere;
    }

    /**
     * Get the previously shown.
     *
     * @return PreviouslyShown|null Returns the previously shown.
     */
    public function getPreviouslyShown(): ?PreviouslyShown {
        return $this->previouslyShown;
    }

    /**
     * Get the show view.
     *
     * @return string|null Returns the show view.
     */
    public function getShowView(): ?string {
        return $this->showView;
    }

    /**
     * Get the stop.
     *
     * @return string|null Returns the stop.
     */
    public function getStop(): ?string {
        return $this->stop;
    }

    /**
     * Get the stop into DateTime.
     *
     * @return DateTime|null Returns the stop into DateTime in case of success, null otherwise.
     */
    public function getStopDateTime(): ?DateTime {
        return SerializerHelper::deserializeDateTime($this->stop);
    }

    /**
     * Get the video.
     *
     * @return Video|null Returns the video.
     */
    public function getVideo(): ?Video {
        return $this->video;
    }

    /**
     * Get the video plus.
     *
     * @return string|null Returns the video plus.
     */
    public function getVideoPlus(): ?string {
        return $this->videoPlus;
    }

    /**
     * Get the VPS start.
     *
     * @return string|null Returns the VPS start.
     */
    public function getVpsStart(): ?string {
        return $this->vpsStart;
    }

    /**
     * Get the VPS start into DateTime.
     *
     * @return DateTime|null Returns the stop into DateTime in case of success, null otherwise.
     */
    public function getVpsStartDateTime(): ?DateTime {
        return SerializerHelper::deserializeDateTime($this->vpsStart);
    }

    /**
     * {@inheritDoc}
     * @return array<string,mixed> Returns this serialized instance.
     */
    public function jsonSerialize(): array {
        return JsonSerializer::serializeProgramme($this);
    }

    /**
     * Set the audio.
     *
     * @param Audio|null $audio The audio.
     * @return Programme Returns this programme.
     */
    public function setAudio(?Audio $audio): Programme {
        $this->audio = $audio;
        return $this;
    }

    /**
     * Set the clump idx.
     *
     * @param string|null $clumpIdx The clump idx.
     * @return Programme Returns this programme.
     */
    public function setClumpIdx(?string $clumpIdx): Programme {
        $this->clumpIdx = $clumpIdx;
        return $this;
    }

    /**
     * Set the credits.
     *
     * @param Credits|null $credits The credits.
     * @return Programme Returns this programme.
     */
    public function setCredits(?Credits $credits): Programme {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param Date|null $date The date.
     * @return Programme Returns this programme.
     */
    public function setDate(?Date $date): Programme {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the last chance.
     *
     * @param LastChance|null $lastChance The last chance.
     * @return Programme Returns this instance.
     */
    public function setLastChance(?LastChance $lastChance): Programme {
        $this->lastChance = $lastChance;
        return $this;
    }

    /**
     * Set the length.
     *
     * @param Length|null $length The length.
     * @return Programme Returns this programme.
     */
    public function setLength(?Length $length): Programme {
        $this->length = $length;
        return $this;
    }

    /**
     * Set the new.
     *
     * @param bool|null $new The new.
     * @return Programme Returns this programme.
     */
    public function setNew(?bool $new): Programme {
        $this->new = $new;
        return $this;
    }

    /**
     * Set the original language.
     *
     * @param OrigLanguage|null $origLanguage The original language.
     * @return Programme Returns this programme.
     */
    public function setOrigLanguage(?OrigLanguage $origLanguage): Programme {
        $this->origLanguage = $origLanguage;
        return $this;
    }

    /**
     * Set the PDC start.
     *
     * @param string|null $pdcStart The PDC start.
     * @return Programme Returns this programme.
     */
    public function setPdcStart(?string $pdcStart): Programme {
        $this->pdcStart = $pdcStart;
        return $this;
    }

    /**
     * Set the premiere.
     *
     * @param Premiere|null $premiere The premiere.
     * @return Programme Returns this programme.
     */
    public function setPremiere(?Premiere $premiere): Programme {
        $this->premiere = $premiere;
        return $this;
    }

    /**
     * Set the previously shown.
     *
     * @param PreviouslyShown|null $previouslyShown The previously shown.
     * @return Programme Returns this programme.
     */
    public function setPreviouslyShown(?PreviouslyShown $previouslyShown): Programme {
        $this->previouslyShown = $previouslyShown;
        return $this;
    }

    /**
     * Set the show view.
     *
     * @param string|null $showView The show view.
     * @return Programme Returns this programme.
     */
    public function setShowView(?string $showView): Programme {
        $this->showView = $showView;
        return $this;
    }

    /**
     * Set the stop.
     *
     * @param string|null $stop The stop.
     * @return Programme Returns this programme.
     */
    public function setStop(?string $stop): Programme {
        $this->stop = $stop;
        return $this;
    }

    /**
     * Set the video.
     *
     * @param Video|null $video The video.
     * @return Programme Returns this programme.
     */
    public function setVideo(?Video $video): Programme {
        $this->video = $video;
        return $this;
    }

    /**
     * Set the video plus.
     *
     * @param string|null $videoPlus The video plus.
     * @return Programme Returns this programme.
     */
    public function setVideoPlus(?string $videoPlus): Programme {
        $this->videoPlus = $videoPlus;
        return $this;
    }

    /**
     * Set the VPS start.
     *
     * @param string|null $vpsStart The VPS start.
     * @return Programme Returns this programme.
     */
    public function setVpsStart(?string $vpsStart): Programme {
        $this->vpsStart = $vpsStart;
        return $this;
    }

    /**
     * {@inheritDoc}
     */
    public function xmlSerialize(): string {
        return XmlSerializer::serializeProgramme($this);
    }
}

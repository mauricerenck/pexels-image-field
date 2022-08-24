<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Quadratus\Model\QGI;

/**
 * Sous famille article.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class SousFamilleArticle {

    /**
     * Activite principale.
     *
     * @var string|null
     */
    private $activitePrincipale;

    /**
     * Code.
     *
     * @var string|null
     */
    private $code;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activite principale.
     *
     * @return string|null Returns the activite principale.
     */
    public function getActivitePrincipale(): ?string {
        return $this->activitePrincipale;
    }

    /**
     * Get the code.
     *
     * @return string|null Returns the code.
     */
    public function getCode(): ?string {
        return $this->code;
    }

    /**
     * Get the libelle.
     *
     * @return string|null Returns the libelle.
     */
    public function getLibelle(): ?string {
        return $this->libelle;
    }

    /**
     * Set the activite principale.
     *
     * @param string|null $activitePrincipale The activite principale.
     * @return SousFamilleArticle Returns this Sous famille article.
     */
    public function setActivitePrincipale(?string $activitePrincipale): SousFamilleArticle {
        $this->activitePrincipale = $activitePrincipale;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string|null $code The code.
     * @return SousFamilleArticle Returns this Sous famille article.
     */
    public function setCode(?string $code): SousFamilleArticle {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return SousFamilleArticle Returns this Sous famille article.
     */
    public function setLibelle(?string $libelle): SousFamilleArticle {
        $this->libelle = $libelle;
        return $this;
    }
}

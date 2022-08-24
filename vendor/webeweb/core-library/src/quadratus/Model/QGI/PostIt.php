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

use DateTime;

/**
 * Post it.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class PostIt {

    /**
     * Code coll dest.
     *
     * @var string|null
     */
    private $codeCollDest;

    /**
     * Code coll org.
     *
     * @var string|null
     */
    private $codeCollOrg;

    /**
     * Date heure.
     *
     * @var DateTime|null
     */
    private $dateHeure;

    /**
     * Date sys saisie.
     *
     * @var DateTime|null
     */
    private $dateSysSaisie;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Ref guid.
     *
     * @var string|null
     */
    private $refGuid;

    /**
     * Type.
     *
     * @var int|null
     */
    private $type;

    /**
     * Uniq id.
     *
     * @var string|null
     */
    private $uniqId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code coll dest.
     *
     * @return string|null Returns the code coll dest.
     */
    public function getCodeCollDest(): ?string {
        return $this->codeCollDest;
    }

    /**
     * Get the code coll org.
     *
     * @return string|null Returns the code coll org.
     */
    public function getCodeCollOrg(): ?string {
        return $this->codeCollOrg;
    }

    /**
     * Get the date heure.
     *
     * @return DateTime|null Returns the date heure.
     */
    public function getDateHeure(): ?DateTime {
        return $this->dateHeure;
    }

    /**
     * Get the date sys saisie.
     *
     * @return DateTime|null Returns the date sys saisie.
     */
    public function getDateSysSaisie(): ?DateTime {
        return $this->dateSysSaisie;
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
     * Get the ref guid.
     *
     * @return string|null Returns the ref guid.
     */
    public function getRefGuid(): ?string {
        return $this->refGuid;
    }

    /**
     * Get the type.
     *
     * @return int|null Returns the type.
     */
    public function getType(): ?int {
        return $this->type;
    }

    /**
     * Get the uniq id.
     *
     * @return string|null Returns the uniq id.
     */
    public function getUniqId(): ?string {
        return $this->uniqId;
    }

    /**
     * Set the code coll dest.
     *
     * @param string|null $codeCollDest The code coll dest.
     * @return PostIt Returns this Post it.
     */
    public function setCodeCollDest(?string $codeCollDest): PostIt {
        $this->codeCollDest = $codeCollDest;
        return $this;
    }

    /**
     * Set the code coll org.
     *
     * @param string|null $codeCollOrg The code coll org.
     * @return PostIt Returns this Post it.
     */
    public function setCodeCollOrg(?string $codeCollOrg): PostIt {
        $this->codeCollOrg = $codeCollOrg;
        return $this;
    }

    /**
     * Set the date heure.
     *
     * @param DateTime|null $dateHeure The date heure.
     * @return PostIt Returns this Post it.
     */
    public function setDateHeure(?DateTime $dateHeure): PostIt {
        $this->dateHeure = $dateHeure;
        return $this;
    }

    /**
     * Set the date sys saisie.
     *
     * @param DateTime|null $dateSysSaisie The date sys saisie.
     * @return PostIt Returns this Post it.
     */
    public function setDateSysSaisie(?DateTime $dateSysSaisie): PostIt {
        $this->dateSysSaisie = $dateSysSaisie;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return PostIt Returns this Post it.
     */
    public function setLibelle(?string $libelle): PostIt {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ref guid.
     *
     * @param string|null $refGuid The ref guid.
     * @return PostIt Returns this Post it.
     */
    public function setRefGuid(?string $refGuid): PostIt {
        $this->refGuid = $refGuid;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int|null $type The type.
     * @return PostIt Returns this Post it.
     */
    public function setType(?int $type): PostIt {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param string|null $uniqId The uniq id.
     * @return PostIt Returns this Post it.
     */
    public function setUniqId(?string $uniqId): PostIt {
        $this->uniqId = $uniqId;
        return $this;
    }
}

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
 * Param etiquettes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class ParamEtiquettes {

    /**
     * Avec code barre.
     *
     * @var bool|null
     */
    private $avecCodeBarre;

    /**
     * Avec prix vente.
     *
     * @var bool|null
     */
    private $avecPrixVente;

    /**
     * Code modele.
     *
     * @var string|null
     */
    private $codeModele;

    /**
     * Etiq de front.
     *
     * @var int|null
     */
    private $etiqDeFront;

    /**
     * Etiq masque.
     *
     * @var bool|null
     */
    private $etiqMasque;

    /**
     * Etiq plus.
     *
     * @var bool|null
     */
    private $etiqPlus;

    /**
     * Imprimante.
     *
     * @var string|null
     */
    private $imprimante;

    /**
     * Init champ.
     *
     * @var string|null
     */
    private $initChamp;

    /**
     * Init table.
     *
     * @var string|null
     */
    private $initTable;

    /**
     * Init valeur.
     *
     * @var string|null
     */
    private $initValeur;

    /**
     * Lg zone.
     *
     * @var string|null
     */
    private $lgZone;

    /**
     * Lib zone.
     *
     * @var string|null
     */
    private $libZone;

    /**
     * Libelle.
     *
     * @var string|null
     */
    private $libelle;

    /**
     * Numero ligne.
     *
     * @var int|null
     */
    private $numeroLigne;

    /**
     * Qte ent.
     *
     * @var bool|null
     */
    private $qteEnt;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the avec code barre.
     *
     * @return bool|null Returns the avec code barre.
     */
    public function getAvecCodeBarre(): ?bool {
        return $this->avecCodeBarre;
    }

    /**
     * Get the avec prix vente.
     *
     * @return bool|null Returns the avec prix vente.
     */
    public function getAvecPrixVente(): ?bool {
        return $this->avecPrixVente;
    }

    /**
     * Get the code modele.
     *
     * @return string|null Returns the code modele.
     */
    public function getCodeModele(): ?string {
        return $this->codeModele;
    }

    /**
     * Get the etiq de front.
     *
     * @return int|null Returns the etiq de front.
     */
    public function getEtiqDeFront(): ?int {
        return $this->etiqDeFront;
    }

    /**
     * Get the etiq masque.
     *
     * @return bool|null Returns the etiq masque.
     */
    public function getEtiqMasque(): ?bool {
        return $this->etiqMasque;
    }

    /**
     * Get the etiq plus.
     *
     * @return bool|null Returns the etiq plus.
     */
    public function getEtiqPlus(): ?bool {
        return $this->etiqPlus;
    }

    /**
     * Get the imprimante.
     *
     * @return string|null Returns the imprimante.
     */
    public function getImprimante(): ?string {
        return $this->imprimante;
    }

    /**
     * Get the init champ.
     *
     * @return string|null Returns the init champ.
     */
    public function getInitChamp(): ?string {
        return $this->initChamp;
    }

    /**
     * Get the init table.
     *
     * @return string|null Returns the init table.
     */
    public function getInitTable(): ?string {
        return $this->initTable;
    }

    /**
     * Get the init valeur.
     *
     * @return string|null Returns the init valeur.
     */
    public function getInitValeur(): ?string {
        return $this->initValeur;
    }

    /**
     * Get the lg zone.
     *
     * @return string|null Returns the lg zone.
     */
    public function getLgZone(): ?string {
        return $this->lgZone;
    }

    /**
     * Get the lib zone.
     *
     * @return string|null Returns the lib zone.
     */
    public function getLibZone(): ?string {
        return $this->libZone;
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
     * Get the numero ligne.
     *
     * @return int|null Returns the numero ligne.
     */
    public function getNumeroLigne(): ?int {
        return $this->numeroLigne;
    }

    /**
     * Get the qte ent.
     *
     * @return bool|null Returns the qte ent.
     */
    public function getQteEnt(): ?bool {
        return $this->qteEnt;
    }

    /**
     * Get the type.
     *
     * @return string|null Returns the type.
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * Set the avec code barre.
     *
     * @param bool|null $avecCodeBarre The avec code barre.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setAvecCodeBarre(?bool $avecCodeBarre): ParamEtiquettes {
        $this->avecCodeBarre = $avecCodeBarre;
        return $this;
    }

    /**
     * Set the avec prix vente.
     *
     * @param bool|null $avecPrixVente The avec prix vente.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setAvecPrixVente(?bool $avecPrixVente): ParamEtiquettes {
        $this->avecPrixVente = $avecPrixVente;
        return $this;
    }

    /**
     * Set the code modele.
     *
     * @param string|null $codeModele The code modele.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setCodeModele(?string $codeModele): ParamEtiquettes {
        $this->codeModele = $codeModele;
        return $this;
    }

    /**
     * Set the etiq de front.
     *
     * @param int|null $etiqDeFront The etiq de front.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setEtiqDeFront(?int $etiqDeFront): ParamEtiquettes {
        $this->etiqDeFront = $etiqDeFront;
        return $this;
    }

    /**
     * Set the etiq masque.
     *
     * @param bool|null $etiqMasque The etiq masque.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setEtiqMasque(?bool $etiqMasque): ParamEtiquettes {
        $this->etiqMasque = $etiqMasque;
        return $this;
    }

    /**
     * Set the etiq plus.
     *
     * @param bool|null $etiqPlus The etiq plus.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setEtiqPlus(?bool $etiqPlus): ParamEtiquettes {
        $this->etiqPlus = $etiqPlus;
        return $this;
    }

    /**
     * Set the imprimante.
     *
     * @param string|null $imprimante The imprimante.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setImprimante(?string $imprimante): ParamEtiquettes {
        $this->imprimante = $imprimante;
        return $this;
    }

    /**
     * Set the init champ.
     *
     * @param string|null $initChamp The init champ.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setInitChamp(?string $initChamp): ParamEtiquettes {
        $this->initChamp = $initChamp;
        return $this;
    }

    /**
     * Set the init table.
     *
     * @param string|null $initTable The init table.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setInitTable(?string $initTable): ParamEtiquettes {
        $this->initTable = $initTable;
        return $this;
    }

    /**
     * Set the init valeur.
     *
     * @param string|null $initValeur The init valeur.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setInitValeur(?string $initValeur): ParamEtiquettes {
        $this->initValeur = $initValeur;
        return $this;
    }

    /**
     * Set the lg zone.
     *
     * @param string|null $lgZone The lg zone.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setLgZone(?string $lgZone): ParamEtiquettes {
        $this->lgZone = $lgZone;
        return $this;
    }

    /**
     * Set the lib zone.
     *
     * @param string|null $libZone The lib zone.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setLibZone(?string $libZone): ParamEtiquettes {
        $this->libZone = $libZone;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string|null $libelle The libelle.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setLibelle(?string $libelle): ParamEtiquettes {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int|null $numeroLigne The numero ligne.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setNumeroLigne(?int $numeroLigne): ParamEtiquettes {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }

    /**
     * Set the qte ent.
     *
     * @param bool|null $qteEnt The qte ent.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setQteEnt(?bool $qteEnt): ParamEtiquettes {
        $this->qteEnt = $qteEnt;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return ParamEtiquettes Returns this Param etiquettes.
     */
    public function setType(?string $type): ParamEtiquettes {
        $this->type = $type;
        return $this;
    }
}

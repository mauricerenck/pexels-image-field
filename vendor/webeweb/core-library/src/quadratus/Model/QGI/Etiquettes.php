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
 * Etiquettes.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class Etiquettes {

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Code barre.
     *
     * @var string|null
     */
    private $codeBarre;

    /**
     * Code cli four.
     *
     * @var string|null
     */
    private $codeCliFour;

    /**
     * Code modele.
     *
     * @var string|null
     */
    private $codeModele;

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
     * Prix vente.
     *
     * @var float|null
     */
    private $prixVente;

    /**
     * Type.
     *
     * @var string|null
     */
    private $type;

    /**
     * Zone1.
     *
     * @var string|null
     */
    private $zone1;

    /**
     * Zone10.
     *
     * @var string|null
     */
    private $zone10;

    /**
     * Zone11.
     *
     * @var string|null
     */
    private $zone11;

    /**
     * Zone12.
     *
     * @var string|null
     */
    private $zone12;

    /**
     * Zone13.
     *
     * @var string|null
     */
    private $zone13;

    /**
     * Zone14.
     *
     * @var string|null
     */
    private $zone14;

    /**
     * Zone15.
     *
     * @var string|null
     */
    private $zone15;

    /**
     * Zone2.
     *
     * @var string|null
     */
    private $zone2;

    /**
     * Zone3.
     *
     * @var string|null
     */
    private $zone3;

    /**
     * Zone4.
     *
     * @var string|null
     */
    private $zone4;

    /**
     * Zone5.
     *
     * @var string|null
     */
    private $zone5;

    /**
     * Zone6.
     *
     * @var string|null
     */
    private $zone6;

    /**
     * Zone7.
     *
     * @var string|null
     */
    private $zone7;

    /**
     * Zone8.
     *
     * @var string|null
     */
    private $zone8;

    /**
     * Zone9.
     *
     * @var string|null
     */
    private $zone9;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the code article.
     *
     * @return string|null Returns the code article.
     */
    public function getCodeArticle(): ?string {
        return $this->codeArticle;
    }

    /**
     * Get the code barre.
     *
     * @return string|null Returns the code barre.
     */
    public function getCodeBarre(): ?string {
        return $this->codeBarre;
    }

    /**
     * Get the code cli four.
     *
     * @return string|null Returns the code cli four.
     */
    public function getCodeCliFour(): ?string {
        return $this->codeCliFour;
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
     * Get the prix vente.
     *
     * @return float|null Returns the prix vente.
     */
    public function getPrixVente(): ?float {
        return $this->prixVente;
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
     * Get the zone1.
     *
     * @return string|null Returns the zone1.
     */
    public function getZone1(): ?string {
        return $this->zone1;
    }

    /**
     * Get the zone10.
     *
     * @return string|null Returns the zone10.
     */
    public function getZone10(): ?string {
        return $this->zone10;
    }

    /**
     * Get the zone11.
     *
     * @return string|null Returns the zone11.
     */
    public function getZone11(): ?string {
        return $this->zone11;
    }

    /**
     * Get the zone12.
     *
     * @return string|null Returns the zone12.
     */
    public function getZone12(): ?string {
        return $this->zone12;
    }

    /**
     * Get the zone13.
     *
     * @return string|null Returns the zone13.
     */
    public function getZone13(): ?string {
        return $this->zone13;
    }

    /**
     * Get the zone14.
     *
     * @return string|null Returns the zone14.
     */
    public function getZone14(): ?string {
        return $this->zone14;
    }

    /**
     * Get the zone15.
     *
     * @return string|null Returns the zone15.
     */
    public function getZone15(): ?string {
        return $this->zone15;
    }

    /**
     * Get the zone2.
     *
     * @return string|null Returns the zone2.
     */
    public function getZone2(): ?string {
        return $this->zone2;
    }

    /**
     * Get the zone3.
     *
     * @return string|null Returns the zone3.
     */
    public function getZone3(): ?string {
        return $this->zone3;
    }

    /**
     * Get the zone4.
     *
     * @return string|null Returns the zone4.
     */
    public function getZone4(): ?string {
        return $this->zone4;
    }

    /**
     * Get the zone5.
     *
     * @return string|null Returns the zone5.
     */
    public function getZone5(): ?string {
        return $this->zone5;
    }

    /**
     * Get the zone6.
     *
     * @return string|null Returns the zone6.
     */
    public function getZone6(): ?string {
        return $this->zone6;
    }

    /**
     * Get the zone7.
     *
     * @return string|null Returns the zone7.
     */
    public function getZone7(): ?string {
        return $this->zone7;
    }

    /**
     * Get the zone8.
     *
     * @return string|null Returns the zone8.
     */
    public function getZone8(): ?string {
        return $this->zone8;
    }

    /**
     * Get the zone9.
     *
     * @return string|null Returns the zone9.
     */
    public function getZone9(): ?string {
        return $this->zone9;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeArticle(?string $codeArticle): Etiquettes {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code barre.
     *
     * @param string|null $codeBarre The code barre.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeBarre(?string $codeBarre): Etiquettes {
        $this->codeBarre = $codeBarre;
        return $this;
    }

    /**
     * Set the code cli four.
     *
     * @param string|null $codeCliFour The code cli four.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeCliFour(?string $codeCliFour): Etiquettes {
        $this->codeCliFour = $codeCliFour;
        return $this;
    }

    /**
     * Set the code modele.
     *
     * @param string|null $codeModele The code modele.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setCodeModele(?string $codeModele): Etiquettes {
        $this->codeModele = $codeModele;
        return $this;
    }

    /**
     * Set the etiq plus.
     *
     * @param bool|null $etiqPlus The etiq plus.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setEtiqPlus(?bool $etiqPlus): Etiquettes {
        $this->etiqPlus = $etiqPlus;
        return $this;
    }

    /**
     * Set the imprimante.
     *
     * @param string|null $imprimante The imprimante.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setImprimante(?string $imprimante): Etiquettes {
        $this->imprimante = $imprimante;
        return $this;
    }

    /**
     * Set the prix vente.
     *
     * @param float|null $prixVente The prix vente.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setPrixVente(?float $prixVente): Etiquettes {
        $this->prixVente = $prixVente;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string|null $type The type.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setType(?string $type): Etiquettes {
        $this->type = $type;
        return $this;
    }

    /**
     * Set the zone1.
     *
     * @param string|null $zone1 The zone1.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone1(?string $zone1): Etiquettes {
        $this->zone1 = $zone1;
        return $this;
    }

    /**
     * Set the zone10.
     *
     * @param string|null $zone10 The zone10.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone10(?string $zone10): Etiquettes {
        $this->zone10 = $zone10;
        return $this;
    }

    /**
     * Set the zone11.
     *
     * @param string|null $zone11 The zone11.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone11(?string $zone11): Etiquettes {
        $this->zone11 = $zone11;
        return $this;
    }

    /**
     * Set the zone12.
     *
     * @param string|null $zone12 The zone12.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone12(?string $zone12): Etiquettes {
        $this->zone12 = $zone12;
        return $this;
    }

    /**
     * Set the zone13.
     *
     * @param string|null $zone13 The zone13.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone13(?string $zone13): Etiquettes {
        $this->zone13 = $zone13;
        return $this;
    }

    /**
     * Set the zone14.
     *
     * @param string|null $zone14 The zone14.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone14(?string $zone14): Etiquettes {
        $this->zone14 = $zone14;
        return $this;
    }

    /**
     * Set the zone15.
     *
     * @param string|null $zone15 The zone15.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone15(?string $zone15): Etiquettes {
        $this->zone15 = $zone15;
        return $this;
    }

    /**
     * Set the zone2.
     *
     * @param string|null $zone2 The zone2.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone2(?string $zone2): Etiquettes {
        $this->zone2 = $zone2;
        return $this;
    }

    /**
     * Set the zone3.
     *
     * @param string|null $zone3 The zone3.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone3(?string $zone3): Etiquettes {
        $this->zone3 = $zone3;
        return $this;
    }

    /**
     * Set the zone4.
     *
     * @param string|null $zone4 The zone4.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone4(?string $zone4): Etiquettes {
        $this->zone4 = $zone4;
        return $this;
    }

    /**
     * Set the zone5.
     *
     * @param string|null $zone5 The zone5.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone5(?string $zone5): Etiquettes {
        $this->zone5 = $zone5;
        return $this;
    }

    /**
     * Set the zone6.
     *
     * @param string|null $zone6 The zone6.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone6(?string $zone6): Etiquettes {
        $this->zone6 = $zone6;
        return $this;
    }

    /**
     * Set the zone7.
     *
     * @param string|null $zone7 The zone7.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone7(?string $zone7): Etiquettes {
        $this->zone7 = $zone7;
        return $this;
    }

    /**
     * Set the zone8.
     *
     * @param string|null $zone8 The zone8.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone8(?string $zone8): Etiquettes {
        $this->zone8 = $zone8;
        return $this;
    }

    /**
     * Set the zone9.
     *
     * @param string|null $zone9 The zone9.
     * @return Etiquettes Returns this Etiquettes.
     */
    public function setZone9(?string $zone9): Etiquettes {
        $this->zone9 = $zone9;
        return $this;
    }
}

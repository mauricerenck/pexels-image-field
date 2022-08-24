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
 * Criteres libres articles.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CriteresLibresArticles {

    /**
     * Case1.
     *
     * @var bool|null
     */
    private $case1;

    /**
     * Case10.
     *
     * @var bool|null
     */
    private $case10;

    /**
     * Case11.
     *
     * @var bool|null
     */
    private $case11;

    /**
     * Case12.
     *
     * @var bool|null
     */
    private $case12;

    /**
     * Case13.
     *
     * @var bool|null
     */
    private $case13;

    /**
     * Case14.
     *
     * @var bool|null
     */
    private $case14;

    /**
     * Case15.
     *
     * @var bool|null
     */
    private $case15;

    /**
     * Case16.
     *
     * @var bool|null
     */
    private $case16;

    /**
     * Case17.
     *
     * @var bool|null
     */
    private $case17;

    /**
     * Case18.
     *
     * @var bool|null
     */
    private $case18;

    /**
     * Case19.
     *
     * @var bool|null
     */
    private $case19;

    /**
     * Case2.
     *
     * @var bool|null
     */
    private $case2;

    /**
     * Case20.
     *
     * @var bool|null
     */
    private $case20;

    /**
     * Case21.
     *
     * @var bool|null
     */
    private $case21;

    /**
     * Case22.
     *
     * @var bool|null
     */
    private $case22;

    /**
     * Case23.
     *
     * @var bool|null
     */
    private $case23;

    /**
     * Case24.
     *
     * @var bool|null
     */
    private $case24;

    /**
     * Case25.
     *
     * @var bool|null
     */
    private $case25;

    /**
     * Case26.
     *
     * @var bool|null
     */
    private $case26;

    /**
     * Case27.
     *
     * @var bool|null
     */
    private $case27;

    /**
     * Case28.
     *
     * @var bool|null
     */
    private $case28;

    /**
     * Case29.
     *
     * @var bool|null
     */
    private $case29;

    /**
     * Case3.
     *
     * @var bool|null
     */
    private $case3;

    /**
     * Case30.
     *
     * @var bool|null
     */
    private $case30;

    /**
     * Case31.
     *
     * @var bool|null
     */
    private $case31;

    /**
     * Case32.
     *
     * @var bool|null
     */
    private $case32;

    /**
     * Case33.
     *
     * @var bool|null
     */
    private $case33;

    /**
     * Case34.
     *
     * @var bool|null
     */
    private $case34;

    /**
     * Case35.
     *
     * @var bool|null
     */
    private $case35;

    /**
     * Case36.
     *
     * @var bool|null
     */
    private $case36;

    /**
     * Case37.
     *
     * @var bool|null
     */
    private $case37;

    /**
     * Case38.
     *
     * @var bool|null
     */
    private $case38;

    /**
     * Case39.
     *
     * @var bool|null
     */
    private $case39;

    /**
     * Case4.
     *
     * @var bool|null
     */
    private $case4;

    /**
     * Case40.
     *
     * @var bool|null
     */
    private $case40;

    /**
     * Case41.
     *
     * @var bool|null
     */
    private $case41;

    /**
     * Case42.
     *
     * @var bool|null
     */
    private $case42;

    /**
     * Case43.
     *
     * @var bool|null
     */
    private $case43;

    /**
     * Case44.
     *
     * @var bool|null
     */
    private $case44;

    /**
     * Case45.
     *
     * @var bool|null
     */
    private $case45;

    /**
     * Case46.
     *
     * @var bool|null
     */
    private $case46;

    /**
     * Case47.
     *
     * @var bool|null
     */
    private $case47;

    /**
     * Case48.
     *
     * @var bool|null
     */
    private $case48;

    /**
     * Case49.
     *
     * @var bool|null
     */
    private $case49;

    /**
     * Case5.
     *
     * @var bool|null
     */
    private $case5;

    /**
     * Case50.
     *
     * @var bool|null
     */
    private $case50;

    /**
     * Case6.
     *
     * @var bool|null
     */
    private $case6;

    /**
     * Case7.
     *
     * @var bool|null
     */
    private $case7;

    /**
     * Case8.
     *
     * @var bool|null
     */
    private $case8;

    /**
     * Case9.
     *
     * @var bool|null
     */
    private $case9;

    /**
     * Code article.
     *
     * @var string|null
     */
    private $codeArticle;

    /**
     * Date1.
     *
     * @var DateTime|null
     */
    private $date1;

    /**
     * Date10.
     *
     * @var DateTime|null
     */
    private $date10;

    /**
     * Date11.
     *
     * @var DateTime|null
     */
    private $date11;

    /**
     * Date12.
     *
     * @var DateTime|null
     */
    private $date12;

    /**
     * Date13.
     *
     * @var DateTime|null
     */
    private $date13;

    /**
     * Date14.
     *
     * @var DateTime|null
     */
    private $date14;

    /**
     * Date15.
     *
     * @var DateTime|null
     */
    private $date15;

    /**
     * Date16.
     *
     * @var DateTime|null
     */
    private $date16;

    /**
     * Date17.
     *
     * @var DateTime|null
     */
    private $date17;

    /**
     * Date18.
     *
     * @var DateTime|null
     */
    private $date18;

    /**
     * Date19.
     *
     * @var DateTime|null
     */
    private $date19;

    /**
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

    /**
     * Date20.
     *
     * @var DateTime|null
     */
    private $date20;

    /**
     * Date21.
     *
     * @var DateTime|null
     */
    private $date21;

    /**
     * Date22.
     *
     * @var DateTime|null
     */
    private $date22;

    /**
     * Date23.
     *
     * @var DateTime|null
     */
    private $date23;

    /**
     * Date24.
     *
     * @var DateTime|null
     */
    private $date24;

    /**
     * Date25.
     *
     * @var DateTime|null
     */
    private $date25;

    /**
     * Date26.
     *
     * @var DateTime|null
     */
    private $date26;

    /**
     * Date27.
     *
     * @var DateTime|null
     */
    private $date27;

    /**
     * Date28.
     *
     * @var DateTime|null
     */
    private $date28;

    /**
     * Date29.
     *
     * @var DateTime|null
     */
    private $date29;

    /**
     * Date3.
     *
     * @var DateTime|null
     */
    private $date3;

    /**
     * Date30.
     *
     * @var DateTime|null
     */
    private $date30;

    /**
     * Date31.
     *
     * @var DateTime|null
     */
    private $date31;

    /**
     * Date32.
     *
     * @var DateTime|null
     */
    private $date32;

    /**
     * Date33.
     *
     * @var DateTime|null
     */
    private $date33;

    /**
     * Date34.
     *
     * @var DateTime|null
     */
    private $date34;

    /**
     * Date35.
     *
     * @var DateTime|null
     */
    private $date35;

    /**
     * Date36.
     *
     * @var DateTime|null
     */
    private $date36;

    /**
     * Date37.
     *
     * @var DateTime|null
     */
    private $date37;

    /**
     * Date38.
     *
     * @var DateTime|null
     */
    private $date38;

    /**
     * Date39.
     *
     * @var DateTime|null
     */
    private $date39;

    /**
     * Date4.
     *
     * @var DateTime|null
     */
    private $date4;

    /**
     * Date40.
     *
     * @var DateTime|null
     */
    private $date40;

    /**
     * Date41.
     *
     * @var DateTime|null
     */
    private $date41;

    /**
     * Date42.
     *
     * @var DateTime|null
     */
    private $date42;

    /**
     * Date43.
     *
     * @var DateTime|null
     */
    private $date43;

    /**
     * Date44.
     *
     * @var DateTime|null
     */
    private $date44;

    /**
     * Date45.
     *
     * @var DateTime|null
     */
    private $date45;

    /**
     * Date46.
     *
     * @var DateTime|null
     */
    private $date46;

    /**
     * Date47.
     *
     * @var DateTime|null
     */
    private $date47;

    /**
     * Date48.
     *
     * @var DateTime|null
     */
    private $date48;

    /**
     * Date49.
     *
     * @var DateTime|null
     */
    private $date49;

    /**
     * Date5.
     *
     * @var DateTime|null
     */
    private $date5;

    /**
     * Date50.
     *
     * @var DateTime|null
     */
    private $date50;

    /**
     * Date6.
     *
     * @var DateTime|null
     */
    private $date6;

    /**
     * Date7.
     *
     * @var DateTime|null
     */
    private $date7;

    /**
     * Date8.
     *
     * @var DateTime|null
     */
    private $date8;

    /**
     * Date9.
     *
     * @var DateTime|null
     */
    private $date9;

    /**
     * Texte1.
     *
     * @var string|null
     */
    private $texte1;

    /**
     * Texte10.
     *
     * @var string|null
     */
    private $texte10;

    /**
     * Texte11.
     *
     * @var string|null
     */
    private $texte11;

    /**
     * Texte12.
     *
     * @var string|null
     */
    private $texte12;

    /**
     * Texte13.
     *
     * @var string|null
     */
    private $texte13;

    /**
     * Texte14.
     *
     * @var string|null
     */
    private $texte14;

    /**
     * Texte15.
     *
     * @var string|null
     */
    private $texte15;

    /**
     * Texte16.
     *
     * @var string|null
     */
    private $texte16;

    /**
     * Texte17.
     *
     * @var string|null
     */
    private $texte17;

    /**
     * Texte18.
     *
     * @var string|null
     */
    private $texte18;

    /**
     * Texte19.
     *
     * @var string|null
     */
    private $texte19;

    /**
     * Texte2.
     *
     * @var string|null
     */
    private $texte2;

    /**
     * Texte20.
     *
     * @var string|null
     */
    private $texte20;

    /**
     * Texte21.
     *
     * @var string|null
     */
    private $texte21;

    /**
     * Texte22.
     *
     * @var string|null
     */
    private $texte22;

    /**
     * Texte23.
     *
     * @var string|null
     */
    private $texte23;

    /**
     * Texte24.
     *
     * @var string|null
     */
    private $texte24;

    /**
     * Texte25.
     *
     * @var string|null
     */
    private $texte25;

    /**
     * Texte26.
     *
     * @var string|null
     */
    private $texte26;

    /**
     * Texte27.
     *
     * @var string|null
     */
    private $texte27;

    /**
     * Texte28.
     *
     * @var string|null
     */
    private $texte28;

    /**
     * Texte29.
     *
     * @var string|null
     */
    private $texte29;

    /**
     * Texte3.
     *
     * @var string|null
     */
    private $texte3;

    /**
     * Texte30.
     *
     * @var string|null
     */
    private $texte30;

    /**
     * Texte31.
     *
     * @var string|null
     */
    private $texte31;

    /**
     * Texte32.
     *
     * @var string|null
     */
    private $texte32;

    /**
     * Texte33.
     *
     * @var string|null
     */
    private $texte33;

    /**
     * Texte34.
     *
     * @var string|null
     */
    private $texte34;

    /**
     * Texte35.
     *
     * @var string|null
     */
    private $texte35;

    /**
     * Texte36.
     *
     * @var string|null
     */
    private $texte36;

    /**
     * Texte37.
     *
     * @var string|null
     */
    private $texte37;

    /**
     * Texte38.
     *
     * @var string|null
     */
    private $texte38;

    /**
     * Texte39.
     *
     * @var string|null
     */
    private $texte39;

    /**
     * Texte4.
     *
     * @var string|null
     */
    private $texte4;

    /**
     * Texte40.
     *
     * @var string|null
     */
    private $texte40;

    /**
     * Texte41.
     *
     * @var string|null
     */
    private $texte41;

    /**
     * Texte42.
     *
     * @var string|null
     */
    private $texte42;

    /**
     * Texte43.
     *
     * @var string|null
     */
    private $texte43;

    /**
     * Texte44.
     *
     * @var string|null
     */
    private $texte44;

    /**
     * Texte45.
     *
     * @var string|null
     */
    private $texte45;

    /**
     * Texte46.
     *
     * @var string|null
     */
    private $texte46;

    /**
     * Texte47.
     *
     * @var string|null
     */
    private $texte47;

    /**
     * Texte48.
     *
     * @var string|null
     */
    private $texte48;

    /**
     * Texte49.
     *
     * @var string|null
     */
    private $texte49;

    /**
     * Texte5.
     *
     * @var string|null
     */
    private $texte5;

    /**
     * Texte50.
     *
     * @var string|null
     */
    private $texte50;

    /**
     * Texte6.
     *
     * @var string|null
     */
    private $texte6;

    /**
     * Texte7.
     *
     * @var string|null
     */
    private $texte7;

    /**
     * Texte8.
     *
     * @var string|null
     */
    private $texte8;

    /**
     * Texte9.
     *
     * @var string|null
     */
    private $texte9;

    /**
     * Valeur1.
     *
     * @var float|null
     */
    private $valeur1;

    /**
     * Valeur10.
     *
     * @var float|null
     */
    private $valeur10;

    /**
     * Valeur11.
     *
     * @var float|null
     */
    private $valeur11;

    /**
     * Valeur12.
     *
     * @var float|null
     */
    private $valeur12;

    /**
     * Valeur13.
     *
     * @var float|null
     */
    private $valeur13;

    /**
     * Valeur14.
     *
     * @var float|null
     */
    private $valeur14;

    /**
     * Valeur15.
     *
     * @var float|null
     */
    private $valeur15;

    /**
     * Valeur16.
     *
     * @var float|null
     */
    private $valeur16;

    /**
     * Valeur17.
     *
     * @var float|null
     */
    private $valeur17;

    /**
     * Valeur18.
     *
     * @var float|null
     */
    private $valeur18;

    /**
     * Valeur19.
     *
     * @var float|null
     */
    private $valeur19;

    /**
     * Valeur2.
     *
     * @var float|null
     */
    private $valeur2;

    /**
     * Valeur20.
     *
     * @var float|null
     */
    private $valeur20;

    /**
     * Valeur21.
     *
     * @var float|null
     */
    private $valeur21;

    /**
     * Valeur22.
     *
     * @var float|null
     */
    private $valeur22;

    /**
     * Valeur23.
     *
     * @var float|null
     */
    private $valeur23;

    /**
     * Valeur24.
     *
     * @var float|null
     */
    private $valeur24;

    /**
     * Valeur25.
     *
     * @var float|null
     */
    private $valeur25;

    /**
     * Valeur26.
     *
     * @var float|null
     */
    private $valeur26;

    /**
     * Valeur27.
     *
     * @var float|null
     */
    private $valeur27;

    /**
     * Valeur28.
     *
     * @var float|null
     */
    private $valeur28;

    /**
     * Valeur29.
     *
     * @var float|null
     */
    private $valeur29;

    /**
     * Valeur3.
     *
     * @var float|null
     */
    private $valeur3;

    /**
     * Valeur30.
     *
     * @var float|null
     */
    private $valeur30;

    /**
     * Valeur31.
     *
     * @var float|null
     */
    private $valeur31;

    /**
     * Valeur32.
     *
     * @var float|null
     */
    private $valeur32;

    /**
     * Valeur33.
     *
     * @var float|null
     */
    private $valeur33;

    /**
     * Valeur34.
     *
     * @var float|null
     */
    private $valeur34;

    /**
     * Valeur35.
     *
     * @var float|null
     */
    private $valeur35;

    /**
     * Valeur36.
     *
     * @var float|null
     */
    private $valeur36;

    /**
     * Valeur37.
     *
     * @var float|null
     */
    private $valeur37;

    /**
     * Valeur38.
     *
     * @var float|null
     */
    private $valeur38;

    /**
     * Valeur39.
     *
     * @var float|null
     */
    private $valeur39;

    /**
     * Valeur4.
     *
     * @var float|null
     */
    private $valeur4;

    /**
     * Valeur40.
     *
     * @var float|null
     */
    private $valeur40;

    /**
     * Valeur41.
     *
     * @var float|null
     */
    private $valeur41;

    /**
     * Valeur42.
     *
     * @var float|null
     */
    private $valeur42;

    /**
     * Valeur43.
     *
     * @var float|null
     */
    private $valeur43;

    /**
     * Valeur44.
     *
     * @var float|null
     */
    private $valeur44;

    /**
     * Valeur45.
     *
     * @var float|null
     */
    private $valeur45;

    /**
     * Valeur46.
     *
     * @var float|null
     */
    private $valeur46;

    /**
     * Valeur47.
     *
     * @var float|null
     */
    private $valeur47;

    /**
     * Valeur48.
     *
     * @var float|null
     */
    private $valeur48;

    /**
     * Valeur49.
     *
     * @var float|null
     */
    private $valeur49;

    /**
     * Valeur5.
     *
     * @var float|null
     */
    private $valeur5;

    /**
     * Valeur50.
     *
     * @var float|null
     */
    private $valeur50;

    /**
     * Valeur6.
     *
     * @var float|null
     */
    private $valeur6;

    /**
     * Valeur7.
     *
     * @var float|null
     */
    private $valeur7;

    /**
     * Valeur8.
     *
     * @var float|null
     */
    private $valeur8;

    /**
     * Valeur9.
     *
     * @var float|null
     */
    private $valeur9;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the case1.
     *
     * @return bool|null Returns the case1.
     */
    public function getCase1(): ?bool {
        return $this->case1;
    }

    /**
     * Get the case10.
     *
     * @return bool|null Returns the case10.
     */
    public function getCase10(): ?bool {
        return $this->case10;
    }

    /**
     * Get the case11.
     *
     * @return bool|null Returns the case11.
     */
    public function getCase11(): ?bool {
        return $this->case11;
    }

    /**
     * Get the case12.
     *
     * @return bool|null Returns the case12.
     */
    public function getCase12(): ?bool {
        return $this->case12;
    }

    /**
     * Get the case13.
     *
     * @return bool|null Returns the case13.
     */
    public function getCase13(): ?bool {
        return $this->case13;
    }

    /**
     * Get the case14.
     *
     * @return bool|null Returns the case14.
     */
    public function getCase14(): ?bool {
        return $this->case14;
    }

    /**
     * Get the case15.
     *
     * @return bool|null Returns the case15.
     */
    public function getCase15(): ?bool {
        return $this->case15;
    }

    /**
     * Get the case16.
     *
     * @return bool|null Returns the case16.
     */
    public function getCase16(): ?bool {
        return $this->case16;
    }

    /**
     * Get the case17.
     *
     * @return bool|null Returns the case17.
     */
    public function getCase17(): ?bool {
        return $this->case17;
    }

    /**
     * Get the case18.
     *
     * @return bool|null Returns the case18.
     */
    public function getCase18(): ?bool {
        return $this->case18;
    }

    /**
     * Get the case19.
     *
     * @return bool|null Returns the case19.
     */
    public function getCase19(): ?bool {
        return $this->case19;
    }

    /**
     * Get the case2.
     *
     * @return bool|null Returns the case2.
     */
    public function getCase2(): ?bool {
        return $this->case2;
    }

    /**
     * Get the case20.
     *
     * @return bool|null Returns the case20.
     */
    public function getCase20(): ?bool {
        return $this->case20;
    }

    /**
     * Get the case21.
     *
     * @return bool|null Returns the case21.
     */
    public function getCase21(): ?bool {
        return $this->case21;
    }

    /**
     * Get the case22.
     *
     * @return bool|null Returns the case22.
     */
    public function getCase22(): ?bool {
        return $this->case22;
    }

    /**
     * Get the case23.
     *
     * @return bool|null Returns the case23.
     */
    public function getCase23(): ?bool {
        return $this->case23;
    }

    /**
     * Get the case24.
     *
     * @return bool|null Returns the case24.
     */
    public function getCase24(): ?bool {
        return $this->case24;
    }

    /**
     * Get the case25.
     *
     * @return bool|null Returns the case25.
     */
    public function getCase25(): ?bool {
        return $this->case25;
    }

    /**
     * Get the case26.
     *
     * @return bool|null Returns the case26.
     */
    public function getCase26(): ?bool {
        return $this->case26;
    }

    /**
     * Get the case27.
     *
     * @return bool|null Returns the case27.
     */
    public function getCase27(): ?bool {
        return $this->case27;
    }

    /**
     * Get the case28.
     *
     * @return bool|null Returns the case28.
     */
    public function getCase28(): ?bool {
        return $this->case28;
    }

    /**
     * Get the case29.
     *
     * @return bool|null Returns the case29.
     */
    public function getCase29(): ?bool {
        return $this->case29;
    }

    /**
     * Get the case3.
     *
     * @return bool|null Returns the case3.
     */
    public function getCase3(): ?bool {
        return $this->case3;
    }

    /**
     * Get the case30.
     *
     * @return bool|null Returns the case30.
     */
    public function getCase30(): ?bool {
        return $this->case30;
    }

    /**
     * Get the case31.
     *
     * @return bool|null Returns the case31.
     */
    public function getCase31(): ?bool {
        return $this->case31;
    }

    /**
     * Get the case32.
     *
     * @return bool|null Returns the case32.
     */
    public function getCase32(): ?bool {
        return $this->case32;
    }

    /**
     * Get the case33.
     *
     * @return bool|null Returns the case33.
     */
    public function getCase33(): ?bool {
        return $this->case33;
    }

    /**
     * Get the case34.
     *
     * @return bool|null Returns the case34.
     */
    public function getCase34(): ?bool {
        return $this->case34;
    }

    /**
     * Get the case35.
     *
     * @return bool|null Returns the case35.
     */
    public function getCase35(): ?bool {
        return $this->case35;
    }

    /**
     * Get the case36.
     *
     * @return bool|null Returns the case36.
     */
    public function getCase36(): ?bool {
        return $this->case36;
    }

    /**
     * Get the case37.
     *
     * @return bool|null Returns the case37.
     */
    public function getCase37(): ?bool {
        return $this->case37;
    }

    /**
     * Get the case38.
     *
     * @return bool|null Returns the case38.
     */
    public function getCase38(): ?bool {
        return $this->case38;
    }

    /**
     * Get the case39.
     *
     * @return bool|null Returns the case39.
     */
    public function getCase39(): ?bool {
        return $this->case39;
    }

    /**
     * Get the case4.
     *
     * @return bool|null Returns the case4.
     */
    public function getCase4(): ?bool {
        return $this->case4;
    }

    /**
     * Get the case40.
     *
     * @return bool|null Returns the case40.
     */
    public function getCase40(): ?bool {
        return $this->case40;
    }

    /**
     * Get the case41.
     *
     * @return bool|null Returns the case41.
     */
    public function getCase41(): ?bool {
        return $this->case41;
    }

    /**
     * Get the case42.
     *
     * @return bool|null Returns the case42.
     */
    public function getCase42(): ?bool {
        return $this->case42;
    }

    /**
     * Get the case43.
     *
     * @return bool|null Returns the case43.
     */
    public function getCase43(): ?bool {
        return $this->case43;
    }

    /**
     * Get the case44.
     *
     * @return bool|null Returns the case44.
     */
    public function getCase44(): ?bool {
        return $this->case44;
    }

    /**
     * Get the case45.
     *
     * @return bool|null Returns the case45.
     */
    public function getCase45(): ?bool {
        return $this->case45;
    }

    /**
     * Get the case46.
     *
     * @return bool|null Returns the case46.
     */
    public function getCase46(): ?bool {
        return $this->case46;
    }

    /**
     * Get the case47.
     *
     * @return bool|null Returns the case47.
     */
    public function getCase47(): ?bool {
        return $this->case47;
    }

    /**
     * Get the case48.
     *
     * @return bool|null Returns the case48.
     */
    public function getCase48(): ?bool {
        return $this->case48;
    }

    /**
     * Get the case49.
     *
     * @return bool|null Returns the case49.
     */
    public function getCase49(): ?bool {
        return $this->case49;
    }

    /**
     * Get the case5.
     *
     * @return bool|null Returns the case5.
     */
    public function getCase5(): ?bool {
        return $this->case5;
    }

    /**
     * Get the case50.
     *
     * @return bool|null Returns the case50.
     */
    public function getCase50(): ?bool {
        return $this->case50;
    }

    /**
     * Get the case6.
     *
     * @return bool|null Returns the case6.
     */
    public function getCase6(): ?bool {
        return $this->case6;
    }

    /**
     * Get the case7.
     *
     * @return bool|null Returns the case7.
     */
    public function getCase7(): ?bool {
        return $this->case7;
    }

    /**
     * Get the case8.
     *
     * @return bool|null Returns the case8.
     */
    public function getCase8(): ?bool {
        return $this->case8;
    }

    /**
     * Get the case9.
     *
     * @return bool|null Returns the case9.
     */
    public function getCase9(): ?bool {
        return $this->case9;
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
     * Get the date1.
     *
     * @return DateTime|null Returns the date1.
     */
    public function getDate1(): ?DateTime {
        return $this->date1;
    }

    /**
     * Get the date10.
     *
     * @return DateTime|null Returns the date10.
     */
    public function getDate10(): ?DateTime {
        return $this->date10;
    }

    /**
     * Get the date11.
     *
     * @return DateTime|null Returns the date11.
     */
    public function getDate11(): ?DateTime {
        return $this->date11;
    }

    /**
     * Get the date12.
     *
     * @return DateTime|null Returns the date12.
     */
    public function getDate12(): ?DateTime {
        return $this->date12;
    }

    /**
     * Get the date13.
     *
     * @return DateTime|null Returns the date13.
     */
    public function getDate13(): ?DateTime {
        return $this->date13;
    }

    /**
     * Get the date14.
     *
     * @return DateTime|null Returns the date14.
     */
    public function getDate14(): ?DateTime {
        return $this->date14;
    }

    /**
     * Get the date15.
     *
     * @return DateTime|null Returns the date15.
     */
    public function getDate15(): ?DateTime {
        return $this->date15;
    }

    /**
     * Get the date16.
     *
     * @return DateTime|null Returns the date16.
     */
    public function getDate16(): ?DateTime {
        return $this->date16;
    }

    /**
     * Get the date17.
     *
     * @return DateTime|null Returns the date17.
     */
    public function getDate17(): ?DateTime {
        return $this->date17;
    }

    /**
     * Get the date18.
     *
     * @return DateTime|null Returns the date18.
     */
    public function getDate18(): ?DateTime {
        return $this->date18;
    }

    /**
     * Get the date19.
     *
     * @return DateTime|null Returns the date19.
     */
    public function getDate19(): ?DateTime {
        return $this->date19;
    }

    /**
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2(): ?DateTime {
        return $this->date2;
    }

    /**
     * Get the date20.
     *
     * @return DateTime|null Returns the date20.
     */
    public function getDate20(): ?DateTime {
        return $this->date20;
    }

    /**
     * Get the date21.
     *
     * @return DateTime|null Returns the date21.
     */
    public function getDate21(): ?DateTime {
        return $this->date21;
    }

    /**
     * Get the date22.
     *
     * @return DateTime|null Returns the date22.
     */
    public function getDate22(): ?DateTime {
        return $this->date22;
    }

    /**
     * Get the date23.
     *
     * @return DateTime|null Returns the date23.
     */
    public function getDate23(): ?DateTime {
        return $this->date23;
    }

    /**
     * Get the date24.
     *
     * @return DateTime|null Returns the date24.
     */
    public function getDate24(): ?DateTime {
        return $this->date24;
    }

    /**
     * Get the date25.
     *
     * @return DateTime|null Returns the date25.
     */
    public function getDate25(): ?DateTime {
        return $this->date25;
    }

    /**
     * Get the date26.
     *
     * @return DateTime|null Returns the date26.
     */
    public function getDate26(): ?DateTime {
        return $this->date26;
    }

    /**
     * Get the date27.
     *
     * @return DateTime|null Returns the date27.
     */
    public function getDate27(): ?DateTime {
        return $this->date27;
    }

    /**
     * Get the date28.
     *
     * @return DateTime|null Returns the date28.
     */
    public function getDate28(): ?DateTime {
        return $this->date28;
    }

    /**
     * Get the date29.
     *
     * @return DateTime|null Returns the date29.
     */
    public function getDate29(): ?DateTime {
        return $this->date29;
    }

    /**
     * Get the date3.
     *
     * @return DateTime|null Returns the date3.
     */
    public function getDate3(): ?DateTime {
        return $this->date3;
    }

    /**
     * Get the date30.
     *
     * @return DateTime|null Returns the date30.
     */
    public function getDate30(): ?DateTime {
        return $this->date30;
    }

    /**
     * Get the date31.
     *
     * @return DateTime|null Returns the date31.
     */
    public function getDate31(): ?DateTime {
        return $this->date31;
    }

    /**
     * Get the date32.
     *
     * @return DateTime|null Returns the date32.
     */
    public function getDate32(): ?DateTime {
        return $this->date32;
    }

    /**
     * Get the date33.
     *
     * @return DateTime|null Returns the date33.
     */
    public function getDate33(): ?DateTime {
        return $this->date33;
    }

    /**
     * Get the date34.
     *
     * @return DateTime|null Returns the date34.
     */
    public function getDate34(): ?DateTime {
        return $this->date34;
    }

    /**
     * Get the date35.
     *
     * @return DateTime|null Returns the date35.
     */
    public function getDate35(): ?DateTime {
        return $this->date35;
    }

    /**
     * Get the date36.
     *
     * @return DateTime|null Returns the date36.
     */
    public function getDate36(): ?DateTime {
        return $this->date36;
    }

    /**
     * Get the date37.
     *
     * @return DateTime|null Returns the date37.
     */
    public function getDate37(): ?DateTime {
        return $this->date37;
    }

    /**
     * Get the date38.
     *
     * @return DateTime|null Returns the date38.
     */
    public function getDate38(): ?DateTime {
        return $this->date38;
    }

    /**
     * Get the date39.
     *
     * @return DateTime|null Returns the date39.
     */
    public function getDate39(): ?DateTime {
        return $this->date39;
    }

    /**
     * Get the date4.
     *
     * @return DateTime|null Returns the date4.
     */
    public function getDate4(): ?DateTime {
        return $this->date4;
    }

    /**
     * Get the date40.
     *
     * @return DateTime|null Returns the date40.
     */
    public function getDate40(): ?DateTime {
        return $this->date40;
    }

    /**
     * Get the date41.
     *
     * @return DateTime|null Returns the date41.
     */
    public function getDate41(): ?DateTime {
        return $this->date41;
    }

    /**
     * Get the date42.
     *
     * @return DateTime|null Returns the date42.
     */
    public function getDate42(): ?DateTime {
        return $this->date42;
    }

    /**
     * Get the date43.
     *
     * @return DateTime|null Returns the date43.
     */
    public function getDate43(): ?DateTime {
        return $this->date43;
    }

    /**
     * Get the date44.
     *
     * @return DateTime|null Returns the date44.
     */
    public function getDate44(): ?DateTime {
        return $this->date44;
    }

    /**
     * Get the date45.
     *
     * @return DateTime|null Returns the date45.
     */
    public function getDate45(): ?DateTime {
        return $this->date45;
    }

    /**
     * Get the date46.
     *
     * @return DateTime|null Returns the date46.
     */
    public function getDate46(): ?DateTime {
        return $this->date46;
    }

    /**
     * Get the date47.
     *
     * @return DateTime|null Returns the date47.
     */
    public function getDate47(): ?DateTime {
        return $this->date47;
    }

    /**
     * Get the date48.
     *
     * @return DateTime|null Returns the date48.
     */
    public function getDate48(): ?DateTime {
        return $this->date48;
    }

    /**
     * Get the date49.
     *
     * @return DateTime|null Returns the date49.
     */
    public function getDate49(): ?DateTime {
        return $this->date49;
    }

    /**
     * Get the date5.
     *
     * @return DateTime|null Returns the date5.
     */
    public function getDate5(): ?DateTime {
        return $this->date5;
    }

    /**
     * Get the date50.
     *
     * @return DateTime|null Returns the date50.
     */
    public function getDate50(): ?DateTime {
        return $this->date50;
    }

    /**
     * Get the date6.
     *
     * @return DateTime|null Returns the date6.
     */
    public function getDate6(): ?DateTime {
        return $this->date6;
    }

    /**
     * Get the date7.
     *
     * @return DateTime|null Returns the date7.
     */
    public function getDate7(): ?DateTime {
        return $this->date7;
    }

    /**
     * Get the date8.
     *
     * @return DateTime|null Returns the date8.
     */
    public function getDate8(): ?DateTime {
        return $this->date8;
    }

    /**
     * Get the date9.
     *
     * @return DateTime|null Returns the date9.
     */
    public function getDate9(): ?DateTime {
        return $this->date9;
    }

    /**
     * Get the texte1.
     *
     * @return string|null Returns the texte1.
     */
    public function getTexte1(): ?string {
        return $this->texte1;
    }

    /**
     * Get the texte10.
     *
     * @return string|null Returns the texte10.
     */
    public function getTexte10(): ?string {
        return $this->texte10;
    }

    /**
     * Get the texte11.
     *
     * @return string|null Returns the texte11.
     */
    public function getTexte11(): ?string {
        return $this->texte11;
    }

    /**
     * Get the texte12.
     *
     * @return string|null Returns the texte12.
     */
    public function getTexte12(): ?string {
        return $this->texte12;
    }

    /**
     * Get the texte13.
     *
     * @return string|null Returns the texte13.
     */
    public function getTexte13(): ?string {
        return $this->texte13;
    }

    /**
     * Get the texte14.
     *
     * @return string|null Returns the texte14.
     */
    public function getTexte14(): ?string {
        return $this->texte14;
    }

    /**
     * Get the texte15.
     *
     * @return string|null Returns the texte15.
     */
    public function getTexte15(): ?string {
        return $this->texte15;
    }

    /**
     * Get the texte16.
     *
     * @return string|null Returns the texte16.
     */
    public function getTexte16(): ?string {
        return $this->texte16;
    }

    /**
     * Get the texte17.
     *
     * @return string|null Returns the texte17.
     */
    public function getTexte17(): ?string {
        return $this->texte17;
    }

    /**
     * Get the texte18.
     *
     * @return string|null Returns the texte18.
     */
    public function getTexte18(): ?string {
        return $this->texte18;
    }

    /**
     * Get the texte19.
     *
     * @return string|null Returns the texte19.
     */
    public function getTexte19(): ?string {
        return $this->texte19;
    }

    /**
     * Get the texte2.
     *
     * @return string|null Returns the texte2.
     */
    public function getTexte2(): ?string {
        return $this->texte2;
    }

    /**
     * Get the texte20.
     *
     * @return string|null Returns the texte20.
     */
    public function getTexte20(): ?string {
        return $this->texte20;
    }

    /**
     * Get the texte21.
     *
     * @return string|null Returns the texte21.
     */
    public function getTexte21(): ?string {
        return $this->texte21;
    }

    /**
     * Get the texte22.
     *
     * @return string|null Returns the texte22.
     */
    public function getTexte22(): ?string {
        return $this->texte22;
    }

    /**
     * Get the texte23.
     *
     * @return string|null Returns the texte23.
     */
    public function getTexte23(): ?string {
        return $this->texte23;
    }

    /**
     * Get the texte24.
     *
     * @return string|null Returns the texte24.
     */
    public function getTexte24(): ?string {
        return $this->texte24;
    }

    /**
     * Get the texte25.
     *
     * @return string|null Returns the texte25.
     */
    public function getTexte25(): ?string {
        return $this->texte25;
    }

    /**
     * Get the texte26.
     *
     * @return string|null Returns the texte26.
     */
    public function getTexte26(): ?string {
        return $this->texte26;
    }

    /**
     * Get the texte27.
     *
     * @return string|null Returns the texte27.
     */
    public function getTexte27(): ?string {
        return $this->texte27;
    }

    /**
     * Get the texte28.
     *
     * @return string|null Returns the texte28.
     */
    public function getTexte28(): ?string {
        return $this->texte28;
    }

    /**
     * Get the texte29.
     *
     * @return string|null Returns the texte29.
     */
    public function getTexte29(): ?string {
        return $this->texte29;
    }

    /**
     * Get the texte3.
     *
     * @return string|null Returns the texte3.
     */
    public function getTexte3(): ?string {
        return $this->texte3;
    }

    /**
     * Get the texte30.
     *
     * @return string|null Returns the texte30.
     */
    public function getTexte30(): ?string {
        return $this->texte30;
    }

    /**
     * Get the texte31.
     *
     * @return string|null Returns the texte31.
     */
    public function getTexte31(): ?string {
        return $this->texte31;
    }

    /**
     * Get the texte32.
     *
     * @return string|null Returns the texte32.
     */
    public function getTexte32(): ?string {
        return $this->texte32;
    }

    /**
     * Get the texte33.
     *
     * @return string|null Returns the texte33.
     */
    public function getTexte33(): ?string {
        return $this->texte33;
    }

    /**
     * Get the texte34.
     *
     * @return string|null Returns the texte34.
     */
    public function getTexte34(): ?string {
        return $this->texte34;
    }

    /**
     * Get the texte35.
     *
     * @return string|null Returns the texte35.
     */
    public function getTexte35(): ?string {
        return $this->texte35;
    }

    /**
     * Get the texte36.
     *
     * @return string|null Returns the texte36.
     */
    public function getTexte36(): ?string {
        return $this->texte36;
    }

    /**
     * Get the texte37.
     *
     * @return string|null Returns the texte37.
     */
    public function getTexte37(): ?string {
        return $this->texte37;
    }

    /**
     * Get the texte38.
     *
     * @return string|null Returns the texte38.
     */
    public function getTexte38(): ?string {
        return $this->texte38;
    }

    /**
     * Get the texte39.
     *
     * @return string|null Returns the texte39.
     */
    public function getTexte39(): ?string {
        return $this->texte39;
    }

    /**
     * Get the texte4.
     *
     * @return string|null Returns the texte4.
     */
    public function getTexte4(): ?string {
        return $this->texte4;
    }

    /**
     * Get the texte40.
     *
     * @return string|null Returns the texte40.
     */
    public function getTexte40(): ?string {
        return $this->texte40;
    }

    /**
     * Get the texte41.
     *
     * @return string|null Returns the texte41.
     */
    public function getTexte41(): ?string {
        return $this->texte41;
    }

    /**
     * Get the texte42.
     *
     * @return string|null Returns the texte42.
     */
    public function getTexte42(): ?string {
        return $this->texte42;
    }

    /**
     * Get the texte43.
     *
     * @return string|null Returns the texte43.
     */
    public function getTexte43(): ?string {
        return $this->texte43;
    }

    /**
     * Get the texte44.
     *
     * @return string|null Returns the texte44.
     */
    public function getTexte44(): ?string {
        return $this->texte44;
    }

    /**
     * Get the texte45.
     *
     * @return string|null Returns the texte45.
     */
    public function getTexte45(): ?string {
        return $this->texte45;
    }

    /**
     * Get the texte46.
     *
     * @return string|null Returns the texte46.
     */
    public function getTexte46(): ?string {
        return $this->texte46;
    }

    /**
     * Get the texte47.
     *
     * @return string|null Returns the texte47.
     */
    public function getTexte47(): ?string {
        return $this->texte47;
    }

    /**
     * Get the texte48.
     *
     * @return string|null Returns the texte48.
     */
    public function getTexte48(): ?string {
        return $this->texte48;
    }

    /**
     * Get the texte49.
     *
     * @return string|null Returns the texte49.
     */
    public function getTexte49(): ?string {
        return $this->texte49;
    }

    /**
     * Get the texte5.
     *
     * @return string|null Returns the texte5.
     */
    public function getTexte5(): ?string {
        return $this->texte5;
    }

    /**
     * Get the texte50.
     *
     * @return string|null Returns the texte50.
     */
    public function getTexte50(): ?string {
        return $this->texte50;
    }

    /**
     * Get the texte6.
     *
     * @return string|null Returns the texte6.
     */
    public function getTexte6(): ?string {
        return $this->texte6;
    }

    /**
     * Get the texte7.
     *
     * @return string|null Returns the texte7.
     */
    public function getTexte7(): ?string {
        return $this->texte7;
    }

    /**
     * Get the texte8.
     *
     * @return string|null Returns the texte8.
     */
    public function getTexte8(): ?string {
        return $this->texte8;
    }

    /**
     * Get the texte9.
     *
     * @return string|null Returns the texte9.
     */
    public function getTexte9(): ?string {
        return $this->texte9;
    }

    /**
     * Get the valeur1.
     *
     * @return float|null Returns the valeur1.
     */
    public function getValeur1(): ?float {
        return $this->valeur1;
    }

    /**
     * Get the valeur10.
     *
     * @return float|null Returns the valeur10.
     */
    public function getValeur10(): ?float {
        return $this->valeur10;
    }

    /**
     * Get the valeur11.
     *
     * @return float|null Returns the valeur11.
     */
    public function getValeur11(): ?float {
        return $this->valeur11;
    }

    /**
     * Get the valeur12.
     *
     * @return float|null Returns the valeur12.
     */
    public function getValeur12(): ?float {
        return $this->valeur12;
    }

    /**
     * Get the valeur13.
     *
     * @return float|null Returns the valeur13.
     */
    public function getValeur13(): ?float {
        return $this->valeur13;
    }

    /**
     * Get the valeur14.
     *
     * @return float|null Returns the valeur14.
     */
    public function getValeur14(): ?float {
        return $this->valeur14;
    }

    /**
     * Get the valeur15.
     *
     * @return float|null Returns the valeur15.
     */
    public function getValeur15(): ?float {
        return $this->valeur15;
    }

    /**
     * Get the valeur16.
     *
     * @return float|null Returns the valeur16.
     */
    public function getValeur16(): ?float {
        return $this->valeur16;
    }

    /**
     * Get the valeur17.
     *
     * @return float|null Returns the valeur17.
     */
    public function getValeur17(): ?float {
        return $this->valeur17;
    }

    /**
     * Get the valeur18.
     *
     * @return float|null Returns the valeur18.
     */
    public function getValeur18(): ?float {
        return $this->valeur18;
    }

    /**
     * Get the valeur19.
     *
     * @return float|null Returns the valeur19.
     */
    public function getValeur19(): ?float {
        return $this->valeur19;
    }

    /**
     * Get the valeur2.
     *
     * @return float|null Returns the valeur2.
     */
    public function getValeur2(): ?float {
        return $this->valeur2;
    }

    /**
     * Get the valeur20.
     *
     * @return float|null Returns the valeur20.
     */
    public function getValeur20(): ?float {
        return $this->valeur20;
    }

    /**
     * Get the valeur21.
     *
     * @return float|null Returns the valeur21.
     */
    public function getValeur21(): ?float {
        return $this->valeur21;
    }

    /**
     * Get the valeur22.
     *
     * @return float|null Returns the valeur22.
     */
    public function getValeur22(): ?float {
        return $this->valeur22;
    }

    /**
     * Get the valeur23.
     *
     * @return float|null Returns the valeur23.
     */
    public function getValeur23(): ?float {
        return $this->valeur23;
    }

    /**
     * Get the valeur24.
     *
     * @return float|null Returns the valeur24.
     */
    public function getValeur24(): ?float {
        return $this->valeur24;
    }

    /**
     * Get the valeur25.
     *
     * @return float|null Returns the valeur25.
     */
    public function getValeur25(): ?float {
        return $this->valeur25;
    }

    /**
     * Get the valeur26.
     *
     * @return float|null Returns the valeur26.
     */
    public function getValeur26(): ?float {
        return $this->valeur26;
    }

    /**
     * Get the valeur27.
     *
     * @return float|null Returns the valeur27.
     */
    public function getValeur27(): ?float {
        return $this->valeur27;
    }

    /**
     * Get the valeur28.
     *
     * @return float|null Returns the valeur28.
     */
    public function getValeur28(): ?float {
        return $this->valeur28;
    }

    /**
     * Get the valeur29.
     *
     * @return float|null Returns the valeur29.
     */
    public function getValeur29(): ?float {
        return $this->valeur29;
    }

    /**
     * Get the valeur3.
     *
     * @return float|null Returns the valeur3.
     */
    public function getValeur3(): ?float {
        return $this->valeur3;
    }

    /**
     * Get the valeur30.
     *
     * @return float|null Returns the valeur30.
     */
    public function getValeur30(): ?float {
        return $this->valeur30;
    }

    /**
     * Get the valeur31.
     *
     * @return float|null Returns the valeur31.
     */
    public function getValeur31(): ?float {
        return $this->valeur31;
    }

    /**
     * Get the valeur32.
     *
     * @return float|null Returns the valeur32.
     */
    public function getValeur32(): ?float {
        return $this->valeur32;
    }

    /**
     * Get the valeur33.
     *
     * @return float|null Returns the valeur33.
     */
    public function getValeur33(): ?float {
        return $this->valeur33;
    }

    /**
     * Get the valeur34.
     *
     * @return float|null Returns the valeur34.
     */
    public function getValeur34(): ?float {
        return $this->valeur34;
    }

    /**
     * Get the valeur35.
     *
     * @return float|null Returns the valeur35.
     */
    public function getValeur35(): ?float {
        return $this->valeur35;
    }

    /**
     * Get the valeur36.
     *
     * @return float|null Returns the valeur36.
     */
    public function getValeur36(): ?float {
        return $this->valeur36;
    }

    /**
     * Get the valeur37.
     *
     * @return float|null Returns the valeur37.
     */
    public function getValeur37(): ?float {
        return $this->valeur37;
    }

    /**
     * Get the valeur38.
     *
     * @return float|null Returns the valeur38.
     */
    public function getValeur38(): ?float {
        return $this->valeur38;
    }

    /**
     * Get the valeur39.
     *
     * @return float|null Returns the valeur39.
     */
    public function getValeur39(): ?float {
        return $this->valeur39;
    }

    /**
     * Get the valeur4.
     *
     * @return float|null Returns the valeur4.
     */
    public function getValeur4(): ?float {
        return $this->valeur4;
    }

    /**
     * Get the valeur40.
     *
     * @return float|null Returns the valeur40.
     */
    public function getValeur40(): ?float {
        return $this->valeur40;
    }

    /**
     * Get the valeur41.
     *
     * @return float|null Returns the valeur41.
     */
    public function getValeur41(): ?float {
        return $this->valeur41;
    }

    /**
     * Get the valeur42.
     *
     * @return float|null Returns the valeur42.
     */
    public function getValeur42(): ?float {
        return $this->valeur42;
    }

    /**
     * Get the valeur43.
     *
     * @return float|null Returns the valeur43.
     */
    public function getValeur43(): ?float {
        return $this->valeur43;
    }

    /**
     * Get the valeur44.
     *
     * @return float|null Returns the valeur44.
     */
    public function getValeur44(): ?float {
        return $this->valeur44;
    }

    /**
     * Get the valeur45.
     *
     * @return float|null Returns the valeur45.
     */
    public function getValeur45(): ?float {
        return $this->valeur45;
    }

    /**
     * Get the valeur46.
     *
     * @return float|null Returns the valeur46.
     */
    public function getValeur46(): ?float {
        return $this->valeur46;
    }

    /**
     * Get the valeur47.
     *
     * @return float|null Returns the valeur47.
     */
    public function getValeur47(): ?float {
        return $this->valeur47;
    }

    /**
     * Get the valeur48.
     *
     * @return float|null Returns the valeur48.
     */
    public function getValeur48(): ?float {
        return $this->valeur48;
    }

    /**
     * Get the valeur49.
     *
     * @return float|null Returns the valeur49.
     */
    public function getValeur49(): ?float {
        return $this->valeur49;
    }

    /**
     * Get the valeur5.
     *
     * @return float|null Returns the valeur5.
     */
    public function getValeur5(): ?float {
        return $this->valeur5;
    }

    /**
     * Get the valeur50.
     *
     * @return float|null Returns the valeur50.
     */
    public function getValeur50(): ?float {
        return $this->valeur50;
    }

    /**
     * Get the valeur6.
     *
     * @return float|null Returns the valeur6.
     */
    public function getValeur6(): ?float {
        return $this->valeur6;
    }

    /**
     * Get the valeur7.
     *
     * @return float|null Returns the valeur7.
     */
    public function getValeur7(): ?float {
        return $this->valeur7;
    }

    /**
     * Get the valeur8.
     *
     * @return float|null Returns the valeur8.
     */
    public function getValeur8(): ?float {
        return $this->valeur8;
    }

    /**
     * Get the valeur9.
     *
     * @return float|null Returns the valeur9.
     */
    public function getValeur9(): ?float {
        return $this->valeur9;
    }

    /**
     * Set the case1.
     *
     * @param bool|null $case1 The case1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase1(?bool $case1): CriteresLibresArticles {
        $this->case1 = $case1;
        return $this;
    }

    /**
     * Set the case10.
     *
     * @param bool|null $case10 The case10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase10(?bool $case10): CriteresLibresArticles {
        $this->case10 = $case10;
        return $this;
    }

    /**
     * Set the case11.
     *
     * @param bool|null $case11 The case11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase11(?bool $case11): CriteresLibresArticles {
        $this->case11 = $case11;
        return $this;
    }

    /**
     * Set the case12.
     *
     * @param bool|null $case12 The case12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase12(?bool $case12): CriteresLibresArticles {
        $this->case12 = $case12;
        return $this;
    }

    /**
     * Set the case13.
     *
     * @param bool|null $case13 The case13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase13(?bool $case13): CriteresLibresArticles {
        $this->case13 = $case13;
        return $this;
    }

    /**
     * Set the case14.
     *
     * @param bool|null $case14 The case14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase14(?bool $case14): CriteresLibresArticles {
        $this->case14 = $case14;
        return $this;
    }

    /**
     * Set the case15.
     *
     * @param bool|null $case15 The case15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase15(?bool $case15): CriteresLibresArticles {
        $this->case15 = $case15;
        return $this;
    }

    /**
     * Set the case16.
     *
     * @param bool|null $case16 The case16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase16(?bool $case16): CriteresLibresArticles {
        $this->case16 = $case16;
        return $this;
    }

    /**
     * Set the case17.
     *
     * @param bool|null $case17 The case17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase17(?bool $case17): CriteresLibresArticles {
        $this->case17 = $case17;
        return $this;
    }

    /**
     * Set the case18.
     *
     * @param bool|null $case18 The case18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase18(?bool $case18): CriteresLibresArticles {
        $this->case18 = $case18;
        return $this;
    }

    /**
     * Set the case19.
     *
     * @param bool|null $case19 The case19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase19(?bool $case19): CriteresLibresArticles {
        $this->case19 = $case19;
        return $this;
    }

    /**
     * Set the case2.
     *
     * @param bool|null $case2 The case2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase2(?bool $case2): CriteresLibresArticles {
        $this->case2 = $case2;
        return $this;
    }

    /**
     * Set the case20.
     *
     * @param bool|null $case20 The case20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase20(?bool $case20): CriteresLibresArticles {
        $this->case20 = $case20;
        return $this;
    }

    /**
     * Set the case21.
     *
     * @param bool|null $case21 The case21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase21(?bool $case21): CriteresLibresArticles {
        $this->case21 = $case21;
        return $this;
    }

    /**
     * Set the case22.
     *
     * @param bool|null $case22 The case22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase22(?bool $case22): CriteresLibresArticles {
        $this->case22 = $case22;
        return $this;
    }

    /**
     * Set the case23.
     *
     * @param bool|null $case23 The case23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase23(?bool $case23): CriteresLibresArticles {
        $this->case23 = $case23;
        return $this;
    }

    /**
     * Set the case24.
     *
     * @param bool|null $case24 The case24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase24(?bool $case24): CriteresLibresArticles {
        $this->case24 = $case24;
        return $this;
    }

    /**
     * Set the case25.
     *
     * @param bool|null $case25 The case25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase25(?bool $case25): CriteresLibresArticles {
        $this->case25 = $case25;
        return $this;
    }

    /**
     * Set the case26.
     *
     * @param bool|null $case26 The case26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase26(?bool $case26): CriteresLibresArticles {
        $this->case26 = $case26;
        return $this;
    }

    /**
     * Set the case27.
     *
     * @param bool|null $case27 The case27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase27(?bool $case27): CriteresLibresArticles {
        $this->case27 = $case27;
        return $this;
    }

    /**
     * Set the case28.
     *
     * @param bool|null $case28 The case28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase28(?bool $case28): CriteresLibresArticles {
        $this->case28 = $case28;
        return $this;
    }

    /**
     * Set the case29.
     *
     * @param bool|null $case29 The case29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase29(?bool $case29): CriteresLibresArticles {
        $this->case29 = $case29;
        return $this;
    }

    /**
     * Set the case3.
     *
     * @param bool|null $case3 The case3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase3(?bool $case3): CriteresLibresArticles {
        $this->case3 = $case3;
        return $this;
    }

    /**
     * Set the case30.
     *
     * @param bool|null $case30 The case30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase30(?bool $case30): CriteresLibresArticles {
        $this->case30 = $case30;
        return $this;
    }

    /**
     * Set the case31.
     *
     * @param bool|null $case31 The case31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase31(?bool $case31): CriteresLibresArticles {
        $this->case31 = $case31;
        return $this;
    }

    /**
     * Set the case32.
     *
     * @param bool|null $case32 The case32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase32(?bool $case32): CriteresLibresArticles {
        $this->case32 = $case32;
        return $this;
    }

    /**
     * Set the case33.
     *
     * @param bool|null $case33 The case33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase33(?bool $case33): CriteresLibresArticles {
        $this->case33 = $case33;
        return $this;
    }

    /**
     * Set the case34.
     *
     * @param bool|null $case34 The case34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase34(?bool $case34): CriteresLibresArticles {
        $this->case34 = $case34;
        return $this;
    }

    /**
     * Set the case35.
     *
     * @param bool|null $case35 The case35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase35(?bool $case35): CriteresLibresArticles {
        $this->case35 = $case35;
        return $this;
    }

    /**
     * Set the case36.
     *
     * @param bool|null $case36 The case36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase36(?bool $case36): CriteresLibresArticles {
        $this->case36 = $case36;
        return $this;
    }

    /**
     * Set the case37.
     *
     * @param bool|null $case37 The case37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase37(?bool $case37): CriteresLibresArticles {
        $this->case37 = $case37;
        return $this;
    }

    /**
     * Set the case38.
     *
     * @param bool|null $case38 The case38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase38(?bool $case38): CriteresLibresArticles {
        $this->case38 = $case38;
        return $this;
    }

    /**
     * Set the case39.
     *
     * @param bool|null $case39 The case39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase39(?bool $case39): CriteresLibresArticles {
        $this->case39 = $case39;
        return $this;
    }

    /**
     * Set the case4.
     *
     * @param bool|null $case4 The case4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase4(?bool $case4): CriteresLibresArticles {
        $this->case4 = $case4;
        return $this;
    }

    /**
     * Set the case40.
     *
     * @param bool|null $case40 The case40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase40(?bool $case40): CriteresLibresArticles {
        $this->case40 = $case40;
        return $this;
    }

    /**
     * Set the case41.
     *
     * @param bool|null $case41 The case41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase41(?bool $case41): CriteresLibresArticles {
        $this->case41 = $case41;
        return $this;
    }

    /**
     * Set the case42.
     *
     * @param bool|null $case42 The case42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase42(?bool $case42): CriteresLibresArticles {
        $this->case42 = $case42;
        return $this;
    }

    /**
     * Set the case43.
     *
     * @param bool|null $case43 The case43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase43(?bool $case43): CriteresLibresArticles {
        $this->case43 = $case43;
        return $this;
    }

    /**
     * Set the case44.
     *
     * @param bool|null $case44 The case44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase44(?bool $case44): CriteresLibresArticles {
        $this->case44 = $case44;
        return $this;
    }

    /**
     * Set the case45.
     *
     * @param bool|null $case45 The case45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase45(?bool $case45): CriteresLibresArticles {
        $this->case45 = $case45;
        return $this;
    }

    /**
     * Set the case46.
     *
     * @param bool|null $case46 The case46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase46(?bool $case46): CriteresLibresArticles {
        $this->case46 = $case46;
        return $this;
    }

    /**
     * Set the case47.
     *
     * @param bool|null $case47 The case47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase47(?bool $case47): CriteresLibresArticles {
        $this->case47 = $case47;
        return $this;
    }

    /**
     * Set the case48.
     *
     * @param bool|null $case48 The case48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase48(?bool $case48): CriteresLibresArticles {
        $this->case48 = $case48;
        return $this;
    }

    /**
     * Set the case49.
     *
     * @param bool|null $case49 The case49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase49(?bool $case49): CriteresLibresArticles {
        $this->case49 = $case49;
        return $this;
    }

    /**
     * Set the case5.
     *
     * @param bool|null $case5 The case5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase5(?bool $case5): CriteresLibresArticles {
        $this->case5 = $case5;
        return $this;
    }

    /**
     * Set the case50.
     *
     * @param bool|null $case50 The case50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase50(?bool $case50): CriteresLibresArticles {
        $this->case50 = $case50;
        return $this;
    }

    /**
     * Set the case6.
     *
     * @param bool|null $case6 The case6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase6(?bool $case6): CriteresLibresArticles {
        $this->case6 = $case6;
        return $this;
    }

    /**
     * Set the case7.
     *
     * @param bool|null $case7 The case7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase7(?bool $case7): CriteresLibresArticles {
        $this->case7 = $case7;
        return $this;
    }

    /**
     * Set the case8.
     *
     * @param bool|null $case8 The case8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase8(?bool $case8): CriteresLibresArticles {
        $this->case8 = $case8;
        return $this;
    }

    /**
     * Set the case9.
     *
     * @param bool|null $case9 The case9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCase9(?bool $case9): CriteresLibresArticles {
        $this->case9 = $case9;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string|null $codeArticle The code article.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setCodeArticle(?string $codeArticle): CriteresLibresArticles {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate1(?DateTime $date1): CriteresLibresArticles {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate10(?DateTime $date10): CriteresLibresArticles {
        $this->date10 = $date10;
        return $this;
    }

    /**
     * Set the date11.
     *
     * @param DateTime|null $date11 The date11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate11(?DateTime $date11): CriteresLibresArticles {
        $this->date11 = $date11;
        return $this;
    }

    /**
     * Set the date12.
     *
     * @param DateTime|null $date12 The date12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate12(?DateTime $date12): CriteresLibresArticles {
        $this->date12 = $date12;
        return $this;
    }

    /**
     * Set the date13.
     *
     * @param DateTime|null $date13 The date13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate13(?DateTime $date13): CriteresLibresArticles {
        $this->date13 = $date13;
        return $this;
    }

    /**
     * Set the date14.
     *
     * @param DateTime|null $date14 The date14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate14(?DateTime $date14): CriteresLibresArticles {
        $this->date14 = $date14;
        return $this;
    }

    /**
     * Set the date15.
     *
     * @param DateTime|null $date15 The date15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate15(?DateTime $date15): CriteresLibresArticles {
        $this->date15 = $date15;
        return $this;
    }

    /**
     * Set the date16.
     *
     * @param DateTime|null $date16 The date16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate16(?DateTime $date16): CriteresLibresArticles {
        $this->date16 = $date16;
        return $this;
    }

    /**
     * Set the date17.
     *
     * @param DateTime|null $date17 The date17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate17(?DateTime $date17): CriteresLibresArticles {
        $this->date17 = $date17;
        return $this;
    }

    /**
     * Set the date18.
     *
     * @param DateTime|null $date18 The date18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate18(?DateTime $date18): CriteresLibresArticles {
        $this->date18 = $date18;
        return $this;
    }

    /**
     * Set the date19.
     *
     * @param DateTime|null $date19 The date19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate19(?DateTime $date19): CriteresLibresArticles {
        $this->date19 = $date19;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate2(?DateTime $date2): CriteresLibresArticles {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the date20.
     *
     * @param DateTime|null $date20 The date20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate20(?DateTime $date20): CriteresLibresArticles {
        $this->date20 = $date20;
        return $this;
    }

    /**
     * Set the date21.
     *
     * @param DateTime|null $date21 The date21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate21(?DateTime $date21): CriteresLibresArticles {
        $this->date21 = $date21;
        return $this;
    }

    /**
     * Set the date22.
     *
     * @param DateTime|null $date22 The date22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate22(?DateTime $date22): CriteresLibresArticles {
        $this->date22 = $date22;
        return $this;
    }

    /**
     * Set the date23.
     *
     * @param DateTime|null $date23 The date23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate23(?DateTime $date23): CriteresLibresArticles {
        $this->date23 = $date23;
        return $this;
    }

    /**
     * Set the date24.
     *
     * @param DateTime|null $date24 The date24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate24(?DateTime $date24): CriteresLibresArticles {
        $this->date24 = $date24;
        return $this;
    }

    /**
     * Set the date25.
     *
     * @param DateTime|null $date25 The date25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate25(?DateTime $date25): CriteresLibresArticles {
        $this->date25 = $date25;
        return $this;
    }

    /**
     * Set the date26.
     *
     * @param DateTime|null $date26 The date26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate26(?DateTime $date26): CriteresLibresArticles {
        $this->date26 = $date26;
        return $this;
    }

    /**
     * Set the date27.
     *
     * @param DateTime|null $date27 The date27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate27(?DateTime $date27): CriteresLibresArticles {
        $this->date27 = $date27;
        return $this;
    }

    /**
     * Set the date28.
     *
     * @param DateTime|null $date28 The date28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate28(?DateTime $date28): CriteresLibresArticles {
        $this->date28 = $date28;
        return $this;
    }

    /**
     * Set the date29.
     *
     * @param DateTime|null $date29 The date29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate29(?DateTime $date29): CriteresLibresArticles {
        $this->date29 = $date29;
        return $this;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate3(?DateTime $date3): CriteresLibresArticles {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Set the date30.
     *
     * @param DateTime|null $date30 The date30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate30(?DateTime $date30): CriteresLibresArticles {
        $this->date30 = $date30;
        return $this;
    }

    /**
     * Set the date31.
     *
     * @param DateTime|null $date31 The date31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate31(?DateTime $date31): CriteresLibresArticles {
        $this->date31 = $date31;
        return $this;
    }

    /**
     * Set the date32.
     *
     * @param DateTime|null $date32 The date32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate32(?DateTime $date32): CriteresLibresArticles {
        $this->date32 = $date32;
        return $this;
    }

    /**
     * Set the date33.
     *
     * @param DateTime|null $date33 The date33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate33(?DateTime $date33): CriteresLibresArticles {
        $this->date33 = $date33;
        return $this;
    }

    /**
     * Set the date34.
     *
     * @param DateTime|null $date34 The date34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate34(?DateTime $date34): CriteresLibresArticles {
        $this->date34 = $date34;
        return $this;
    }

    /**
     * Set the date35.
     *
     * @param DateTime|null $date35 The date35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate35(?DateTime $date35): CriteresLibresArticles {
        $this->date35 = $date35;
        return $this;
    }

    /**
     * Set the date36.
     *
     * @param DateTime|null $date36 The date36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate36(?DateTime $date36): CriteresLibresArticles {
        $this->date36 = $date36;
        return $this;
    }

    /**
     * Set the date37.
     *
     * @param DateTime|null $date37 The date37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate37(?DateTime $date37): CriteresLibresArticles {
        $this->date37 = $date37;
        return $this;
    }

    /**
     * Set the date38.
     *
     * @param DateTime|null $date38 The date38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate38(?DateTime $date38): CriteresLibresArticles {
        $this->date38 = $date38;
        return $this;
    }

    /**
     * Set the date39.
     *
     * @param DateTime|null $date39 The date39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate39(?DateTime $date39): CriteresLibresArticles {
        $this->date39 = $date39;
        return $this;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate4(?DateTime $date4): CriteresLibresArticles {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Set the date40.
     *
     * @param DateTime|null $date40 The date40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate40(?DateTime $date40): CriteresLibresArticles {
        $this->date40 = $date40;
        return $this;
    }

    /**
     * Set the date41.
     *
     * @param DateTime|null $date41 The date41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate41(?DateTime $date41): CriteresLibresArticles {
        $this->date41 = $date41;
        return $this;
    }

    /**
     * Set the date42.
     *
     * @param DateTime|null $date42 The date42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate42(?DateTime $date42): CriteresLibresArticles {
        $this->date42 = $date42;
        return $this;
    }

    /**
     * Set the date43.
     *
     * @param DateTime|null $date43 The date43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate43(?DateTime $date43): CriteresLibresArticles {
        $this->date43 = $date43;
        return $this;
    }

    /**
     * Set the date44.
     *
     * @param DateTime|null $date44 The date44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate44(?DateTime $date44): CriteresLibresArticles {
        $this->date44 = $date44;
        return $this;
    }

    /**
     * Set the date45.
     *
     * @param DateTime|null $date45 The date45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate45(?DateTime $date45): CriteresLibresArticles {
        $this->date45 = $date45;
        return $this;
    }

    /**
     * Set the date46.
     *
     * @param DateTime|null $date46 The date46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate46(?DateTime $date46): CriteresLibresArticles {
        $this->date46 = $date46;
        return $this;
    }

    /**
     * Set the date47.
     *
     * @param DateTime|null $date47 The date47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate47(?DateTime $date47): CriteresLibresArticles {
        $this->date47 = $date47;
        return $this;
    }

    /**
     * Set the date48.
     *
     * @param DateTime|null $date48 The date48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate48(?DateTime $date48): CriteresLibresArticles {
        $this->date48 = $date48;
        return $this;
    }

    /**
     * Set the date49.
     *
     * @param DateTime|null $date49 The date49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate49(?DateTime $date49): CriteresLibresArticles {
        $this->date49 = $date49;
        return $this;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate5(?DateTime $date5): CriteresLibresArticles {
        $this->date5 = $date5;
        return $this;
    }

    /**
     * Set the date50.
     *
     * @param DateTime|null $date50 The date50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate50(?DateTime $date50): CriteresLibresArticles {
        $this->date50 = $date50;
        return $this;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate6(?DateTime $date6): CriteresLibresArticles {
        $this->date6 = $date6;
        return $this;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate7(?DateTime $date7): CriteresLibresArticles {
        $this->date7 = $date7;
        return $this;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate8(?DateTime $date8): CriteresLibresArticles {
        $this->date8 = $date8;
        return $this;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setDate9(?DateTime $date9): CriteresLibresArticles {
        $this->date9 = $date9;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string|null $texte1 The texte1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte1(?string $texte1): CriteresLibresArticles {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte10.
     *
     * @param string|null $texte10 The texte10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte10(?string $texte10): CriteresLibresArticles {
        $this->texte10 = $texte10;
        return $this;
    }

    /**
     * Set the texte11.
     *
     * @param string|null $texte11 The texte11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte11(?string $texte11): CriteresLibresArticles {
        $this->texte11 = $texte11;
        return $this;
    }

    /**
     * Set the texte12.
     *
     * @param string|null $texte12 The texte12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte12(?string $texte12): CriteresLibresArticles {
        $this->texte12 = $texte12;
        return $this;
    }

    /**
     * Set the texte13.
     *
     * @param string|null $texte13 The texte13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte13(?string $texte13): CriteresLibresArticles {
        $this->texte13 = $texte13;
        return $this;
    }

    /**
     * Set the texte14.
     *
     * @param string|null $texte14 The texte14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte14(?string $texte14): CriteresLibresArticles {
        $this->texte14 = $texte14;
        return $this;
    }

    /**
     * Set the texte15.
     *
     * @param string|null $texte15 The texte15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte15(?string $texte15): CriteresLibresArticles {
        $this->texte15 = $texte15;
        return $this;
    }

    /**
     * Set the texte16.
     *
     * @param string|null $texte16 The texte16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte16(?string $texte16): CriteresLibresArticles {
        $this->texte16 = $texte16;
        return $this;
    }

    /**
     * Set the texte17.
     *
     * @param string|null $texte17 The texte17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte17(?string $texte17): CriteresLibresArticles {
        $this->texte17 = $texte17;
        return $this;
    }

    /**
     * Set the texte18.
     *
     * @param string|null $texte18 The texte18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte18(?string $texte18): CriteresLibresArticles {
        $this->texte18 = $texte18;
        return $this;
    }

    /**
     * Set the texte19.
     *
     * @param string|null $texte19 The texte19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte19(?string $texte19): CriteresLibresArticles {
        $this->texte19 = $texte19;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string|null $texte2 The texte2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte2(?string $texte2): CriteresLibresArticles {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte20.
     *
     * @param string|null $texte20 The texte20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte20(?string $texte20): CriteresLibresArticles {
        $this->texte20 = $texte20;
        return $this;
    }

    /**
     * Set the texte21.
     *
     * @param string|null $texte21 The texte21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte21(?string $texte21): CriteresLibresArticles {
        $this->texte21 = $texte21;
        return $this;
    }

    /**
     * Set the texte22.
     *
     * @param string|null $texte22 The texte22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte22(?string $texte22): CriteresLibresArticles {
        $this->texte22 = $texte22;
        return $this;
    }

    /**
     * Set the texte23.
     *
     * @param string|null $texte23 The texte23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte23(?string $texte23): CriteresLibresArticles {
        $this->texte23 = $texte23;
        return $this;
    }

    /**
     * Set the texte24.
     *
     * @param string|null $texte24 The texte24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte24(?string $texte24): CriteresLibresArticles {
        $this->texte24 = $texte24;
        return $this;
    }

    /**
     * Set the texte25.
     *
     * @param string|null $texte25 The texte25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte25(?string $texte25): CriteresLibresArticles {
        $this->texte25 = $texte25;
        return $this;
    }

    /**
     * Set the texte26.
     *
     * @param string|null $texte26 The texte26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte26(?string $texte26): CriteresLibresArticles {
        $this->texte26 = $texte26;
        return $this;
    }

    /**
     * Set the texte27.
     *
     * @param string|null $texte27 The texte27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte27(?string $texte27): CriteresLibresArticles {
        $this->texte27 = $texte27;
        return $this;
    }

    /**
     * Set the texte28.
     *
     * @param string|null $texte28 The texte28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte28(?string $texte28): CriteresLibresArticles {
        $this->texte28 = $texte28;
        return $this;
    }

    /**
     * Set the texte29.
     *
     * @param string|null $texte29 The texte29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte29(?string $texte29): CriteresLibresArticles {
        $this->texte29 = $texte29;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string|null $texte3 The texte3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte3(?string $texte3): CriteresLibresArticles {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte30.
     *
     * @param string|null $texte30 The texte30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte30(?string $texte30): CriteresLibresArticles {
        $this->texte30 = $texte30;
        return $this;
    }

    /**
     * Set the texte31.
     *
     * @param string|null $texte31 The texte31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte31(?string $texte31): CriteresLibresArticles {
        $this->texte31 = $texte31;
        return $this;
    }

    /**
     * Set the texte32.
     *
     * @param string|null $texte32 The texte32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte32(?string $texte32): CriteresLibresArticles {
        $this->texte32 = $texte32;
        return $this;
    }

    /**
     * Set the texte33.
     *
     * @param string|null $texte33 The texte33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte33(?string $texte33): CriteresLibresArticles {
        $this->texte33 = $texte33;
        return $this;
    }

    /**
     * Set the texte34.
     *
     * @param string|null $texte34 The texte34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte34(?string $texte34): CriteresLibresArticles {
        $this->texte34 = $texte34;
        return $this;
    }

    /**
     * Set the texte35.
     *
     * @param string|null $texte35 The texte35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte35(?string $texte35): CriteresLibresArticles {
        $this->texte35 = $texte35;
        return $this;
    }

    /**
     * Set the texte36.
     *
     * @param string|null $texte36 The texte36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte36(?string $texte36): CriteresLibresArticles {
        $this->texte36 = $texte36;
        return $this;
    }

    /**
     * Set the texte37.
     *
     * @param string|null $texte37 The texte37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte37(?string $texte37): CriteresLibresArticles {
        $this->texte37 = $texte37;
        return $this;
    }

    /**
     * Set the texte38.
     *
     * @param string|null $texte38 The texte38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte38(?string $texte38): CriteresLibresArticles {
        $this->texte38 = $texte38;
        return $this;
    }

    /**
     * Set the texte39.
     *
     * @param string|null $texte39 The texte39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte39(?string $texte39): CriteresLibresArticles {
        $this->texte39 = $texte39;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string|null $texte4 The texte4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte4(?string $texte4): CriteresLibresArticles {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte40.
     *
     * @param string|null $texte40 The texte40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte40(?string $texte40): CriteresLibresArticles {
        $this->texte40 = $texte40;
        return $this;
    }

    /**
     * Set the texte41.
     *
     * @param string|null $texte41 The texte41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte41(?string $texte41): CriteresLibresArticles {
        $this->texte41 = $texte41;
        return $this;
    }

    /**
     * Set the texte42.
     *
     * @param string|null $texte42 The texte42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte42(?string $texte42): CriteresLibresArticles {
        $this->texte42 = $texte42;
        return $this;
    }

    /**
     * Set the texte43.
     *
     * @param string|null $texte43 The texte43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte43(?string $texte43): CriteresLibresArticles {
        $this->texte43 = $texte43;
        return $this;
    }

    /**
     * Set the texte44.
     *
     * @param string|null $texte44 The texte44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte44(?string $texte44): CriteresLibresArticles {
        $this->texte44 = $texte44;
        return $this;
    }

    /**
     * Set the texte45.
     *
     * @param string|null $texte45 The texte45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte45(?string $texte45): CriteresLibresArticles {
        $this->texte45 = $texte45;
        return $this;
    }

    /**
     * Set the texte46.
     *
     * @param string|null $texte46 The texte46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte46(?string $texte46): CriteresLibresArticles {
        $this->texte46 = $texte46;
        return $this;
    }

    /**
     * Set the texte47.
     *
     * @param string|null $texte47 The texte47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte47(?string $texte47): CriteresLibresArticles {
        $this->texte47 = $texte47;
        return $this;
    }

    /**
     * Set the texte48.
     *
     * @param string|null $texte48 The texte48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte48(?string $texte48): CriteresLibresArticles {
        $this->texte48 = $texte48;
        return $this;
    }

    /**
     * Set the texte49.
     *
     * @param string|null $texte49 The texte49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte49(?string $texte49): CriteresLibresArticles {
        $this->texte49 = $texte49;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string|null $texte5 The texte5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte5(?string $texte5): CriteresLibresArticles {
        $this->texte5 = $texte5;
        return $this;
    }

    /**
     * Set the texte50.
     *
     * @param string|null $texte50 The texte50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte50(?string $texte50): CriteresLibresArticles {
        $this->texte50 = $texte50;
        return $this;
    }

    /**
     * Set the texte6.
     *
     * @param string|null $texte6 The texte6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte6(?string $texte6): CriteresLibresArticles {
        $this->texte6 = $texte6;
        return $this;
    }

    /**
     * Set the texte7.
     *
     * @param string|null $texte7 The texte7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte7(?string $texte7): CriteresLibresArticles {
        $this->texte7 = $texte7;
        return $this;
    }

    /**
     * Set the texte8.
     *
     * @param string|null $texte8 The texte8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte8(?string $texte8): CriteresLibresArticles {
        $this->texte8 = $texte8;
        return $this;
    }

    /**
     * Set the texte9.
     *
     * @param string|null $texte9 The texte9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setTexte9(?string $texte9): CriteresLibresArticles {
        $this->texte9 = $texte9;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float|null $valeur1 The valeur1.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur1(?float $valeur1): CriteresLibresArticles {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur10.
     *
     * @param float|null $valeur10 The valeur10.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur10(?float $valeur10): CriteresLibresArticles {
        $this->valeur10 = $valeur10;
        return $this;
    }

    /**
     * Set the valeur11.
     *
     * @param float|null $valeur11 The valeur11.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur11(?float $valeur11): CriteresLibresArticles {
        $this->valeur11 = $valeur11;
        return $this;
    }

    /**
     * Set the valeur12.
     *
     * @param float|null $valeur12 The valeur12.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur12(?float $valeur12): CriteresLibresArticles {
        $this->valeur12 = $valeur12;
        return $this;
    }

    /**
     * Set the valeur13.
     *
     * @param float|null $valeur13 The valeur13.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur13(?float $valeur13): CriteresLibresArticles {
        $this->valeur13 = $valeur13;
        return $this;
    }

    /**
     * Set the valeur14.
     *
     * @param float|null $valeur14 The valeur14.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur14(?float $valeur14): CriteresLibresArticles {
        $this->valeur14 = $valeur14;
        return $this;
    }

    /**
     * Set the valeur15.
     *
     * @param float|null $valeur15 The valeur15.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur15(?float $valeur15): CriteresLibresArticles {
        $this->valeur15 = $valeur15;
        return $this;
    }

    /**
     * Set the valeur16.
     *
     * @param float|null $valeur16 The valeur16.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur16(?float $valeur16): CriteresLibresArticles {
        $this->valeur16 = $valeur16;
        return $this;
    }

    /**
     * Set the valeur17.
     *
     * @param float|null $valeur17 The valeur17.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur17(?float $valeur17): CriteresLibresArticles {
        $this->valeur17 = $valeur17;
        return $this;
    }

    /**
     * Set the valeur18.
     *
     * @param float|null $valeur18 The valeur18.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur18(?float $valeur18): CriteresLibresArticles {
        $this->valeur18 = $valeur18;
        return $this;
    }

    /**
     * Set the valeur19.
     *
     * @param float|null $valeur19 The valeur19.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur19(?float $valeur19): CriteresLibresArticles {
        $this->valeur19 = $valeur19;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float|null $valeur2 The valeur2.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur2(?float $valeur2): CriteresLibresArticles {
        $this->valeur2 = $valeur2;
        return $this;
    }

    /**
     * Set the valeur20.
     *
     * @param float|null $valeur20 The valeur20.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur20(?float $valeur20): CriteresLibresArticles {
        $this->valeur20 = $valeur20;
        return $this;
    }

    /**
     * Set the valeur21.
     *
     * @param float|null $valeur21 The valeur21.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur21(?float $valeur21): CriteresLibresArticles {
        $this->valeur21 = $valeur21;
        return $this;
    }

    /**
     * Set the valeur22.
     *
     * @param float|null $valeur22 The valeur22.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur22(?float $valeur22): CriteresLibresArticles {
        $this->valeur22 = $valeur22;
        return $this;
    }

    /**
     * Set the valeur23.
     *
     * @param float|null $valeur23 The valeur23.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur23(?float $valeur23): CriteresLibresArticles {
        $this->valeur23 = $valeur23;
        return $this;
    }

    /**
     * Set the valeur24.
     *
     * @param float|null $valeur24 The valeur24.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur24(?float $valeur24): CriteresLibresArticles {
        $this->valeur24 = $valeur24;
        return $this;
    }

    /**
     * Set the valeur25.
     *
     * @param float|null $valeur25 The valeur25.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur25(?float $valeur25): CriteresLibresArticles {
        $this->valeur25 = $valeur25;
        return $this;
    }

    /**
     * Set the valeur26.
     *
     * @param float|null $valeur26 The valeur26.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur26(?float $valeur26): CriteresLibresArticles {
        $this->valeur26 = $valeur26;
        return $this;
    }

    /**
     * Set the valeur27.
     *
     * @param float|null $valeur27 The valeur27.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur27(?float $valeur27): CriteresLibresArticles {
        $this->valeur27 = $valeur27;
        return $this;
    }

    /**
     * Set the valeur28.
     *
     * @param float|null $valeur28 The valeur28.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur28(?float $valeur28): CriteresLibresArticles {
        $this->valeur28 = $valeur28;
        return $this;
    }

    /**
     * Set the valeur29.
     *
     * @param float|null $valeur29 The valeur29.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur29(?float $valeur29): CriteresLibresArticles {
        $this->valeur29 = $valeur29;
        return $this;
    }

    /**
     * Set the valeur3.
     *
     * @param float|null $valeur3 The valeur3.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur3(?float $valeur3): CriteresLibresArticles {
        $this->valeur3 = $valeur3;
        return $this;
    }

    /**
     * Set the valeur30.
     *
     * @param float|null $valeur30 The valeur30.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur30(?float $valeur30): CriteresLibresArticles {
        $this->valeur30 = $valeur30;
        return $this;
    }

    /**
     * Set the valeur31.
     *
     * @param float|null $valeur31 The valeur31.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur31(?float $valeur31): CriteresLibresArticles {
        $this->valeur31 = $valeur31;
        return $this;
    }

    /**
     * Set the valeur32.
     *
     * @param float|null $valeur32 The valeur32.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur32(?float $valeur32): CriteresLibresArticles {
        $this->valeur32 = $valeur32;
        return $this;
    }

    /**
     * Set the valeur33.
     *
     * @param float|null $valeur33 The valeur33.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur33(?float $valeur33): CriteresLibresArticles {
        $this->valeur33 = $valeur33;
        return $this;
    }

    /**
     * Set the valeur34.
     *
     * @param float|null $valeur34 The valeur34.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur34(?float $valeur34): CriteresLibresArticles {
        $this->valeur34 = $valeur34;
        return $this;
    }

    /**
     * Set the valeur35.
     *
     * @param float|null $valeur35 The valeur35.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur35(?float $valeur35): CriteresLibresArticles {
        $this->valeur35 = $valeur35;
        return $this;
    }

    /**
     * Set the valeur36.
     *
     * @param float|null $valeur36 The valeur36.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur36(?float $valeur36): CriteresLibresArticles {
        $this->valeur36 = $valeur36;
        return $this;
    }

    /**
     * Set the valeur37.
     *
     * @param float|null $valeur37 The valeur37.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur37(?float $valeur37): CriteresLibresArticles {
        $this->valeur37 = $valeur37;
        return $this;
    }

    /**
     * Set the valeur38.
     *
     * @param float|null $valeur38 The valeur38.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur38(?float $valeur38): CriteresLibresArticles {
        $this->valeur38 = $valeur38;
        return $this;
    }

    /**
     * Set the valeur39.
     *
     * @param float|null $valeur39 The valeur39.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur39(?float $valeur39): CriteresLibresArticles {
        $this->valeur39 = $valeur39;
        return $this;
    }

    /**
     * Set the valeur4.
     *
     * @param float|null $valeur4 The valeur4.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur4(?float $valeur4): CriteresLibresArticles {
        $this->valeur4 = $valeur4;
        return $this;
    }

    /**
     * Set the valeur40.
     *
     * @param float|null $valeur40 The valeur40.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur40(?float $valeur40): CriteresLibresArticles {
        $this->valeur40 = $valeur40;
        return $this;
    }

    /**
     * Set the valeur41.
     *
     * @param float|null $valeur41 The valeur41.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur41(?float $valeur41): CriteresLibresArticles {
        $this->valeur41 = $valeur41;
        return $this;
    }

    /**
     * Set the valeur42.
     *
     * @param float|null $valeur42 The valeur42.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur42(?float $valeur42): CriteresLibresArticles {
        $this->valeur42 = $valeur42;
        return $this;
    }

    /**
     * Set the valeur43.
     *
     * @param float|null $valeur43 The valeur43.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur43(?float $valeur43): CriteresLibresArticles {
        $this->valeur43 = $valeur43;
        return $this;
    }

    /**
     * Set the valeur44.
     *
     * @param float|null $valeur44 The valeur44.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur44(?float $valeur44): CriteresLibresArticles {
        $this->valeur44 = $valeur44;
        return $this;
    }

    /**
     * Set the valeur45.
     *
     * @param float|null $valeur45 The valeur45.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur45(?float $valeur45): CriteresLibresArticles {
        $this->valeur45 = $valeur45;
        return $this;
    }

    /**
     * Set the valeur46.
     *
     * @param float|null $valeur46 The valeur46.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur46(?float $valeur46): CriteresLibresArticles {
        $this->valeur46 = $valeur46;
        return $this;
    }

    /**
     * Set the valeur47.
     *
     * @param float|null $valeur47 The valeur47.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur47(?float $valeur47): CriteresLibresArticles {
        $this->valeur47 = $valeur47;
        return $this;
    }

    /**
     * Set the valeur48.
     *
     * @param float|null $valeur48 The valeur48.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur48(?float $valeur48): CriteresLibresArticles {
        $this->valeur48 = $valeur48;
        return $this;
    }

    /**
     * Set the valeur49.
     *
     * @param float|null $valeur49 The valeur49.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur49(?float $valeur49): CriteresLibresArticles {
        $this->valeur49 = $valeur49;
        return $this;
    }

    /**
     * Set the valeur5.
     *
     * @param float|null $valeur5 The valeur5.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur5(?float $valeur5): CriteresLibresArticles {
        $this->valeur5 = $valeur5;
        return $this;
    }

    /**
     * Set the valeur50.
     *
     * @param float|null $valeur50 The valeur50.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur50(?float $valeur50): CriteresLibresArticles {
        $this->valeur50 = $valeur50;
        return $this;
    }

    /**
     * Set the valeur6.
     *
     * @param float|null $valeur6 The valeur6.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur6(?float $valeur6): CriteresLibresArticles {
        $this->valeur6 = $valeur6;
        return $this;
    }

    /**
     * Set the valeur7.
     *
     * @param float|null $valeur7 The valeur7.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur7(?float $valeur7): CriteresLibresArticles {
        $this->valeur7 = $valeur7;
        return $this;
    }

    /**
     * Set the valeur8.
     *
     * @param float|null $valeur8 The valeur8.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur8(?float $valeur8): CriteresLibresArticles {
        $this->valeur8 = $valeur8;
        return $this;
    }

    /**
     * Set the valeur9.
     *
     * @param float|null $valeur9 The valeur9.
     * @return CriteresLibresArticles Returns this Criteres libres articles.
     */
    public function setValeur9(?float $valeur9): CriteresLibresArticles {
        $this->valeur9 = $valeur9;
        return $this;
    }
}

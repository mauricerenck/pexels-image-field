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
 * Criteres libres.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CriteresLibres {

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
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

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
     * Date3.
     *
     * @var DateTime|null
     */
    private $date3;

    /**
     * Date4.
     *
     * @var DateTime|null
     */
    private $date4;

    /**
     * Date5.
     *
     * @var DateTime|null
     */
    private $date5;

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
     * Texte a.
     *
     * @var string|null
     */
    private $texteA;

    /**
     * Texte b.
     *
     * @var string|null
     */
    private $texteB;

    /**
     * Texte c.
     *
     * @var string|null
     */
    private $texteC;

    /**
     * Texte d.
     *
     * @var string|null
     */
    private $texteD;

    /**
     * Texte e.
     *
     * @var string|null
     */
    private $texteE;

    /**
     * Texte f.
     *
     * @var string|null
     */
    private $texteF;

    /**
     * Texte g.
     *
     * @var string|null
     */
    private $texteG;

    /**
     * Texte h.
     *
     * @var string|null
     */
    private $texteH;

    /**
     * Texte i.
     *
     * @var string|null
     */
    private $texteI;

    /**
     * Texte j.
     *
     * @var string|null
     */
    private $texteJ;

    /**
     * Texte k.
     *
     * @var string|null
     */
    private $texteK;

    /**
     * Texte l.
     *
     * @var string|null
     */
    private $texteL;

    /**
     * Texte m.
     *
     * @var string|null
     */
    private $texteM;

    /**
     * Texte n.
     *
     * @var string|null
     */
    private $texteN;

    /**
     * Texte o.
     *
     * @var string|null
     */
    private $texteO;

    /**
     * Texte p.
     *
     * @var string|null
     */
    private $texteP;

    /**
     * Texte q.
     *
     * @var string|null
     */
    private $texteQ;

    /**
     * Texte r.
     *
     * @var string|null
     */
    private $texteR;

    /**
     * Texte s.
     *
     * @var string|null
     */
    private $texteS;

    /**
     * Texte t.
     *
     * @var string|null
     */
    private $texteT;

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
     * Valeur3.
     *
     * @var float|null
     */
    private $valeur3;

    /**
     * Valeur4.
     *
     * @var float|null
     */
    private $valeur4;

    /**
     * Valeur5.
     *
     * @var float|null
     */
    private $valeur5;

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
     * Get the code client.
     *
     * @return string|null Returns the code client.
     */
    public function getCodeClient(): ?string {
        return $this->codeClient;
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
     * Get the date3.
     *
     * @return DateTime|null Returns the date3.
     */
    public function getDate3(): ?DateTime {
        return $this->date3;
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
     * Get the date5.
     *
     * @return DateTime|null Returns the date5.
     */
    public function getDate5(): ?DateTime {
        return $this->date5;
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
     * Get the texte a.
     *
     * @return string|null Returns the texte a.
     */
    public function getTexteA(): ?string {
        return $this->texteA;
    }

    /**
     * Get the texte b.
     *
     * @return string|null Returns the texte b.
     */
    public function getTexteB(): ?string {
        return $this->texteB;
    }

    /**
     * Get the texte c.
     *
     * @return string|null Returns the texte c.
     */
    public function getTexteC(): ?string {
        return $this->texteC;
    }

    /**
     * Get the texte d.
     *
     * @return string|null Returns the texte d.
     */
    public function getTexteD(): ?string {
        return $this->texteD;
    }

    /**
     * Get the texte e.
     *
     * @return string|null Returns the texte e.
     */
    public function getTexteE(): ?string {
        return $this->texteE;
    }

    /**
     * Get the texte f.
     *
     * @return string|null Returns the texte f.
     */
    public function getTexteF(): ?string {
        return $this->texteF;
    }

    /**
     * Get the texte g.
     *
     * @return string|null Returns the texte g.
     */
    public function getTexteG(): ?string {
        return $this->texteG;
    }

    /**
     * Get the texte h.
     *
     * @return string|null Returns the texte h.
     */
    public function getTexteH(): ?string {
        return $this->texteH;
    }

    /**
     * Get the texte i.
     *
     * @return string|null Returns the texte i.
     */
    public function getTexteI(): ?string {
        return $this->texteI;
    }

    /**
     * Get the texte j.
     *
     * @return string|null Returns the texte j.
     */
    public function getTexteJ(): ?string {
        return $this->texteJ;
    }

    /**
     * Get the texte k.
     *
     * @return string|null Returns the texte k.
     */
    public function getTexteK(): ?string {
        return $this->texteK;
    }

    /**
     * Get the texte l.
     *
     * @return string|null Returns the texte l.
     */
    public function getTexteL(): ?string {
        return $this->texteL;
    }

    /**
     * Get the texte m.
     *
     * @return string|null Returns the texte m.
     */
    public function getTexteM(): ?string {
        return $this->texteM;
    }

    /**
     * Get the texte n.
     *
     * @return string|null Returns the texte n.
     */
    public function getTexteN(): ?string {
        return $this->texteN;
    }

    /**
     * Get the texte o.
     *
     * @return string|null Returns the texte o.
     */
    public function getTexteO(): ?string {
        return $this->texteO;
    }

    /**
     * Get the texte p.
     *
     * @return string|null Returns the texte p.
     */
    public function getTexteP(): ?string {
        return $this->texteP;
    }

    /**
     * Get the texte q.
     *
     * @return string|null Returns the texte q.
     */
    public function getTexteQ(): ?string {
        return $this->texteQ;
    }

    /**
     * Get the texte r.
     *
     * @return string|null Returns the texte r.
     */
    public function getTexteR(): ?string {
        return $this->texteR;
    }

    /**
     * Get the texte s.
     *
     * @return string|null Returns the texte s.
     */
    public function getTexteS(): ?string {
        return $this->texteS;
    }

    /**
     * Get the texte t.
     *
     * @return string|null Returns the texte t.
     */
    public function getTexteT(): ?string {
        return $this->texteT;
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
     * Get the valeur3.
     *
     * @return float|null Returns the valeur3.
     */
    public function getValeur3(): ?float {
        return $this->valeur3;
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
     * Get the valeur5.
     *
     * @return float|null Returns the valeur5.
     */
    public function getValeur5(): ?float {
        return $this->valeur5;
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
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase1(?bool $case1): CriteresLibres {
        $this->case1 = $case1;
        return $this;
    }

    /**
     * Set the case10.
     *
     * @param bool|null $case10 The case10.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase10(?bool $case10): CriteresLibres {
        $this->case10 = $case10;
        return $this;
    }

    /**
     * Set the case11.
     *
     * @param bool|null $case11 The case11.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase11(?bool $case11): CriteresLibres {
        $this->case11 = $case11;
        return $this;
    }

    /**
     * Set the case12.
     *
     * @param bool|null $case12 The case12.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase12(?bool $case12): CriteresLibres {
        $this->case12 = $case12;
        return $this;
    }

    /**
     * Set the case13.
     *
     * @param bool|null $case13 The case13.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase13(?bool $case13): CriteresLibres {
        $this->case13 = $case13;
        return $this;
    }

    /**
     * Set the case14.
     *
     * @param bool|null $case14 The case14.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase14(?bool $case14): CriteresLibres {
        $this->case14 = $case14;
        return $this;
    }

    /**
     * Set the case15.
     *
     * @param bool|null $case15 The case15.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase15(?bool $case15): CriteresLibres {
        $this->case15 = $case15;
        return $this;
    }

    /**
     * Set the case16.
     *
     * @param bool|null $case16 The case16.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase16(?bool $case16): CriteresLibres {
        $this->case16 = $case16;
        return $this;
    }

    /**
     * Set the case17.
     *
     * @param bool|null $case17 The case17.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase17(?bool $case17): CriteresLibres {
        $this->case17 = $case17;
        return $this;
    }

    /**
     * Set the case18.
     *
     * @param bool|null $case18 The case18.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase18(?bool $case18): CriteresLibres {
        $this->case18 = $case18;
        return $this;
    }

    /**
     * Set the case19.
     *
     * @param bool|null $case19 The case19.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase19(?bool $case19): CriteresLibres {
        $this->case19 = $case19;
        return $this;
    }

    /**
     * Set the case2.
     *
     * @param bool|null $case2 The case2.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase2(?bool $case2): CriteresLibres {
        $this->case2 = $case2;
        return $this;
    }

    /**
     * Set the case20.
     *
     * @param bool|null $case20 The case20.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase20(?bool $case20): CriteresLibres {
        $this->case20 = $case20;
        return $this;
    }

    /**
     * Set the case21.
     *
     * @param bool|null $case21 The case21.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase21(?bool $case21): CriteresLibres {
        $this->case21 = $case21;
        return $this;
    }

    /**
     * Set the case22.
     *
     * @param bool|null $case22 The case22.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase22(?bool $case22): CriteresLibres {
        $this->case22 = $case22;
        return $this;
    }

    /**
     * Set the case23.
     *
     * @param bool|null $case23 The case23.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase23(?bool $case23): CriteresLibres {
        $this->case23 = $case23;
        return $this;
    }

    /**
     * Set the case24.
     *
     * @param bool|null $case24 The case24.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase24(?bool $case24): CriteresLibres {
        $this->case24 = $case24;
        return $this;
    }

    /**
     * Set the case25.
     *
     * @param bool|null $case25 The case25.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase25(?bool $case25): CriteresLibres {
        $this->case25 = $case25;
        return $this;
    }

    /**
     * Set the case26.
     *
     * @param bool|null $case26 The case26.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase26(?bool $case26): CriteresLibres {
        $this->case26 = $case26;
        return $this;
    }

    /**
     * Set the case27.
     *
     * @param bool|null $case27 The case27.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase27(?bool $case27): CriteresLibres {
        $this->case27 = $case27;
        return $this;
    }

    /**
     * Set the case28.
     *
     * @param bool|null $case28 The case28.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase28(?bool $case28): CriteresLibres {
        $this->case28 = $case28;
        return $this;
    }

    /**
     * Set the case29.
     *
     * @param bool|null $case29 The case29.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase29(?bool $case29): CriteresLibres {
        $this->case29 = $case29;
        return $this;
    }

    /**
     * Set the case3.
     *
     * @param bool|null $case3 The case3.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase3(?bool $case3): CriteresLibres {
        $this->case3 = $case3;
        return $this;
    }

    /**
     * Set the case30.
     *
     * @param bool|null $case30 The case30.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase30(?bool $case30): CriteresLibres {
        $this->case30 = $case30;
        return $this;
    }

    /**
     * Set the case31.
     *
     * @param bool|null $case31 The case31.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase31(?bool $case31): CriteresLibres {
        $this->case31 = $case31;
        return $this;
    }

    /**
     * Set the case32.
     *
     * @param bool|null $case32 The case32.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase32(?bool $case32): CriteresLibres {
        $this->case32 = $case32;
        return $this;
    }

    /**
     * Set the case33.
     *
     * @param bool|null $case33 The case33.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase33(?bool $case33): CriteresLibres {
        $this->case33 = $case33;
        return $this;
    }

    /**
     * Set the case34.
     *
     * @param bool|null $case34 The case34.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase34(?bool $case34): CriteresLibres {
        $this->case34 = $case34;
        return $this;
    }

    /**
     * Set the case35.
     *
     * @param bool|null $case35 The case35.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase35(?bool $case35): CriteresLibres {
        $this->case35 = $case35;
        return $this;
    }

    /**
     * Set the case36.
     *
     * @param bool|null $case36 The case36.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase36(?bool $case36): CriteresLibres {
        $this->case36 = $case36;
        return $this;
    }

    /**
     * Set the case37.
     *
     * @param bool|null $case37 The case37.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase37(?bool $case37): CriteresLibres {
        $this->case37 = $case37;
        return $this;
    }

    /**
     * Set the case38.
     *
     * @param bool|null $case38 The case38.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase38(?bool $case38): CriteresLibres {
        $this->case38 = $case38;
        return $this;
    }

    /**
     * Set the case39.
     *
     * @param bool|null $case39 The case39.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase39(?bool $case39): CriteresLibres {
        $this->case39 = $case39;
        return $this;
    }

    /**
     * Set the case4.
     *
     * @param bool|null $case4 The case4.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase4(?bool $case4): CriteresLibres {
        $this->case4 = $case4;
        return $this;
    }

    /**
     * Set the case40.
     *
     * @param bool|null $case40 The case40.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase40(?bool $case40): CriteresLibres {
        $this->case40 = $case40;
        return $this;
    }

    /**
     * Set the case41.
     *
     * @param bool|null $case41 The case41.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase41(?bool $case41): CriteresLibres {
        $this->case41 = $case41;
        return $this;
    }

    /**
     * Set the case42.
     *
     * @param bool|null $case42 The case42.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase42(?bool $case42): CriteresLibres {
        $this->case42 = $case42;
        return $this;
    }

    /**
     * Set the case43.
     *
     * @param bool|null $case43 The case43.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase43(?bool $case43): CriteresLibres {
        $this->case43 = $case43;
        return $this;
    }

    /**
     * Set the case44.
     *
     * @param bool|null $case44 The case44.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase44(?bool $case44): CriteresLibres {
        $this->case44 = $case44;
        return $this;
    }

    /**
     * Set the case45.
     *
     * @param bool|null $case45 The case45.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase45(?bool $case45): CriteresLibres {
        $this->case45 = $case45;
        return $this;
    }

    /**
     * Set the case46.
     *
     * @param bool|null $case46 The case46.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase46(?bool $case46): CriteresLibres {
        $this->case46 = $case46;
        return $this;
    }

    /**
     * Set the case47.
     *
     * @param bool|null $case47 The case47.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase47(?bool $case47): CriteresLibres {
        $this->case47 = $case47;
        return $this;
    }

    /**
     * Set the case48.
     *
     * @param bool|null $case48 The case48.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase48(?bool $case48): CriteresLibres {
        $this->case48 = $case48;
        return $this;
    }

    /**
     * Set the case49.
     *
     * @param bool|null $case49 The case49.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase49(?bool $case49): CriteresLibres {
        $this->case49 = $case49;
        return $this;
    }

    /**
     * Set the case5.
     *
     * @param bool|null $case5 The case5.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase5(?bool $case5): CriteresLibres {
        $this->case5 = $case5;
        return $this;
    }

    /**
     * Set the case50.
     *
     * @param bool|null $case50 The case50.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase50(?bool $case50): CriteresLibres {
        $this->case50 = $case50;
        return $this;
    }

    /**
     * Set the case6.
     *
     * @param bool|null $case6 The case6.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase6(?bool $case6): CriteresLibres {
        $this->case6 = $case6;
        return $this;
    }

    /**
     * Set the case7.
     *
     * @param bool|null $case7 The case7.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase7(?bool $case7): CriteresLibres {
        $this->case7 = $case7;
        return $this;
    }

    /**
     * Set the case8.
     *
     * @param bool|null $case8 The case8.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase8(?bool $case8): CriteresLibres {
        $this->case8 = $case8;
        return $this;
    }

    /**
     * Set the case9.
     *
     * @param bool|null $case9 The case9.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCase9(?bool $case9): CriteresLibres {
        $this->case9 = $case9;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setCodeClient(?string $codeClient): CriteresLibres {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate1(?DateTime $date1): CriteresLibres {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate10(?DateTime $date10): CriteresLibres {
        $this->date10 = $date10;
        return $this;
    }

    /**
     * Set the date11.
     *
     * @param DateTime|null $date11 The date11.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate11(?DateTime $date11): CriteresLibres {
        $this->date11 = $date11;
        return $this;
    }

    /**
     * Set the date12.
     *
     * @param DateTime|null $date12 The date12.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate12(?DateTime $date12): CriteresLibres {
        $this->date12 = $date12;
        return $this;
    }

    /**
     * Set the date13.
     *
     * @param DateTime|null $date13 The date13.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate13(?DateTime $date13): CriteresLibres {
        $this->date13 = $date13;
        return $this;
    }

    /**
     * Set the date14.
     *
     * @param DateTime|null $date14 The date14.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate14(?DateTime $date14): CriteresLibres {
        $this->date14 = $date14;
        return $this;
    }

    /**
     * Set the date15.
     *
     * @param DateTime|null $date15 The date15.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate15(?DateTime $date15): CriteresLibres {
        $this->date15 = $date15;
        return $this;
    }

    /**
     * Set the date16.
     *
     * @param DateTime|null $date16 The date16.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate16(?DateTime $date16): CriteresLibres {
        $this->date16 = $date16;
        return $this;
    }

    /**
     * Set the date17.
     *
     * @param DateTime|null $date17 The date17.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate17(?DateTime $date17): CriteresLibres {
        $this->date17 = $date17;
        return $this;
    }

    /**
     * Set the date18.
     *
     * @param DateTime|null $date18 The date18.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate18(?DateTime $date18): CriteresLibres {
        $this->date18 = $date18;
        return $this;
    }

    /**
     * Set the date19.
     *
     * @param DateTime|null $date19 The date19.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate19(?DateTime $date19): CriteresLibres {
        $this->date19 = $date19;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate2(?DateTime $date2): CriteresLibres {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the date20.
     *
     * @param DateTime|null $date20 The date20.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate20(?DateTime $date20): CriteresLibres {
        $this->date20 = $date20;
        return $this;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate3(?DateTime $date3): CriteresLibres {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate4(?DateTime $date4): CriteresLibres {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate5(?DateTime $date5): CriteresLibres {
        $this->date5 = $date5;
        return $this;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate6(?DateTime $date6): CriteresLibres {
        $this->date6 = $date6;
        return $this;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate7(?DateTime $date7): CriteresLibres {
        $this->date7 = $date7;
        return $this;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate8(?DateTime $date8): CriteresLibres {
        $this->date8 = $date8;
        return $this;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setDate9(?DateTime $date9): CriteresLibres {
        $this->date9 = $date9;
        return $this;
    }

    /**
     * Set the texte a.
     *
     * @param string|null $texteA The texte a.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteA(?string $texteA): CriteresLibres {
        $this->texteA = $texteA;
        return $this;
    }

    /**
     * Set the texte b.
     *
     * @param string|null $texteB The texte b.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteB(?string $texteB): CriteresLibres {
        $this->texteB = $texteB;
        return $this;
    }

    /**
     * Set the texte c.
     *
     * @param string|null $texteC The texte c.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteC(?string $texteC): CriteresLibres {
        $this->texteC = $texteC;
        return $this;
    }

    /**
     * Set the texte d.
     *
     * @param string|null $texteD The texte d.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteD(?string $texteD): CriteresLibres {
        $this->texteD = $texteD;
        return $this;
    }

    /**
     * Set the texte e.
     *
     * @param string|null $texteE The texte e.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteE(?string $texteE): CriteresLibres {
        $this->texteE = $texteE;
        return $this;
    }

    /**
     * Set the texte f.
     *
     * @param string|null $texteF The texte f.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteF(?string $texteF): CriteresLibres {
        $this->texteF = $texteF;
        return $this;
    }

    /**
     * Set the texte g.
     *
     * @param string|null $texteG The texte g.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteG(?string $texteG): CriteresLibres {
        $this->texteG = $texteG;
        return $this;
    }

    /**
     * Set the texte h.
     *
     * @param string|null $texteH The texte h.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteH(?string $texteH): CriteresLibres {
        $this->texteH = $texteH;
        return $this;
    }

    /**
     * Set the texte i.
     *
     * @param string|null $texteI The texte i.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteI(?string $texteI): CriteresLibres {
        $this->texteI = $texteI;
        return $this;
    }

    /**
     * Set the texte j.
     *
     * @param string|null $texteJ The texte j.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteJ(?string $texteJ): CriteresLibres {
        $this->texteJ = $texteJ;
        return $this;
    }

    /**
     * Set the texte k.
     *
     * @param string|null $texteK The texte k.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteK(?string $texteK): CriteresLibres {
        $this->texteK = $texteK;
        return $this;
    }

    /**
     * Set the texte l.
     *
     * @param string|null $texteL The texte l.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteL(?string $texteL): CriteresLibres {
        $this->texteL = $texteL;
        return $this;
    }

    /**
     * Set the texte m.
     *
     * @param string|null $texteM The texte m.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteM(?string $texteM): CriteresLibres {
        $this->texteM = $texteM;
        return $this;
    }

    /**
     * Set the texte n.
     *
     * @param string|null $texteN The texte n.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteN(?string $texteN): CriteresLibres {
        $this->texteN = $texteN;
        return $this;
    }

    /**
     * Set the texte o.
     *
     * @param string|null $texteO The texte o.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteO(?string $texteO): CriteresLibres {
        $this->texteO = $texteO;
        return $this;
    }

    /**
     * Set the texte p.
     *
     * @param string|null $texteP The texte p.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteP(?string $texteP): CriteresLibres {
        $this->texteP = $texteP;
        return $this;
    }

    /**
     * Set the texte q.
     *
     * @param string|null $texteQ The texte q.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteQ(?string $texteQ): CriteresLibres {
        $this->texteQ = $texteQ;
        return $this;
    }

    /**
     * Set the texte r.
     *
     * @param string|null $texteR The texte r.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteR(?string $texteR): CriteresLibres {
        $this->texteR = $texteR;
        return $this;
    }

    /**
     * Set the texte s.
     *
     * @param string|null $texteS The texte s.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteS(?string $texteS): CriteresLibres {
        $this->texteS = $texteS;
        return $this;
    }

    /**
     * Set the texte t.
     *
     * @param string|null $texteT The texte t.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setTexteT(?string $texteT): CriteresLibres {
        $this->texteT = $texteT;
        return $this;
    }

    /**
     * Set the valeur1.
     *
     * @param float|null $valeur1 The valeur1.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur1(?float $valeur1): CriteresLibres {
        $this->valeur1 = $valeur1;
        return $this;
    }

    /**
     * Set the valeur10.
     *
     * @param float|null $valeur10 The valeur10.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur10(?float $valeur10): CriteresLibres {
        $this->valeur10 = $valeur10;
        return $this;
    }

    /**
     * Set the valeur11.
     *
     * @param float|null $valeur11 The valeur11.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur11(?float $valeur11): CriteresLibres {
        $this->valeur11 = $valeur11;
        return $this;
    }

    /**
     * Set the valeur12.
     *
     * @param float|null $valeur12 The valeur12.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur12(?float $valeur12): CriteresLibres {
        $this->valeur12 = $valeur12;
        return $this;
    }

    /**
     * Set the valeur13.
     *
     * @param float|null $valeur13 The valeur13.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur13(?float $valeur13): CriteresLibres {
        $this->valeur13 = $valeur13;
        return $this;
    }

    /**
     * Set the valeur14.
     *
     * @param float|null $valeur14 The valeur14.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur14(?float $valeur14): CriteresLibres {
        $this->valeur14 = $valeur14;
        return $this;
    }

    /**
     * Set the valeur15.
     *
     * @param float|null $valeur15 The valeur15.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur15(?float $valeur15): CriteresLibres {
        $this->valeur15 = $valeur15;
        return $this;
    }

    /**
     * Set the valeur16.
     *
     * @param float|null $valeur16 The valeur16.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur16(?float $valeur16): CriteresLibres {
        $this->valeur16 = $valeur16;
        return $this;
    }

    /**
     * Set the valeur17.
     *
     * @param float|null $valeur17 The valeur17.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur17(?float $valeur17): CriteresLibres {
        $this->valeur17 = $valeur17;
        return $this;
    }

    /**
     * Set the valeur18.
     *
     * @param float|null $valeur18 The valeur18.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur18(?float $valeur18): CriteresLibres {
        $this->valeur18 = $valeur18;
        return $this;
    }

    /**
     * Set the valeur19.
     *
     * @param float|null $valeur19 The valeur19.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur19(?float $valeur19): CriteresLibres {
        $this->valeur19 = $valeur19;
        return $this;
    }

    /**
     * Set the valeur2.
     *
     * @param float|null $valeur2 The valeur2.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur2(?float $valeur2): CriteresLibres {
        $this->valeur2 = $valeur2;
        return $this;
    }

    /**
     * Set the valeur20.
     *
     * @param float|null $valeur20 The valeur20.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur20(?float $valeur20): CriteresLibres {
        $this->valeur20 = $valeur20;
        return $this;
    }

    /**
     * Set the valeur3.
     *
     * @param float|null $valeur3 The valeur3.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur3(?float $valeur3): CriteresLibres {
        $this->valeur3 = $valeur3;
        return $this;
    }

    /**
     * Set the valeur4.
     *
     * @param float|null $valeur4 The valeur4.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur4(?float $valeur4): CriteresLibres {
        $this->valeur4 = $valeur4;
        return $this;
    }

    /**
     * Set the valeur5.
     *
     * @param float|null $valeur5 The valeur5.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur5(?float $valeur5): CriteresLibres {
        $this->valeur5 = $valeur5;
        return $this;
    }

    /**
     * Set the valeur6.
     *
     * @param float|null $valeur6 The valeur6.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur6(?float $valeur6): CriteresLibres {
        $this->valeur6 = $valeur6;
        return $this;
    }

    /**
     * Set the valeur7.
     *
     * @param float|null $valeur7 The valeur7.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur7(?float $valeur7): CriteresLibres {
        $this->valeur7 = $valeur7;
        return $this;
    }

    /**
     * Set the valeur8.
     *
     * @param float|null $valeur8 The valeur8.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur8(?float $valeur8): CriteresLibres {
        $this->valeur8 = $valeur8;
        return $this;
    }

    /**
     * Set the valeur9.
     *
     * @param float|null $valeur9 The valeur9.
     * @return CriteresLibres Returns this Criteres libres.
     */
    public function setValeur9(?float $valeur9): CriteresLibres {
        $this->valeur9 = $valeur9;
        return $this;
    }
}

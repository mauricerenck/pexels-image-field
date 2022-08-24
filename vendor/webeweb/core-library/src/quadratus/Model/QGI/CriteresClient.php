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
 * Criteres client.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Quadratus\Model\QGI
 */
class CriteresClient {

    /**
     * Booleen1.
     *
     * @var bool|null
     */
    private $booleen1;

    /**
     * Booleen10.
     *
     * @var bool|null
     */
    private $booleen10;

    /**
     * Booleen2.
     *
     * @var bool|null
     */
    private $booleen2;

    /**
     * Booleen3.
     *
     * @var bool|null
     */
    private $booleen3;

    /**
     * Booleen4.
     *
     * @var bool|null
     */
    private $booleen4;

    /**
     * Booleen5.
     *
     * @var bool|null
     */
    private $booleen5;

    /**
     * Booleen6.
     *
     * @var bool|null
     */
    private $booleen6;

    /**
     * Booleen7.
     *
     * @var bool|null
     */
    private $booleen7;

    /**
     * Booleen8.
     *
     * @var bool|null
     */
    private $booleen8;

    /**
     * Booleen9.
     *
     * @var bool|null
     */
    private $booleen9;

    /**
     * Code client.
     *
     * @var string|null
     */
    private $codeClient;

    /**
     * Code ref1.
     *
     * @var string|null
     */
    private $codeRef1;

    /**
     * Code ref10.
     *
     * @var string|null
     */
    private $codeRef10;

    /**
     * Code ref2.
     *
     * @var string|null
     */
    private $codeRef2;

    /**
     * Code ref3.
     *
     * @var string|null
     */
    private $codeRef3;

    /**
     * Code ref4.
     *
     * @var string|null
     */
    private $codeRef4;

    /**
     * Code ref5.
     *
     * @var string|null
     */
    private $codeRef5;

    /**
     * Code ref6.
     *
     * @var string|null
     */
    private $codeRef6;

    /**
     * Code ref7.
     *
     * @var string|null
     */
    private $codeRef7;

    /**
     * Code ref8.
     *
     * @var string|null
     */
    private $codeRef8;

    /**
     * Code ref9.
     *
     * @var string|null
     */
    private $codeRef9;

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
     * Date2.
     *
     * @var DateTime|null
     */
    private $date2;

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
     * Double1.
     *
     * @var float|null
     */
    private $double1;

    /**
     * Double10.
     *
     * @var float|null
     */
    private $double10;

    /**
     * Double2.
     *
     * @var float|null
     */
    private $double2;

    /**
     * Double3.
     *
     * @var float|null
     */
    private $double3;

    /**
     * Double4.
     *
     * @var float|null
     */
    private $double4;

    /**
     * Double5.
     *
     * @var float|null
     */
    private $double5;

    /**
     * Double6.
     *
     * @var float|null
     */
    private $double6;

    /**
     * Double7.
     *
     * @var float|null
     */
    private $double7;

    /**
     * Double8.
     *
     * @var float|null
     */
    private $double8;

    /**
     * Double9.
     *
     * @var float|null
     */
    private $double9;

    /**
     * Long1.
     *
     * @var int|null
     */
    private $long1;

    /**
     * Long10.
     *
     * @var int|null
     */
    private $long10;

    /**
     * Long2.
     *
     * @var int|null
     */
    private $long2;

    /**
     * Long3.
     *
     * @var int|null
     */
    private $long3;

    /**
     * Long4.
     *
     * @var int|null
     */
    private $long4;

    /**
     * Long5.
     *
     * @var int|null
     */
    private $long5;

    /**
     * Long6.
     *
     * @var int|null
     */
    private $long6;

    /**
     * Long7.
     *
     * @var int|null
     */
    private $long7;

    /**
     * Long8.
     *
     * @var int|null
     */
    private $long8;

    /**
     * Long9.
     *
     * @var int|null
     */
    private $long9;

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
     * Texte2.
     *
     * @var string|null
     */
    private $texte2;

    /**
     * Texte3.
     *
     * @var string|null
     */
    private $texte3;

    /**
     * Texte4.
     *
     * @var string|null
     */
    private $texte4;

    /**
     * Texte5.
     *
     * @var string|null
     */
    private $texte5;

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
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the booleen1.
     *
     * @return bool|null Returns the booleen1.
     */
    public function getBooleen1(): ?bool {
        return $this->booleen1;
    }

    /**
     * Get the booleen10.
     *
     * @return bool|null Returns the booleen10.
     */
    public function getBooleen10(): ?bool {
        return $this->booleen10;
    }

    /**
     * Get the booleen2.
     *
     * @return bool|null Returns the booleen2.
     */
    public function getBooleen2(): ?bool {
        return $this->booleen2;
    }

    /**
     * Get the booleen3.
     *
     * @return bool|null Returns the booleen3.
     */
    public function getBooleen3(): ?bool {
        return $this->booleen3;
    }

    /**
     * Get the booleen4.
     *
     * @return bool|null Returns the booleen4.
     */
    public function getBooleen4(): ?bool {
        return $this->booleen4;
    }

    /**
     * Get the booleen5.
     *
     * @return bool|null Returns the booleen5.
     */
    public function getBooleen5(): ?bool {
        return $this->booleen5;
    }

    /**
     * Get the booleen6.
     *
     * @return bool|null Returns the booleen6.
     */
    public function getBooleen6(): ?bool {
        return $this->booleen6;
    }

    /**
     * Get the booleen7.
     *
     * @return bool|null Returns the booleen7.
     */
    public function getBooleen7(): ?bool {
        return $this->booleen7;
    }

    /**
     * Get the booleen8.
     *
     * @return bool|null Returns the booleen8.
     */
    public function getBooleen8(): ?bool {
        return $this->booleen8;
    }

    /**
     * Get the booleen9.
     *
     * @return bool|null Returns the booleen9.
     */
    public function getBooleen9(): ?bool {
        return $this->booleen9;
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
     * Get the code ref1.
     *
     * @return string|null Returns the code ref1.
     */
    public function getCodeRef1(): ?string {
        return $this->codeRef1;
    }

    /**
     * Get the code ref10.
     *
     * @return string|null Returns the code ref10.
     */
    public function getCodeRef10(): ?string {
        return $this->codeRef10;
    }

    /**
     * Get the code ref2.
     *
     * @return string|null Returns the code ref2.
     */
    public function getCodeRef2(): ?string {
        return $this->codeRef2;
    }

    /**
     * Get the code ref3.
     *
     * @return string|null Returns the code ref3.
     */
    public function getCodeRef3(): ?string {
        return $this->codeRef3;
    }

    /**
     * Get the code ref4.
     *
     * @return string|null Returns the code ref4.
     */
    public function getCodeRef4(): ?string {
        return $this->codeRef4;
    }

    /**
     * Get the code ref5.
     *
     * @return string|null Returns the code ref5.
     */
    public function getCodeRef5(): ?string {
        return $this->codeRef5;
    }

    /**
     * Get the code ref6.
     *
     * @return string|null Returns the code ref6.
     */
    public function getCodeRef6(): ?string {
        return $this->codeRef6;
    }

    /**
     * Get the code ref7.
     *
     * @return string|null Returns the code ref7.
     */
    public function getCodeRef7(): ?string {
        return $this->codeRef7;
    }

    /**
     * Get the code ref8.
     *
     * @return string|null Returns the code ref8.
     */
    public function getCodeRef8(): ?string {
        return $this->codeRef8;
    }

    /**
     * Get the code ref9.
     *
     * @return string|null Returns the code ref9.
     */
    public function getCodeRef9(): ?string {
        return $this->codeRef9;
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
     * Get the date2.
     *
     * @return DateTime|null Returns the date2.
     */
    public function getDate2(): ?DateTime {
        return $this->date2;
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
     * Get the double1.
     *
     * @return float|null Returns the double1.
     */
    public function getDouble1(): ?float {
        return $this->double1;
    }

    /**
     * Get the double10.
     *
     * @return float|null Returns the double10.
     */
    public function getDouble10(): ?float {
        return $this->double10;
    }

    /**
     * Get the double2.
     *
     * @return float|null Returns the double2.
     */
    public function getDouble2(): ?float {
        return $this->double2;
    }

    /**
     * Get the double3.
     *
     * @return float|null Returns the double3.
     */
    public function getDouble3(): ?float {
        return $this->double3;
    }

    /**
     * Get the double4.
     *
     * @return float|null Returns the double4.
     */
    public function getDouble4(): ?float {
        return $this->double4;
    }

    /**
     * Get the double5.
     *
     * @return float|null Returns the double5.
     */
    public function getDouble5(): ?float {
        return $this->double5;
    }

    /**
     * Get the double6.
     *
     * @return float|null Returns the double6.
     */
    public function getDouble6(): ?float {
        return $this->double6;
    }

    /**
     * Get the double7.
     *
     * @return float|null Returns the double7.
     */
    public function getDouble7(): ?float {
        return $this->double7;
    }

    /**
     * Get the double8.
     *
     * @return float|null Returns the double8.
     */
    public function getDouble8(): ?float {
        return $this->double8;
    }

    /**
     * Get the double9.
     *
     * @return float|null Returns the double9.
     */
    public function getDouble9(): ?float {
        return $this->double9;
    }

    /**
     * Get the long1.
     *
     * @return int|null Returns the long1.
     */
    public function getLong1(): ?int {
        return $this->long1;
    }

    /**
     * Get the long10.
     *
     * @return int|null Returns the long10.
     */
    public function getLong10(): ?int {
        return $this->long10;
    }

    /**
     * Get the long2.
     *
     * @return int|null Returns the long2.
     */
    public function getLong2(): ?int {
        return $this->long2;
    }

    /**
     * Get the long3.
     *
     * @return int|null Returns the long3.
     */
    public function getLong3(): ?int {
        return $this->long3;
    }

    /**
     * Get the long4.
     *
     * @return int|null Returns the long4.
     */
    public function getLong4(): ?int {
        return $this->long4;
    }

    /**
     * Get the long5.
     *
     * @return int|null Returns the long5.
     */
    public function getLong5(): ?int {
        return $this->long5;
    }

    /**
     * Get the long6.
     *
     * @return int|null Returns the long6.
     */
    public function getLong6(): ?int {
        return $this->long6;
    }

    /**
     * Get the long7.
     *
     * @return int|null Returns the long7.
     */
    public function getLong7(): ?int {
        return $this->long7;
    }

    /**
     * Get the long8.
     *
     * @return int|null Returns the long8.
     */
    public function getLong8(): ?int {
        return $this->long8;
    }

    /**
     * Get the long9.
     *
     * @return int|null Returns the long9.
     */
    public function getLong9(): ?int {
        return $this->long9;
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
     * Get the texte2.
     *
     * @return string|null Returns the texte2.
     */
    public function getTexte2(): ?string {
        return $this->texte2;
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
     * Get the texte4.
     *
     * @return string|null Returns the texte4.
     */
    public function getTexte4(): ?string {
        return $this->texte4;
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
     * Set the booleen1.
     *
     * @param bool|null $booleen1 The booleen1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen1(?bool $booleen1): CriteresClient {
        $this->booleen1 = $booleen1;
        return $this;
    }

    /**
     * Set the booleen10.
     *
     * @param bool|null $booleen10 The booleen10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen10(?bool $booleen10): CriteresClient {
        $this->booleen10 = $booleen10;
        return $this;
    }

    /**
     * Set the booleen2.
     *
     * @param bool|null $booleen2 The booleen2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen2(?bool $booleen2): CriteresClient {
        $this->booleen2 = $booleen2;
        return $this;
    }

    /**
     * Set the booleen3.
     *
     * @param bool|null $booleen3 The booleen3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen3(?bool $booleen3): CriteresClient {
        $this->booleen3 = $booleen3;
        return $this;
    }

    /**
     * Set the booleen4.
     *
     * @param bool|null $booleen4 The booleen4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen4(?bool $booleen4): CriteresClient {
        $this->booleen4 = $booleen4;
        return $this;
    }

    /**
     * Set the booleen5.
     *
     * @param bool|null $booleen5 The booleen5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen5(?bool $booleen5): CriteresClient {
        $this->booleen5 = $booleen5;
        return $this;
    }

    /**
     * Set the booleen6.
     *
     * @param bool|null $booleen6 The booleen6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen6(?bool $booleen6): CriteresClient {
        $this->booleen6 = $booleen6;
        return $this;
    }

    /**
     * Set the booleen7.
     *
     * @param bool|null $booleen7 The booleen7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen7(?bool $booleen7): CriteresClient {
        $this->booleen7 = $booleen7;
        return $this;
    }

    /**
     * Set the booleen8.
     *
     * @param bool|null $booleen8 The booleen8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen8(?bool $booleen8): CriteresClient {
        $this->booleen8 = $booleen8;
        return $this;
    }

    /**
     * Set the booleen9.
     *
     * @param bool|null $booleen9 The booleen9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setBooleen9(?bool $booleen9): CriteresClient {
        $this->booleen9 = $booleen9;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string|null $codeClient The code client.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeClient(?string $codeClient): CriteresClient {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code ref1.
     *
     * @param string|null $codeRef1 The code ref1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef1(?string $codeRef1): CriteresClient {
        $this->codeRef1 = $codeRef1;
        return $this;
    }

    /**
     * Set the code ref10.
     *
     * @param string|null $codeRef10 The code ref10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef10(?string $codeRef10): CriteresClient {
        $this->codeRef10 = $codeRef10;
        return $this;
    }

    /**
     * Set the code ref2.
     *
     * @param string|null $codeRef2 The code ref2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef2(?string $codeRef2): CriteresClient {
        $this->codeRef2 = $codeRef2;
        return $this;
    }

    /**
     * Set the code ref3.
     *
     * @param string|null $codeRef3 The code ref3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef3(?string $codeRef3): CriteresClient {
        $this->codeRef3 = $codeRef3;
        return $this;
    }

    /**
     * Set the code ref4.
     *
     * @param string|null $codeRef4 The code ref4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef4(?string $codeRef4): CriteresClient {
        $this->codeRef4 = $codeRef4;
        return $this;
    }

    /**
     * Set the code ref5.
     *
     * @param string|null $codeRef5 The code ref5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef5(?string $codeRef5): CriteresClient {
        $this->codeRef5 = $codeRef5;
        return $this;
    }

    /**
     * Set the code ref6.
     *
     * @param string|null $codeRef6 The code ref6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef6(?string $codeRef6): CriteresClient {
        $this->codeRef6 = $codeRef6;
        return $this;
    }

    /**
     * Set the code ref7.
     *
     * @param string|null $codeRef7 The code ref7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef7(?string $codeRef7): CriteresClient {
        $this->codeRef7 = $codeRef7;
        return $this;
    }

    /**
     * Set the code ref8.
     *
     * @param string|null $codeRef8 The code ref8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef8(?string $codeRef8): CriteresClient {
        $this->codeRef8 = $codeRef8;
        return $this;
    }

    /**
     * Set the code ref9.
     *
     * @param string|null $codeRef9 The code ref9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setCodeRef9(?string $codeRef9): CriteresClient {
        $this->codeRef9 = $codeRef9;
        return $this;
    }

    /**
     * Set the date1.
     *
     * @param DateTime|null $date1 The date1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate1(?DateTime $date1): CriteresClient {
        $this->date1 = $date1;
        return $this;
    }

    /**
     * Set the date10.
     *
     * @param DateTime|null $date10 The date10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate10(?DateTime $date10): CriteresClient {
        $this->date10 = $date10;
        return $this;
    }

    /**
     * Set the date2.
     *
     * @param DateTime|null $date2 The date2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate2(?DateTime $date2): CriteresClient {
        $this->date2 = $date2;
        return $this;
    }

    /**
     * Set the date3.
     *
     * @param DateTime|null $date3 The date3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate3(?DateTime $date3): CriteresClient {
        $this->date3 = $date3;
        return $this;
    }

    /**
     * Set the date4.
     *
     * @param DateTime|null $date4 The date4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate4(?DateTime $date4): CriteresClient {
        $this->date4 = $date4;
        return $this;
    }

    /**
     * Set the date5.
     *
     * @param DateTime|null $date5 The date5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate5(?DateTime $date5): CriteresClient {
        $this->date5 = $date5;
        return $this;
    }

    /**
     * Set the date6.
     *
     * @param DateTime|null $date6 The date6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate6(?DateTime $date6): CriteresClient {
        $this->date6 = $date6;
        return $this;
    }

    /**
     * Set the date7.
     *
     * @param DateTime|null $date7 The date7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate7(?DateTime $date7): CriteresClient {
        $this->date7 = $date7;
        return $this;
    }

    /**
     * Set the date8.
     *
     * @param DateTime|null $date8 The date8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate8(?DateTime $date8): CriteresClient {
        $this->date8 = $date8;
        return $this;
    }

    /**
     * Set the date9.
     *
     * @param DateTime|null $date9 The date9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDate9(?DateTime $date9): CriteresClient {
        $this->date9 = $date9;
        return $this;
    }

    /**
     * Set the double1.
     *
     * @param float|null $double1 The double1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble1(?float $double1): CriteresClient {
        $this->double1 = $double1;
        return $this;
    }

    /**
     * Set the double10.
     *
     * @param float|null $double10 The double10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble10(?float $double10): CriteresClient {
        $this->double10 = $double10;
        return $this;
    }

    /**
     * Set the double2.
     *
     * @param float|null $double2 The double2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble2(?float $double2): CriteresClient {
        $this->double2 = $double2;
        return $this;
    }

    /**
     * Set the double3.
     *
     * @param float|null $double3 The double3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble3(?float $double3): CriteresClient {
        $this->double3 = $double3;
        return $this;
    }

    /**
     * Set the double4.
     *
     * @param float|null $double4 The double4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble4(?float $double4): CriteresClient {
        $this->double4 = $double4;
        return $this;
    }

    /**
     * Set the double5.
     *
     * @param float|null $double5 The double5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble5(?float $double5): CriteresClient {
        $this->double5 = $double5;
        return $this;
    }

    /**
     * Set the double6.
     *
     * @param float|null $double6 The double6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble6(?float $double6): CriteresClient {
        $this->double6 = $double6;
        return $this;
    }

    /**
     * Set the double7.
     *
     * @param float|null $double7 The double7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble7(?float $double7): CriteresClient {
        $this->double7 = $double7;
        return $this;
    }

    /**
     * Set the double8.
     *
     * @param float|null $double8 The double8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble8(?float $double8): CriteresClient {
        $this->double8 = $double8;
        return $this;
    }

    /**
     * Set the double9.
     *
     * @param float|null $double9 The double9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setDouble9(?float $double9): CriteresClient {
        $this->double9 = $double9;
        return $this;
    }

    /**
     * Set the long1.
     *
     * @param int|null $long1 The long1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong1(?int $long1): CriteresClient {
        $this->long1 = $long1;
        return $this;
    }

    /**
     * Set the long10.
     *
     * @param int|null $long10 The long10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong10(?int $long10): CriteresClient {
        $this->long10 = $long10;
        return $this;
    }

    /**
     * Set the long2.
     *
     * @param int|null $long2 The long2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong2(?int $long2): CriteresClient {
        $this->long2 = $long2;
        return $this;
    }

    /**
     * Set the long3.
     *
     * @param int|null $long3 The long3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong3(?int $long3): CriteresClient {
        $this->long3 = $long3;
        return $this;
    }

    /**
     * Set the long4.
     *
     * @param int|null $long4 The long4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong4(?int $long4): CriteresClient {
        $this->long4 = $long4;
        return $this;
    }

    /**
     * Set the long5.
     *
     * @param int|null $long5 The long5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong5(?int $long5): CriteresClient {
        $this->long5 = $long5;
        return $this;
    }

    /**
     * Set the long6.
     *
     * @param int|null $long6 The long6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong6(?int $long6): CriteresClient {
        $this->long6 = $long6;
        return $this;
    }

    /**
     * Set the long7.
     *
     * @param int|null $long7 The long7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong7(?int $long7): CriteresClient {
        $this->long7 = $long7;
        return $this;
    }

    /**
     * Set the long8.
     *
     * @param int|null $long8 The long8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong8(?int $long8): CriteresClient {
        $this->long8 = $long8;
        return $this;
    }

    /**
     * Set the long9.
     *
     * @param int|null $long9 The long9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setLong9(?int $long9): CriteresClient {
        $this->long9 = $long9;
        return $this;
    }

    /**
     * Set the texte1.
     *
     * @param string|null $texte1 The texte1.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte1(?string $texte1): CriteresClient {
        $this->texte1 = $texte1;
        return $this;
    }

    /**
     * Set the texte10.
     *
     * @param string|null $texte10 The texte10.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte10(?string $texte10): CriteresClient {
        $this->texte10 = $texte10;
        return $this;
    }

    /**
     * Set the texte2.
     *
     * @param string|null $texte2 The texte2.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte2(?string $texte2): CriteresClient {
        $this->texte2 = $texte2;
        return $this;
    }

    /**
     * Set the texte3.
     *
     * @param string|null $texte3 The texte3.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte3(?string $texte3): CriteresClient {
        $this->texte3 = $texte3;
        return $this;
    }

    /**
     * Set the texte4.
     *
     * @param string|null $texte4 The texte4.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte4(?string $texte4): CriteresClient {
        $this->texte4 = $texte4;
        return $this;
    }

    /**
     * Set the texte5.
     *
     * @param string|null $texte5 The texte5.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte5(?string $texte5): CriteresClient {
        $this->texte5 = $texte5;
        return $this;
    }

    /**
     * Set the texte6.
     *
     * @param string|null $texte6 The texte6.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte6(?string $texte6): CriteresClient {
        $this->texte6 = $texte6;
        return $this;
    }

    /**
     * Set the texte7.
     *
     * @param string|null $texte7 The texte7.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte7(?string $texte7): CriteresClient {
        $this->texte7 = $texte7;
        return $this;
    }

    /**
     * Set the texte8.
     *
     * @param string|null $texte8 The texte8.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte8(?string $texte8): CriteresClient {
        $this->texte8 = $texte8;
        return $this;
    }

    /**
     * Set the texte9.
     *
     * @param string|null $texte9 The texte9.
     * @return CriteresClient Returns this Criteres client.
     */
    public function setTexte9(?string $texte9): CriteresClient {
        $this->texte9 = $texte9;
        return $this;
    }
}

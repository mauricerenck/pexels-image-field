<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2023 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Easilys\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
use WBW\Library\Common\Traits\Strings\StringIconTrait;
use WBW\Library\Common\Traits\Strings\StringImageTrait;
use WBW\Library\Common\Traits\Strings\StringLabelTrait;
use WBW\Library\Easilys\Traits\Arrays\ArrayCertificationsTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdDocumentProductSheetTrait;
use WBW\Library\Easilys\Traits\Integers\IntegerIdSiteOwnerTrait;
use WBW\Library\Easilys\Traits\Strings\StringCodeInternalTrait;

/**
 * Product.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Easilys\Model
 */
class Product {

    use ArrayCertificationsTrait;
    use IntegerIdTrait {
        setId as public;
    }
    use IntegerIdDocumentProductSheetTrait;
    use IntegerIdSiteOwnerTrait;
    use StringCodeInternalTrait;
    use StringIconTrait;
    use StringImageTrait;
    use StringLabelTrait;

    /**
     * Allergens.
     *
     * @var Allergen[]
     */
    protected $allergens;

    /**
     * Best before status.
     *
     * @var int|null
     */
    protected $bestBeforeStatus;

    /**
     * Brand.
     *
     * @var string|null
     */
    protected $brand;

    /**
     * Codes.
     *
     * @var Code[]
     */
    protected $codes;

    /**
     * Composition.
     *
     * @var string|null
     */
    protected $composition;

    /**
     * Date created.
     *
     * @var string|null
     */
    protected $dateCreated;

    /**
     * Date updated.
     *
     * @var string|null
     */
    protected $dateUpdated;

    /**
     * Document URL.
     *
     * @var string|null
     */
    protected $documentUrl;

    /**
     * EAN 13.
     *
     * @var string|null
     */
    protected $ean13;

    /**
     * Ext document product sheet.
     *
     * @var string|null
     */
    protected $extDocumentProductSheet;

    /**
     * Family.
     *
     * @var Family|null
     */
    protected $family;

    /**
     * Generics.
     *
     * @var Generic[]
     */
    protected $generics;

    /**
     * Imported Origin supplier label.
     *
     * @var string|null
     */
    protected $importedOriginSupplierLabel;

    /**
     * Label document product sheet.
     *
     * @var string|null
     */
    protected $labelDocumentProductSheet;

    /**
     * Label public.
     *
     * @var string|null
     */
    protected $labelPublic;

    /**
     * Nutrition value.
     *
     * @var NutritionValue|null
     */
    protected $nutritionValue;

    /**
     * Origin.
     *
     * @var Origin|null
     */
    protected $origin;

    /**
     * Purchase generics.
     *
     * @var Generic[]
     */
    protected $purchaseGenerics;

    /**
     * Quality.
     *
     * @var Quality|null
     */
    protected $quality;

    /**
     * Range.
     *
     * @var Range|null
     */
    protected $range;

    /**
     * Ration cooked over raw.
     *
     * @var int|null
     */
    protected $ratioCookedOverRaw;

    /**
     * Ref product of supplier.
     *
     * @var string|null
     */
    protected $refProductOfSupplier;

    /**
     * Storage type.
     *
     * @var StorageType|null
     */
    protected $storageType;

    /**
     * Supplier allergen.
     *
     * @var string|null
     */
    protected $supplierAllergen;

    /**
     * Supplier certification.
     *
     * @var string|null
     */
    protected $supplierCertification;

    /**
     * Supplier label.
     *
     * @var string|null
     */
    protected $supplierLabel;

    /**
     * Tax.
     *
     * @var Tax|null
     */
    protected $tax;

    /**
     * Weight per piece.
     *
     * @var int|null
     */
    protected $weightPerPiece;

    /**
     * Weight production unit.
     *
     * @var int|null
     */
    protected $weightProductionUnit;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAllergens([]);
        $this->setCertifications([]);
        $this->setCodes([]);
        $this->setGenerics([]);
        $this->setPurchaseGenerics([]);
    }

    /**
     * Add an allergen.
     *
     * @param Allergen|null $allergen The allergen.
     * @return Product Returns this product.
     */
    public function addAllergen(?Allergen $allergen): Product {

        if (null !== $allergen) {
            $this->allergens[] = $allergen;
        }

        return $this;
    }

    /**
     * Add a code.
     *
     * @param Code|null $code The code.
     * @return Product Returns this product.
     */
    public function addCode(?Code $code): Product {

        if (null !== $code) {
            $this->codes[] = $code;
        }

        return $this;
    }

    /**
     * Add a generic.
     *
     * @param Generic|null $generic The generic.
     * @return Product Returns this product.
     */
    public function addGeneric(?Generic $generic): Product {

        if (null !== $generic) {
            $this->generics[] = $generic;
        }

        return $this;
    }

    /**
     * Add a purchase generic.
     *
     * @param Generic|null $purchaseGeneric The purchase generic.
     * @return Product Returns this product.
     */
    public function addPurchaseGeneric(?Generic $purchaseGeneric): Product {

        if (null !== $purchaseGeneric) {
            $this->purchaseGenerics[] = $purchaseGeneric;
        }

        return $this;
    }

    /**
     * Get the allergens.
     *
     * @return Allergen[] Returns the allergens.
     */
    public function getAllergens(): array {
        return $this->allergens;
    }

    /**
     * Get the best before status.
     *
     * @return int|null Returns the best before status.
     */
    public function getBestBeforeStatus(): ?int {
        return $this->bestBeforeStatus;
    }

    /**
     * Get the brand.
     *
     * @return string|null Returns the brand.
     */
    public function getBrand(): ?string {
        return $this->brand;
    }

    /**
     * Get the codes.
     *
     * @return Code[] Returns the codes.
     */
    public function getCodes(): array {
        return $this->codes;
    }

    /**
     * Get the composition.
     *
     * @return string|null Returns the composition.
     */
    public function getComposition(): ?string {
        return $this->composition;
    }

    /**
     * Get the date created.
     *
     * @return string|null Returns the date created.
     */
    public function getDateCreated(): ?string {
        return $this->dateCreated;
    }

    /**
     * Get the date updated.
     *
     * @return string|null Returns the date updated.
     */
    public function getDateUpdated(): ?string {
        return $this->dateUpdated;
    }

    /**
     * Get the document URL.
     *
     * @return string|null Returns the document URL.
     */
    public function getDocumentUrl(): ?string {
        return $this->documentUrl;
    }

    /**
     * Get the EAN 13.
     *
     * @return string|null Returns the EAN 13.
     */
    public function getEan13(): ?string {
        return $this->ean13;
    }

    /**
     * Get the ext document product sheet.
     *
     * @return string|null Returns the ext document product sheet.
     */
    public function getExtDocumentProductSheet(): ?string {
        return $this->extDocumentProductSheet;
    }

    /**
     * Get the family.
     *
     * @return Family|null Returns the family.
     */
    public function getFamily(): ?Family {
        return $this->family;
    }

    /**
     * Get the generics.
     *
     * @return Generic[] Returns the generics.
     */
    public function getGenerics(): array {
        return $this->generics;
    }

    /**
     * Get the imported origin supplier label.
     *
     * @return string|null Returns the imported origin supplier label.
     */
    public function getImportedOriginSupplierLabel(): ?string {
        return $this->importedOriginSupplierLabel;
    }

    /**
     * Get the label document product sheet.
     *
     * @return string|null Returns the label document product sheet.
     */
    public function getLabelDocumentProductSheet(): ?string {
        return $this->labelDocumentProductSheet;
    }

    /**
     * Get the label public.
     *
     * @return string|null Returns the label public.
     */
    public function getLabelPublic(): ?string {
        return $this->labelPublic;
    }

    /**
     * Get the nutrition value.
     *
     * @return NutritionValue|null Returns the nutrition value.
     */
    public function getNutritionValue(): ?NutritionValue {
        return $this->nutritionValue;
    }

    /**
     * Get the origin.
     *
     * @return Origin|null Returns the origin.
     */
    public function getOrigin(): ?Origin {
        return $this->origin;
    }

    /**
     * Get the purchase generics.
     *
     * @return Generic[] Returns the purchase generics.
     */
    public function getPurchaseGenerics(): array {
        return $this->purchaseGenerics;
    }

    /**
     * Get the quality.
     *
     * @return Quality|null Returns the quality.
     */
    public function getQuality(): ?Quality {
        return $this->quality;
    }

    /**
     * Get the range.
     *
     * @return Range|null Returns the range.
     */
    public function getRange(): ?Range {
        return $this->range;
    }

    /**
     * Get the ratio cooked over raw.
     *
     * @return int|null Returns the ratio cooked over raw.
     */
    public function getRatioCookedOverRaw(): ?int {
        return $this->ratioCookedOverRaw;
    }

    /**
     * Get the ref product of supplier.
     *
     * @return string|null Returns the ref product of supplier.
     */
    public function getRefProductOfSupplier(): ?string {
        return $this->refProductOfSupplier;
    }

    /**
     * Get the storage type.
     *
     * @return StorageType|null Returns the storage type.
     */
    public function getStorageType(): ?StorageType {
        return $this->storageType;
    }

    /**
     * Get the supplier allergens.
     *
     * @return string|null Returns the supplier allergens.
     */
    public function getSupplierAllergen(): ?string {
        return $this->supplierAllergen;
    }

    /**
     * Get the supplier certification.
     *
     * @return string|null Returns the supplier certification.
     */
    public function getSupplierCertification(): ?string {
        return $this->supplierCertification;
    }

    /**
     * Get the supplier label.
     *
     * @return string|null Returns the supplier label.
     */
    public function getSupplierLabel(): ?string {
        return $this->supplierLabel;
    }

    /**
     * Get the tax.
     *
     * @return Tax|null Returns the tax.
     */
    public function getTax(): ?Tax {
        return $this->tax;
    }

    /**
     * Get the weight per piece.
     *
     * @return int|null Returns the weight per piece.
     */
    public function getWeightPerPiece(): ?int {
        return $this->weightPerPiece;
    }

    /**
     * Get the weight production unit.
     *
     * @return int|null Returns the weight production unit.
     */
    public function getWeightProductionUnit(): ?int {
        return $this->weightProductionUnit;
    }

    /**
     * Set the allergens.
     *
     * @param Allergen[] $allergens The allergens.
     * @return Product Returns this product.
     */
    protected function setAllergens(array $allergens): Product {
        $this->allergens = $allergens;
        return $this;
    }

    /**
     * Set the best before status.
     *
     * @param int|null $bestBeforeStatus The best before status.
     * @return Product Returns this product.
     */
    public function setBestBeforeStatus(?int $bestBeforeStatus): Product {
        $this->bestBeforeStatus = $bestBeforeStatus;
        return $this;
    }

    /**
     * Set the brand.
     *
     * @param string|null $brand The brand.
     * @return Product Returns this product.
     */
    public function setBrand(?string $brand): Product {
        $this->brand = $brand;
        return $this;
    }

    /**
     * Set the codes.
     *
     * @param Code[] $codes The codes.
     * @return Product Returns this product.
     */
    protected function setCodes(array $codes): Product {
        $this->codes = $codes;
        return $this;
    }

    /**
     * Set the composition.
     *
     * @param string|null $composition The composition.
     * @return Product Returns this product.
     */
    public function setComposition(?string $composition): Product {
        $this->composition = $composition;
        return $this;
    }

    /**
     * Set the date created.
     *
     * @param string|null $dateCreated The date created.
     * @return Product Returns this product.
     */
    public function setDateCreated(?string $dateCreated): Product {
        $this->dateCreated = $dateCreated;
        return $this;
    }

    /**
     * Set the date updated.
     *
     * @param string|null $dateUpdated The date updated.
     * @return Product Returns this product.
     */
    public function setDateUpdated(?string $dateUpdated): Product {
        $this->dateUpdated = $dateUpdated;
        return $this;
    }

    /**
     * Set the document URL.
     *
     * @param string|null $documentUrl The document URL.
     * @return Product Returns this product.
     */
    public function setDocumentUrl(?string $documentUrl): Product {
        $this->documentUrl = $documentUrl;
        return $this;
    }

    /**
     * Set the EAN 13.
     *
     * @param string|null $ean13 The EAN 13.
     * @return Product Returns this product.
     */
    public function setEan13(?string $ean13): Product {
        $this->ean13 = $ean13;
        return $this;
    }

    /**
     * Set the ext document product sheet.
     *
     * @param string|null $extDocumentProductSheet The ext document product sheet.
     * @return Product Returns this product.
     */
    public function setExtDocumentProductSheet(?string $extDocumentProductSheet): Product {
        $this->extDocumentProductSheet = $extDocumentProductSheet;
        return $this;
    }

    /**
     * Set the family.
     *
     * @param Family|null $family The family.
     * @return Product Returns this product.
     */
    public function setFamily(?Family $family): Product {
        $this->family = $family;
        return $this;
    }

    /**
     * Set the generics.
     *
     * @param Generic[] $generics The generics.
     * @return Product Returns this product.
     */
    protected function setGenerics(array $generics): Product {
        $this->generics = $generics;
        return $this;
    }

    /**
     * Set the imported origin supplier label.
     *
     * @param string|null $importedOriginSupplierLabel The imported origin supplier label.
     * @return Product Returns this product.
     */
    public function setImportedOriginSupplierLabel(?string $importedOriginSupplierLabel): Product {
        $this->importedOriginSupplierLabel = $importedOriginSupplierLabel;
        return $this;
    }

    /**
     * Set the label document product sheet.
     *
     * @param string|null $labelDocumentProductSheet The label document product sheet.
     * @return Product Returns this product.
     */
    public function setLabelDocumentProductSheet(?string $labelDocumentProductSheet): Product {
        $this->labelDocumentProductSheet = $labelDocumentProductSheet;
        return $this;
    }

    /**
     * Set the label public.
     *
     * @param string|null $labelPublic The label public.
     * @return Product Returns this product.
     */
    public function setLabelPublic(?string $labelPublic): Product {
        $this->labelPublic = $labelPublic;
        return $this;
    }

    /**
     * Set the nutrition value.
     *
     * @param NutritionValue|null $nutritionValue The nutrition value.
     * @return Product Returns this product.
     */
    public function setNutritionValue(?NutritionValue $nutritionValue): Product {
        $this->nutritionValue = $nutritionValue;
        return $this;
    }

    /**
     * Set the origin.
     *
     * @param Origin|null $origin The origin.
     * @return Product Returns this product.
     */
    public function setOrigin(?Origin $origin): Product {
        $this->origin = $origin;
        return $this;
    }

    /**
     * Set the purchase generics.
     *
     * @param Generic[] $purchaseGenerics The purchase generics.
     * @return Product Returns this product.
     */
    protected function setPurchaseGenerics(array $purchaseGenerics): Product {
        $this->purchaseGenerics = $purchaseGenerics;
        return $this;
    }

    /**
     * Set the quality.
     *
     * @param Quality|null $quality The quality.
     * @return Product Returns this product.
     */
    public function setQuality(?Quality $quality): Product {
        $this->quality = $quality;
        return $this;
    }

    /**
     * Set the range.
     *
     * @param Range|null $range The range.
     * @return Product Returns this product.
     */
    public function setRange(?Range $range): Product {
        $this->range = $range;
        return $this;
    }

    /**
     * Set the ratio cooked over raw.
     *
     * @param int|null $ratioCookedOverRaw The ratio cooked over raw.
     * @return Product Returns this product.
     */
    public function setRatioCookedOverRaw(?int $ratioCookedOverRaw): Product {
        $this->ratioCookedOverRaw = $ratioCookedOverRaw;
        return $this;
    }

    /**
     * Set the ref product of supplier.
     *
     * @param string|null $refProductOfSupplier The ref product of supplier.
     * @return Product Returns this product.
     */
    public function setRefProductOfSupplier(?string $refProductOfSupplier): Product {
        $this->refProductOfSupplier = $refProductOfSupplier;
        return $this;
    }

    /**
     * Set the storage type.
     *
     * @param StorageType|null $storageType The storage type.
     * @return Product Returns this product.
     */
    public function setStorageType(?StorageType $storageType): Product {
        $this->storageType = $storageType;
        return $this;
    }

    /**
     * Set the supplier allergen.
     *
     * @param string|null $supplierAllergen The supplier allergen.
     * @return Product Returns this product.
     */
    public function setSupplierAllergen(?string $supplierAllergen): Product {
        $this->supplierAllergen = $supplierAllergen;
        return $this;
    }

    /**
     * Set the supplier certification.
     *
     * @param string|null $supplierCertification The supplier certification.
     * @return Product Returns this product.
     */
    public function setSupplierCertification(?string $supplierCertification): Product {
        $this->supplierCertification = $supplierCertification;
        return $this;
    }

    /**
     * Set the supplier label.
     *
     * @param string|null $supplierLabel The supplier label.
     * @return Product Returns this product.
     */
    public function setSupplierLabel(?string $supplierLabel): Product {
        $this->supplierLabel = $supplierLabel;
        return $this;
    }

    /**
     * Set the tax.
     *
     * @param Tax|null $tax The tax.
     * @return Product Returns this product.
     */
    public function setTax(?Tax $tax): Product {
        $this->tax = $tax;
        return $this;
    }

    /**
     * Set the weight per piece.
     *
     * @param int|null $weightPerPiece The weight per piece.
     * @return Product Returns this product.
     */
    public function setWeightPerPiece(?int $weightPerPiece): Product {
        $this->weightPerPiece = $weightPerPiece;
        return $this;
    }

    /**
     * Set the weight production unit.
     *
     * @param int|null $weightProductionUnit The weight production unit.
     * @return Product Returns this product.
     */
    public function setWeightProductionUnit(?int $weightProductionUnit): Product {
        $this->weightProductionUnit = $weightProductionUnit;
        return $this;
    }
}

<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\Ciqual\Serializer;

/**
 * Serializer keys.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Serializer
 */
interface SerializerKeys {

    /**
     * Serializer key "citation réf".
     *
     * @var string
     */
    public const CITATION_REF = "citationRef";

    /**
     * Serializer key "code".
     *
     * @var string
     */
    public const CODE = "code";

    /**
     * Serializer key "code aliment".
     *
     * @var string
     */
    public const CODE_ALIMENT = "codeAliment";

    /**
     * Serializer key "code confiance".
     *
     * @var string
     */
    public const CODE_CONFIANCE = "codeConfiance";

    /**
     * Serializer key "code constituant".
     *
     * @var string
     */
    public const CODE_CONSTITUANT = "codeConstituant";

    /**
     * Serializer key "code groupe".
     *
     * @var string
     */
    public const CODE_GROUPE = "codeGroupe";

    /**
     * Serializer key "code source".
     *
     * @var string
     */
    public const CODE_SOURCE = "codeSource";

    /**
     * Serializer key "code sous-groupe".
     *
     * @var string
     */
    public const CODE_SOUS_GROUPE = "codeSousGroupe";

    /**
     * Serializer key "code sous sous-groupe".
     *
     * @var string
     */
    public const CODE_SOUS_SOUS_GROUPE = "codeSousSousGroupe";

    /**
     * Serializer key "max".
     *
     * @var string
     */
    public const MAX = "max";

    /**
     * Serializer key "min".
     *
     * @var string
     */
    public const MIN = "min";

    /**
     * Serializer key "nom ENG".
     *
     * @var string
     */
    public const NOM_ENG = "nomEng";

    /**
     * Serializer key "nom ENG sous-groupe".
     *
     * @var string
     */
    public const NOM_ENG_SOUS_GROUPE = "nomEngSousGroupe";

    /**
     * Serializer key "nom ENG sous sous-groupe".
     *
     * @var string
     */
    public const NOM_ENG_SOUS_SOUS_GROUPE = "nomEngSousSousGroupe";

    /**
     * Serializer key "nom FR".
     *
     * @var string
     */
    public const NOM_FR = "nomFr";

    /**
     * Serializer key "nom FR sous-groupe".
     *
     * @var string
     */
    public const NOM_FR_SOUS_GROUPE = "nomFrSousGroupe";

    /**
     * Serializer key "nom FR sous sous-groupe".
     *
     * @var string
     */
    public const NOM_FR_SOUS_SOUS_GROUPE = "nomFrSousSousGroupe";

    /**
     * Serializer key "nom index FR".
     *
     * @var string
     */
    public const NOM_INDEX_FR = "nomIndexFr";

    /**
     * Serializer key "teneur".
     *
     * @var string
     */
    public const TENEUR = "teneur";
}

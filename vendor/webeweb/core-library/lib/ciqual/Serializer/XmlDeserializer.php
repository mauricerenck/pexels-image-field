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

use DOMNode;
use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Common\Serializer\XmlDeserializer as BaseXmlDeserializer;

/**
 * XML deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Serializer
 */
class XmlDeserializer extends BaseXmlDeserializer {

    /**
     * Deserialize an aliment.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Aliment Returns the aliment.
     */
    public static function deserializeAliment(DOMNode $domNode): Aliment {

        static::log($domNode);

        $model = new Aliment();
        $model->setCode(static::getChildDomNodeTextContent($domNode, "alim_code"));
        $model->setNomFr(static::getChildDomNodeTextContent($domNode, "alim_nom_fr"));
        $model->setNomIndexFr(static::getChildDomNodeTextContent($domNode, "ALIM_NOM_INDEX_FR"));
        $model->setNomEng(static::getChildDomNodeTextContent($domNode, "alim_nom_eng"));
        $model->setCodeGroupe(static::getChildDomNodeTextContent($domNode, "alim_grp_code"));
        $model->setCodeSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssgrp_code"));
        $model->setCodeSousSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssssgrp_code"));

        return $model;
    }

    /**
     * Deserialize a composition.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Composition Returns the composition.
     */
    public static function deserializeComposition(DOMNode $domNode): Composition {

        static::log($domNode);

        $model = new Composition();
        $model->setCodeAliment(static::getChildDomNodeTextContent($domNode, "alim_code"));
        $model->setCodeConstituant(static::getChildDomNodeTextContent($domNode, "const_code"));
        $model->setTeneur(static::getChildDomNodeTextContent($domNode, "teneur"));
        $model->setMin(static::getChildDomNodeTextContent($domNode, "min"));
        $model->setMax(static::getChildDomNodeTextContent($domNode, "max"));
        $model->setCodeConfiance(static::getChildDomNodeTextContent($domNode, "code_confiance"));
        $model->setCodeSource(static::getChildDomNodeTextContent($domNode, "source_code"));

        return $model;
    }

    /**
     * Deserialize a constituant.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Constituant Returns the constituant.
     */
    public static function deserializeConstituant(DOMNode $domNode): Constituant {

        static::log($domNode);

        $model = new Constituant();
        $model->setCode(static::getChildDomNodeTextContent($domNode, "const_code"));
        $model->setNomFr(static::getChildDomNodeTextContent($domNode, "const_nom_fr"));
        $model->setNomEng(static::getChildDomNodeTextContent($domNode, "const_nom_eng"));

        return $model;
    }

    /**
     * Deserialize a groupe aliments.
     *
     * @param DOMNode $domNode The DOM node.
     * @return GroupeAliments Returns the groupe aliments.
     */
    public static function deserializeGroupeAliments(DOMNode $domNode): GroupeAliments {

        static::log($domNode);

        $model = new GroupeAliments();
        $model->setCode(static::getChildDomNodeTextContent($domNode, "alim_grp_code"));
        $model->setNomFr(static::getChildDomNodeTextContent($domNode, "alim_grp_nom_fr"));
        $model->setNomEng(static::getChildDomNodeTextContent($domNode, "alim_grp_nom_eng"));
        $model->setCodeSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssgrp_code"));
        $model->setNomFrSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssgrp_nom_fr"));
        $model->setNomEngSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssgrp_nom_eng"));
        $model->setCodeSousSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssssgrp_code"));
        $model->setNomFrSousSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssssgrp_nom_fr"));
        $model->setNomEngSousSousGroupe(static::getChildDomNodeTextContent($domNode, "alim_ssssgrp_nom_eng"));

        return $model;
    }

    /**
     * Deserialize a source.
     *
     * @param DOMNode $domNode The DOM node.
     * @return Source Returns the source.
     */
    public static function deserializeSource(DOMNode $domNode): Source {

        static::log($domNode);

        $model = new Source();
        $model->setCode(static::getChildDomNodeTextContent($domNode, "source_code"));
        $model->setCitationRef(static::getChildDomNodeTextContent($domNode, "ref_citation"));

        return $model;
    }
}

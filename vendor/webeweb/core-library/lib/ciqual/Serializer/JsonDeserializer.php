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

use WBW\Library\Ciqual\Model\Aliment;
use WBW\Library\Ciqual\Model\Composition;
use WBW\Library\Ciqual\Model\Constituant;
use WBW\Library\Ciqual\Model\GroupeAliments;
use WBW\Library\Ciqual\Model\Source;
use WBW\Library\Common\Helper\ArrayHelper;

/**
 * JSON deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Serializer
 */
class JsonDeserializer {

    /**
     * Deserialize an aliment.
     *
     * @param array<string,mixed> $data The data.
     * @return Aliment Returns the deserialized aliment.
     */
    public static function deserializeAliment(array $data): Aliment {

        $model = new Aliment();
        $model->setCode(ArrayHelper::get($data, SerializerKeys::CODE));
        $model->setNomFr(ArrayHelper::get($data, SerializerKeys::NOM_FR));
        $model->setNomIndexFr(ArrayHelper::get($data, SerializerKeys::NOM_INDEX_FR));
        $model->setNomEng(ArrayHelper::get($data, SerializerKeys::NOM_ENG));
        $model->setCodeGroupe(ArrayHelper::get($data, SerializerKeys::CODE_GROUPE));
        $model->setCodeSousGroupe(ArrayHelper::get($data, SerializerKeys::CODE_SOUS_GROUPE));
        $model->setCodeSousSousGroupe(ArrayHelper::get($data, SerializerKeys::CODE_SOUS_SOUS_GROUPE));

        return $model;
    }

    /**
     * Deserialize a composition.
     *
     * @param array<string,mixed> $data The data.
     * @return Composition Returns the deserialized composition.
     */
    public static function deserializeComposition(array $data): Composition {

        $model = new Composition();
        $model->setCodeAliment(ArrayHelper::get($data, SerializerKeys::CODE_ALIMENT));
        $model->setCodeConstituant(ArrayHelper::get($data, SerializerKeys::CODE_CONSTITUANT));
        $model->setTeneur(ArrayHelper::get($data, SerializerKeys::TENEUR));
        $model->setMin(ArrayHelper::get($data, SerializerKeys::MIN));
        $model->setMax(ArrayHelper::get($data, SerializerKeys::MAX));
        $model->setCodeConfiance(ArrayHelper::get($data, SerializerKeys::CODE_CONFIANCE));
        $model->setCodeSource(ArrayHelper::get($data, SerializerKeys::CODE_SOURCE));

        return $model;
    }

    /**
     * Deserialize a constituant.
     *
     * @param array<string,mixed> $data The data.
     * @return Constituant Returns the deserialized constituant.
     */
    public static function deserializeConstituant(array $data): Constituant {

        $model = new Constituant();
        $model->setCode(ArrayHelper::get($data, SerializerKeys::CODE));
        $model->setNomFr(ArrayHelper::get($data, SerializerKeys::NOM_FR));
        $model->setNomEng(ArrayHelper::get($data, SerializerKeys::NOM_ENG));

        return $model;
    }

    /**
     * Deserialize a groupe aliments.
     *
     * @param array<string,mixed> $data The data.
     * @return GroupeAliments Returns the deserialized groupe aliments.
     */
    public static function deserializeGroupeAliments(array $data): GroupeAliments {

        $model = new GroupeAliments();
        $model->setCode(ArrayHelper::get($data, SerializerKeys::CODE));
        $model->setNomFr(ArrayHelper::get($data, SerializerKeys::NOM_FR));
        $model->setNomEng(ArrayHelper::get($data, SerializerKeys::NOM_ENG));
        $model->setCodeSousGroupe(ArrayHelper::get($data, SerializerKeys::CODE_SOUS_GROUPE));
        $model->setNomFrSousGroupe(ArrayHelper::get($data, SerializerKeys::NOM_FR_SOUS_GROUPE));
        $model->setNomEngSousGroupe(ArrayHelper::get($data, SerializerKeys::NOM_ENG_SOUS_GROUPE));
        $model->setCodeSousSousGroupe(ArrayHelper::get($data, SerializerKeys::CODE_SOUS_SOUS_GROUPE));
        $model->setNomFrSousSousGroupe(ArrayHelper::get($data, SerializerKeys::NOM_FR_SOUS_SOUS_GROUPE));
        $model->setNomEngSousSousGroupe(ArrayHelper::get($data, SerializerKeys::NOM_ENG_SOUS_SOUS_GROUPE));

        return $model;
    }

    /**
     * Deserialize a source.
     *
     * @param array<string,mixed> $data The data.
     * @return Source Returns the deserialized source.
     */
    public static function deserializeSource(array $data): Source {

        $model = new Source();
        $model->setCode(ArrayHelper::get($data, SerializerKeys::CODE));
        $model->setCitationRef(ArrayHelper::get($data, SerializerKeys::CITATION_REF));

        return $model;
    }
}

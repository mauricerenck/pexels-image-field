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

namespace WBW\Library\Ciqual\Model;

/**
 * Table.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Ciqual\Model
 */
class Table {

    /**
     * Aliments.
     *
     * @var Aliment[]|null
     */
    private $aliments;

    /**
     * Compositions.
     *
     * @var Composition[]|null
     */
    private $compositions;

    /**
     * Constituants.
     *
     * @var Constituant[]|null
     */
    private $constituants;

    /**
     * Groupes aliments.
     *
     * @var GroupeAliments[]|null
     */
    private $groupesAliments;

    /**
     * Sources.
     *
     * @var Source[]|null
     */
    private $sources;

    /**
     * Constructor.
     */
    public function __construct() {
        $this->setAliments([]);
        $this->setCompositions([]);
        $this->setConstituants([]);
        $this->setGroupesAliments([]);
        $this->setSources([]);
    }

    /**
     * Add an aliment.
     *
     * @param Aliment $aliment The aliment.
     * @return Table Returns this table.
     */
    public function addAliment(Aliment $aliment): Table {
        $this->aliments[] = $aliment;
        return $this;
    }

    /**
     * Add a composition.
     *
     * @param Composition $composition The composition.
     * @return Table Returns this table.
     */
    public function addComposition(Composition $composition): Table {
        $this->compositions[] = $composition;
        return $this;
    }

    /**
     * Add a constituant.
     *
     * @param Constituant $constituant The constituant.
     * @return Table Returns this table.
     */
    public function addConstituant(Constituant $constituant): Table {
        $this->constituants[] = $constituant;
        return $this;
    }

    /**
     * Add a groupe aliments.
     *
     * @param GroupeAliments $groupeAliments The groupe aliments.
     * @return Table Returns this table.
     */
    public function addGroupeAliments(GroupeAliments $groupeAliments): Table {
        $this->groupesAliments[] = $groupeAliments;
        return $this;
    }

    /**
     * Add a source.
     *
     * @param Source $source The source.
     * @return Table Returns this table.
     */
    public function addSource(Source $source): Table {
        $this->sources[] = $source;
        return $this;
    }

    /**
     * Get the aliments.
     *
     * @return Aliment[] Returns the aliments.
     */
    public function getAliments(): array {
        return $this->aliments;
    }

    /**
     * Get the compositions.
     *
     * @return Composition[] Returns the compositions.
     */
    public function getCompositions(): array {
        return $this->compositions;
    }

    /**
     * Get the constituants.
     *
     * @return Constituant[] Returns the constituants.
     */
    public function getConstituants(): array {
        return $this->constituants;
    }

    /**
     * Get the groupes aliments.
     *
     * @return GroupeAliments[] Returns the groupes aliments.
     */
    public function getGroupesAliments(): array {
        return $this->groupesAliments;
    }

    /**
     * Get the sources.
     *
     * @return Source[] Returns the sources.
     */
    public function getSources(): array {
        return $this->sources;
    }

    /**
     * Set the aliments.
     *
     * @param Aliment[] $aliments The aliments.
     * @return Table Returns this table.
     */
    protected function setAliments(array $aliments): Table {
        $this->aliments = $aliments;
        return $this;
    }

    /**
     * Set the compositions.
     *
     * @param Composition[] $compositions The compositions.
     * @return Table Returns this table.
     */
    protected function setCompositions(array $compositions): Table {
        $this->compositions = $compositions;
        return $this;
    }

    /**
     * Set the constituants.
     *
     * @param Constituant[] $constituants The constituants.
     * @return Table Returns this table.
     */
    protected function setConstituants(array $constituants): Table {
        $this->constituants = $constituants;
        return $this;
    }

    /**
     * Set the groupes aliments.
     *
     * @param GroupeAliments[] $groupesAliments The groupes aliments.
     * @return Table Returns this table.
     */
    protected function setGroupesAliments(array $groupesAliments): Table {
        $this->groupesAliments = $groupesAliments;
        return $this;
    }

    /**
     * Set the sources.
     *
     * @param Source[] $sources The sources.
     * @return Table Returns this table.
     */
    protected function setSources(array $sources): Table {
        $this->sources = $sources;
        return $this;
    }
}

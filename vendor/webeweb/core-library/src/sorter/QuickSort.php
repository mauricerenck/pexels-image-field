<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Sorter;

/**
 * Quick sort.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Sorter
 */
class QuickSort {

    /**
     * Functor.
     *
     * @var FunctorInterface
     */
    private $functor;

    /**
     * Values.
     *
     * @var array
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $values The values.
     * @param FunctorInterface $functor The functor.
     */
    public function __construct(array $values, FunctorInterface $functor) {
        $this->setFunctor($functor);
        $this->setValues($values);
    }

    /**
     * Get the functor.
     *
     * @return FunctorInterface Returns the functor.
     */
    public function getFunctor(): FunctorInterface {
        return $this->functor;
    }

    /**
     * Get the values.
     *
     * @return array Returns the values.
     */
    public function getValues(): array {
        return $this->values;
    }

    /**
     * Quick sort the values.
     *
     * @param int $min The min index.
     * @param int $max The max index.
     * @return void
     */
    private function quickSort(int $min, int $max): void {

        $i = $min;
        $j = $max;

        $pivot = $this->getValues()[$min + ($max - $min) / 2];

        while ($i <= $j) {

            while (true === $this->getFunctor()->compare($this->getValues()[$i], $pivot)) {
                ++$i;
            }

            while (true === $this->getFunctor()->compare($pivot, $this->getValues()[$j])) {
                --$j;
            }

            if ($i <= $j) {
                $this->swap($i, $j);
                ++$i;
                --$j;
            }
        }

        if ($min < $j) {
            $this->quickSort($min, $j);
        }
        if ($i < $max) {
            $this->quickSort($i, $max);
        }
    }

    /**
     * Set the functor.
     *
     * @param FunctorInterface $functor The functor.
     * @return QuickSort Returns this quick sort.
     */
    protected function setFunctor(FunctorInterface $functor): QuickSort {
        $this->functor = $functor;
        return $this;
    }

    /**
     * Set the values.
     *
     * @param array $values The values.
     * @return QuickSort Returns this quick sort.
     */
    protected function setValues(array $values): QuickSort {
        $this->values = $values;
        return $this;
    }

    /**
     * Sort the values.
     *
     * @return void
     */
    public function sort(): void {
        $this->quickSort(0, count($this->getValues()) - 1);
    }

    /**
     * Swap two values.
     *
     * @param int $a The first value index.
     * @param int $b The second value index.
     * @return void
     */
    private function swap(int $a, int $b): void {

        $value = $this->getValues()[$a];

        $this->values[$a] = $this->getValues()[$b];
        $this->values[$b] = $value;
    }
}

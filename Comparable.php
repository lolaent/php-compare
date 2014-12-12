<?php

namespace CTI\PhpCompare;

/**
 * Interface Comparable
 *
 * @package CTI\PhpCompare
 */
interface Comparable
{
    /**
     * @param mixed $compareTo
     *
     * @return bool
     */
    public function equals($compareTo = null);
}
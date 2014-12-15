<?php
/**
 * This file is part of the CBI project codebase.
 * (c) Cloudtroopers Intl <info@cloudtroopers.com>
 */

namespace CTI\PhpCompare;

/**
 * Class ComparisonHelper
 *
 * @package CTI\PhpCompare
 *
 * @author  Alexandru Marius Cos  <alexandru.cos@cloudtroopers.ro>
 */
class ComparisonHelper
{
    /**
     * @param Comparable $a
     * @param Comparable $b
     *
     * @return bool
     */
    public function areEquals(Comparable $a = null, Comparable $b = null)
    {
        if (null !== $a || null !== $b) {
            if (null !== $a && null !== $b) {
                if (! $a->equals($b)) {
                    return false;
                }
            } else {
                return false;
            }
        }

        return true;
    }

    /**
     * Removes duplicates in a list based on Comparable->equals()
     *
     * @param Comparable[] $list
     *
     * @return Comparable[]
     */
    public function removeDuplicates($list)
    {
        for ($i = 0; $i < count($list) - 1; $i++) {
            for ($j = $i + 1; $j < count($list); $j++) {
                $item1 = $list[$i];
                $item2 = $list[$j];
                if ($this->areEquals($item1, $item2)) {
                    unset ($list[$j]);
                    $list = array_values($list);
                    $j--;
                }
            }
        }

        return $list;
    }
}

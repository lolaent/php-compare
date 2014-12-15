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
}

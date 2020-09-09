<?php
/**
 * @author      Morvana Bonin <morvanabonin@gmail.com>
 * @copyright   Copyright (c) Morvana Bonin
 * @license     http://mit-license.org
 *
 * @link        git@github.com:morvanabonin/design_patterns.git
 */

namespace Strategy\Design\Pattern\Behavior\Fly;

use Strategy\Design\Pattern\Behavior\Fly\FlyBehavior;

// Fly Behavior implementation (regular flying)
class FlyWithWings implements FlyBehavior
{
    /**
     * Implements override method of interface FlyBehavior
     */
    public function fly(): void {
        print("I'm flying!!");
    }
}
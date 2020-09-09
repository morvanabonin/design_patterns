<?php
/**
 * @author      Morvana Bonin <morvanabonin@gmail.com>
 * @copyright   Copyright (c) Morvana Bonin
 * @license     http://mit-license.org/
 *
 * @link        git@github.com:morvanabonin/design_patterns.git
 */

namespace Strategy\Design\Pattern\Behavior\Quack;

use Strategy\Design\Pattern\Behavior\Quack\QuackBehavior;

// Quack Behavior implementation
class Squeak implements QuackBehavior
{
    /**
     * Implements override method of interface QuackBehavior
     */
    public function quack(): void {
        print("Squeak");
    }
}
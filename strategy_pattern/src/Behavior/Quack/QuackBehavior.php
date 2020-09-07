<?php
/**
 * @author      Morvana Bonin <morvanabonin@gmail.com>
 * @copyright   Copyright (c) Morvana Bonin
 * @license     http://mit-license.org/
 *
 * @link        git@github.com:morvanabonin/design_patterns.git
 */

namespace Strategy\Design\Pattern\Behavior\Quack;


interface QuackBehavior
{
    /**
     * Determine the behavior quack
     */
    public function quack();
}
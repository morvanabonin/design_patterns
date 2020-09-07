<?php
/**
 * @author      Morvana Bonin <morvanabonin@gmail.com>
 * @copyright   Copyright (c) Morvana Bonin
 * @license     http://mit-license.org/
 *
 * @link        git@github.com:morvanabonin/design_patterns.git
 */

namespace Strategy\Design\Pattern\Behavior\Fly;


interface FlyBehavior
{
    /**
     * Determine the behavior fly
     */
    public function fly();
}
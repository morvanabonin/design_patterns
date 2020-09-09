<?php
/**
 * @author      Morvana Bonin <morvanabonin@gmail.com>
 * @copyright   Copyright (c) Morvana Bonin
 * @license     http://mit-license.org
 *
 * @link        git@github.com:morvanabonin/design_patterns.git
 */

namespace Strategy\Design\Pattern;

use Strategy\Design\Pattern\Behavior\Fly\FlyBehavior;
use Strategy\Design\Pattern\Behavior\Quack\QuackBehavior;

// Duck superclass implementation
abstract class Duck
{
    private $flyBehavior;
    private $quackBehavior;

    abstract function display();

    function __construct() {

    }

    public function performFly(): void {
        
    }

    public function performQuack(): void {

    }

    public function swim(): void {
        print("All ducks float, even decoys!");
    }

}
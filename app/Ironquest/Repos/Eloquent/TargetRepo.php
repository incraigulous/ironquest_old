<?php namespace Ironquest\Repos\Eloquent;

use Ironquest\Target;
use Ironquest\Repos\TargetRepoInterface;

class TargetRepo extends BaseRepo implements TargetRepoInterface
{
    Use OptionableTrait;

    public function __construct(Target $target)
    {
        parent::__construct($target);
    }
}

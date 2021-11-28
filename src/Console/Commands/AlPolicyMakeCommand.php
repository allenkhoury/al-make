<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Console\PolicyMakeCommand;
use Illuminate\Support\Str;
use LogicException;
use Symfony\Component\Console\Input\InputOption;

class AlPolicyMakeCommand extends PolicyMakeCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:policy';
}

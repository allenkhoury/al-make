<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Console\RuleMakeCommand;
use Symfony\Component\Console\Input\InputOption;

class AlRuleMakeCommand extends RuleMakeCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:rule';
}

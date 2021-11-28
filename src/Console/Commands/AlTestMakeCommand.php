<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Console\TestMakeCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class AlTestMakeCommand extends TestMakeCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:test';
}

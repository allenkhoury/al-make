<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Console\RequestMakeCommand;

class AlRequestMakeCommand extends RequestMakeCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:request';
}

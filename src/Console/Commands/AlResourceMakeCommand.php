<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Foundation\Console\ResourceMakeCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputOption;

class AlResourceMakeCommand extends ResourceMakeCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:resource';
}

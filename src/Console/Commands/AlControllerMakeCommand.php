<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Routing\Console\ControllerMakeCommand;

class AlControllerMakeCommand extends ControllerMakeCommand
{
    use AlMakeTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'almake:controller';
}

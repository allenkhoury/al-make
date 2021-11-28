<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Console\GeneratorCommand;
use Illuminate\Database\Console\Seeds\SeederMakeCommand;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

class AlSeederMakeCommand extends GeneratorCommand
{
    use AlMakeTrait;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'almake:seeder';

    protected $description = 'Create a new seeder class';

    protected $type = 'Seeder';


    protected function getStub()
    {
        return $this->resolveStubPath('/stubs/seeder.stub');
    }

    protected function resolveStubPath($stub)
    {
        return __DIR__.$stub;
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace.'\\Database\\Seeders';
    }
}

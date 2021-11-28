<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\AlMakeTrait;
use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Foundation\Console\ModelMakeCommand;
use Illuminate\Support\Str;

class AlModelMakeCommand extends ModelMakeCommand
{
    use AlMakeTrait;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'almake:model';

    /**
     * Create a model factory for the model.
     *
     * @return void
     */
    protected function createFactory()
    {
        $factory = Str::studly($this->argument('name'));

        $this->call('almake:factory', [
            'name' => "{$factory}Factory",
            'namespace' => $this->namespace,
            '--model' => $this->qualifyClass($this->getNameInput()),
        ]);
    }

    /**
     * Create a migration file for the model.
     *
     * @return void
     */
    protected function createMigration()
    {
        $table = Str::snake(Str::pluralStudly(class_basename($this->argument('name'))));

        if ($this->option('pivot')) {
            $table = Str::singular($table);
        }

        $this->call('almake:migration', [
            'name' => "create_{$table}_table",
            'namespace' => $this->namespace,
            '--create' => $table,
        ]);
    }

    /**
     * Create a seeder file for the model.
     *
     * @return void
     */
    protected function createSeeder()
    {
        $seeder = Str::studly(class_basename($this->argument('name')));

        $this->call('almake:seeder', [
            'name' => "{$seeder}Seeder",
            'namespace' => $this->namespace,
        ]);
    }

    /**
     * Create a controller for the model.
     *
     * @return void
     */
    protected function createController()
    {
        $controller = Str::studly(class_basename($this->argument('name')));

        $modelName = $this->qualifyClass($this->getNameInput());

        $this->call('almake:controller', array_filter([
            'name' => "{$controller}Controller",
            'namespace' => $this->namespace,
            '--model' => $this->option('resource') || $this->option('api') ? $modelName : null,
            '--api' => $this->option('api'),
        ]));
    }

    /**
     * Create a policy file for the model.
     *
     * @return void
     */
    protected function createPolicy()
    {
        $policy = Str::studly(class_basename($this->argument('name')));

        $this->call('almake:policy', [
            'name' => "{$policy}Policy",
            'namespace' => $this->namespace,
            '--model' => $this->qualifyClass($this->getNameInput()),
        ]);
    }
}

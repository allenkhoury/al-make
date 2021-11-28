<?php

namespace AllenKhoury\AlMake\Console\Commands;

use AllenKhoury\AlMake\Console\Traits\GeneralTrait;
use Illuminate\Database\Console\Migrations\BaseCommand;

class AlMigrateMakeCommand extends BaseCommand
{
    use GeneralTrait;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'almake:migration {name : The name of the migration}
        {namespace : The namespace of the package}
        {--create= : The table to be created}
        {--table= : The table to migrate}
        {--realpath : Indicate any provided migration file paths are pre-resolved absolute paths}
        {--fullpath : Output the full path of the migration}';

    protected $description = 'Create a new migration file';

    public function handle()
    {
        $this->validate_namespace_and_set_package();

        $path = $this->generate_package_path();

        $this->call('make:migration', [
            'name' => $this->argument('name'),
            '--create' => $this->option('create'),
            '--table' => $this->option('table'),
            '--path' => $path,
            '--realpath' => $this->option('realpath'),
            '--fullpath' => $this->option('fullpath'),
        ]);
    }

    protected function generate_package_path()
    {
        return implode('\\', [
            config('al-make.packages_dir'),
            $this->package['dir'],
            $this->package['migrations'],
        ]);
    }
}

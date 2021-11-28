<?php

namespace AllenKhoury\AlMake\Console\Traits;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;

trait AlMakeTrait
{
    use GeneralTrait;

    public function handle()
    {
        $this->validate_namespace_and_set_package();

        return parent::handle();
    }

    protected function getPath($name)
    {
        $name = Str::replaceFirst($this->rootNamespace(), '', $name);

        $full_path = implode('\\', [
            $this->laravel->basePath(),
            config('al-make.packages_dir'),
            $this->package['dir'],
            $this->package['root']
        ]);

        return $full_path . '/' . str_replace('\\', '/', $name) . '.php';
    }


    protected function getArguments()
    {
        $arguments = parent::getArguments();

        array_push($arguments, [
            'namespace', InputArgument::REQUIRED, 'The namespace of the package'
        ]);

        return $arguments;
    }
}
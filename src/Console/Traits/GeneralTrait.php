<?php

namespace AllenKhoury\AlMake\Console\Traits;

trait GeneralTrait
{
    protected $namespace = '';

    protected $package = [];

    protected function rootNamespace()
    {
        return str_replace('/', '\\', $this->namespace);
    }

    protected function validate_namespace_and_set_package()
    {
        $this->namespace = $this->argument('namespace');

        if (!isset(config('al-make.packages_list')[$this->rootNamespace()]))
            throw new \Exception('Package ' . $this->rootNamespace() . ' not found in config');

        $this->package = config('al-make.packages_list')[$this->rootNamespace()];
    }

}
<?php

namespace AllenKhoury\AlMake;

use AllenKhoury\AlMake\Console\Commands\AlCastMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlChannelMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlComponentMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlConsoleMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlControllerMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlEventMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlExceptionMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlFactoryMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlJobMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlListenerMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlMailMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlMigrateMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlModelMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlNotificationMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlObserverMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlPolicyMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlProviderMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlRequestMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlResourceMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlRuleMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlSeederMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlTestMakeCommand;
use AllenKhoury\AlMake\Console\Commands\AlMiddlewareMakeCommand;
use Illuminate\Support\ServiceProvider;

class AlMakeServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/al-make.php', 'al-make'
        );
    }

    public function boot()
    {
        $this->boot_config();

        $this->boot_commands();
    }

    public function boot_config()
    {
        $this->publishes([
            __DIR__.'/../config/al-make.php' => config_path('al-make.php'),
        ]);
    }

    public function boot_commands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                AlCastMakeCommand::class,
                AlChannelMakeCommand::class,
                AlComponentMakeCommand::class,
                AlConsoleMakeCommand::class,
                AlControllerMakeCommand::class,
                AlEventMakeCommand::class,
                AlExceptionMakeCommand::class,
                AlFactoryMakeCommand::class,
                AlJobMakeCommand::class,
                AlListenerMakeCommand::class,
                AlMailMakeCommand::class,
                AlMiddlewareMakeCommand::class,
                AlMigrateMakeCommand::class,
                AlModelMakeCommand::class,
                AlNotificationMakeCommand::class,
                AlObserverMakeCommand::class,
                AlPolicyMakeCommand::class,
                AlProviderMakeCommand::class,
                AlRequestMakeCommand::class,
                AlResourceMakeCommand::class,
                AlRuleMakeCommand::class,
                AlSeederMakeCommand::class,
                AlTestMakeCommand::class,
            ]);
        }
    }

}
<?php

namespace ArunFung\LaravelApollo;

use ArunFung\LaravelApollo\Console\Commands\PullEnvCommand;
use Illuminate\Support\ServiceProvider;

class ApolloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
//        $this->mergeConfigFrom(
//            __DIR__ . '/config/elasticsearch.php', 'elasticsearch'
//        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/apollo.php' => config_path('apollo.php'),
        ]);

        if ($this->app->runningInConsole()) {
            $this->commands([
                PullEnvCommand::class,
            ]);
        }
    }
}
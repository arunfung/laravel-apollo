<?php

namespace ArunFung\LaravelApollo;

use ArunFung\PhpApollo\ApolloClient;

class Apollo
{
    protected $apolloClient;
    /**
     * Apollo constructor.
     */
    public function __construct()
    {
        $this->apolloClient = new ApolloClient(
            config('apollo.server', ''),
            config('apollo.app_id', 0),
            config('apollo.namespaces', []),
        );
        $this->apolloClient->setEnvExamplePath(config('apollo.env_example_path'));
        $this->apolloClient->setEnvExample(config('apollo.env_example'));
        $this->apolloClient->setEnvPath(config('apollo.env_path'));
        $this->apolloClient->setEnv(config('apollo.env'));
        $this->apolloClient->setCachePath(config('apollo.cache_path'));
    }
    
    public function pullEnv()
    {
        $this->apolloClient->pullConfigs();
    }

    public function listenChange()
    {
        $this->apolloClient->start();
    }
}
<?php

namespace ArunFung\LaravelApollo\Console\Commands;

use Illuminate\Console\Command;

class PullEnvCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apollo:pull-env';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '拉取 apollo 配置并写入 env 文件中';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
    }
}

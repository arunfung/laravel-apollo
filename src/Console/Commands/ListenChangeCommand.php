<?php

namespace ArunFung\LaravelApollo\Console\Commands;

use Illuminate\Console\Command;

class ListenChangeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'apollo:listen-change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '监听 apollo 配置更新并重新拉取配置';

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

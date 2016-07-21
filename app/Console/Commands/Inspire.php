<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class Inspire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function __construct($bid_incrise, $current_bid_amount) {
    echo $this->bid_incrise = $bid_incrise;
    echo $this->current_bid_amount = $current_bid_amount;
    }

    public function handle()
    {
        //$this->comment(PHP_EOL.Inspiring::quote().PHP_EOL);
        //$this->doSomething($this->name);
    }
}

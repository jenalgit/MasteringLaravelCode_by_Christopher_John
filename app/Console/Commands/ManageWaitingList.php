<?php

namespace App\Console\Commands;

use App\Jobs\ReserveRoomJob;
use Illuminate\Console\Command;
use Illuminate\Foundation\Bus\DispatchesJobs;

class ManageWaitingList extends Command
{

    use DispatchesJobs;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'manage:waitinglist';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Manage Accommodation Waiting List';

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
        if ($roomIsAvailableFor($user)) {
            $this->dispatch(new ReserveRoomJob());
        }
    }
}

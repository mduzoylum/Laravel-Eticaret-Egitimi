<?php

namespace App\Console\Commands;

use App\Models\email;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class UserControl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'UserControl:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Aktivasyon yapmayan kullanıcıları sil';

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
     * @return int
     */
    public function handle()
    {
        Log::error("Email ler Silindi");
        email::find(5)->delete();
    }
}

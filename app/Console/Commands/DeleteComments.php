<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Comment;

class DeleteComments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comments:delete {days}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Delete comments older then X days';

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
        $days = $this->argument('days');

        $comments = Comment::whereDate('created_at', '<=', now()->subDays($days));
        $count = $comments->count();

        if(!$count){
            $this->info("There are no comments to delete");
            return 0;
        }

        if ($this->confirm("Do you really want to delete {$count} comments?", true)) {
            $comments->delete();
            $this->info("{$count} comments were deleted successfully");
        }
        return 0;
    }
}

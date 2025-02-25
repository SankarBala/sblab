<?php

namespace App\Console\Commands;

use App\Models\Tag;
use Illuminate\Console\Command;

class CleanupUnusedTags extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tags:cleanup';

    /**
     * The console command description.
     *
     * @var string
     */

    protected $description = 'Delete tags that are not attached to any products or articles';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $deleted = Tag::doesntHave('products')->doesntHave('articles')->delete();
        $this->info("Deleted $deleted unused tags.");
    }
}

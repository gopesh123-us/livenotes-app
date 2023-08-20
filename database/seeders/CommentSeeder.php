<?php

namespace Database\Seeders;

use App\Models\Comment;
use Database\Seeders\Traits\DisableEnableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    use TruncateTable, DisableEnableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('comments');
        $comments = Comment::factory(3)->create();
        $this->enableForeignKeys();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Note;
use Database\Seeders\Traits\DisableEnableForeignKeys;
use Database\Seeders\Traits\TruncateTable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    use TruncateTable, DisableEnableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('notes');
        $notes = Note::factory(3)->untitled()->create();
        $this->enableForeignKeys();
    }
}

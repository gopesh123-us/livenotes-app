<?php

namespace Database\Seeders;

use \Database\Seeders\Traits\TruncateTable;
use \Database\Seeders\Traits\DisableEnableForeignKeys;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UserSeeder extends Seeder
{
    use TruncateTable, DisableEnableForeignKeys;
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->disableForeignKeys();
        $this->truncate('users');
        $users = \App\Models\User::factory(10)->create();
        $this->enableForeignKeys();
    }
}

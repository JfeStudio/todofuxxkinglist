<?php

namespace Database\Seeders;

use App\Models\Animal;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Task::factory(10)->create();
        User::factory(10)->create();
        Animal::factory(10)->create();
    }
}
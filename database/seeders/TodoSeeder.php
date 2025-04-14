<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Todo::create([
            'todo' => fake()->sentence(10),
            'status' => false,
            'color' => "yellow",
        ]);

        Todo::create([
            'todo' => fake()->sentence(10),
            'status' => false,
            'color' => "yellow",
        ]);

        Todo::create([
            'todo' => fake()->sentence(10),
            'status' => false,
            'color' => "yellow",
        ]);
    }
}

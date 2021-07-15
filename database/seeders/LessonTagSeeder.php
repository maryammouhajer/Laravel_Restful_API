<?php

namespace Database\Seeders;

use App\Models\LessonTag;
use Illuminate\Database\Seeder;

class LessonTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonTag::factory()->count(500)->create();
    }
}

<?php

namespace Database\Seeders;

use App\Models\Paragraph;
use Illuminate\Database\Seeder;

class TruncateParagraph extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Paragraph::truncate();
    }
}

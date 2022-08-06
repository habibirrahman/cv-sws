<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;

class TruncateImage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
    }
}

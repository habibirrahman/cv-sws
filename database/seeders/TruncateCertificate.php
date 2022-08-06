<?php

namespace Database\Seeders;

use App\Models\Certificate;
use Illuminate\Database\Seeder;

class TruncateCertificate extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Certificate::truncate();
    }
}

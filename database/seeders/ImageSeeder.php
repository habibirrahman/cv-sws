<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::truncate();
        $images = [
            ['favicon', 'favicon.png'],
            ['logo', 'logo.png'],
            ['profile', 'profile.jpg'],
            ['scope-of-work-1', 'scope-of-work-1.jpg'],
            ['scope-of-work-2', 'scope-of-work-2.jpg'],
            ['scope-of-work-3', 'scope-of-work-3.jpg'],
            ['partner', 'partner-150x75.png'],
            ['company-overview', 'company-overview-1100x350.png'],
            ['vison-misson', 'vison-misson-1100x350.png'],
            ['organozation-chart', 'organozation-chart-1140x1800.png'],
            ['project', 'project-300x300.png'],
            ['certificate', 'certificate-800x1250.png'],
        ];
        foreach ($images as $item) {
            DB::table('images')->insert([
                'identifier' => $item[0],
                'url' => $item[1],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
        $projects = [
            [1, 'p1 Modifikasi Platform WTP N 1.jpg'],
            [1, 'p1 Modifikasi Platform WTP N 2.jpg'],
            [1, 'p1 Modifikasi Platform WTP N 3.jpg'],
            [2, 'p2 Fabrikasi dan Pemasangan Ducting 1.jpg'],
            [2, 'p2 Fabrikasi dan Pemasangan Ducting 2.jpg'],
            [3, 'p3 Repair Saluran Dryer by Design 1.jpg'],
            [3, 'p3 Repair Saluran Dryer by Design 2.jpg'],
            [4, 'p4 Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6 1.jpg'],
            [4, 'p4 Pembongkaran Kondensor dan Tabung Ex-Header Steam Lt.5 dan Lt.6 2.jpg'],
            [5, 'p5 Reparasi Quench Tangki Bocor DP 3 1.jpg'],
            [5, 'p5 Reparasi Quench Tangki Bocor DP 3 2.jpg'],
            [6, 'p6 Insulation Pipa 1.jpeg'],
            [6, 'p6 Insulation Pipa 2.jpeg'],
            [6, 'p6 Insulation Pipa 3.jpeg'],
            [6, 'p6 Insulation Pipa 4.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 1.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 2.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 3.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 4.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 5.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 6.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 7.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 8.jpeg'],
            [7, 'p7 Pembangunan Gedung TPS B3 9.jpeg'],
            [8, 'p8 Pengecatan Sandblast 1.jpeg'],
            [8, 'p8 Pengecatan Sandblast 2.jpeg'],
            [8, 'p8 Pengecatan Sandblast 3.jpeg'],
            [8, 'p8 Pengecatan Sandblast 4.jpeg'],
            [8, 'p8 Pengecatan Sandblast 5.jpeg'],
        ];
        foreach ($projects as $item) {
            DB::table('images')->insert([
                'project_id' => $item[0],
                'url' => $item[1],
                'created_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}

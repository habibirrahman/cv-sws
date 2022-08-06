<?php

namespace Database\Seeders;

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
        $images = [
            ['favicon', 'favicon.png'],
            ['logo', 'logo.png'],
            ['profile', 'profile-650x650.png'],
            ['scope-of-work-1', 'scope-of-work-300x150.png'],
            ['scope-of-work-2', 'scope-of-work-300x150.png'],
            ['scope-of-work-3', 'scope-of-work-300x150.png'],
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
            [1, 'p1-1.jpg'],
            [1, 'p1-2.jpg'],
            [1, 'p1-3.jpg'],
            [2, 'p2-1.jpg'],
            [2, 'p2-2.jpg'],
            [3, 'p3-1.jpg'],
            [3, 'p3-2.jpg'],
            [4, 'p4-1.jpg'],
            [4, 'p4-2.jpg'],
            [5, 'p5-1.jpg'],
            [5, 'p5-2.jpg'],
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

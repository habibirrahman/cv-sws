<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        $admins = [
            ['SWS Support', 'swssupport@gmail.com', 'SupportSWS123!'],
        ];
        foreach ($admins as $item) {
            DB::table('users')->insert([
                'name' => $item[0],
                'email' => $item[1],
                'password' => Hash::make($item[2]),
            ]);
        }
    }
}

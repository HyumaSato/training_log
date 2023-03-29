<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('logs')->insert([
                'training' => 'こんなことをやった',
                'meal' => '白米300g',
                'memo' =>'ウナギ',
                'user_id' => 1,
                'date' => new DateTime(),
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}

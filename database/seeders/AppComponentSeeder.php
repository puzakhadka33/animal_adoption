<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\AppComponent;

class AppComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        AppComponent::truncate();
        $rows = [
            ['id' => 1, 'component' => 'User Management'],
            ['id' => 2, 'component' => 'Authentication Management'],

        ];

        foreach($rows as $row)
        {
            AppComponent::create($row);
        }
    }
}

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
            ['id' => 3, 'component' => 'Animal Management'],
            ['id' => 4, 'component' => 'Adoption Management'],
            ['id' => 5, 'component' => 'Category Management'],
            ['id' => 6, 'component' => 'blog Management'],
            ['id' => 7, 'component' => 'organization Management'],
            ['id' => 8, 'component' => 'admin Management'],
            ['id' => 9, 'component' => 'org-inbox Management'],
            ['id' => 10, 'component' => 'admin-inbox Management'],
            ['id' => 11, 'component' => 'admin-Dash Management'],
            

        ];

        foreach($rows as $row)
        {
            AppComponent::create($row);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organization;
use DB;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Organization::truncate();
        $rows = [
            [
                'user_id'=>2, 
                'alt_email' => 'org@test.com', 
                'status' => 1, 
                
            ],
        ];
        foreach($rows as $row){
            Organization::create($row);
        }
    }
}

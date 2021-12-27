<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        UserRole::truncate();
        $rows = [
            ['id' => 1, 'user_role' => 'Super Admin'],
            ['id' => 2, 'user_role' => 'Organization'],
            ['id' => 3, 'user_role' => 'Clinet'],
            
            
            
        ];
        foreach($rows as $row)
        {
            UserRole::create($row);
        }
    }
}

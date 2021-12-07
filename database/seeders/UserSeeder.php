<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        User::truncate();
        $rows = [
            [
                'name'=>'Super Admin', 
                'email' => 'a@test.com', 
                'password' => Hash::make('superadmin'), 
                'user_role_id' => 1,
                
            ]
        ];
        foreach($rows as $row){
            User::create($row);
        }
    }
}

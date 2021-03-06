<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Models\User;
use App\Models\admin;
use App\Models\organization;

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
        Admin::truncate();
        Organization::truncate();
        $rows = [
            [
                'name'=>'Super Admin', 
                'email' => 'a@test.com', 
                'contact' => '34', 
                'address' => 'fdsf', 
                'password' => Hash::make('superadmin'), 
                'user_role_id' => 1,
                
            ],
            [
                'name'=>'Organization', 
                'email' => 'org@test.com', 
                'contact' => '34', 
                'address' => 'fdsf', 
                'password' => Hash::make('org'), 
                'user_role_id' => 2,
                
            ],
            [
                'name'=>'Client', 
                'email' => 'client@test.com', 
                'contact' => '34', 
                'address' => 'fdsf', 
                'password' => Hash::make('client'), 
                'user_role_id' => 3,
                
            ],
        ];
        foreach($rows as $row){
            User::create($row);
        }
    }
}

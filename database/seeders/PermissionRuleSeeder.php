<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\PermissionRule;
use App\Models\UserRole;

class PermissionRuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        PermissionRule::truncate();
        $items = [
            ['rule' => 'user-access', 'app_component_id' => 1],
            ['rule' => 'user-add', 'app_component_id' => 1],
            ['rule' => 'user-edit', 'app_component_id' => 1],
            ['rule' => 'user-delete', 'app_component_id' => 1],
            ['rule' => 'auth-access', 'app_component_id' => 2 ],
            ['rule' => 'auth-add', 'app_component_id' => 2 ],
            ['rule' => 'auth-edit', 'app_component_id' => 2 ],
            ['rule' => 'auth-delete', 'app_component_id' => 2 ],
        ];

        foreach ($items as $item) {
            PermissionRule::create($item);
        }
        DB::table('user_role_permission_rules')->truncate();
        $rules = PermissionRule::all();

        //giving all permissions to super admin user
        $super_admin = UserRole::find(1);
        $super_admin->rules()->attach($rules);
    }
}

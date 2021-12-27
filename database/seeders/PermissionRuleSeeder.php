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

            ['rule' => 'animal-access', 'app_component_id' => 3 ],
            ['rule' => 'animal-add', 'app_component_id' => 3 ],
            ['rule' => 'animal-edit', 'app_component_id' => 3 ],
            ['rule' => 'animal-delete', 'app_component_id' => 3 ],

            ['rule' => 'adoption-access', 'app_component_id' => 4 ],
            ['rule' => 'adoption-add', 'app_component_id' => 4 ],
            ['rule' => 'adoption-edit', 'app_component_id' => 4 ],
            ['rule' => 'adoption-delete', 'app_component_id' => 4 ],

            ['rule' => 'category-access', 'app_component_id' => 5],
            ['rule' => 'category-add', 'app_component_id' => 5 ],
            ['rule' => 'category-edit', 'app_component_id' => 5 ],
            ['rule' => 'category-delete', 'app_component_id' => 5 ],

            ['rule' => 'blog-access', 'app_component_id' => 5],
            ['rule' => 'blog-add', 'app_component_id' => 5 ],
            ['rule' => 'blog-edit', 'app_component_id' => 5 ],
            ['rule' => 'blog-delete', 'app_component_id' => 5 ],

            ['rule' => 'organization-access', 'app_component_id' => 6],
            ['rule' => 'organization-add', 'app_component_id' => 6 ],
            ['rule' => 'organization-edit', 'app_component_id' => 6 ],
            ['rule' => 'organization-delete', 'app_component_id' => 6 ],
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

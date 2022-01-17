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

            ['rule' => 'blog-access', 'app_component_id' => 6],
            ['rule' => 'blog-add', 'app_component_id' => 6 ],
            ['rule' => 'blog-edit', 'app_component_id' => 6 ],
            ['rule' => 'blog-delete', 'app_component_id' => 6 ],

            ['rule' => 'organization-access', 'app_component_id' => 7],
            ['rule' => 'organization-add', 'app_component_id' => 7 ],
            ['rule' => 'organization-edit', 'app_component_id' => 7 ],
            ['rule' => 'organization-delete', 'app_component_id' => 7 ],

            ['rule' => 'admin-access', 'app_component_id' => 8],
            ['rule' => 'admin-add', 'app_component_id' => 8 ],
            ['rule' => 'admin-edit', 'app_component_id' => 8 ],
            ['rule' => 'admin-delete', 'app_component_id' => 8 ],

            ['rule' => 'org-inbox-access', 'app_component_id' => 9],
            ['rule' => 'org-inbox-add', 'app_component_id' => 9 ],
            ['rule' => 'org-inbox-edit', 'app_component_id' => 9 ],
            ['rule' => 'org-inbox-delete', 'app_component_id' => 9 ],

            ['rule' => 'admin-inbox-access', 'app_component_id' => 10],
            ['rule' => 'admin-inbox-add', 'app_component_id' => 10 ],
            ['rule' => 'admin-inbox-edit', 'app_component_id' => 10 ],
            ['rule' => 'admin-inbox-delete', 'app_component_id' => 10 ],

            ['rule' => 'admin-dash-access', 'app_component_id' => 11],
            ['rule' => 'admin-dash-add', 'app_component_id' => 11 ],
            ['rule' => 'admin-dash-edit', 'app_component_id' => 11 ],
            ['rule' => 'admin-dash-delete', 'app_component_id' => 11 ],
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

<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'active_campaign_client_create',
            ],
            [
                'id'    => 19,
                'title' => 'active_campaign_client_edit',
            ],
            [
                'id'    => 20,
                'title' => 'active_campaign_client_show',
            ],
            [
                'id'    => 21,
                'title' => 'active_campaign_client_delete',
            ],
            [
                'id'    => 22,
                'title' => 'active_campaign_client_access',
            ],
            [
                'id'    => 23,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 24,
                'title' => 'user_alert_edit',
            ],
            [
                'id'    => 25,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 26,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 27,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 28,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 29,
                'title' => 'audit_log_access',
            ],
        ];

        Permission::insert($permissions);
    }
}

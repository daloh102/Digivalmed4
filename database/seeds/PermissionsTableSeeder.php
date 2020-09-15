<?php

use App\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'medizingerate_create',
            ],
            [
                'id'    => 18,
                'title' => 'medizingerate_edit',
            ],
            [
                'id'    => 19,
                'title' => 'medizingerate_show',
            ],
            [
                'id'    => 20,
                'title' => 'medizingerate_delete',
            ],
            [
                'id'    => 21,
                'title' => 'medizingerate_access',
            ],
            [
                'id'    => 22,
                'title' => 'risikoprojekt_access',
            ],
            [
                'id'    => 23,
                'title' => 'workflow_create',
            ],
            [
                'id'    => 24,
                'title' => 'workflow_edit',
            ],
            [
                'id'    => 25,
                'title' => 'workflow_show',
            ],
            [
                'id'    => 26,
                'title' => 'workflow_delete',
            ],
            [
                'id'    => 27,
                'title' => 'workflow_access',
            ],
            [
                'id'    => 28,
                'title' => 'workflow_path_create',
            ],
            [
                'id'    => 29,
                'title' => 'workflow_path_edit',
            ],
            [
                'id'    => 30,
                'title' => 'workflow_path_show',
            ],
            [
                'id'    => 31,
                'title' => 'workflow_path_delete',
            ],
            [
                'id'    => 32,
                'title' => 'workflow_path_access',
            ],
            [
                'id'    => 33,
                'title' => 'risiken_create',
            ],
            [
                'id'    => 34,
                'title' => 'risiken_edit',
            ],
            [
                'id'    => 35,
                'title' => 'risiken_show',
            ],
            [
                'id'    => 36,
                'title' => 'risiken_delete',
            ],
            [
                'id'    => 37,
                'title' => 'risiken_access',
            ],
            [
                'id'    => 38,
                'title' => 'result_create',
            ],
            [
                'id'    => 39,
                'title' => 'result_edit',
            ],
            [
                'id'    => 40,
                'title' => 'result_show',
            ],
            [
                'id'    => 41,
                'title' => 'result_delete',
            ],
            [
                'id'    => 42,
                'title' => 'result_access',
            ],
            [
                'id'    => 43,
                'title' => 'dicom_namer_access',
            ],
            [
                'id'    => 44,
                'title' => 'ray_stationtwo_access',
            ],
            [
                'id'    => 45,
                'title' => 'dicom_namer_io_create',
            ],
            [
                'id'    => 46,
                'title' => 'dicom_namer_io_edit',
            ],
            [
                'id'    => 47,
                'title' => 'dicom_namer_io_show',
            ],
            [
                'id'    => 48,
                'title' => 'dicom_namer_io_delete',
            ],
            [
                'id'    => 49,
                'title' => 'dicom_namer_io_access',
            ],
            [
                'id'    => 50,
                'title' => 'dicom_namer_cbc_t_create',
            ],
            [
                'id'    => 51,
                'title' => 'dicom_namer_cbc_t_edit',
            ],
            [
                'id'    => 52,
                'title' => 'dicom_namer_cbc_t_show',
            ],
            [
                'id'    => 53,
                'title' => 'dicom_namer_cbc_t_delete',
            ],
            [
                'id'    => 54,
                'title' => 'dicom_namer_cbc_t_access',
            ],
            [
                'id'    => 55,
                'title' => 'dicom_namer_conv_create',
            ],
            [
                'id'    => 56,
                'title' => 'dicom_namer_conv_edit',
            ],
            [
                'id'    => 57,
                'title' => 'dicom_namer_conv_show',
            ],
            [
                'id'    => 58,
                'title' => 'dicom_namer_conv_delete',
            ],
            [
                'id'    => 59,
                'title' => 'dicom_namer_conv_access',
            ],
            [
                'id'    => 60,
                'title' => 'ray_stationtwo_io_create',
            ],
            [
                'id'    => 61,
                'title' => 'ray_stationtwo_io_edit',
            ],
            [
                'id'    => 62,
                'title' => 'ray_stationtwo_io_show',
            ],
            [
                'id'    => 63,
                'title' => 'ray_stationtwo_io_delete',
            ],
            [
                'id'    => 64,
                'title' => 'ray_stationtwo_io_access',
            ],
            [
                'id'    => 65,
                'title' => 'ray_stationtwo_conv_create',
            ],
            [
                'id'    => 66,
                'title' => 'ray_stationtwo_conv_edit',
            ],
            [
                'id'    => 67,
                'title' => 'ray_stationtwo_conv_show',
            ],
            [
                'id'    => 68,
                'title' => 'ray_stationtwo_conv_delete',
            ],
            [
                'id'    => 69,
                'title' => 'ray_stationtwo_conv_access',
            ],
            [
                'id'    => 70,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 71,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 72,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}

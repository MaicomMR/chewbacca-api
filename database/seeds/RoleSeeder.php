<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            'createReports',
            'viewReports',
            'updateReports',
            'deleteReportes',

            'createViolences',
            'viewViolences',
            'updateViolences',
            'deleteViolences',

            'createSchools',
            'viewSchools',
            'updateSchools',
            'deleteSchools'
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        $role = Role::create(['name' => 'school']);
        $role->givePermissionTo(
            'createReports',
            'viewReports',
            
            'viewViolences',

            'viewSchools'
        );

        $role = Role::create(['name' => 'manager']);
        $role->givePermissionTo(
            'viewReports',
            'updateReports',

            'createViolences',
            'viewViolences',
            'updateViolences',
            'deleteViolences',

            'createSchools',
            'viewSchools',
            'updateSchools',
            'deleteSchools'
        );

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(
            'createReports',
            'viewReports',
            'updateReports',
            'deleteReportes',

            'createViolences',
            'viewViolences',
            'updateViolences',
            'deleteViolences',

            'createSchools',
            'viewSchools',
            'updateSchools',
            'deleteSchools'
        );
        
    
    }
}

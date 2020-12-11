<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $administratorPermissions_array = [];
        $customerPermissions_array = [];
        $customerServicePermissions_array = [];
        $contributorPermissions_array = [];
        $qualityControlOperatorPermissions_array = [];
        $qualityControlSupervisorPermissions_array = [];

        $createOrders = Permission::create(['name' => 'create_orders']);
        $viewOrders = Permission::create(['name' => 'view_orders']);
        $editOrders = Permission::create(['name' => 'edit_orders']);
        $deleteOrders = Permission::create(['name' => 'delete_orders']);

        $createUsers = Permission::create(['name' => 'create_user']);
        $viewUsers = Permission::create(['name' => 'view_user']);
        $editUsers = Permission::create(['name' => 'edit_user']);
        $deleteUsers = Permission::create(['name' => 'delete_user']);

        $importOrders = Permission::create(['name' => 'import_orders']);
        $exportOrders = Permission::create(['name' => 'export_orders']);
        $approveUploads = Permission::create(['name' => 'approve_uploads']);
        $reUploadImages= Permission::create(['name' => 'reupload_images']);
        $Configurations = Permission::create(['name' => 'configurations']);

        $superAdminRole = Role::create(['name' => 'Super Admin']);
        $administratorRole = Role::create(['name' => 'Administrator']);
        $customerRole = Role::create(['name' => 'Customer']);
        $customerServiceRole = Role::create(['name' => 'Customer Service']);
        $contributorRole = Role::create(['name' => 'Contributor']);
        $qualityControlOperatorRole = Role::create(['name' => 'Quality Control Operator']);
        $qualityControlSupervisorRole = Role::create(['name' => 'Quality Control Supervisor']);

        //Adminstrator Permissions
        array_push($administratorPermissions_array, $createOrders);
        array_push($administratorPermissions_array, $viewOrders);
        array_push($administratorPermissions_array, $editOrders);
        array_push($administratorPermissions_array, $deleteOrders);
        array_push($administratorPermissions_array, $createUsers);
        array_push($administratorPermissions_array, $viewUsers);
        array_push($administratorPermissions_array, $editUsers);
        array_push($administratorPermissions_array, $deleteUsers);
        array_push($administratorPermissions_array, $importOrders);
        array_push($administratorPermissions_array, $exportOrders);
        array_push($administratorPermissions_array, $approveUploads);
        array_push($administratorPermissions_array, $Configurations);


        //Customers Permissions
        array_push($customerPermissions_array, $createOrders);
        array_push($customerPermissions_array, $viewOrders);
        array_push($customerPermissions_array, $editOrders);
        array_push($customerPermissions_array, $exportOrders);

        //Customers Service Permissions
        array_push($customerServicePermissions_array, $createOrders);
        array_push($customerServicePermissions_array, $viewOrders);
        array_push($customerServicePermissions_array, $exportOrders);

        //Contributor Permissions
        array_push($contributorPermissions_array, $createOrders);
        array_push($contributorPermissions_array, $viewOrders);
        array_push($contributorPermissions_array, $editOrders);
        array_push($contributorPermissions_array, $exportOrders);

        //Quality Control Operator Permissions
        array_push($qualityControlOperatorPermissions_array, $createOrders);
        array_push($qualityControlOperatorPermissions_array, $viewOrders);
        array_push($qualityControlOperatorPermissions_array, $editOrders);
        array_push($qualityControlOperatorPermissions_array, $exportOrders);
        array_push($qualityControlOperatorPermissions_array, $reUploadImages);

        //Quality Control Supervisor Permissions
        array_push($qualityControlSupervisorPermissions_array, $createOrders);
        array_push($qualityControlSupervisorPermissions_array, $viewOrders);
        array_push($qualityControlSupervisorPermissions_array, $editOrders);
        array_push($qualityControlSupervisorPermissions_array, $exportOrders);
        array_push($qualityControlSupervisorPermissions_array, $reUploadImages);
        array_push($qualityControlSupervisorPermissions_array, $approveUploads);




        $administratorRole->syncPermissions($administratorPermissions_array);
        $superAdminRole->syncPermissions($administratorPermissions_array);
        $customerRole->syncPermissions($customerPermissions_array);
        $customerServiceRole->syncPermissions($customerServicePermissions_array);
        $contributorRole->syncPermissions($contributorPermissions_array);
        $qualityControlOperatorRole->syncPermissions($qualityControlOperatorPermissions_array);
        $qualityControlSupervisorRole->syncPermissions($contributorPermissions_array);


        User::create([
            'name' => 'Administrator',
            'email' => 'admin@tets.com',
            'password' => Hash::make('Administrator2020!')
        ])->syncRoles('Administrator');




    }
}

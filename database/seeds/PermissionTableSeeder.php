<?php
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\User;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $permissions = [
           'user-list',
           'user-create',
           'user-edit',
           'user-delete',
           'user-show',
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'role-show',
           'permissions-list',
           'permissions-create',
           'permissions-edit',
           'permissions-delete',
           'permissions-show',
              

        ];


        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());

        $user=User::find(1);
        $user->assignRole('admin');

        

    }
}
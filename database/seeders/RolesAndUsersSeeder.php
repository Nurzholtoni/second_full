<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $userRole = Role::create(['name' => 'user']);

        // Создание прав
        $editPermission = Permission::create(['name' => 'edit products']);
        $deletePermission = Permission::create(['name' => 'delete products']);

        // Назначение прав администратору
        $adminRole->givePermissionTo([$editPermission, $deletePermission]);

        // Создание администратора
        $admin = User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password') // Задай безопасный пароль
        ]);
        $admin->assignRole($adminRole);

        // Создание обычного пользователя
        $user = User::create([
            'name' => 'Regular User',
            'email' => 'user@example.com',
            'password' => Hash::make('password')
        ]);
        $user->assignRole($userRole);
    }
}

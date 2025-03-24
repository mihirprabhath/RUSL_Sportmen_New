<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run()
    {
        // Ensure permissions table exists before seeding
        if (!Role::count()) {
            Role::create(['name' => 'admin']);
            Role::create(['name' => 'user']);
            Role::create(['name' => 'sub_admin']);
            Role::create(['name' => 'super_admin']);
        }
    }
}

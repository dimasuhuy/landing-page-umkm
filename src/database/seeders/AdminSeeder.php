<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run()
    {
        $adminExists = Admin::where('email', 'admin@sidehousecafe.com')->exists();

        if (!$adminExists) {
            $admin = Admin::create([
                'name' => 'Admin',
                'email' => 'admin@sidehousecafe.com',
                'password' => Hash::make('dimasrohman_229'),
            ]);

            $admin->replicateToMysql();
        }
    }
}

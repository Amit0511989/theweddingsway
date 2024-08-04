<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Add Super Admin Role
        $superadmin = new Admin();
        $superadmin->name = 'john joe';
		$superadmin->email = 'admin@admin.com';
		$superadmin->password = Hash::make('password');		
		$superadmin->save();
    }
}

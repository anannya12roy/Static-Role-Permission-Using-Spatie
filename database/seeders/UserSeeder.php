<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','diptoarna@gmail.com')->first();
        if(is_null($user)){
            $user = new User();
            $user->name = "Dipto Arna";
            $user->email = "diptoarna@gmail.com";
            $user->password = bcrypt('123456');
            $user->assignRole('admin');
            $user->save();
        }

    }
}

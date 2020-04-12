<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();

        $role_admin = Role::where('name', 'admin')->first();
        $role_membre  = Role::where('name', 'membre')->first();
        /***
        $admin = new User();
        $admin->name = 'Administrateur 1';
        $admin->email = 'admin@unilim.fr';
        $admin->password = bcrypt('pwlpmi');
        $admin->save();
        $admin = User::find(1);
        $admin->roles()->attach($role_admin);    
        
        $membre = new User();
        $membre->name = 'Membre 1';
        $membre->email = 'membre@unilim.fr';
        $membre->password = bcrypt('pwlpmi');
        $membre->save();
        $membre = User::find(2);
        $membre->roles()->attach($role_membre);
        */
        
        $admin = User::create([
            'name' => 'Administrateur',
            'email' => 'admin@unilim.fr',
            'password' => Hash::make('pwlpmi')
        ]);

        $membre = User::create([
            'name' => 'Membre',
            'email' => 'membre@unilim.fr',
            'password' => Hash::make('pwlpmi')
        ]);
        
        $admin->roles()->attach($role_admin);
        $membre->roles()->attach($role_membre);
        
    }
}

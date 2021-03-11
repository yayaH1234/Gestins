<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Foundation\Auth\User;

use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::truncate(); 
       // DB::table('users')->truncate();
           $users = [ 
            [ 
              'name' => 'Admin',
              'email' => 'admin@gmail.com',
              'password' => '123456',
              'is_admin' => '1',
              'clienttype' => 'admin',
            ],
            [
              'name' => 'NameCommerciale',
              'email' => 'commercial@gmail.com',
              'password' => '13456',
              'is_admin' => null,
              'clienttype' => 'commercial',
            ],
             [
              'name' => 'NameRespQualite',
              'email' => 'respqualite@gmail.com',
              'password' => '13456',
              'is_admin' => null,
              'clienttype' => 'respqualite',
            ],
            [
             'name' => 'NameRespProduction',
             'email' => 'respproduction@gmail.com',
             'password' => '13456',
             'is_admin' => null,
             'clienttype' => 'respproduction',
           ],
           [
            'name' => 'NameRespADV',
            'email' => 'respadv@gmail.com',
            'password' => '13456',
            'is_admin' => null,
            'clienttype' => 'respadv',
          ],
          [
           'name' => 'NameRespLogistique',
           'email' => 'resplogistique@gmail.com',
           'password' => '13456',
           'is_admin' => null,
           'clienttype' => 'resplogistique',
         ]
          ];

          foreach($users as $user)
          {
              User::create([
               'name' => $user['name'],
               'email' => $user['email'],
               'password' => Hash::make($user['password']),
               'is_admin' => $user['is_admin'],
               'clienttype' => $user['clienttype'],
             ]);
           }
    }


    
}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('TBL_Usuarios')->insert([
            [
                'name' => 'Code Freestyle',
                'email' => 'root@app.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '1',
                
            ],
            [
                'name' => 'Paisa',
                'email' => 'paisa@mail.com',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '2',
                
            ],
            [
                'name' => 'Fredo',
                'email' => 'fredo@joya.joya',
                'password' => bcrypt('12345'),
                'FK_RolesId' => '3',
               
            ]
        ]);
    }
}

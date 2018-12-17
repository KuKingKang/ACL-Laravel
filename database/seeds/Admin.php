<?php

use Illuminate\Database\Seeder;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = new \App\User;
        $admin->name = "Admin";
        $admin->email = "administrator@uneed.test";
        $admin->roles = json_encode(["ADMIN"]);
        $admin->password = \Hash::make("admin");

        $admin->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}

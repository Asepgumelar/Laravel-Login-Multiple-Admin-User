<?php

use Illuminate\Database\Seeder;
use App\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = "Administrator";
        $admin->email = "admin@admin.admin";
        $admin->isAdmin = true;
        $admin->password = \Hash::make("admin");
        $admin->save();
        $this->command->info("User Admin berhasil diinsert");
    }
}

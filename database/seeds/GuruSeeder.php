<?php

use Illuminate\Database\Seeder;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guru = new \App\User;
        $guru->name = "guru";
        $guru->email = "guru@gmail.com";
        $guru->password = \Hash::make("guru123");
        $guru->roles = "Guru";
        $guru->save();
        $this->command->info("Guru berhasil ditambah");
    }
}

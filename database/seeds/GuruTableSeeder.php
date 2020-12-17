<?php

use Illuminate\Database\Seeder;

class GuruTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Guru::class, 3)->create();
        $this->call(UserTableSeeder::class);
        $this->call(GuruTableSeeder::class);
    }
}

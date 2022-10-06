<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(app()->environment() == 'local') {
            $this->call(RoleTableSeeder::class);
            $this->call(UsersTableSeeder::class);
            $this->call(BrandSeeder::class);
            $this->call(MarkaSeeder::class);
            $this->call(ModelleSeeder::class);
            $this->call(CarSeeder::class);
       
        }
        else {
            $this->call(RoleTableSeeder::class);

        }
        
    }
}

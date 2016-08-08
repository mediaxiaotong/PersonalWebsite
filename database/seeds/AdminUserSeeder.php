<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Crypt;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        App\Model\Admin::create(['name'=>'luochuanyuewu','password'=>Crypt::encrypt('luochuanyuewu')]);
    }
}

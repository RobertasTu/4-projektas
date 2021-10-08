<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // tik naudojant rankini seedinima
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Client::class, 50)->create();
    }
}

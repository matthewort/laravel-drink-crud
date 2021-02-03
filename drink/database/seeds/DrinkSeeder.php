<?php
use App\Drink;
use Illuminate\Database\Seeder;



class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Drink::class, 50) -> create();  //il 50 è riferito al numero di employee che mi interessa avere nella tabella
    }
}

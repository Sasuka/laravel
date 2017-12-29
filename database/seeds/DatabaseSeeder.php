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
         $this->call(ImportDetailTableSeeder::class);
    }
}
class ImportDetailTableSeeder extends Seeder{
    public function run(){
        DB::table('import_detail')->insert([
                array('amount_import'=>290,'id_import'=>2,'price_import'=>30,'cost'=>770)
        ]);
    }
}

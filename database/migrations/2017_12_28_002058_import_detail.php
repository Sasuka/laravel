<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImportDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('import_detail',function (Blueprint $table){
           $table->increments('id');
           $table->integer('amount_import');
           $table->integer('id_import')->unsigned();
           $table->foreign('id_import')->references('id')->on('imports');
           $table->float('price_import',4,2);
           $table->float('cost',5,2);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //


    }
}

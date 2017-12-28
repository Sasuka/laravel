<?php
/**
 * Created by PhpStorm.
 * User: tient
 * Date: 25/12/2017
 * Time: 14:23
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImportsTable extends Migration
{
    public function up()
    {
        Schema::create('imports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('create_at');
            $table->float('sum_cost',5,2);
            $table->float('pay_before_cost',5,2);
            $table->boolean('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('imports');
    }
}
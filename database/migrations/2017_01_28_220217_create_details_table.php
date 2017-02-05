<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      $table->increments('id');

          $table->string('name')->unsigned()->nullable();
        //  $table->integer('user_id')->unsigned()->nullable();
          $table->string('category');
          $table->integer('phone');
            $table->string('email');
              $table->string('address');

          $table->timestamps();
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

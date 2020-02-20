<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTempsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items_temps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->bigInteger('brand_id')->unsigned();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items_temps');
    }
}

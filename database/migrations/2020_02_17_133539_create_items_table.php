<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable(); // nama item

            $table->integer('user_id'); // user siapa yang input data
            $table->integer('supplier_id')->unsigned()->nullable(); // supplier apa
            $table->integer('catagory_id')->unsigned()->nullable(); // kategori apa
            $table->integer('merk_id')->unsigned()->nullable(); // merek apa

            $table->timestamp('year_of_purchase')->nullable(); // tahun beli
            $table->decimal('price', 30, 3)->nullable(); // harga item
            $table->string('serial_number')->nullable(); // nomor seri
            $table->text('image_url')->nullable(); // image
            $table->timestamps();


            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users') // relasi ke user siapa yang insert data
            //     ->onDelete('cascade');

            // $table->foreign('supplier_id')
            //     ->references('id')
            //     ->on('suppliers') // relasi ke supplier
            //     ->onDelete('set null');

            // $table->foreign('catagory_id')
            //     ->references('id')
            //     ->on('categories') // relasi ke category
            //     ->onDelete('set null');

            // $table->foreign('merk_id')
            //     ->references('id')
            //     ->on('merks') // relasi ke merek
            //     ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('jo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('jo_code');
            $table->string('title');
            $table->timestamp('start_date');
            $table->timestamp('deadline')->nullable();
            $table->text('description')->nullable();
            $table->text('image_url')->nullable();
            $table->string('material')->nullable();
            $table->string('finishing')->nullable();
            $table->integer('qty')->nullable();
            $table->string('size')->nullable();
            $table->text('notes')->nullable();
            
            $table->unsignedBigInteger('user_id');
            $table->unsignedTinyInteger('parent_id');
            $table->unsignedInteger('category_id');

            $table->timestamp('deleted_at')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreign('parent_id')
                ->references('id')
                ->on('jo_parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('jo');
    }
}

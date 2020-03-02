<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJoJoTagTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('jo_jo_tag', function (Blueprint $table) {
            $table->unsignedBigInteger('jo_id');
            $table->unsignedBigInteger('tag_id');

            $table->foreign('jo_id')
                ->references('id')
                ->on('jo');

            $table->foreign('tag_id')
                ->references('id')
                ->on('jo_tags');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('jo_jo_tag');
    }
}

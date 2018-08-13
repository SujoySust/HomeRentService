<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('house_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('owner_id');
            $table->string('title');
            $table->integer('price');
            $table->string('division');
            $table->string('location');
            $table->string('picture');
            $table->text('details')->nullable();
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('house_posts');
    }
}

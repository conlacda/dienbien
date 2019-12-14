<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildren3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children3s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('status')->nullable();
            $table->longText('cover_img')->default('/images/news.png');
            $table->longText('slug')->nullable();
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
        Schema::dropIfExists('children3s');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeFieldsToNewsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('raise_fund_posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('user_id');
            $table->longText('content')->nullable();
            $table->longText('title');
            $table->longText('type')->nullable();
            $table->string('status')->default('private'); // public
            $table->timestamps();
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->longText('user_id')->nullable();
            $table->longText('poster')->nullable(); // admin or member
            $table->longText('status')->nullable(); // public or unpblic
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('raise_fund_posts');
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->dropColumn('poster');
            $table->dropColumn('status');
        });
    }
}

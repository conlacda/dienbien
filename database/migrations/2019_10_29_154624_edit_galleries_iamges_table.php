<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditGalleriesIamgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->string('link')->nullable();
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->longText('introduction')->nullable();
            $table->dropColumn('image_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('images', function (Blueprint $table) {
            $table->dropColumn('link');
        });
        Schema::table('galleries', function (Blueprint $table) {
            $table->dropColumn('introduction');
            $table->string('image_id');
        });
    }
}

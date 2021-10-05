<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('special1');
            $table->string('icon_special1');
            $table->string('definition_special1');
            $table->string('special2');
            $table->string('icon_special2');
            $table->string('definition_special2');
            $table->string('special3');
            $table->string('icon_special3');
            $table->string('definition_special3');
            $table->string('special4');
            $table->string('icon_special4');
            $table->string('definition_special4');
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
        Schema::dropIfExists('abouts');
    }
}

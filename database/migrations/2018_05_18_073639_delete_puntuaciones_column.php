<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeletePuntuacionesColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('puntuaciones', function (Blueprint $table) {
            $table->dropColumn('tiempo');
            $table->string('time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('puntuaciones', function (Blueprint $table) {
            $table->dropColumn('time');
            $table->time('tiempo');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJawabanaTepatToPertanyaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('jawabana_tepat')->nullable;
            $table->foreign('jawabana_tepat')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pertanyaan', function (Blueprint $table) {
            //
            $table->dropForeign(['jawabana_tepat']);
            $table->dropColumn(['jawabana_tepat']);
        });
    }
}

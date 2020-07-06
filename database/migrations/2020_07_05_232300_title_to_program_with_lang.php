<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TitleToProgramWithLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            //
        $tableName = 'title_to_program_with_lang';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('programId');
            $table->unsignedBigInteger('titleId');
            $table->unsignedBigInteger('langId');
            $table->foreign('programId')
                ->references('id')
                ->on('programs');
            $table->foreign('titleId')
                ->references('id')
                ->on('titles');
            $table->foreign('langId')
                ->references('id')
                ->on('langs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('title_to_program_with_lang', function (Blueprint $table) {
            //
        });
    }
}

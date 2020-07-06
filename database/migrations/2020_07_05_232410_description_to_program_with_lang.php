<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DescriptionToProgramWithLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tablename = 'description_to_program_with_lang';
        Schema::dropIfExists($tablename);
        Schema::create($tablename, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('descriptionId');
            $table->unsignedBigInteger('programId');
            $table->unsignedBigInteger('langId');
            $table->foreign('programId')
                ->references('id')
                ->on('programs');
            $table->foreign('descriptionId')
                ->references('id')
                ->on('descriptions');
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
        Schema::table('program_with_lang', function (Blueprint $table) {
            //
        });
    }
}

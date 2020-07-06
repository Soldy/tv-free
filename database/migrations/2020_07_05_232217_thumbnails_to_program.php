<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ThumbnailsToProgram extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'thumbnails_to_programs';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->uuid('uuid');
            $table->unsignedBigInteger('thumbnailId');
            $table->unsignedBigInteger('programId');
            $table->foreign('thumbnailId')
                ->references('id')
                ->on('thumbnails');
            $table->foreign('programId')
                ->references('id')
                ->on('programs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('program', function (Blueprint $table) {
            //
        });
    }
}

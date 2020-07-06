<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Schedule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'schedule';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->uuid('uuid');
            $table->unsignedBigInteger('channelId');
            $table->unsignedBigInteger('programId');
            $table->dateTimeTZ('start');
            $table->dateTimeTZ('finnish');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('channelId')
                ->references('id')
                ->on('channels');
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
        //
    }
}

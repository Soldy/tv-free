<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TitleToChannelWithLang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'title_to_channel_with_lang';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->unsignedBigInteger('titleId');
            $table->unsignedBigInteger('channelId');
            $table->unsignedBigInteger('langId');
            $table->foreign('channelId')
                ->references('id')
                ->on('channels');
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
        Schema::table('channel_with_lang', function (Blueprint $table) {
            //
        });
    }
}

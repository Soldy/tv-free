<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Langs extends Migration
{
    /**
     * Run the migrations.
     * the lang much more complex but that just an example.
     *
     * @return void
     */
    public function up()
    {
        $tableName = 'langs';
        Schema::dropIfExists($tableName);
        Schema::create($tableName, function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->uuid('uuid');
            $table->string('ISO_code', 2); 
            $table->string('ISO_name', 36);
            $table->dateTime('start');
            $table->dateTime('end');
            $table->timestamps();
            $table->softDeletes();
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

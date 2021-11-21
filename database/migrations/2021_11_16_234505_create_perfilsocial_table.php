<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerfilsocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfilsocial', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nome");
            $table->text("description");
            $table->string("perfilimage");
            $table->string("print1");
            $table->string("print2");
            $table->string("print3");
            $table->string("print4");
            $table->double("user_id");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfilsocial');
    }
}

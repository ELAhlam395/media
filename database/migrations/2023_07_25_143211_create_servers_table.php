<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('ip');
            $table->string('password');
            $table->string('domain');
            $table->string('provider');
            $table->string('duedate');
            $table->string('datecreation');
            $table->string('price');
            $table->string('methodepayment');
            $table->string('namesrv');
            $table->string('account');
            $table->string('comment');



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
        Schema::dropIfExists('servers');
    }
};

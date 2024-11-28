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
        Schema::create('marioreview', function (Blueprint $table) { //命名規則に沿うとModelに関連付けされる
            $table->id();
            $table->foreignId('user_id')->constrained();
            // $table->unsignedBigInteger('user_id');                      // 1
            // $table->foreign('user_id')->references('id')->on('users');  // 2
            $table->string('name');
            $table->string('rating');
            $table->string('title');
            $table->text('body');
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
        Schema::dropIfExists('marioreview');
    }
};

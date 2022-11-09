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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer("segmentation_id")->nullable();
            $table->integer("program_id")->nullable();
            $table->integer("user_id")->nullable();
            $table->string("netcommerce_id")->nullable();
            $table->text("h2a_token")->nullable();
            $table->integer("identification_type_id")->nullable();
            $table->integer("identification_number")->nullable();
            $table->string("mobile_number")->nullable();
            $table->string("birth_date")->nullable();
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
        Schema::dropIfExists('users');
    }
};

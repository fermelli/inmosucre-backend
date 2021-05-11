<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->id();
            $table->string("code", 16)->unique();
            $table->string("address", 48);
            $table->string("postal_code", 16)->unique()->nullable();
            $table->string("city", 24);
            $table->string("fax", 24)->unique()->nullable();
            $table->string("phone", 24);
            $table->string("action_zone", 24);
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
        Schema::dropIfExists('agencies');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('workstand')->nullable();
            $table->string('phone_number_1', 15)->nullable(); // +00 000 000 000
            $table->string('phone_number_2', 15)->nullable(); // (00) 000 00 00
            $table->string('email')->nullable()->unique();
            $table->unsignedBigInteger('companies_id');
            $table->foreign('companies_id')->references('id')->on('companies');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('people');
    }
}

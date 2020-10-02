<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('short_name');
			$table->string('street');
			$table->string('city');
			$table->string('post_code');
			$table->unsignedBigInteger('phone_number_1'); // 00 000 000 000
            $table->unsignedBigInteger('phone_number_2'); // 00 000 00 00
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
        Schema::dropIfExists('companies');
    }
}

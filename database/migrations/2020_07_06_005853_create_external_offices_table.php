<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExternalOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('external_offices', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 254);
            $table->string('sender_name', 254);
            $table->string('address', 254);
            $table->string('contact_number', 15);
            $table->string('contact_email', 254);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('external_offices');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('role_id')->index();
            $table->string('username', 50)->unique();
            $table->string('password');
            $table->string('first_name', 80);
            $table->string('middle_name', 80);
            $table->string('last_name', 80);
            $table->string('suffix', 20)->nullable();
            $table->unsignedTinyInteger('gender');
            $table->date('birthday');
            $table->string('id_number', 50);
            $table->unsignedBigInteger('office_id')->index();
            $table->unsignedBigInteger('division_id')->index()->nullable();
            $table->unsignedBigInteger('unit_id')->index()->nullable();
            $table->unsignedBigInteger('sector_id')->index()->nullable();
            $table->boolean('is_active')->default(true);
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('office_id')->references('id')->on('offices');
            $table->foreign('division_id')->references('id')->on('divisions');
            $table->foreign('unit_id')->references('id')->on('units');
            $table->foreign('sector_id')->references('id')->on('sectors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex(['role_id']);
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
            $table->dropIndex(['office_id']);
            $table->dropForeign(['office_id']);
            $table->dropColumn('office_id');
            $table->dropIndex(['division_id']);
            $table->dropForeign(['division_id']);
            $table->dropColumn('division_id');
            $table->dropIndex(['unit_id']);
            $table->dropForeign(['unit_id']);
            $table->dropColumn('unit_id');
            $table->dropIndex(['sector_id']);
            $table->dropForeign(['sector_id']);
            $table->dropColumn('sector_id');
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('users');
    }
}

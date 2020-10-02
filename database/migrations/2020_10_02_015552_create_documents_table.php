<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('tracking_code', 120);
            $table->string('title');
            $table->unsignedTinyInteger('type');
            $table->unsignedTinyInteger('purpose');
            $table->unsignedBigInteger('originating_office')->index()->nullable();
            $table->unsignedBigInteger('current_office')->index()->nullable();
            $table->string('sender_name')->nullable();
            $table->unsignedInteger('page_count');
            $table->date('date_filed');
            $table->boolean('is_terminal')->default(false);
            $table->string('remarks')->nullable();
            $table->string('attachment', 120)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('originating_office')->references('id')->on('offices');
            $table->foreign('current_office')->references('id')->on('offices');
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
            $table->dropIndex(['originating_office']);
            $table->dropForeign(['originating_office']);
            $table->dropColumn('originating_office');
            $table->dropIndex(['current_office']);
            $table->dropForeign(['current_office']);
            $table->dropColumn('current_office');
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('documents');
    }
}

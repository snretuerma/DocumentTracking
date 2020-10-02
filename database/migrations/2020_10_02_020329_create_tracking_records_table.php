<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracking_records', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('document_id')->index();
            $table->unsignedTinyInteger('actions');
            $table->unsignedTinyInteger('status');
            $table->unsignedBigInteger('approved_by')->index()->nullable();
            $table->unsignedBigInteger('touched_by')->index()->nullable();
            $table->dateTime('last_touched');
            $table->unsignedBigInteger('send_to')->index()->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('document_id')->references('id')->on('documents');
            $table->foreign('approved_by')->references('id')->on('users');
            $table->foreign('touched_by')->references('id')->on('users');
            $table->foreign('send_to')->references('id')->on('offices');
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
            $table->dropIndex(['document_id']);
            $table->dropForeign(['document_id']);
            $table->dropColumn('document_id');
            $table->dropIndex(['approved_by']);
            $table->dropForeign(['approved_by']);
            $table->dropColumn('approved_by');
            $table->dropIndex(['touched_by']);
            $table->dropForeign(['touched_by']);
            $table->dropColumn('touched_by');
            $table->dropIndex(['send_to']);
            $table->dropForeign(['send_to']);
            $table->dropColumn('send_to');
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('tracking_records');
    }
}

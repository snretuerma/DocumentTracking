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
            $table->boolean('is_external')->default(false);
            $table->unsignedBigInteger('document_type_id');
            $table->unsignedBigInteger('originating_office')->index()->nullable();
            $table->unsignedBigInteger('current_office')->index()->nullable();
            $table->string('sender_name')->nullable();
            $table->unsignedInteger('page_count');
            $table->date('date_filed');
            $table->unsignedTinyInteger('is_terminal')->default(0);
            $table->string('remarks')->nullable();
            $table->unsignedTinyInteger('attachment_page_count')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('originating_office')->references('id')->on('offices');
            $table->foreign('current_office')->references('id')->on('offices');
            $table->foreign('document_type_id')->references('id')->on('document_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->dropIndex(['originating_office']);
            $table->dropForeign(['originating_office']);
            $table->dropColumn('originating_office');
            $table->dropIndex(['current_office']);
            $table->dropForeign(['current_office']);
            $table->dropColumn('current_office');
            $table->dropIndex(['document_type_id']);
            $table->dropForeign(['document_type_id']);
            $table->dropColumn('document_type_id');
            $table->dropSoftDeletes();
        });
        Schema::dropIfExists('documents');
    }
}

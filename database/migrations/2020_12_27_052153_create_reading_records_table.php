<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reading_records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->integer('reader_id')->unsigned();
            $table->year('year_read');
            $table->tinyInteger('month_read');
            $table->string('report');
            $table->timestamps();
            $table->foreign('book_id')
            ->references('id')
            ->on('books')
            ->onDelete('cascade');
            $table->foreign('reader_id')
            ->references('id')
            ->on('readers')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reading_records');
    }
}

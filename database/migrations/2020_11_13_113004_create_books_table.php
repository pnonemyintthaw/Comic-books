<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string("name");
            $table->text('photo');
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->text('pdf');
            $table->integer('page');
            $table->string('series');
            $table->text('description');
            $table->date('published');

            $table->unsignedBigInteger('category_id');

            $table->foreign('category_id')
            ->references('id')
            ->on('categories')
            ->onDelete('cascade');

            $table->unsignedBigInteger('author_id');

            $table->foreign('author_id')
            ->references('id')
            ->on('authors')
            ->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}

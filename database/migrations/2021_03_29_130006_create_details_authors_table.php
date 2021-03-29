<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_authors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('authors_id');
            $table->string('pic', 2048);
            $table->text('biogrphy', 2000);
            $table->string('instagram', 2048);
            $table->string('facebook', 2048);
            $table->string('twitter', 2048);
            $table->string('linkedin', 2048);
            $table->timestamps();

            $table->foreign('authors_id')
                ->references('id')
                ->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_authors');
    }
}

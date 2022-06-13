<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('title')->nullable();
            $table->integer('posted_by')->nullable();
            $table->longText('description')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('tag')->nullable();
            $table->string('image')->nullable();
            $table->enum('status', ['Publish', 'UnPublish']);
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
        Schema::dropIfExists('article');
    }
}

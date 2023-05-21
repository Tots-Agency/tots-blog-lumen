<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tots_post', function (Blueprint $table) {
            $table->id();
            $table->string('title', 250)->nullable(false);
            $table->string('slug', 250)->nullable(false);
            $table->longText('content')->nullable(true);
            $table->text('summary')->nullable(true);
            $table->text('photo_featured')->nullable(true);
            $table->text('photo_featured_mobile')->nullable(true);
            $table->tinyInteger('is_featured')->nullable(false)->default(0);
            $table->tinyInteger('is_archived')->nullable(false)->default(0);
            $table->integer('language_id')->nullable(true);
            $table->tinyInteger('status')->nullable(false)->default(0);
            $table->text('seo_title')->nullable(true);
            $table->text('seo_description')->nullable(true);
            $table->text('seo_keywords')->nullable(true);
            $table->tinyInteger('visibility')->nullable(false)->default(0);
            $table->unsignedBigInteger('creator_id');
            $table->timestamps();

            $table->foreign('creator_id')->references('id')->on('tots_user');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tots_post');
    }
};

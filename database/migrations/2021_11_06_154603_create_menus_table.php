<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedInteger('position')->nullable()->default(1);
            $table->string('metaTitle')->nullable();
            $table->longText('metaDescription')->nullable();
            $table->string('metaKeyphrase')->nullable();
            $table->string('parallexImage')->nullable();
            $table->string('featuredImage')->nullable();
            $table->boolean('publishStatus')->default(true);
            $table->timestamp('published_at')->nullable();
            $table->string('type');
            $table->string('externalUrl')->nullable();
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
        Schema::dropIfExists('menus');
    }
}

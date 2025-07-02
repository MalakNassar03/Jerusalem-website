<?php namespace Malak\PageContent\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('malak_pagecontent_pages', function($table) {
            $table->increments('id');
            $table->string('slug')->unique();
            $table->string('title');
            $table->text('feature_blocks')->nullable();
            $table->text('history')->nullable();
            $table->text('staff')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('malak_pagecontent_pages');
    }
}

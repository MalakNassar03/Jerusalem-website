<?php namespace Malak\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalakAboutusData extends Migration
{
    public function up()
    {
        Schema::create('malak_aboutus_data', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('paragraph')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malak_aboutus_data');
    }
}

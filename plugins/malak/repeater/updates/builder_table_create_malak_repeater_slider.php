<?php namespace Malak\Repeater\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMalakRepeaterSlider extends Migration
{
    public function up()
    {
        Schema::create('malak_repeater_slider', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->text('repeater')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('malak_repeater_slider');
    }
}

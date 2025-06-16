<?php namespace Malak\Repeater\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalakRepeaterSlider extends Migration
{
    public function up()
    {
        Schema::table('malak_repeater_slider', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('malak_repeater_slider', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}

<?php namespace Malak\Repeater\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalakRepeaterRepeater extends Migration
{
    public function up()
    {
        Schema::rename('malak_repeater_slider', 'malak_repeater_repeater');
    }
    
    public function down()
    {
        Schema::rename('malak_repeater_repeater', 'malak_repeater_slider');
    }
}

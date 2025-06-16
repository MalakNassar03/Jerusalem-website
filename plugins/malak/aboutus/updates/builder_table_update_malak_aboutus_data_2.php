<?php namespace Malak\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalakAboutusData2 extends Migration
{
    public function up()
    {
        Schema::table('malak_aboutus_data', function($table)
        {
            $table->text('paragraph2')->nullable();
            $table->renameColumn('paragraph', 'paragraph1');
        });
    }
    
    public function down()
    {
        Schema::table('malak_aboutus_data', function($table)
        {
            $table->dropColumn('paragraph2');
            $table->renameColumn('paragraph1', 'paragraph');
        });
    }
}

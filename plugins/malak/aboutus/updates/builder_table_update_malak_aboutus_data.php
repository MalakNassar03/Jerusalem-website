<?php namespace Malak\AboutUs\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateMalakAboutusData extends Migration
{
    public function up()
    {
        Schema::table('malak_aboutus_data', function($table)
        {
            $table->string('link')->nullable();
            $table->date('date')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('malak_aboutus_data', function($table)
        {
            $table->dropColumn('link');
            $table->dropColumn('date');
        });
    }
}

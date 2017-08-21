<?php namespace Arteriaweb\Programok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebProgramokFrees extends Migration
{
    public function up()
    {
        Schema::table('arteriaweb_programok_frees', function($table)
        {
            $table->time('ido')->nullable();
            $table->increments('id')->unsigned(false)->change();
            $table->renameColumn('idopont', 'datum');
        });
    }
    
    public function down()
    {
        Schema::table('arteriaweb_programok_frees', function($table)
        {
            $table->dropColumn('ido');
            $table->increments('id')->unsigned()->change();
            $table->renameColumn('datum', 'idopont');
        });
    }
}

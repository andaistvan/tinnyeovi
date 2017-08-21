<?php namespace Arteriaweb\Programok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebProgramokFrees extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_programok_frees', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_free');
            $table->string('slug')->nullable();
            $table->string('pedagogus')->nullable();
            $table->date('idopont')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_programok_frees');
    }
}

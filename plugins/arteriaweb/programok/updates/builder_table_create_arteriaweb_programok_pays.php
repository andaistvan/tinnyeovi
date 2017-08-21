<?php namespace Arteriaweb\Programok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebProgramokPays extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_programok_pays', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title_pays')->nullable();
            $table->string('slug')->nullable();
            $table->string('pedagogus')->nullable();
            $table->integer('price')->nullable();
            $table->date('datum')->nullable();
            $table->time('ido')->nullable();
            $table->date('fiz_hatarido')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_programok_pays');
    }
}

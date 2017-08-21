<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateArteriawebCsoportokFogl extends Migration
{
    public function up()
    {
        Schema::create('arteriaweb_csoportok_fogl', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('fog_title');
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('arteriaweb_csoportok_fogl');
    }
}

<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebCsoportokSubject extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_csoportok_fogl', 'arteriaweb_csoportok_subject');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_csoportok_subject', 'arteriaweb_csoportok_fogl');
    }
}

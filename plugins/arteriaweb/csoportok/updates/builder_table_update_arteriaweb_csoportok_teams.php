<?php namespace Arteriaweb\Csoportok\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateArteriawebCsoportokTeams extends Migration
{
    public function up()
    {
        Schema::rename('arteriaweb_csoportok_csop', 'arteriaweb_csoportok_teams');
    }
    
    public function down()
    {
        Schema::rename('arteriaweb_csoportok_teams', 'arteriaweb_csoportok_csop');
    }
}

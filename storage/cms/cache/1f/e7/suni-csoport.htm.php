<?php 
use Arteriaweb\Csoportok\Models\Team;class Cms599b2849711ce439329151_77a558dbc1884f97156d13c8719a5579Class extends \Cms\Classes\PageCode
{

    
public function onStart(){
        $this['teams'] = Team::get();             
    }
    
}

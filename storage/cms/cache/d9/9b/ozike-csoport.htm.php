<?php 
use System\Models\File;
use Arteriaweb\Csoportok\Models\Team;
class Cms599b28a7593c3938708001_828427e79ba9660cef81bcd7b21d19c6Class extends \Cms\Classes\PageCode
{
        public function onStart(){
        $this['teams'] = Team::get();        
    }
    
}

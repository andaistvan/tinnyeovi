<?php 
use Arteriaweb\Csoportok\Models\Team;class Cms5999e94492251889408111_9bb53ff3c3f0834c433a68b05123734bClass extends \Cms\Classes\PageCode
{

    
public function onStart(){
        $this['teams'] = Team::get();             
    }
    
}

<?php 
use Arteriaweb\Programok\Models\Free;
use Arteriaweb\Programok\Models\Pay;
class Cms5999fa5437b29497302248_e59f5daae4039e2bc60296ca81dc31adClass extends \Cms\Classes\PageCode
{
        public function onStart(){
        $this['frees'] = Free::get();
        $this['pays'] = Pay::get();        
    }
}

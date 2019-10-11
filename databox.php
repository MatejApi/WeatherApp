<?php

require __DIR__ . '/databox-php/vendor/autoload.php';

use Databox\Client;

class Databox{
    
    // Push data on databox

    public function pushData($tempUnits, $currentTemp, $cityTemp){
        
        $c = new Client('r4l1srtlz9h3a2vk9qrop2');

        $ok = $c->push($tempUnits, $currentTemp, null, [
            'city' => $cityTemp]);
    }


}

?>
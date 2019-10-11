<?php

class UnitConverter extends WeatherProvider {

    public $currentTemp;

    // Based on chosen units calculate fahrenheit or kelvin

    public function fahrenheitFunction($units){
        $this->currentTemp = $units * 1.8 + 32;
        return;
    }

    public function kelvinFunction($units){
        $this->currentTemp = $units + 273.15;
        return;
    }
    
    

}

?>
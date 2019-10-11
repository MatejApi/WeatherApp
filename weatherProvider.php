<?php

class WeatherProvider{
    
    public $currentTime;

    // Get api data from url

    public function curlQuery($url) {
        $ch = curl_init();
  
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
  
        $jsonss = curl_exec($ch);
  
        curl_close($ch);
  
        $array = json_decode($jsonss);
        $apiTime = intval($array->main->temp);
        $this->currentTime = $apiTime;
        return;
        }

}


?>
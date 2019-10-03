<?php

class WeatherProvider{
    
    protected $timee;

    public function curlQuery($url) {
        $ch = curl_init();
  
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
  
        $jsonss = curl_exec($ch);
  
        curl_close($ch);
  
        $array = json_decode($jsonss);
        $timee = intval($array->main->temp);
        echo $timee;
        return;
        }

}


?>
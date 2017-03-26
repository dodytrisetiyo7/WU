<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/02577f435c9cd726/forecast/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $waktu = $parsed_json->{'forecast'}->{'txt_forecast'}->{'date'};
  $kota = $parsed_json->{'forecast'}->{'txt_forecast'}->{'forecastday'}[0]->{'icon'};
  $cuaca = $parsed_json->{'forecast'}->{'txt_forecast'}->{'forecastday'}[0]->{'fcttext'};
  echo "Waktu : $waktu<br>";
  echo "Status : $kota<br>";
  echo "Cuaca : $cuaca<br>";
  echo "<br>";
?>
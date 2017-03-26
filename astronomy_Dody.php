<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/almanac
  $json_string = file_get_contents("http://api.wunderground.com/api/02577f435c9cd726/astronomy/q/Australia/Sydney.json");
  $parsed_json = json_decode($json_string);
  $umur = $parsed_json->{'moon_phase'}->{'ageOfMoon'};
  $bagian = $parsed_json->{'moon_phase'}->{'hemisphere'};
  $fase = $parsed_json->{'moon_phase'}->{'phaseofMoon'};
  $penerangan = $parsed_json->{'moon_phase'}->{'percentIlluminated'};
  echo "Umur Bulan : $umur<br>";
  echo "Bumi Bagian : $bagian<br>";
  echo "Fase Bulan : $fase<br>";
  echo "Persentasi Penerangan : $penerangan<br>";
  echo "<br>";
  
  $jam = $parsed_json->{'moon_phase'}->{'current_time'}->{'hour'};
  $menit = $parsed_json->{'moon_phase'}->{'current_time'}->{'minute'};
  echo "Waktu Saat ini : $jam.$menit<br>";
  echo "<br>";
  
  $jam1 = $parsed_json->{'moon_phase'}->{'sunrise'}->{'hour'};
  $menit1 = $parsed_json->{'moon_phase'}->{'sunrise'}->{'minute'};
  echo "Waktu Terbit Matahari : $jam1.$menit1<br>";
  echo "<br>";
  
  $jam2 = $parsed_json->{'moon_phase'}->{'sunset'}->{'hour'};
  $menit2 = $parsed_json->{'moon_phase'}->{'sunset'}->{'minute'};
  echo "Waktu Terbenam Matahari : $jam2.$menit2<br>";
  echo "<br>";
  
  $jam3 = $parsed_json->{'moon_phase'}->{'moonrise'}->{'hour'};
  $menit3 = $parsed_json->{'moon_phase'}->{'moonrise'}->{'minute'};
  echo "Waktu Bulan Muncul : $jam3.$menit3<br>";
  echo "<br>";
  
  $jam4 = $parsed_json->{'moon_phase'}->{'moonset'}->{'hour'};
  $menit4 = $parsed_json->{'moon_phase'}->{'moonset'}->{'minute'};
  echo "Waktu Bulan Hilang : $jam4.$menit4<br>";
  echo "<br>";
?>
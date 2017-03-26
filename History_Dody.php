<?php
  //https://www.wunderground.com/weather/api/d/docs?d=data/history
  $json_string = file_get_contents("http://api.wunderground.com/api/02577f435c9cd726/history_20060405/q/CA/San_Francisco.json");
  $parsed_json = json_decode($json_string);
  $tanggal = $parsed_json->{'history'}->{'date'}->{'pretty'};
  $tempat = $parsed_json->{'history'}->{'date'}->{'tzname'};
  $thn = $parsed_json->{'history'}->{'date'}->{'year'};
  $bln = $parsed_json->{'history'}->{'date'}->{'mon'};
  $tgl = $parsed_json->{'history'}->{'date'}->{'mday'};
  $jm = $parsed_json->{'history'}->{'date'}->{'hour'};
  $mnt = $parsed_json->{'history'}->{'date'}->{'min'};
  echo "Tanggal	: $tanggal<br>";
  echo "Tempat			: $tempat<br>";
  echo "Waktu			: $tgl-$bln-$thn ; $jm.$mnt<br>";
  echo "<br>";
  
  $tanggal1 = $parsed_json->{'history'}->{'utcdate'}->{'pretty'};
  $tempat1 = $parsed_json->{'history'}->{'utcdate'}->{'tzname'};
  $thn1 = $parsed_json->{'history'}->{'utcdate'}->{'year'};
  $bln1 = $parsed_json->{'history'}->{'utcdate'}->{'mon'};
  $tgl1 = $parsed_json->{'history'}->{'utcdate'}->{'mday'};
  $jm1 = $parsed_json->{'history'}->{'utcdate'}->{'hour'};
  $mnt1 = $parsed_json->{'history'}->{'utcdate'}->{'min'};
  echo "Tanggal Lahir	: $tanggal1<br>";
  echo "Tempat			: $tempat1<br>";
  echo "Waktu			: $tgl1-$bln1-$thn1 ; $jm1.$mnt1<br>";
  echo "<br>";
  
  $tanggal2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'pretty'};
  $tempat2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'tzname'};
  $aa = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'pretty'};
  $thn2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'year'};
  $bln2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'mon'};
  $tgl2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'mday'};
  $jm2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'hour'};
  $mnt2 = $parsed_json->{'history'}->{'observations'}[0]->{'date'}->{'min'};
  echo "Tanggal Lahir	: $tanggal2<br>";
  echo "Asal			: $tempat2<br>";
  echo "Waktu			: $tgl2-$bln2-$thn2 ; $jm2.$mnt2<br>";
?>
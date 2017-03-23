<?php
  $json_string = file_get_contents("http://api.wunderground.com/api/ede5d9857118e12e/geolookup/conditions/q/IA/mugassari.json");
  $parsed_json = json_decode($json_string);
  $station_id = $parsed_json->{'response'}->{'termsofService'};
  $location = $parsed_json->{'location'}->{'country_name'};
  $estimated = $parsed_json->{'current_observation'}->{'observation_time'};
  echo "Term Of Service is: ${station_id}\n";
  echo "<br>";
  echo "Country Name is: ${location}\n";
  echo "<br>";
  echo "observation time is: ${estimated}\n";
?>
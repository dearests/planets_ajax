<?php

    $data = $_REQUEST;                      //getting all the data and passing it to variable &data
    $name = $data['planet_name'];           // passing whatsoever value that was passed in the input box with id="planet_name" into $name
    $result = array();




    $planet_details = array(
      array('name' => 'Mecury', 'order_no' => '1', 'no_of_days_in_year' => '87' ),
      array('name' => 'Venus', 'order_no' => '2', 'no_of_days_in_year' => '224' ),
      array('name' => 'Earth', 'order_no' => '3', 'no_of_days_in_year' => '365' ),
      array('name' => 'Mars', 'order_no' => '4', 'no_of_days_in_year' => '686' ),
      array('name' => 'Jupiter', 'order_no' => '5', 'no_of_days_in_year' => '4332' ),
      array('name' => 'Saturn', 'order_no' => '6', 'no_of_days_in_year' => '10755' ),
      array('name' => 'Uranus', 'order_no' => '7', 'no_of_days_in_year' => '30687' ),
      array('name' => 'Neptune', 'order_no' => '8', 'no_of_days_in_year' => '60190' )
    );
    $length = count($planet_details);
    for ($count = 0; $count <  $length; $count++ ) {
      //Checking array index of $count in planet_details and comparing the key 'name' with the variable $name passed in line 4
      if(stripos($planet_details[$count]['name'], $name) !== false ) {
        array_push($result, $planet_details[$count]);
      }
    }

    echo json_encode($result);

 ?>

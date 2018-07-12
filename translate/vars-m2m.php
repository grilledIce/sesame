<?php
  //可变信息（学校名称, 排名，年级，地址，距离）
  $vars =  [
    // TOP BOX
    'street' => '51 Yonge St',
    'city' => 'North York, ON',
    'school-number' => 6,

    // SCHOOL
    'school-name-1' => 'Newtonbrook Secondary School',
    'school-rank-1' => '1',
    'school-grade-1' => 'Gr.9 - Gr.12',
    'school-address-1' => '155 Hilda  Ave',
    'school-distance-1' => '1.13 km',

    'school-name-2' => 'Cummer Valley Middle School',
    'school-rank-2' => '2',
    'school-grade-2' => 'Gr.6 - Gr.8',
    'school-address-2' => '70 Maxome Ave',
    'school-distance-2' => '1.26 km',

    'school-name-3' => 'Lillian Public School',
    'school-rank-3' => '3',
    'school-grade-3' => 'Gr.PK - Gr.5',
    'school-address-3' => '1059 Lillian St',
    'school-distance-3' => '1.36 km',

    'school-name-4' => 'Henderson  Avenue  PS',
    'school-rank-4' => '4',
    'school-grade-4' => 'Gr.PK - Gr.8',
    'school-address-4' => '66 Henderson Ave',
    'school-distance-4' => '2.09 km',

    'school-name-5' => 'Claude Watson School for the Arts',
    'school-rank-5' => '5',
    'school-grade-5' => 'Gr.1 - Gr.8',
    'school-address-5' => '130 Doris Ave',
    'school-distance-5' => '2.4 km',

    'school-name-6' => 'Thornhill SS',
    'school-rank-6' => '6',
    'school-grade-6' => 'Gr.9 - Gr.12',
    'school-address-6' => '167 Dudley Ave',
    'school-distance-6' => '2.61 km',

    

    // TRANSIT
    'typeOfTransit-1' => typeTransit('train'),
    'transit-name-1' => 'Finch Station',
    'transit-distance-1' => '9 min Walk',

    'typeOfTransit-2' => typeTransit('bus'),
    'transit-name-2' => 'Cummer Ave At Yonge St EastSide',
    'transit-distance-2' => '1 min walk',

    // NEARBY
    'typeOfNearby-1' => typeNearby('hospital'),
    'nearby-name-1' =>"North York General Hospital",
    'nearby-address-1' => '4.58 km',
    'typeOfNearby-2' => typeNearby('coffee'),
    'nearby-name-2' =>'Coffee',
    'nearby-address-2' => '0.1 km',
    'typeOfNearby-3' => typeNearby('gym'),
    'nearby-name-3' =>'Gym',
    'nearby-address-3' => '0.8 km',
    'typeOfNearby-4' => typeNearby('gas'),
    'nearby-name-4' =>'Gas Station',
    'nearby-address-4' => '0.9 km',
    'typeOfNearby-5' => typeNearby('fire'),
    'nearby-name-5' =>'Fire Station',
    'nearby-address-5' => '1.58 km'
  ];

  function typeTransit($type){
    switch ($type) {
      case 'train':
        return '<i class="fas fa-train"></i>';
        break;
      case 'bus':
        return '<i class="fas fa-bus"></i>';
        break;
      case 'subway':
        return '<i class="fas fa-subway"></i>';
        break;
    }
  }

  function typeNearby($type){
    switch($type){
      case 'coffee':
        return '<i class="fas fa-coffee"></i>';
        break;
      case 'hospital':
        return '<i class="fas fa-briefcase-medical"></i>';
        break;
      case 'food':
        return '<i class="fas fa-utensils"></i>';
        break;
      case 'drink':
        return '<i class="fab fa-gulp"></i>';
        break;
      case 'gas':
        return '<i class="fas fa-gas-pump"></i>';
        break;
      case 'shopping':
        return '<i class="fas fa-shopping-cart"></i>';
        break;
      case 'gym':
        return '<i class="fas fa-dumbbell"></i>';
        break;
      case 'fire':
        return '<i class="fas fa-fire"></i>';
        break;
    }
  }
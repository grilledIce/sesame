<?php
  //可变信息（学校名称, 排名，年级，地址，距离）
  $vars =  [
    // TOP BOX
    'street' => '261 Queens Quay E',
    'city' => 'Toronto, ON',

    // SCHOOL
    'school-number' => 7,
    'school-name-1' => 'É Élém Gabrielle-Roy',
    'school-rank-1' => '1',
    'school-grade-1' => 'Gr.PK - Gr.6',
    'school-address-1' => '14 Pembroke St',
    'school-distance-1' => '1.51 km',

    'school-name-2' => 'Queen Alexandra Middle School',
    'school-rank-2' => '2',
    'school-grade-2' => 'Gr.6 - Gr.8',
    'school-address-2' => '181 Broadview Ave',
    'school-distance-2' => '2 km',

    'school-name-3' => 'First Nations Junior and Senior School of Toronto',
    'school-rank-3' => '3',
    'school-grade-3' => 'Gr.PK - Gr.8',
    'school-address-3' => '935 Dundas St',
    'school-distance-3' => '2.17 km',

    'school-name-4' => 'Dundas Junior Public School',
    'school-rank-4' => '4',
    'school-grade-4' => 'Gr.PK - Gr. 5',
    'school-address-4' => '935 Dundas St E',
    'school-distance-4' => '2.24 km',

    'school-name-5' => 'Collège français secondair',
    'school-rank-5' => '5',
    'school-grade-5' => 'Gr.7 - Gr.12',
    'school-address-5' => '100 Carlton St',
    'school-distance-5' => '2.28 km',

    'school-name-6' => 'Jarvis Collegiate Institute',
    'school-rank-6' => '6',
    'school-grade-6' => 'Gr.9 - Gr.12',
    'school-address-6' => '495 Jarvis St',
    'school-distance-6' => '2.64 km',

    'school-name-7' => 'Rosedale Heights School ofthe Arts',
    'school-rank-7' => '7',
    'school-grade-7' => 'Gr.9 - Gr.12',
    'school-address-7' => '711 Bloor St E',
    'school-distance-7' => '3.22 km',

    

    // TRANSIT
    'typeOfTransit-1' => typeTransit('train'),
    'transit-name-1' => 'King Station',
    'transit-distance-1' => '18 min Walking',

    'typeOfTransit-2' => typeTransit('bus'),
    'transit-name-2' => 'Parliament  St  At  LakeshoreBlvd  East  South  Side',
    'transit-distance-2' => '3 min walking',

    // NEARBY
    'typeOfNearby-1' => typeNearby('hospital'),
    'nearby-name-1' =>"St  Michael's  Hospital",
    'nearby-address-1' => '1.47 km',
    'typeOfNearby-2' => typeNearby('coffee'),
    'nearby-name-2' =>'Coffee',
    'nearby-address-2' => '0.3 km',
    'typeOfNearby-3' => typeNearby('gym'),
    'nearby-name-3' =>'Gym',
    'nearby-address-3' => '0.9 km',
    'typeOfNearby-4' => typeNearby('gas'),
    'nearby-nwame-4' =>'Gas Station',
    'nearby-address-4' => '1.1 km',
    'typeOfNearby-5' => typeNearby('fire'),
    'nearby-name-5' =>'Fire Station',
    'nearby-address-5' => '0.67 km'
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
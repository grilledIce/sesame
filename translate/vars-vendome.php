<?php
  //可变信息（学校名称, 排名，年级，地址，距离）
  $vars =  [
    // TOP BOX
    'street' => '261 Queens Quay E',
    'city' => 'Toronto, ON',
    'school-number' => 7,

    // SCHOOL
    'school-name-1' => 'Univille HS',
    'school-rank-1' => '1',
    'school-grade-1' => 'Gr.9 - Gr.12',
    'school-address-1' => '201 Town Centre Blvd',
    'school-distance-1' => '0.66 km',

    'school-name-2' => 'Coledale PS',
    'school-rank-2' => '2',
    'school-grade-2' => 'Gr.PK - Gr.8',
    'school-address-2' => '60 Coledale Rd',
    'school-distance-2' => '1.44 km',

    'school-name-3' => 'Bill Crothers SS',
    'school-rank-3' => '3',
    'school-grade-3' => 'Gr.9 - Gr.12',
    'school-address-3' => '44 Main St Unionville',
    'school-distance-3' => '1.97 km',

    'school-name-4' => 'Buttonville PS',
    'school-rank-4' => '4',
    'school-grade-4' => 'Gr.PK - Gr. 8',
    'school-address-4' => '141 John Button Blvd',
    'school-distance-4' => '2 km',

    'school-name-5' => 'William Berczy PS',
    'school-rank-5' => '5',
    'school-grade-5' => 'Gr.PK - Gr.8',
    'school-address-5' => '120 Carlton Rd',
    'school-distance-5' => '2.31 km',

    'school-name-6' => 'Parkview PS',
    'school-rank-6' => '6',
    'school-grade-6' => 'Gr.PK - Gr.8',
    'school-address-6' => '22 Fonthill Blvd',
    'school-distance-6' => '2.43 km',

    'school-name-7' => 'Milliken Mills HS',
    'school-rank-7' => '7',
    'school-grade-7' => 'Gr.9 - Gr.12',
    'school-address-7' => '7522 Kennedy Rd',
    'school-distance-7' => '3.01 km',

    

    // TRANSIT
    'typeOfTransit-1' => typeTransit('train'),
    'transit-name-1' => 'Unionville GO Station Rail',
    'transit-distance-1' => '',

    'typeOfTransit-2' => typeTransit('bus'),
    'transit-name-2' => 'Clegg Rd / South Town Centre Blvd',
    'transit-distance-2' => '1 min walking',

    // NEARBY
    'typeOfNearby-1' => typeNearby('hospital'),
    'nearby-name-1' =>"Scarborough and Rouge Hospital- Birchmount Campus",
    'nearby-address-1' => '3030 Birchmount Rd',
    'typeOfNearby-2' => typeNearby('coffee'),
    'nearby-name-2' =>'Coffee',
    'nearby-address-2' => '0.4 km',
    'typeOfNearby-3' => typeNearby('gym'),
    'nearby-name-3' =>'Gym',
    'nearby-address-3' => '1.1 km',
    'typeOfNearby-4' => typeNearby('gas'),
    'nearby-name-4' =>'Gas Station',
    'nearby-address-4' => '1.8 km',
    'typeOfNearby-5' => typeNearby('fire'),
    'nearby-name-5' =>'Fire Station',
    'nearby-address-5' => '10 Riviera Dr'
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
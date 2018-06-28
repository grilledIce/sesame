<?php
  //可变信息（学校名称, 排名，年级，地址，距离）
  $vars =  [
    'school-name-1' => 'first school',
    'school-rank-1' => '1',
    'school-grade-1' => '1',
    'school-address-1' => '1',
    'school-distance-1' => '1',

    'school-name-2' => 'second school',
    'school-rank-2' => '2',
    'school-grade-2' => '2',
    'school-address-2' => '2',
    'school-distance-2' => '2',

    'school-name-3' => 'third school',
    'school-rank-3' => '3',
    'school-grade-3' => '3',
    'school-address-3' => '3',
    'school-distance-3' => '3',

    'school-name-4' => 'forth school',
    'school-rank-4' => '4',
    'school-grade-4' => '4',
    'school-address-4' => '4',
    'school-distance-4' => '4',

    'school-name-5' => 'fifth school',
    'school-rank-5' => '5',
    'school-grade-5' => '5',
    'school-address-5' => '5',
    'school-distance-5' => '5',

    // TRANSIT
    'typeOfTransit-1' => typeTransit('train'),
    'transit-name-1' => 'first transit',
    'transit-distance-1' => '1.0km',

    'typeOfTransit-2' => typeTransit('bus'),
    'transit-name-2' => 'second transit',
    'transit-distance-2' => '1.1km',

    'typeOfTransit-3' => typeTransit('subway'),
    'transit-name-3' => 'thrid transit',
    'transit-distance-3' => '2.0km',

    'typeOfTransit-4' => typeTransit('bus'),
    'transit-name-4' => 'fourth transit',
    'transit-distance-4' => '800m',

    'typeOfTransit-5' => typeTransit('subway'),
    'transit-name-5' => 'fifth transit',
    'transit-distance-5' => '500m',

    // NEARBY
    'typeOfNearby-1' => typeNearby('coffee'),
    'nearby-name-1' =>'Coffee shop',
    'nearby-address-1' => '123 sdadasld ',
    'typeOfNearby-2' => typeNearby('drink'),
    'nearby-name-2' =>'coco',
    'nearby-address-2' => '1 dsad as',
    'typeOfNearby-3' => typeNearby('food'),
    'nearby-name-3' =>'McDalnold',
    'nearby-address-3' => '4445 asdasdrg sad ',
    'typeOfNearby-4' => typeNearby('gas'),
    'nearby-name-4' =>'SHELL',
    'nearby-address-4' => '090 saasdn',
    'typeOfNearby-5' => typeNearby('shopping'),
    'nearby-name-5' =>'Yorkdale Mall',
    'nearby-address-5' => '77 sajdak'
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
    }
  }
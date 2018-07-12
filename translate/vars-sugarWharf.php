<?php
  //可变信息（学校名称, 排名，年级，地址，距离）
  $vars =  [
    // TOP BOX
    'street' => '95 Lake Shore Blvd E',
    'city' => 'Toronto, ON',
    'school-number' => 6,

    // SCHOOL
    'school-name-1' => 'Kew Beach Junior PublicSchool',
    'school-rank-1' => '1',
    'school-grade-1' => 'Gr.PK - Gr.6',
    'school-address-1' => '01 Kippendavie Ave',
    'school-distance-1' => '0.17 km',

    'school-name-2' => 'Bowmore Road Junior andSenior Public School',
    'school-rank-2' => '2',
    'school-grade-2' => 'Gr.PK - Gr.8',
    'school-address-2' => '80 Bowmore Rd',
    'school-distance-2' => '1.28 km',

    'school-name-3' => 'Monarch Park Collegiate Institute',
    'school-rank-3' => '3',
    'school-grade-3' => 'Gr.9 - Gr.12 (Assigned)',
    'school-address-3' => '1 Hanson St',
    'school-distance-3' => '2.07 km',

    'school-name-4' => 'Danforth Collegiate andTechnical Institute',
    'school-rank-4' => '4',
    'school-grade-4' => 'Gr.9 - Gr. 12',
    'school-address-4' => '800 Greenwood Ave',
    'school-distance-4' => '2.87 km',

    'school-name-5' => 'É Élém La Mosaïque',
    'school-rank-5' => '5',
    'school-grade-5' => 'Gr.PK - Gr.6',
    'school-address-5' => '80 Queensdale Ave',
    'school-distance-5' => '3.05 km',

    'school-name-6' => 'First Nations  Junior andSenior School of Toronto',
    'school-rank-6' => '6',
    'school-grade-6' => 'Gr.PK - Gr.8',
    'school-address-6' => '95 Dundas St E',
    'school-distance-6' => '3.35 km',
    

    // TRANSIT
    'typeOfTransit-1' => typeTransit('train'),
    'transit-name-1' => 'Danforth Station',
    'transit-distance-1' => '',

    'typeOfTransit-2' => typeTransit('bus'),
    'transit-name-2' => 'Woodbine Ave At Kew Beach Ave',
    'transit-distance-2' => '2 min walking',

    // NEARBY
    'typeOfNearby-1' => typeNearby('hospital'),
    'nearby-name-1' =>"Toronto East  Health Network - Michael Garron Hospital",
    'nearby-address-1' => '825 Coxwell Ave',
    'typeOfNearby-2' => typeNearby('coffee'),
    'nearby-name-2' =>'Coffee',
    'nearby-address-2' => '0.2 km',
    'typeOfNearby-3' => typeNearby('gym'),
    'nearby-name-3' =>'Gym',
    'nearby-address-3' => '0.9 km',
    'typeOfNearby-4' => typeNearby('gas'),
    'nearby-name-4' =>'Gas Station',
    'nearby-address-4' => '2.7 km',
    'typeOfNearby-5' => typeNearby('fire'),
    'nearby-name-5' =>'Fire Station',
    'nearby-address-5' => '1904 Queen St E'
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
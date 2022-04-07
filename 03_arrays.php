<?php
 // simplea rray
 $number = [1,2,3,4,5];
 $fruits = array('apple','orange');

 //print_r($number);
 //var_dump($number);
 //echo $fruits[1];

 ///associative array
 $colors = [
     1 => 'red',
     4 => 'blue',
     6 => 'green'
 ];
 
 //echo $colors[4];

 $hex = [
     'red' => '#f00',
     'blue' => '#0f0',
     'green' => '#00f'
 ];
  //echo $hex['blue'];

  $person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'legekasr@gmail.com'
  ];

  //echo $person['first_name'];
  $people = [
    [
        'first_name' => 'Brad',
        'last_name' => 'Traversy',
        'email' => 'legekasr@gmail.com'
      ],
      [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
      ],
      [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
      ]
      ];
  
  //echo $people[1]['email'];

  var_dump(json_encode($people));
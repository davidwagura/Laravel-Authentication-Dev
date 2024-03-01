<?php
return [
  
    'defaults' => [
        'guard' => 'seller', // original 'web'
        'passwords' => 'users',
    ],
  
    // Rest of auth.php
  
    'guards' => [
        'seller' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'customer' => [
            'driver' => 'session',
            'provider' => 'orders',
        ],
    ],
  
    // Rest of auth.php
];

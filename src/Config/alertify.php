<?php

/**
  * @author Amjad Iqbal
  * @author Amjad Iqbal <contact@amjadiqbal.me>
  */

return [
    
    'default' => [
        'title'             => [],
        'text'              => [],
        'timer'             => env('ALERTIFY_TIMER'),
        'width'             => env('ALERTIFY_WIDTH'),
        'heightAuto'        => env('ALERTIFY_HEIGHT_AUTO'),
        'padding'           => env('ALERTIFY_PADDING'),
        'animation'         => env('ALERTIFY_ANIMATION'),
        'showConfirmButton' => env('ALERTIFY_SHOW_CONFIRM_BUTTON'),
        'showCloseButton'   => env('ALERTIFY_CLOSE_BUTTON'),
    ],

    'middleware' => [
      'title'               => '',
      'text'                => '',
      'type'                => '',
      'html'                => '',
      'toast'               => '',
      'position'            => '',
      'width'               => '',
      'showConfirmButton'   => '',
      'showCloseButton'     => '',

    ]

];

<!DOCTYPE html>
<html>
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <style>
           :root {
               --mainBlue: #508bbb;
               --lightBlue: #9FB3C3;
               --mainWhite: rgba(255, 255, 255, 0.945);
               --mainRed: rgb(214, 52, 52);
               --mainBlack: rgb(20, 18, 18);
           }

           body {
               margin: 0;
               padding: 0;
           }

           body p {
            margin: 0;
           }

           body li {
            list-style: none;
           }
       </style>
       <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
       <link href="{{secure_asset('css/cms.css')}}" rel="stylesheet" type="text/css">
       @yield('page_styles')
   </head>
   <body>
       <div class="root">
           @yield('initialRendering')
       </div>
       @yield('content')
   </body>
</html>
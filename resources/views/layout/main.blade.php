<!DOCTYPE html>
 <html lang="it" dir="ltr">
     <head>
         <meta charset="utf-8">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
     <title>@yield('page-title')</title>
     </head>
     <body>
        @include('partials.navbar')

        @yield('content')
     </body>
 </html>

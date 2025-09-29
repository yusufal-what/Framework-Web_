<html>
   <head>
<title>@yield('judul_menu')</title>

@vite(['resource/css/app.css'])

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
   </head>
   <body>
    @yield(section'judul_menu')

    @yield(section'isi_menu')
   </body>
</html>
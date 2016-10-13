<!DOCTYPE html>
<html>
    <head>
        <title>@yield('titulo_head')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
                <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    </head>
    <body>
    <h3><span class="label label-default">Blog do João</span></h3> Fonte: g1.globo.com
        @yield('titulo')
        <ul class="nav nav-pills">
          <li></li>
          <li role="presentation"><a href="http://localhost:8000/mundo">Mundo</a></li>
          <li role="presentation"><a href="http://localhost:8000/politica">Política</a></li>
          <li role="presentation"><a href="http://localhost:8000/carros">Carros</a></li>
        </ul>
        <div class="container">
            <div class="content">
                @yield('conteudo')
            </div>
        </div>
    </body>
</html>

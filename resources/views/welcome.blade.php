<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fata Page</title>
    @vite('resources/css/app.css')
   
</head>
<body class="text-center px-8 py-12 bg-navy text-white">
    <h1>Welcome to Fata Notes Page</h1>
    <p>click the button below to make a new note</p>
     <a href="/notes" class="btn mt-4 inline-block">Make A New Note</a>

</body>
</html>
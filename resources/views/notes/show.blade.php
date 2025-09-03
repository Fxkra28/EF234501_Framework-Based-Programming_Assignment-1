<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Note Details</h1>
    <p>Showing details for note ID: {{ $id }}</p>
    <h2>{{ $notes_detail->title }}</h2>
    <p>{{ $notes_detail->content }}</p>

    </ul>
</body>
</html>
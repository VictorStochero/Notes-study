<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to the Main Page</h1>
    <p>This is the main page of your application.</p>
    @isset($id)
        <p>We have an ID: {{ $id }}</p>
    @else
        <p>No ID is set.</p>  
    @endisset
    
</body>

</html>

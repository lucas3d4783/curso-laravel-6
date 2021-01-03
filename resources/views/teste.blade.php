<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{$teste}} --> dessa forma não processa as tags HTML por questões de segurança

    {!! $teste !!} mas em alguns casos pode ser usada a segunda forma caso seja necessário <!-- Assim ele vai enterpretar as tags HTML, JavaScript, etc. Podendo ser mais  vulnerável, 
    porém em alguns casos é interessante usar
    -->
</body>
</html>
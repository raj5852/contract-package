<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contract Form</h1>
    <form action="{{ route('contract') }}" method="post">
        @csrf 
        <input type="text" name="name" placeholder="Your Name please"><br>
        <input type="email" name="email" placeholder="Your valid Email"><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br>
        <input type="submit">   


    </form>
</body>
</html>
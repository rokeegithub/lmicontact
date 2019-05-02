<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p>Contact page loaded</p>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" id="" placeholder="your name">
        <input type="text" name="email" id="" placeholder="your email">
        <textarea name="message" id="" cols="30" rows="10" placeholder=""></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
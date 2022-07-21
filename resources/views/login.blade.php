<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/test_app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="form_con">
        <form action="{{route('login_user')}}" method="POST">
            <h1>login</h1>
            <div>
                <input type="text" placeholder="email" name="email" class="email">
            </div>
            <div>
                <input type="password" placeholder="password" name="password" class="password">
            </div>
            <div>
                <input type="submit" value="Login" class="submit">
            </div>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="Description" content="Enter your description here" />
        <link rel="stylesheet" href="{{asset('css/app.css')}}" />
        <title>Testing</title>
    </head>
    <body>
        <form method="get" action="/adduser">
            <div class="container">
                <label for="username" class="label-cl">Username</label>
                <input name="username" type="text" class="input-cl" />
            </div>
            <div class="container">
                <label for="password" class="label-cl">Password</label>
                <input name="password" type="text" class="input-cl"/>
            </div>
            <button type="submit" class="btn-cl">Submit</button>
        </form>
        <h6 class="login-cl">If you already have an acount<a href="/login">Login</a></h6>
    </body>
</html>

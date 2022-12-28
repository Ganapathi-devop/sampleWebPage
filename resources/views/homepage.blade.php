<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
            @foreach(json_decode($data) as $user){
                <!-- $value = json_decode($user) -->
                <h5 class="username">Welcome user</h5>
                <h4 class="username">{{$user->username}}!!!!!</h4>
                <h6 class="delete">To delete this user <a href="/deleteuser?id={{$user->id}}">Click here</a>
            or if you want to update your name  <a href="/updateuser?id={{$user->id}}">Edit</a></h6>
            }
            @endforeach

        
        <script src="{{asset('js/app.js')}}" async defer></script>
    </body>
</html>
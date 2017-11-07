<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jolly Login Form a Flat Responsive Widget Template :: w3layouts </title>
    <!-- Meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Jolly Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Meta tags -->


    <!-- font-awesome icons -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />

    <!-- //font-awesome icons -->
    <!--stylesheets-->
    <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
    <!--//style sheet end here-->

    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">

</head>
<body>

<h1>Hasyim's Meubel Report</h1>

<div class="main-w3">
    <form action="{{ url('/login') }}" method="post">
        {{ csrf_field() }}
        <h2><span class="fa fa-user t-w3" aria-hidden="true"></span></h2>
        <div class="login-w3ls">
            <div class="icons">

                <input type="email" class="form-control" placeholder="Email" name="email"/>
                <span class="fa fa-user" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="icons">

                <input type="password" class="form-control" placeholder="Password" name="password"/>
                <span class="fa fa-key" aria-hidden="true"></span>
                <div class="clear"></div>
            </div>
            <div class="btnn">
                <input type="checkbox" class="checked"><span class="span">Remember me..?</span><br>
                <button type="submit">Login</button><br>
                <a href="#" class="for" >Forgot password...?</a>
            </div>
        </div>
    </form>

</div>

<div class="copy">
    <p>&copy;2017. All Rights Reserved | Design by <a href="" target="_blank">KentusSolution</a>
</div>
@include('la.layouts.partials.scripts_auth')

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });
</script>
</body>
</html>

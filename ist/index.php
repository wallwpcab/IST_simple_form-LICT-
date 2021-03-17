<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<div class="container">
<?php
$array=[1,2,3,4];
$data="data";
echo '<h1>Hi American Express <i class="fab fa-cc-amex"></i></h1>';
print($data);
print_r($array);
printf($data);
 ?>
    
    <!--menu-->
    <div class="row">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="gallery.html">Gallery</a></li>
            <li><a href="contact.html">contact Us</a></li>
        </ul>
    </div>
    <div class="row margin_top">
        <div class="col-sm-4 padding_zero">
            <img src="img/download.jpg" alt="">
        </div>
        <div class="col-sm-4">
            <img src="img/download.jpg" alt="">
        </div>
        <div class="col-sm-4">
            <img src="img/download.jpg" alt="">
        </div>
    </div>
    <div class="row margin_top">
        <div class="col-sm-3 padding_zero">
            <img src="img/download.jpg" alt="" class="img-responsive">
        </div>
        <div class="col-sm-9">
            <p>The navigation bar often takes up too much space on a small screen.

                We should hide the navigation bar; and only show it when it is needed.

                In the following example the navigation bar is replaced by a button in the top right corner. Only when the button is clicked, the navigation bar will be displayed:The navigation bar often takes up too much space on a small screen.

                We should hide the navigation bar; and only show it when it is needed.

                In the following example the navigation bar is replaced by a button in the top right corner. Only when the button is clicked, the navigation bar will be displayed:The navigation bar often takes up too much space on a small screen.

                We should hide the navigation bar; and only show it when it is needed.

                In the following example the navigation bar is replaced by a button in the top right corner. Only when the button is clicked, the navigation bar will be displayed:</p>
        </div>
    </div>
    <div class="message">
        <h1>hrer is my code</h1>
    </div>
    <button id="button" type="button">Try</button>
    <p class="message">        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </p>
    <!--<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo">Simple collapsible</button>
    <div id="demo" class="collapse">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>-->

</div>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

<script>
    $(document).ready(function () {
        $('#button').click(function () {
                $('.message').toggle()
        });
    });
</script>
</body>
</html>
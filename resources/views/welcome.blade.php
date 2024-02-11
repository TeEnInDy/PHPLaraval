<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <title>Welcome </title>

    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/coming-sssoon.css" rel="stylesheet" />

    <!--     Fonts     -->
    <link href="Asset2/http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
    <link href='Asset2/http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

  </head>

  <nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/flags/US.png" />
              English(US)
              <b class="caret"></b>
            </a>

            </ul>
          </li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">
              <i class="fa fa-facebook-square"></i>
              Like
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-google-plus-square"></i>
              Plus
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-pinterest"></i>
              Pin
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main" style="background-image: url('images/video_bg.jpg')">
    {{-- <video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
      <source src="http://coming-sssoon.paperplane.io/video/time.webm" type="video/webm">
      <source src="http://coming-sssoon.paperplane.io/video/time.mp4" type="video/mp4">
      Video not supported --}}
    </video>
    <div class="cover black" data-color="black"></div>
    <div class="container">
      <h1 class="logo cursive">
        ใส่แม่สูตรคูณ
      </h1>

<body>
   <div class="content">
        <h4 class="motto"><button onclick="myFunction()">submit number</button>
          <button onclick="alert('Hello World!')">Click Me!</button>
          <br>
          <button onclick="myFunction2()">submit my สูตรคูณ</button>
          <br>
          <center>
            <table id="my_table">
              <tbody id="my_tbody">
              </tbody>
            </table>
          </center>


          <input type="text" id="my_number" value="10">
        </h4>
        <div class="subscribe">
          <h5 class="info-text">

          </h5>
          <div class="row">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
              $(document).ready(function () {
                console.log("Hello World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())
                $('#myh1').text("Javascript 101")
                $('#my_number').val(100)
              });
              function myFunction2() {
                let my_number = parseInt($('#my_number').val());
                let my_code_tr = "";
                let numberOfMultiples = 12;
                $("#my_tbody").html("");
                for (let i = 1; i <= numberOfMultiples; i++) {
                  let result = my_number * i;
                  my_code_tr += `<tr><td>${my_number} x ${i}</td><td>=${result}</td></tr>`;
                }
                $("#my_tbody").html(my_code_tr);
}


        function myFunction() {
            let my_number = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number">${i}</h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')

            setTimeout(function() {
                $('.my_gen_number').each(function(index, val) {
                    $(val).remove();
                })
            }, 2000);

        }
        console.log("Hello World!")
        let myval;
        console.log(typeof myval);
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2);
        myval3 = parseInt(myval) + myval2;
        console.log(myval3)
        myval3 = myval - myval2;
        console.log(myval3)
        myval3 = myval * myval2;
        console.log(myval3)
        myval3 = myval / myval2;
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)

        for (i = 0; i < myval4.length; i++) {
            console.log("in for", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        // php
        foreach($myval4 as $index => $value){

        }
        */
    </script>
</body>

</html>

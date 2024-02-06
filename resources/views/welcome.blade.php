<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h1>JAVA SCRIPT </h1>
        <button onclick="alert('YES CLICK ME!!')">Click Me!</button>
        <input type="text" id="my_number" value="10">
        <button onclick="myFunction()">summit number</button>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                console.log("Hello World - document.ready")
                console.log($('#myh1').text())
                console.log($('#my_number').val())
                $('#myh1').text("JAvaSCRipt 101")
                $('#my_number').val(100)
            })

            function myFunction(){
                let my_number = ($('#my_number').val())
                for (let i = 0; i < my_number; i++){
                    $('#myh1').append(`<h1)${1}</h1?>`)
                }
                console.log(document.getElementByID('my_number').value);
                console.log('Click submit numbe')
            }

            console.log("Hello World!")
            let myval;
            myval ='10';
            myval2 = '2';
            console.log(myval, myval2)
            myval3 = myval + myval2;
            console.log(myval3)
            myval3= myval - myval2;
            console.log(myval3)
            myval3= myval * myval2;
            console.log(myval3)
            myval3= myval / myval2;
            console.log(myval3)

        </script>
        <script>
            let myval4 = [1, 2, 3, 4];
            myval4[5] = 5;
            myval4[6] = [6, 5, 4, 5];
            console.log(myval4)

            for (i = o; i < myval4.lenght; i++){
                console.log(("in for")myval4[i])
            }
            myval4.forEach(function(value, index){
                console.log("in foreach",value)
            });

            console.log(document.getElementByID('myh1').innerHTML);
            // //php
            // foreach($myval4 as $index => $value){
            // }
            </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script  >
        window.onload = function(){

        var years = document.getElementById("years");
        var months = document.getElementById("months");
        var days = document.getElementById("days");
        years_option="";
        for(var i = 1900;i<2000;i++){
             years_option += '<option value ='+i+'>'+i+'</option>';
        }
        years.innerHTML=years_option;
    };
    var months_option="";
    for(var i = 1;i<13;i++){
        months_option += '<option value ='+i+'>'+i+'</option>';
    }


    </script>


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Years from 1900 intel 2022</h1>
    
    <select name="" id="years">
        <option value="">Select year</option>
    </select>
    <select name="" id="months">
        <option value="">Select months</option>
    </select>
    <select name="" id="days">
        <option value="">Select days</option>
    </select>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <style>
        .sec{
            position: fixed;
            width: 400px;
            height: 16px;
            margin: 0 auto;
            transform: translate( 80%, 0);
            top: 300px;
            left: 200px;
        }
        .circle{
            width: 200px;
            height: 200px;
            border-radius: 100px;
            border: 4px solid black;
            top: 210px;
            left: 130px;
            text-align: center;
        }
    </style>
</head>
<body>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div id="sec" class="sec"></div>
        <div id="min" class="sec"></div>
        <div id="hour" class="sec"></div>
        <div class="sec circle"><p id="timer"></p></div>
</body>
<script>
    setInterval(function(){
        var dt = new Date();
        var Hours = dt.getHours();
        var Minutes = dt.getMinutes();
        var Seconds = dt.getSeconds();
        var time = Hours + ":" + Minutes + ":" + Seconds;
        $("#timer").text(time);
        $("#sec").text(Seconds + " detik " + Seconds + " detik " + Seconds + " detik " + Seconds + " detik " + Seconds + " detik " + Seconds + " detik ");
        $("#min").text(Minutes + " Menit " + Minutes + " Menit " + Minutes + " Menit " + Minutes);
        $("#hour").text(Hours + " Jam " + Hours + " Jam ");
        var rotSec = ((Seconds / 60)*360)-90;
        var rotMin = ((Minutes / 60)*360)-90;
        var rotHour = ((Hours / 24)*360)-90;
        $('#sec').css("rotate", rotSec+"deg");
        $('#min').css("rotate", rotMin+"deg");
        $('#hour').css("rotate", rotHour+"deg");
    },100);
</script>
</html>
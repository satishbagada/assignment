<html>

<head>
    <script type="text/javascript" src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("button").click(function() {
                // $("#div1").fadeIn(5000);
                // $("#div2").fadeIn(7000);
                // $("#div3").fadeIn(10000);

                // $("#div1").fadeOut("slow");
                // $("#div2").fadeOut(1000);
                // $("#div3").fadeOut(2000);

                $("#div1").fadeToggle();
                $("#div2").fadeToggle("slow");
                $("#div3").fadeToggle(1000);
                $("#div1").fadeTo("slow", 0.15);
                $("#div2").fadeTo("slow", 0.8);
                $("#div3").fadeTo("slow", 0.15);

            });
        });
    </script>
    </script>
</head>

<body>
    <button>show button</button>
    <div id="div1" style="background:blue;width:100px;height: 80px;"></div>
    <div id="div2" style=" background:yellow;width:100px;height: 80px; margin-top:10px;"></div>
    <div id="div3" style="background:orange;width:100px;height: 80px;margin-top: 10px;"></div>
</body>

</html>
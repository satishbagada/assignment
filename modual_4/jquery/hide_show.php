<html>

<head>
    <script type="text/javascript" src="jquery.js"></script>
    <script>
        $(document).ready(function() {
            $("#show").click(function() {
                $("p").show();

            });
            $("#hide").click(function() {
                $("p").hide(7000);

            });
            $("button").click(function() {
                $("p").toggle();
            });
        });
    </Script>
</head>

<body>


    <button id="show">show</button>
    <button id="hide">hide</button>
    <button>Toggle between hiding and showing the paragraphs</button>


    <p>this show dialogbox</p>
    <p>if you click hide button i will dissappear</p>
</body>

</html>
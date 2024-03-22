<html>
    <head><title>Math</title></head>
    <body>
        <h2>This is PHP Math</h2>
        <?php
            echo "The value of PI is:".pi()."<br><br>";
            echo "rounding the value of PI:".round(pi())."<br><br>";
            echo "(1,2,0,3,-6) minimum value is:".min(1,2,0,3,-6)."<br><br>";
            echo "(1,2,0,3,-6) maximum value is:".max(1,2,0,3,-6)."<br><br>";
            echo "The absolute value of (-9.4) is:".abs(-9.4)."<br><br>";
            echo "The sqrt of 81 is:".sqrt(81)."<br><br>";
            echo "The random number is:".rand()."<br><br>";
            echo "The random number is:".rand(10,100)."<br><br>";
            define("cars",["Alfa Romeo","BMW","Toyato"]);
            echo cars[1];
            

        ?>
    </body>
</html>
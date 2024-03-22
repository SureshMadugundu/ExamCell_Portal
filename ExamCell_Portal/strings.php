<html>
    <body><b>
    <?php
    $string ="Hypertext Preprocessor";
    echo "<b>String is:</b>".$string."<br><br>";
    echo "string length is:".strlen($string)."<br>";
    echo "<br>";
    echo "words is string is:".str_word_count($string)."<br><br>";
    echo "Reverse string is:".strrev($string)."<br><br>";
    echo "Searching for Pre in string:".strpos($string,"Pre")."<br><br>";
    echo "Replacing in string:".str_replace("Preprocessor","Markup Language",$string)."<br><br>";
    echo "Replacing in istring:".str_ireplace("PREPROCESSOR","Markup Language",$string)."<br><br>";
    echo "Repeat the word 5 times:".str_repeat("HI ",5)."<br><br>";
    echo "Comparing two strings:".strcmp("HI","HI")."<br><br>";
    echo "Getting substring:".substr($string,6)."<br><br>";
    echo "Counting the occurence of substring:".substr_count("Welcome to PHP.PHP stands for Hypertext Preprocessor","PHP")."<br><br>";
    echo "Triming the string:".trim($string,"Hyor")."<br><br>";
    echo "Triming the left side ofstring:".ltrim($string,"Hy")."<br><br>";
    echo "Triming the right side of string:".rtrim($string,"or")."<br><br>";
    echo "Convert the first character of each word to uppercase:".ucwords("hello world")."<br><br>";
    echo "Convert the first character of first word to lowerercase:".Lcfirst("Hello World")."<br><br>";
    echo "Convert the first character of first word to uppercase:".Ucfirst("hello world")."<br><br>";
    echo "Converting into lowercase:".strtolower("HELLO WORLD")."<br><br>";
    echo "Converting into uppercase:".strtoupper("hello world")."<br><br>";
    echo "finding the last occurence of substr:".strripos("PHP is intresting.So I am learning PHP","pHp")."<br><br>";
    echo "finding the last occurence of substr:".strrpos("PHP is intresting.So I am learning PHP","PHP")."<br><br>";
    echo "padding the string:".str_pad($string,30,"*")."<br><br>";
    $age=19;
    $name="suresh";
    printf("My name is %s and age is %d",$name,$age);
    
    

    ?>
    </body>
</html>


<html>
    <head>
    <style>
        .error{
            color:red;
        }
    </style>
    </head>
    <body>
        <?php
        $name=$email=$id=$pswd=$branch="";
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(empty($_POST["name"]))
            {
                $nameErr="Name is required";
            }
            else
            {
                $name=test_input($_POST["name"]);
                if(!preg_match("/^[a-zA-Z']*$/",$name))
                {
                    $nameErr="Only letters and white spaces are allowed";
                }
            }
            if(empty($_POST["id"]))
            {
                $idErr="Email is required";
            }
            else
            {
                $id=test_input($_POST["id"]);
                if(!preg_match("/R[0-9]/i",$id))
                {
                    $idErr="Invalid ID";
                }
            }
            if(empty($_POST["email"]))
            {
                $emailErr="Email is required";
            }
            else
            {
                $email=test_input($_POST["email"]);
                if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                {
                    $eamilErr="Invalid email format";

                }
            }
            if(empty($_POST["pswd"]))
            {
                $pswdErr="Password is required";
            }
            else
            {
                $pswd=test_input($_POST["pswd"]);
                if(!preg_match("[a-zA-Z0-9@#$^%&*()]",$pswd))
                {
                    $pswdErr="combination of special chars";

                }
            }
            if(empty($_POST["branch"]))
            {
                $branchErr="branch is required";
            }
            else
            {
                $branch=test_input($_POST["branch"]);
            
            }
            
           
            
            
            
        }
        function test_input($data)
        {
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name:<input type="text" name="name"><br><br>
        <span class="error"><?php echo $nameErr;  ?></span>
        ID:<input type="text" name="id"><br><br>
        <span class="error"><?php echo $idErr; ?></span>
        e-mail:<input type="email" name="email"><br><br>
        <span class="error"><?php echo $emailErr; ?></span>
        password:<input type="password" name="pswd"><br><br>
        <span class="error"><?php echo $pswdErr; ?></span>
        branch:<select name="branch">
            <option>CSE</option>
            <option>ECE</option>
            <option>CIVIL</option>
            <option>MECH</option>
            <option>EEE</option>
            <option>MME</option>
            <option>CHEM</option>
        </select><br><br>
        <span class="error"><?php echo $branchErr; ?></span>
        <input type="submit" name="submit">
    </from>
    <?php
    echo "<h2>Your input is:</h2>";
    echo $name."<br>";
    echo $id."<br>";
    echo $email."<br>";
    echo $pswd."<br>";
    echo $branch."<br>";
    ?>
    </body>
</html>

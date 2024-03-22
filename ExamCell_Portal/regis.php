<html>
    <head><title>Form Validation</title></head>
    <body>
        <h1>Registration form</h1>
        <form id="form" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="id"><input type="text" id="id" name="id">ID:</label><br>
        <span id="errorid">ID</span><br>
        <label for="name"><input type="text" name="name" id="name">NAME:</label><br>
        <span id="errorname">Name</span><br>
        <input type="submit" name="submit" value="submit">
        
        </form>

    <script>
        let id=document.getElementById("id");
        let name=document.getElementById("name");
        // let pswd=document.getElementById("pswd");

        let errorid=document.getElementById("errorid");
        let errorname=document.getElementById("errorname");
        // const errorpswd=document.getElementById("errorpswd");
        //let form=document.querySelector('form');

        function validate()
        {
            const pattern=/^[r/R][0-9]{6}$/;
            let check=pattern.test(id.value);
            if(id.value=="")
                errorid.innerText="ID IS required";
            else if(id.value.length!=7)
                errorid.innerText="length should be 7";
            else if(check!=true)
                error.innerText="should start with R";
        

            const pattern2 = /^[a-zA-Z\s]+$/;
	        let check2 = pattern2.test(name.value);
	        if(name.value=="")
		        errorname.innerText = "Name required";
	        else if(check2!=true)
	            errorname.innerText = "should contain alphabets only";
        }
        form.addEventListener('submit',event=>{event.preventDefault();
            validate();
        });
        if(validate==true)
        {
            form.submit();
        }

    </script>
    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $id=$_POST['id'];
        echo "ID:".$id."<br>";
        $name=$_POST['name'];
        echo "Name:".$name."<br>";
        }
        
    ?>
    
        </body>
</html>
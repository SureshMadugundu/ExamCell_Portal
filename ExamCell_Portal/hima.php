<html>
<head><title>form</title></head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<label>Username</label>
<input type="text" placeholder="enter ur name" id="uname">
<span class="material-icons success">check_circle</span>

<input type="submit" value="submit" id="go">

</form>
<script>
    const uname=document.getElementById("uname");
    const pwd=document.getElementById("pwd");
    form.addEventListener("submit",(e)=>{e.preventDefault();validate();})
    function validate()
    {
        let uname=uname.value.trim();
        if(uname==="")
        {
            setError(uname,"username cant be empty");

        }
        else if(uname.length<3)
        {
            setError(uname,"cant be lessthan 3");
        }
        else
        {
            setSuccess(uname);
        }
    }

</script>
<?php
    $uname=$_POST['uname'];
    echo $uname;
?>
</body>
</html>
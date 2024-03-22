<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
      <form id="form" method="post" action="span.php">
        <div>
          ID:<input type="text" name="id" placeholder="Enter your ID" id="id_no"><br/>
          <small></small>
        </div>
        <div>Name: <input type="text" name="name" id="uname"><br/>
        <small></small>
        </div><br/>
        <div>Password:<input type="password" name="password" placeholder="Enter Password" id="pass"><br/>
        <small></small>
        </div><br/>
        <div>
          Confirm Password:<input type="password" name="cpassword" id="cpass" placeholder="Confirm Password"><br/>
          <small></small>
        </div><br/><div>
        Select Subjects:<input type="checkbox" name="sub[]" value="wt" id="check">WT
        <input type="checkbox" name="sub[]" value="dsp" id="check">DSP
        <input type="checkbox" name="sub[]" value="cd" id="check">CD
        <input type="checkbox" name="sub[]" value="or" id="check">OR
        <input type="checkbox" name="sub[]" value="coas" id="check">COA<br/>
        <small></small>
        </div><br/><br/>
        Gender:
        <div>
          <input type="radio" name="gender" value="male" id="g_check">Male
          <input type="radio" name="gender" value="female" id="g_check">Female
          <input type="radio" name="gender" value="other" id="g_check">Others
          <small></small>
        </div>
        <input type="submit" name="submit" value="Submit">
      </form>
     <?php echo '<script src="form_validate.js"></script>'; ?>
  </body>
</html>
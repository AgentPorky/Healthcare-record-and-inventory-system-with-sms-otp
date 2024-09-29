<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="../Css/style.css">

</head>
<body>
     <form action="adminsignup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['userpatient_name'])) { ?>
               <input type="text" 
                      name="userpatient_name" 
                      placeholder="Name"
                      value="<?php echo $_GET['userpatient_name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="userpatient_name" 
                      placeholder="Name"><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['userpatient_password'])) { ?>
               <input type="text" 
                      name="userpatient_password" 
                      placeholder="User Name"
                      value="<?php echo $_GET['userpatient_password']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="userpatient_password" 
                      placeholder="UserName"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"><br>

     	<button type="submit">Sign Up</button>
          <a href="adminindex.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>
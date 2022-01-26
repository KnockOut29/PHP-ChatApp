<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
          <header>Villan Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
             <div class="error-txt"></div>
               


                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>

                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter your password">
                            <i class="fas fa-eye"></i>
                        </div>


                    <div class="field button">
                        <input type="submit" value="Contue to Chat">
                    </div>
            
          </form>
          <div class="link">Not yet singed up?<a href="index.php"> Signup now</a></div>
        </section>
    </div>
    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/login.js"></script>

</body>
</html>

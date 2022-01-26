<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form signup">
          <header>Vilan Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
             <div class="error-txt"></div>
               
             <div class="name-details">
                <div class="field input">
                    <label>First Name</label>
                    <input type="text" name="fname" placeholder="First Name" required>
                </div>

                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                </div>
             </div>

                    <div class="field input">
                        <label>Email Address</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>

                        <div class="field input">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter new password" required> 
                            <i class="fas fa-eye"></i>
                        </div>

                            <div class="field image">
                                <label>Select Image</label>
                                <input type="file" name="image" accept="image/x-ping,image/gif,image/jpeg,image/jpg" required>
                            </div>

                    <div class="field button">
                        <input type="submit" value="Contue to Chat">
                    </div>
            
          </form>
          <div class="link">All ready singed up?<a href="login.php"> Loging now</a></div>
        </section>
    </div>

    <script src="JavaScript/pass-show-hide.js"></script>
    <script src="JavaScript/signup.js"></script>

</body>
</html>

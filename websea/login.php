<?php
    include 'config.php';
    if(isset($_POST['Submit'])) {
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }
        $nama = validate($_POST['uname']);
        $email = validate($_POST['email']);
        $kota = validate($_POST['city']);
        $password = validate($_POST['password']);

        $sql="SELECT * FROM user WHERE email='$email'";
        $result=mysqli_query($mysqli,$sql);
        if(mysqli_num_rows($result)>=1){
            $row=mysqli_fetch_assoc($result);
            if($row['email']===$email){
                header("Location:login.php?error=Unfortunately Your Email is Already In Our Amazing Database");
            }
        }
        else{
            $sql = "INSERT INTO user(nama,email,password) VALUES ('$nama', '$email', '$password')";
            
            $result=mysqli_query($mysqli,$sql);
            $id=mysqli_insert_id($mysqli);
            
            $sql2 = "INSERT INTO user_detail(User_id,nama,email,kota,link_pp) VALUES ($id,'$nama', '$email', '$kota',' ')";
            $result=mysqli_query($mysqli,$sql2);

            session_start();
            $_SESSION['email']=$_POST['email'];
            $_SESSION['User_id']=$id;
            header("Location: index.php");
        }   
    }           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href="style-login.css">
    <title>WatchDish Login Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="form-box">
            <div class="btn-area">
                <button name="previous" id="backBtn">&laquo; Back to home</button>
            </div>
            <br>
            <br>
            <br>
            <h1 id="title">Sign Up</h1>
            <?php if(isset($_GET['error'])){?>
                <p class="error"><?php echo $_GET['error'];?></p>
            <?php }?>
            <form method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" id="nama" name="uname" placeholder="Name" required oninvalid="this.setCustomValidity('Isi dulu dong bro...')"  oninput="setCustomValidity('')">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" placeholder="Email" name="email" required oninvalid="this.setCustomValidity('Isi dulu dong...')"  oninput="setCustomValidity('')">
                    </div>
                    <div class="input-field" id="nameField2">
                        <i class="fa-solid fa-home"></i>
                        <input type="text" id="kota" placeholder="City" name="city" required oninvalid="this.setCustomValidity('Isi dulu dong...')"  oninput="setCustomValidity('')">
                    </div>
                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required oninvalid="this.setCustomValidity('Isi dulu dong...')"  oninput="setCustomValidity('')">
                    </div>
                    <p>Forgot password? <a href="https://www.youtube.com/watch?v=9xFGZK4nR3g">Click Here!</a></p>
                </div>
                <br>   
                <div class="btn-field">
                    <button type="submit" id="signupBtn" name="Submit" formaction="login.php">Sign Up</button> 
                    <button type="submit" id="loginBtn" class="disable" formaction="loginin.php">Log In</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        let signupBtn = document.getElementById("signupBtn");
        let loginBtn = document.getElementById("loginBtn");
        let nameField = document.getElementById("nameField");
        let nameField2 = document.getElementById("nameField2");
        let nama = document.getElementById("nama");
        let kota = document.getElementById("kota");
        let title = document.getElementById("title");
        let backBtn = document.getElementById("backBtn");
       
        loginBtn.onclick=function(){
            nameField.style.height="0px";
            nameField2.style.height="0px";
            title.innerHTML = "Log In";
            signupBtn.classList.add("disable");
            loginBtn.classList.remove("disable");
            nama.required=false;
            kota.required=false;
        }
        

        signupBtn.onclick=function(){   
            nameField.style.height="50px";
            nameField2.style.height="50px";
            title.innerHTML = "Sign Up";
            loginBtn.classList.add("disable");
            signupBtn.classList.remove("disable");
            nama.required=true;
            kota.required=true;
        }

        backBtn.onclick=function(){
            location.href= "index.php";
        }


    </script>
</body>
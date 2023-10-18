<?php
    session_start();
    $id=$_SESSION['User_id'];
    include 'config.php';
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama_resep'];
        $bahan = $_POST['bahan'];
        $alat = $_POST['alat'];
        $step = $_POST['step'];
        $foto = $_POST['link_photo'];
        $video = $_POST['link_video'];

        $sql = "INSERT INTO recipe(User_id, nama_resep, link_video, steps, alat, bahan, link_photo) VALUES ($id,'$nama', '$video', '$step', '$alat', '$bahan', '$foto')";

        $result=mysqli_query($mysqli,$sql);
        header("Location: akun.php?");
    }           
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-addrecipe.css">
    <link rel="stylesheet" href="style-navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WatchDish Main Page</title>
</head>
<body>
    <div class = "size-topnav">
        <div class = "topnav" >
            <a href = "index.php"><div-a>Home</div-a></a>
            <div-a class = "dropdown"><a  href = "allrecipe.php">Recipe</a>
                <div class = "dropdown-content">
                    <a href = "#">Breakfast</a>
                    <a href = "#">Lunch</a>
                    <a href = "#">Dinner</a>
                    <a href = "#">Snack</a>
                </div>
            </div-a>
            <?php
                include 'config.php';
                $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                $result = mysqli_query($mysqli,$sql);
                $row = mysqli_fetch_assoc($result); 
                $resep_id = $row['recipe_id'];
            
                echo "<a href = 'recipe.php?resepid=$resep_id'>";
                echo "<div-a >Random Recipe</div-a>";
                echo "</a>";
            ?>
            <div class = "search" >
                <form role="search-role" id="form" method="post">
                    <input type="text" name="input" placeholder="Search..">
                    <button type="submit" id="searchbutton" formaction="search.php">
                        <i class="fa-solid fa-magnifying-glass" ></i>
                    </button>
                </form>
            </div>
            <div class = "user-login">
                <div class="dropdown" ><i class = "fas fa-user-alt"></i>
                <?php
                if(isset($_SESSION['email']) &&  isset($_SESSION['User_id']) ) {
                    ?>
                    <div class = "dropdown-content" style="transform:translatex(-50%);background-color: #f1f1f1;">
                        <a href = "akun.php?userid=<?php echo $_SESSION['User_id']; ?>">Akun</a>
                        <a href = "#">Favorit</a>
                        <a href = "logout.php">Log Out</a>
                    </div>                   
                <?php
                } 
                else 
                {
                ?>
                     <div class = "dropdown-content" style="transform:translatex(-50%);background-color: #f1f1f1;">
                        <a href = "login.php">Log In</a>
                    </div>
                <?php
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <main>
        <section class = "header">
            <h1>ADD RECIPE</h1>
        </section>
        <br>
        <form method = "POST">
        <section class = "Caramasak">
                <br>
                <input type="text" placeholder="Nama resep..." style="width:100%;height:30px;" name="nama_resep">
                <br>
                <br>
                <div class = "Caramasak-content">
                    <div class = "Caramasak-row">
                        <div class="Caramasak-column-alat">
                            <h3>
                                Ingredients
                            </h3>
                            <textarea rows = "7" cols = "25" name = "bahan"></textarea>
                            <br>
                            <br>
                            <h3>
                                Tools
                            </h3>
                            <textarea rows = "7" cols = "25" name = "alat"></textarea>
                        </div>
                        <div class="Caramasak-column-langkah">
                            <h3>
                                Steps: 
                            </h3>
                            <textarea rows = "18" cols = "90" name = "step"></textarea>
                            <br>
                            <input type="text" placeholder="Link gambar..." style="width:100%" name="link_photo">
                        </div>
                    </div>
                </div>
                <br>
                <input type="text" placeholder="Link Video Youtube Resep..." style="width:100%" name="link_video">
        </section>
        <br>
        <section>
            <div class = "btn-tengah">
                <div class = "btn-akun">
                  <button style="margin-right:0%;" name="Submit" formaction = "addrecipe.php?userid=<?php echo $id ?>">Upload</button>  
                </div>
            </div>
        </section>
        </form>
        <br>
    </main>
    <footer class="footer">
        <div class="container">
         <div class="row-below">
            <div class="footer-col">
                <ul>
                    <li><a href="index.php"><img src="https://i.pinimg.com/750x/8b/ff/d3/8bffd3f6b9a2982ce72fd333eac9b877.jpg" style="width: 100;" height="150px"></a></li>
                </ul>
            </div>
           <div class="footer-col">
             <h4>company</h4>
             <ul>
               <li><a href="aboutuspage.php">about us</a></li>
               <li><a href="#">our services</a></li>
               <li><a href="#">privacy policy</a></li>
             </ul>
           </div>
           <div class="footer-col">
             <h4>get help</h4>
             <ul>
               <li><a href="#">FAQ</a></li>
               <li><a href="#">Customer Service</a></li>
             </ul>
           </div>
           <div class="footer-col">
             <h4>follow us</h4>
             <div class="social-links">
               <a href="#"><i class="fab fa-facebook-f"></i></a>
               <a href="#"><i class="fab fa-twitter"></i></a>
               <a href="#"><i class="fab fa-instagram"></i></a>
               <a href="#"><i class="fab fa-tiktok"></i></a>
               <a href="#"><i class="fab fa-youtube"></i></a>
               <a href="#"><i class="fab fa-linkedin-in"></i></a>
             </div>
           </div>
         </div>
        </div>
    </footer>
</body>
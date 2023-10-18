<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-mainpage.css">
    <link rel="stylesheet" href="style-navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WatchDish</title>
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
                    <input type="text" name="input" placeholder="Search.." value=''>
                    <button type="submit" id="searchbutton" formaction="search.php">
                        <i class="fa-solid fa-magnifying-glass" ></i>
                    </button>
                </form>
            </div>
            <div class = "user-login">
                <div class="dropdown" ><i class = "fas fa-user-alt"></i>
                <?php
                session_start();
                if(isset($_SESSION['email']) &&  isset($_SESSION['User_id']) ) {
                    ?>
                    <div class = "dropdown-content" style="transform:translatex(-50%);background-color: #f1f1f1;">
                        <a href = "akun.php">Akun</a>
                        <a href = "akun.php">Favorit</a>
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
        <section class = "banner-adi" style="border-radius: 10px;" >
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                        $result = mysqli_query($mysqli,$sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        $resep_id = $row['recipe_id'];
                        $foto = $row['link_photo'];
                        $nama_resep = $row['nama_resep'];
                    ?>
                    <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                    <img class = "banner-adimg"   src = "<?php echo $foto;?>">
                    <div class="text"><?php echo $nama_resep;?></div>
                </div>
                  
                <div class="mySlides fade">
                  <?php
                        include 'config.php';
                        $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                        $result = mysqli_query($mysqli,$sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        $resep_id = $row['recipe_id'];
                        $foto = $row['link_photo'];
                        $nama_resep = $row['nama_resep'];
                    ?>
                    <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                    <img class = "banner-adimg"   src = "<?php echo $foto;?>">
                    <div class="text"><?php echo $nama_resep;?></div>
                </div>
                  
                <div class="mySlides fade">
                    <?php
                        include 'config.php';
                        $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                        $result = mysqli_query($mysqli,$sql);
                        $row = mysqli_fetch_assoc($result);
                        
                        $resep_id = $row['recipe_id'];
                        $foto = $row['link_photo'];
                        $nama_resep = $row['nama_resep'];
                    ?>
                    <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                    <img class = "banner-adimg"   src = "<?php echo $foto;?>">
                    <div class="text"><?php echo $nama_resep;?></div>
                </div>
                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>
                </div>
            </div>
                  <div style="text-align:center">
                    <span class="dot" onclick="currentSlide(1)"></span> 
                    <span class="dot" onclick="currentSlide(2)"></span> 
                    <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
                  
        </section>
        <br>
        <br>
        <section>
        <?php
            // include 'config.php';
            // $result = mysqli_query($mysqli,'SELECT * FROM Favorite ORDER BY User_id ASC');
            // while($row = mysqli_fetch_array($result)){ 
            //     echo "<table>";
            //       echo "<tr>";
            //         echo "<td>".$row['User_id'];".</td>";
            //         echo "<td>".$row['Recipe_id'];".</td>";
            //     echo "</tr>";
            //     echo "</table>";
            // }
            // echo "Halo";
        ?>
        </section>
        <section class="Trending-head">
            <a href="latest-recipe.php" style="color:black;"><h1 style="display:inline-block">Latest Recipe</h1><i class="fa fa-arrow-right"></i></a>
        </section>
        <section class = "LatestRecipe">
            <br>
            <div class = "LatestRecipe-content">
                <div class = "LatestRecipe-row">
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                </div>
                <br>
                <div class = "LatestRecipe-row">
                    <div class="LatestRecipe-column">
                        <?php
                            
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                    <div class="LatestRecipe-column">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY RAND() limit 1";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_assoc($result);
                            
                            $resep_id = $row['recipe_id'];
                            $foto = $row['link_photo'];
                            $nama_resep = $row['nama_resep'];
                        ?>
                        <?php echo "<a href = 'recipe.php?resepid=$resep_id'>"?>
                            <img src = "<?php echo $foto;?>">
                            <h2>
                                <?php echo $nama_resep;?>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section class="Trending-head">
            <a href="trending.php" style="color:black;"><h1 style="display:inline-block">Trending</h1><i class="fa fa-arrow-right"></i></a>
        </section>
        <section class="Trending">
            <div>
                <div class="row">
                    <div class="col">
                        <?php
                            include 'config.php';
                            $sql = "SELECT * FROM recipe ORDER BY recipe_id DESC";
                            $result = mysqli_query($mysqli,$sql);
                            $row = mysqli_fetch_array($result);
                            
                            $video = $row['link_video'];
                            $foto = "http://i1.ytimg.com/vi/";
                            $foto .=substr($row['link_video'],17, 11);
                            $foto .= "/default.jpg";
                            $nama_resep = $row['nama_resep'];
                        echo "<img src = '$foto'>";
                        echo "<a href='$video'></a>";
                        echo "<h2>$nama_resep</h2>";
                        ?>
                    </div>
                    <div class="col">
                        <?php
                            $row = mysqli_fetch_array($result);
                            
                            $video = $row['link_video'];
                            $foto = "http://i1.ytimg.com/vi/";
                            $foto .=substr($row['link_video'],17, 11);
                            $foto .= "/default.jpg";
                            $nama_resep = $row['nama_resep'];
                        echo "<img src = '$foto'>";
                        echo "<a href='$video'></a>";
                        echo "<h2>$nama_resep</h2>";
                        ?>
                    </div>
                    <div class="col">
                        <?php
                            $row = mysqli_fetch_array($result);
                            
                            $video = $row['link_video'];
                            $foto = "http://i1.ytimg.com/vi/";
                            $foto .=substr($row['link_video'],17, 11);
                            $foto .= "/default.jpg";
                            $nama_resep = $row['nama_resep'];
                        echo "<img src = '$foto'>";
                        echo "<a href='$video'></a>";
                        echo "<h2>$nama_resep</h2>";
                        ?>
                    </div>
                    <div class="col">
                        <?php
                            $row = mysqli_fetch_array($result);
                            
                            $video = $row['link_video'];
                            $foto = "http://i1.ytimg.com/vi/";
                            $foto .=substr($row['link_video'],17, 11);
                            $foto .= "/default.jpg";
                            $nama_resep = $row['nama_resep'];
                        echo "<img src = '$foto'>";
                        echo "<a href='$video'></a>";
                        echo "<h2>$nama_resep</h2>";
                        ?>
                    </div>
                </div>
            </div>
        </section>
        <section style="width: 100%;">
            <?php
                $sql = "SELECT * FROM recipe ORDER BY recipe_id DESC";
                $result = mysqli_query($mysqli,$sql);
                $row = mysqli_fetch_array($result);
                
                $video = "https://www.youtube.com/embed/";
                $video .= substr($row['link_video'],17, 11);
                $video .= "?&autoplay=1&mute=1&loop=1&vq=small";
            
                echo "<h1 style='text-align: center;'>VIDEO TERBAIK MUSIM INI!</h1>";
                echo "<div id='ab'><iframe src='$video' allow='autoplay'></iframe></div>";
            ?>
        </section>
        <br>
    </main>
    <footer class="footer">
        <div class="container">
         <div class="row-below">
            <div class="footer-col">
                <ul>
                    <li><a href="index.php"><img src="https://i.pinimg.com/750x/8b/ff/d3/8bffd3f6b9a2982ce72fd333eac9b877.jpg" style="width: 100;" height="150px"> </a></li>
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
<script src = "slideshow.js">

document.getElementById("searchbutton").onclick = function() {
    document.getElementById("form").submit();
}
</script>
</html>
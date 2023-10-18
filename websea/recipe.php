<?php
    session_start();
    $id=$_GET['resepid'];
    include 'config.php';
    $sql = "SELECT * FROM recipe WHERE recipe_id=$id";
    $result = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_assoc($result);
    
    $nama = $row['nama_resep'];
    $step = $row['steps'];
    $video = "https://www.youtube.com/embed/";
    $video .= substr($row['link_video'],17, 11);
    $video .= "?&autoplay=1&mute=1&loop=1";
    $alat = $row['alat'];
    $bahan = $row['bahan'];
    $idi=$row['User_id'];
    if(isset($_SESSION['email']) &&  isset($_SESSION['User_id'])) {
        $id_user=$_SESSION['User_id'];
        if($id_user!=$idi){

            if(isset($_POST['Submit1'])){
                $sql = "INSERT INTO Favorite (User_id, Recipe_id) VALUES ($id_user, $id)";
                $result = mysqli_query($mysqli,$sql);
            }
            if(isset($_POST['Submit2'])){
                $sql = "DELETE FROM Favorite WHERE User_id = $id_user AND Recipe_id = $id";
                $result = mysqli_query($mysqli,$sql);
            }

            $sql = "SELECT * FROM Favorite WHERE User_id = $id_user AND Recipe_id = $id"; 
            $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)===1){
                    $status='favorit';
                    $form='Submit2';
                }
                else{
                    $status='belumfavorit';
                    $form='Submit1';
                }
        }
        else{
            if(isset($_POST['Submitdelete'])){
                $sql = "DELETE FROM recipe WHERE User_id = $id_user AND Recipe_id = $id";
                $result = mysqli_query($mysqli,$sql);
                header('location: akun.php');
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-recipe.css">
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
            <?php echo "<h1>$nama</h1>";?>
        </section>
        <br>
        <section style="min-width: 1000px;">
            <?php echo "<div id='ab'><iframe src = $video allow='autoplay'></iframe></div>" ?>
        </section>
        <section>
        <form method="post">
            <br>
            <?php
                if(isset($_SESSION['email']) &&  isset($_SESSION['User_id']) ) {
                    if($id_user!=$idi){
                    ?>
            <div class="btn-field">
                <?php
                echo "<button type='submit' name='$form' class='disable' id='$status' formaction='recipe.php?resepid=$id'>Add to favorite</button>";
                ?>
            </div>
            <?php 
                    } 
                    else
                    {
            ?>
            <div class="btn-field">
                <?php
                echo "<button type='submit' name='Submitdelete' class='disable' formaction='recipe.php?resepid=$id'>Delete Recipe</button>";
                ?>
            </div>
            <?php
                    }
                }
            ?>
        </form>
        </section>
        <section class = "Caramasak">
            <br>
            <div class = "Caramasak-content">
                <div class = "Caramasak-row">
                    <div class="Caramasak-column-alat">
                        <h3>
                            Ingredients
                        </h3>
                            <?php echo nl2br($bahan)?>
                        <br>
                        <br>
                        <h3>
                            Tools
                        </h3>
                            <?php echo nl2br($alat)?>
                    </div>
                    <div class="Caramasak-column-langkah">
                        <h3>
                            Steps: 
                        </h3>
                            <?php echo nl2br($step)?>
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section>
        <?php
            $sql = "SELECT * FROM user_detail WHERE User_id=$idi";
            $result = mysqli_query($mysqli,$sql);
            $row = mysqli_fetch_assoc($result);
            if(empty($row['nama'])){
                $namapembuat='rahasia';
                $kotapembuat='kemarin memikirkan kamu';
              } 
            else{
                $namapembuat=$row['nama'];
                $kotapembuat=$row['kota'];
            }
            echo "<h3 style='text-align:center; margin:auto;font-style: italic;'> diunggah oleh $namapembuat dengan <i class='fa-solid fa-heart' style='color=#891111'></i> <br> dia dari $kotapembuat lho...</h3><br>"
        ?>
        </section>
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
        <script>
            let Favorit = document.getElementById("favorit")
            Favorit.classList.add("disable");
            Favorit.textContent='Remove favorite';

            let belumFavorit = document.getElementById("belumfavorit")
            belumFavorit.classList.add("disable");
            belumFavorit.textContent='Add favorite';

            // let heartBtn = document.getElementById("heartBtn")
            // let heartIcon = document.getElementById("heartIcon")

            // heartBtn.onclick=function(){
            //     if (heartBtn.classList.contains("disable")){
            //         heartBtn.classList.remove("disable");
            //         heartBtn.textContent='Remove favorite';
            //         heartBtn.setAttribute("name","Submit2");
            //         <?php 
            //             $id_user=$_SESSION['User_id'];
            //             include 'config.php';
            //             $sql = "INSERT INTO Favorite (User_id, Recipe_id) VALUES ($id_user, $id)";
            //             $result = mysqli_query($mysqli,$sql);
            //         ?>
            //     }
            //     else{
            //         heartBtn.classList.add("disable");
            //         heartBtn.textContent='Add to Favorite';
            //         <?php 
            //             $id_user=$_SESSION['User_id'];
            //             include 'config.php';
            //             $sql = "DELETE FROM Favorite WHERE User_id = $id_user AND Recipe_id = $id";
            //             $result = mysqli_query($mysqli,$sql);
            //         ?>
            //     }
            // }
        </script>
    </footer>
</body>
<script src = "slideshow.js"></script>
</html>
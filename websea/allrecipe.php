<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style-allrecipe.css">
    <link rel="stylesheet" href="style-navbar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>WatchDish Recipes</title>
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
                session_start();
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
          <section class="header">
            <h1>Recipes</h1>
          </section>
          <br>
          <section>
            <div class = "recommend">
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
          </section>
          <section class="Options">
            <div class = "header-content">
              <h2>Category</h2>
              <br>
            </div>
            <div class="row">
              <div class="column">
                <a href="recipe.php"></a>
                <img src = "https://images.pexels.com/photos/2351275/pexels-photo-2351275.jpeg?auto=compress&cs=tinysrgb&w=1600">
                <h3>Breakfast</h3>
              </div>
              <div class="column">
                <img src = "https://images.pexels.com/photos/70497/pexels-photo-70497.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <h3>Lunch</h3>
              </div>
              <div class="column">
                <img src = "https://images.pexels.com/photos/958545/pexels-photo-958545.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <h3>Dinner</h3>
              </div>
              <div class="column">
                <img src = "https://images.pexels.com/photos/1583884/pexels-photo-1583884.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1">
                <h3>Snack</h3>
              </div>
            </div>
          </section>
          <section class="recipe-content" >
            <div class = "header-content">
              <h2>Popular Recipes</h2>
              <br>
            </div>
            <div class="row-content">
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
            </div>
            <div class="row-content">
              <div class="column-content">
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
                      <h3>
                          <?php echo $nama_resep;?>
                      </h3>
                      <p></p>
                  </a>
              </div>
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                  </a>
              </div>
            </div>
          </section>
          <section>
            <div class = "recommend">
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
          </section>
          <section class="recipe-content" >
            <div class="row-content">
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
            </div>
            <div class="row-content">
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
              <div class="column-content">
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
                    <h3>
                        <?php echo $nama_resep;?>
                    </h3>
                    <p></p>
                </a>
              </div>
            </div>
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
      </footer>
</body>
      
</html>
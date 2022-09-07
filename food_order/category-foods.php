<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="index.html" title="Logo">
                    <img src="images/cylone flavors.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="#">Foods</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="order.html">Order</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on <a href="#" class="text-white">"Category"</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <h3 class="text-center"><i>Pizza</i> </h3>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Vege Pizza</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=1";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian Sauce, organice vegetables.
                    <br>

                    <h4>Food item Number - 001</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://img-9gag-fun.9cache.com/photo/a24pKxD_460s.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cheese Pizza</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=2";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken,Cheese and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 002</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://qph.fs.quoracdn.net/main-qimg-a39b43a6207b4be806fb1468904488f2" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Sausage Pizza</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=3";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian Sauce, Cheese, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 003</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-pizza.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Pizza</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=4";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 004</h4>
                </div>
            </div>

            <h3 class="text-center"><i>Burger</i> </h3>
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/13/97/5a/2b/jamy-s-doublepack-sour.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cheese Burger</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=5";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian cheese, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 005</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/0a/ef/f8/be/smallest-burger-king.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chicken Burger</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=6";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian cheese, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 006</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-burger.jpg" alt="Chicke Hawain Burger" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Beef Burger</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=7";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Beef, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 007</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://images.pexels.com/photos/3052362/pexels-photo-3052362.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mix Burger</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=8";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Italian Sauce, Chicken, and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 008</h4>
                </div>
            </div>


            <h3 class="text-center"><i>Drinks </i> </h3>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://insidefmcg.com.au/wp-content/uploads/2020/11/tea-1481514.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cup of Tea</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=9";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with best green leaves.
                    </p>
                    <br>

                    <h4>Food item Number - 009</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://media.istockphoto.com/photos/cup-of-coffee-picture-id467148153?s=170667a" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cup of cofee</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=10";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Best cofee in the world
                    </p>
                    <br>

                    <h4>Food item Number - 010</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://files.recipetips.com/kitchen/images/refimages/kitchen_advice/fruit_veg/oranges/orange_juice.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Orange Juice</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=11";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made using fresh Orange
                    </p>
                    <br>

                    <h4>Food item Number - 011</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="http://2.bp.blogspot.com/_H0W3McLw1L0/S1TKu6rIXuI/AAAAAAAAAzQ/aXQpLbJtMgQ/s400/maitai.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mango Juice</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=12";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made using fresh Mango
                    </p>
                    <br>

                    <h4>Food item Number - 012</h4>
                </div>
            </div>

            
            <h3 class="text-center"><i>salads</i> </h3>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://www.tfrecipes.com/data/4/b/c/8/e/1/83d66e91b1282955588fe864eb" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Green Salad</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=13";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made using organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 013</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://i.pinimg.com/474x/61/d9/54/61d9544cdb2dc8ec778384424f5e1d9d.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Fruits Salad</h4>
                    <p class="food-price">250.00</p>
                    <p class="food-detail">
                        Made using fresh fruits
                    </p>
                    <br>

                    <h4>Food item Number - 014</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://www.tfrecipes.com/data/1/7/7/f/6/c/2ce1df25517ddae69e33f822b7" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cheese - Vege Salad</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=14";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with Cheese and vegetables
                    </p>
                    <br>

                    <h4>Food item Number - 015</h4>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="https://cdn.xxl.thumbs.canstockphoto.com/a-plate-of-beautiful-salad-spinning-stock-video_csp43173465.jpg" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Mix salad</h4>
                    <?php
                            $conn = mysqli_connect("localhost", "root", "", "ceylonflavors");
                            if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                            }
                                $sql = "SELECT i_price FROM inventory WHERE i_no=16";
                                $result = $conn->query($sql);
                            if ($result->num_rows > 0)
                            {
                                $rs=".00";  
                                while($row = $result->fetch_assoc()) 
                                {
                                    echo "<p><b>" . $row["i_price"] . $rs . "</b></p>";
                                }
                                } else { echo "0 results"; }
                                $conn->close();
                                ?>
                    <p class="food-detail">
                        Made with cheese,fruits and organice vegetables.
                    </p>
                    <br>

                    <h4>Food item Number - 016</h4>
                </div>
            </div>



            <div class="clearfix"></div>

            <h3 class="text-center"><a href="order.html">Order now..</a> </h3>

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">සිලෝන් TEAM</a></p>
        </div>

        <div class="container">

            <div class="box-3">
                <h3>Locations</h3>
                <a href="#">Colombo</a><br>
                <a href="#">Kandy</a><br>
                <a href="#">Kurunagala</a><br>
                <a href="#">Jaffna</a><br>
                <a href="#">Ampara</a>
            </div>
    
            <div class="box-3">
                <h3>Quick links</h3>
                <a href="#">home</a><br>
                <a href="categories.html">categories</a><br>
                <a href="category-foods.html">foods</a><br>
                <a href="contact.html">contact</a><br>
                <a href="order.html">order</a>
            </div>
    
            <div class="box-3">
                <h3>Contact info</h3>
                <a href="#">0782367098</a><br>
                <a href="#">0783267098</a><br>
                <a href="#">0782370098</a><br>
                <a href="#">ceylonFlavorsS@gmail.com</a>
                
            </div>
    
        </div>
    </section>
    <!-- footer Section Ends Here -->

    
    <div class="loader-container">
        <img src="images/loade.gif" alt="">
    </div>


    <script src="script.js"></script>

</body>
</html>
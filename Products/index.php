<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header id="header" class="alt">
        <div class="container">
            <nav id="nav">
                <ul class="nav-areaaa">
                    <li class="liform"><a href="../HomePage/homePage.html">Home</a></li>
                    <li class="liform"><a href="index.html">Library</a></li>
                    <li class="liform"><a href="../AboutUs/index.html">About Us</a></li>
                    <li class="liform"><a href="../ContactUs/index.html">Contact Us</a></li>
                    <li class="liform"><a href="../LoginForm/loginForm.html">Log out</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="listLibra ">
        <nav id="nav ">
            <ul class="nav-area ">
                <?php   
                    include_once "../LoginForm/models/DbConn.php";

                    $obj = new DBConnection();
                    $connection = $obj->getConnection();

                    $sql = "SELECT * FROM Category";
                    $statement = $connection->prepare($sql);
                    $statement->execute();
                    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
                    
                    foreach ($row as $roww) {
                        echo '<li class="Category" style="font-size:200%; text-align: center;">'.$roww['Category_Name']. '</br>';
                        $rowtest = $roww['Category_ID'];

                        $sql1 = "SELECT * FROM Book WHERE Category_ID = $rowtest";
                        $statement1 = $connection->prepare($sql1);
                        $statement1->execute();
                        $row2 = $statement1->fetchAll(PDO::FETCH_ASSOC);
                    
                        foreach ($row2 as $roww2) {

                            ?>

                            <a><?php echo '<img src="../'.($roww2['Photo'] ).'" height="300" width="300" style="padding-left:1%"/>';?></a>

                            <?php
                        }
                    }
                ?>
                
            </ul>
        </nav>
    </div>


    <script src="js/main.js "></script>
    <script src="js/category.js "></script>
</body>

</html>
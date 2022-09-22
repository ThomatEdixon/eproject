<?php
session_start();
include 'connect.php';
$object = json_decode(json_encode($_SESSION['user']['id']), FALSE);
$userid = $object;
$error = [];
// FEEDBACK
$id = $_GET['id'];
$sql = "SELECT * from product where productid = $id";
$result = $conn->query($sql);
// $row = mysqli_fetch_all($result);
// echo "<pre>";
// var_dump($row);
// $status = mysqli_query($conn,"SELECT * from orders where userid =");



if (isset($_POST['submit'])) {
    $feedback = htmlspecialchars($_POST['cmt']);

    if (empty($feedback)) {
        $error['feedback'] = "Bạn chưa nhập feedback";
    }
    if (count($error) == 0) {
        $sql = mysqli_query($conn, "INSERT INTO `feedback` (`id`, `userid`, `productid`, `feedback`) VALUES (NULL, '$userid', '$id', '$feedback')");
    }
}
$cmt = mysqli_query($conn, "SELECT *, user.username FROM `feedback` INNER JOIN user on user.userid = feedback.userid");


$img = mysqli_query($conn, "SELECT * FROM image where productid = $id");
$category = mysqli_query($conn, "SELECT * FROM category INNER JOIN product on category.categoryid = product.categoryid WHERE product.productid = $id");
//var_dump($category);
$type = mysqli_query($conn, "SELECT * FROM type INNER JOIN product on type.typeid = product.typeid WHERE product.productid = $id");
$brand = mysqli_query($conn, "SELECT * FROM brand INNER JOIN product on brand.brandid = product.brandid WHERE product.productid = $id");


$status = mysqli_query($conn, "SELECT orders.status FROM `orders` INNER JOIN user on user.userid = orders.userid WHERE orders.userid=$userid");

//$img_pro = mysqli_fetch_all($img);
//echo '<pre>';
//var_dump($img_pro); 
// $product = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='./sanphamchitiet1.css' rel='stylesheet'>
    <link href="./sourcecss.css" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        html {
            font-size: 100%;
        }

        #header1 {
            background-color: #53284f;
            height: 80px;
        }

        .nav {
            max-width: 1650px;
            margin: 0px auto;
        }

        nav {
            display: flex;
        }

        #main-menu {
            display: flex;
            list-style: none;
            margin-left: 2.5rem;

        }

        .nav #logo img {
            /* logo */
            max-width: 200px;
            height: auto;
        }

        #logo {
            padding: 5px 0px;
            margin-top: 0.6rem;
        }

        #main-menu li {
            position: relative;
        }

        #main-menu li a {
            color: white;
            text-decoration: none;
            display: block;
            padding: 25px 25px;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-weight: 600;
            height: 3.5rem;
        }

        /* sub menu */
        #main-menu ul.sub-menu {
            position: absolute;
            background-color: #ebeaea;
            padding: 15px 0px;
            list-style: none;
            width: 12rem;
            border-radius: 5px;
            opacity: 80%;
            left: 1.45rem;
            display: none;
            margin-top: 1rem;
            z-index: 2;

        }

        #main-menu ul.sub-menu a {
            padding: 10px 30px;
        }

        #main-menu li:hover ul.sub-menu {
            display: block;

        }

        /* hover gach duoi */
        /* a,a:visited,a:hover,a:active{
  -webkit-backface-visibility:hidden;
          backface-visibility:hidden;
  position:relative;
  transition:0.5s color ease;
  text-decoration:none;
  
} */

        a.linkheader:after {
            content: "";
            transition: 0.5s all ease;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
            position: absolute;
        }

        a.linkheader:after {
            bottom: -0.01rem;
        }

        a.linkheader:after {
            height: 5px;
            height: 0.15rem;
            width: 0;
            background: white;
        }

        a.linkheader:after {
            left: 50%;
            -webkit-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        a.linkheader:hover:after {
            width: 60%;
        }

        /* css main content */

        .main_title {
            border-bottom: 1px solid black;
            padding: 10px;
            width: 95%;
            margin: 20px auto;
        }

        .main_content {
            display: flex;
            flex-wrap: wrap;
        }

        .main_content_img-main {
            width: 400px;
            height: 400px;
            margin-left: 2.5%;
            border: 1px solid black;
        }

        .main_content_img-main img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .main_content_box {
            width: 50%;
            height: 400px;
            margin-left: 35px;
            position: relative;
        }

        .content {
            margin-top: 10px;
        }

        .main_content_nameprd {
            margin-top: 0;
        }

        .main_content_imgdes {
            display: flex;
            flex-wrap: wrap;
            width: 1920px;
            height: 30%;
            position: absolute;
            bottom: 0px;
            z-index: 1;
        }

        .img_des {
            height: 120px;
            width: 184.31px;
            margin-right: 10px;
            border: 1px solid black;
        }

        .img_des img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
            cursor: pointer;
            transition: all 1s ease;
        }

        .img_des:hover {
            opacity: 70%;
        }

        h2.main_content_nameprd {
            font-size: 30px;
        }

        .main_content_branch,
        .main_content_category,
        .main_content_type,
        .main_content_price,
        .main_content_quantity {
            font-size: 23px;
            position: relative;
        }

        .main_content_addcart .add-cart {
            background-color: #53284f;
            color: white;
            border-radius: 3px;
            padding: 10px;
            width: 100%;
            font-family: Open sans-serif;
            font-size: 9px;
            cursor: pointer;

        }

        .main_content_addcart:hover {
            opacity: 70%;
        }

        /* .main_content_branch{
  top: ;
}

.main_content_category{
  top: 20%;
}
.main_content_type{
  top: 30%;
}
.main_content_price{
  top: 40%;
} */
        .main_content_addcart {
            position: relative;
            z-index: 2;
            top: 1%;
            width: 80px;
            transition: all 0.5s ease;
        }

        @media only screen and (max-width: 774px) {
            .main_content_box {
                margin-top: 2%;
                margin-left: 2.5%;
            }
        }

        @media only screen and (max-width: 564px) {

            /* .main_content_addcart{
    top: -2%
  } */
            .main_content_imgdes {
                top: 70%;
            }

            .img_des {
                width: 140px;
                height: 100px;
            }
        }

        @media only screen and (max-width: 1049px) {
            .main_content_imgdes {
                top: 72%;
            }

            .img_des {
                width: 140px;
                height: 100px;
            }

            /* .main_content_branch, .main_content_category, .main_content_type, .main_content_price{
      font-size: 15px;
  } */
            h2.main_content_nameprd {
                font-size: 25px;
            }
        }

        .main_description {
            margin-left: 2.5%;
            margin-top: 10px;
            width: 95%;
            white-space: pre-line;
        }

        .feedback {
            display: flex;
            align-items: flex-start;
            margin-top: 1%;
            margin-left: 2.5%;

        }

        .feedback textarea {
            width: 64%;
            height: 50px;
            margin-left: 0.5%;
        }

        .add_feedback {
            margin-left: 7.35%;
            margin-top: 5px;
            width: 100px;
            transition: all 0.5s ease;
        }

        .add_feedback input {
            background-color: #53284f;
            color: white;
            border-radius: 3px;
            padding: 10px;
            width: 100%;
            font-family: Open sans-serif;
            font-size: 9px;
            cursor: pointer;
        }

        .icon_add {
            position: absolute;
            top: 3%;
            left: 97%;
        }

        .icon_add .bx {
            font-size: 2rem;
            color: whitesmoke;
        }
    </style>
</head>

<body>
    <div id="container1">
        <div id="header">
            <div id="header1">
                <nav class="nav">
                    <a href="" id="logo">
                        <img src="../public/logo.png" alt="">
                    </a>
                    <ul id="main-menu">
                        <li><a class="linkheader" href="#">Products</a>
                            <ul class="sub-menu">
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                            </ul>
                        </li>
                        <li><a class="linkheader" href="#">Help Center</a>
                            <ul class="sub-menu">
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                            </ul>
                        </li>
                        <li><a class="linkheader" href="#">Explore</a>
                            <ul class="sub-menu">
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                                <li><a style=" color:#625d5d;" href="">Menu 1</a></li>
                            </ul>
                        </li>
                    </ul>
                    <a href="" class="icon_add"><i class='bx bx-cart-add'></i></a>
                </nav>

            </div>

        </div>
        <div class="main">
            <div class="main_title">
                <h1>Chi tiết sản phẩm</h1>
            </div>

            <!-- start -->
            <form action="cart.php" method="GET">
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    // echo '<pre>';
                    // var_dump($row);
                    // var_dump($result);
                    foreach ($result as $key => $value) {
                ?>
                        <div class="main_content">
                            <!-- ẢNH ĐẦU TIÊN                 -->
                            <div class="main_content_img-main">
                                <img src="../public/image/uploads/<?php echo $value['image'] ?>" alt="" class="img_main">
                            </div>

                            <div class="main_content_box">
                                <!-- NAME -->
                                <!-- <h1 id="name">quat</h1> -->
                                <h2 class="main_content_nameprd content"><?php echo  $value['name']  ?></h2>
                                <!-- BRAND -->
                                <div class="main_content_branch content">

                                    <label for="">Brand:</label>
                                    <?php foreach ($brand as $key => $brand) {
                                        if ($brand['brandid'] == $value['brandid']) {
                                            echo $brand['namebrand'];
                                        }
                                    ?>

                                    <?php } ?>
                                </div>
                                <!-- category             -->
                                <div class="main_content_category content">
                                    <label for="">Category:</label>
                                    <?php foreach ($category as $key => $category) {
                                        if ($category['categoryid'] == $value['categoryid']) {
                                            echo $category['namecategory'];
                                        }
                                    ?>

                                    <?php } ?>
                                </div>



                                <!-- TYPE -->
                                <div class="main_content_type content">
                                    <label for="">Type:</label>
                                    <?php foreach ($type as $key => $type) {
                                        if ($type['typeid'] == $value['typeid']) {
                                            echo $type['nametype'];
                                        }
                                    ?>

                                    <?php } ?>
                                </div>

                                <!-- GIA -->
                                <div class="main_content_price content"><label for="">Price:</label> <?php echo $value['price'] ?></div>
                                <!-- QUANTITY -->
                                <div class="main_content_quantity content">
                                    <label for="">Quantity:</label>
                                    <input type="number" name="quantity" value="1">
                                    <input type="hidden" name="id" value="<?php echo $value['productid'] ?>">
                                    <input type="hidden" name="userid" value=<?php echo $userid ?>>

                                </div>
                                <!-- ADD TO CART -->
                                <div class="main_content_addcart content"> <input type="submit" class="add-cart" value="ADD TO CART "> </div>

                                <!-- ẢNH MÔ TẢ-->
                                <div class="main_content_imgdes content">
                                    <?php while ($anh = mysqli_fetch_all($img)) {
                                        foreach ($img as $key => $hi) {
                                    ?>
                                            <div class="img_des"> <img class='lst_img-des1' src="../public/image/uploadsmota/<?php echo $hi['image'] ?>" alt=""> </div>

                                        <?php } ?>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>

                        <!-- MÔ TẢ -->
                        <div class="main_description">
                            <?php echo  $value['ProductDescription'] ?>
                        </div>

                    <?php } ?>
                <?php  } ?>
        </div>

        <!-- FEEDBACK -->
        </form>
        <?php

        ?>
        <!-- Hiện feedback     -->
        <div>
            <?php
            while ($row = mysqli_fetch_assoc($cmt)) {
                if ($row['productid'] == $id) {
                    echo $row['username'];
                    echo ":";
                    echo $row['feedback'];
                    echo "<span>";
                    if ($row['userid'] == $userid) {
                        echo "<button><a href='editcmt.php?userid=$row[userid]&&feedbackid=$row[id]'>Sửa</a></button>";
                        echo "<button><a href='xoacmt.php?userid=$row[userid]&&feedbackid=$row[id]&&productid=$row[productid]'>Xóa</a></button>";
                    }
                    echo "</span>";
                    echo "</div>";
                }
            }
            ?>
        </div>
        <!--  -->
        <?php foreach ($status as $key => $value) {
            if ($value['status'] == 2) {
        ?>

                <form action="" method="post">

                    <div>
                        <label for="">Comment</label>
                        <textarea name="cmt" id="" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="ADD-FEEDBACK" name="submit">
                    <?php
                    foreach ($error as $error) {
                        echo '<p class="text-danger">' . $error . '</p>';
                    }
                    ?>
                    <input type="hidden" name="userid" value="<?php $userid ?>">
                    <input type="hidden" name="productid" value="<?php $id ?>">

                </form>
            <?php  } ?>
        <?php  } ?>
    </div>
    <script>
        var img_main = document.querySelector(".img_main");
        console.log(img_main);
        var lst_img = document.querySelectorAll(".lst_img-des1");
        console.log(lst_img);
        lst_img.forEach(Image => {
            Image.addEventListener('click', e => {
                img_main.src = e.target.getAttribute('src');
            })
        })
    </script>
</body>

</html>
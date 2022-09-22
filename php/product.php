<?php
include 'connect.php';
session_start();
$object = json_decode(json_encode($_SESSION['user']['id']), FALSE);
$userid = $object;
$result = mysqli_query($conn, "SELECT * FROM product");
$total = mysqli_num_rows($result);
$limit = 12;
$page = ceil($total / $limit);
if (!isset($_GET['page'])) {

    $cr_page = 1;
} else {

    $cr_page = (int)$_GET['page'];
}
$start = ($cr_page - 1) * $limit;
$product = mysqli_query($conn, "SELECT * FROM product LIMIT $start,$limit");
if (isset($_POST['filter-submit'])) {
    $category = htmlspecialchars($_POST['option-category']);
    $conn->real_escape_string($category);
    $brand = htmlspecialchars($_POST['option-brand']);
    $conn->real_escape_string($brand);
    $type = htmlspecialchars($_POST['option-type']);
    $conn->real_escape_string($type);
    if (empty($category) && empty($brand) && empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join category  on product.categoryid = category.categoryid inner join brand on  brand.brandid = product.brandid inner join type on type.typeid = product.typeid  WHERE category.namecategory = $category and brand.namebrand = $brand and type.nametype = $type ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
    if (empty($category) && empty($brand) && !empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join category  on product.categoryid = category.categoryid inner join brand on  brand.brandid = product.brandid WHERE category.namecategory = $category and brand.namebrand = $brand";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
    if (empty($category) && !empty($brand) && empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join category  on product.categoryid = category.categoryid inner join type on type.typeid = product.typeid  WHERE category.namecategory = $category and type.nametype = $type ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
    if (empty($category) && !empty($brand) && !empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join category  on product.categoryid = category.categoryid   WHERE category.namecategory = $category  ";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
    if (!empty($category) && empty($brand) && !empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join brand on  brand.brandid = product.brandid WHERE brand.namebrand = $brand";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
    if (!empty($category) && !empty($brand) && empty($type)) {
    } else {
        $sql = "SELECT * FROM product inner join type on  type.typeid = product.typeid WHERE type.nametype = $type";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $product_filter = $result;
        }
    }
}


?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/product.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    html {
        font-size: 100%;
    }

    /* header menu logo */
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
        height: 80px;
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

    /* ANH HEADER */
    .img {
        height: 35rem;
        position: relative;
    }

    .img img {
        position: absolute;
        object-fit: cover;
        object-position: center;
        height: 100%;
        width: 100%;
    }

    .text a {

        text-decoration: none;
        color: white;
        font-family: 'Open Sans';
        -webkit-transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s;
        left: 47%;
        top: 53%;
        font-size: 30px;

    }

    .text a:hover {
        color: #53284f;
    }

    .buy {
        text-decoration: none;
        color: white;
        background: #53284f;
        border-radius: 3px;
        border: 1px black solid;
        padding: 5px 20px;
        transition: 0.5s all;

    }

    .buy:hover {
        opacity: 0.5;
        color: white;
        transition: 0.5s all;
    }

    .card-img {
        height: 300px;
        position: relative;
    }

    .card-img-top {
        position: absolute;
        height: 100%;
    }

    h5.card-title {
        margin-bottom: 20px;
    }

    .buy {
        text-decoration: none;
    }

    .view {
        text-decoration: none;
        color: whitesmoke;
    }

    .view_pro {
        margin-top: 10px;
        background-color: #53284f;
        width: 113px;
        height: 32px;
        border-radius: 3px;
        padding: 4px 5px 5px 40px;
        transition: 0.5s all ease;
        cursor: pointer;
        border: 0.5px solid black;
    }

    .view:hover {
        color: whitesmoke;
    }

    .view_pro:hover {
        opacity: 80%;
    }

    .buyed {
        text-decoration: none;
        color: whitesmoke;
        padding: 10px
    }

    .buyed:hover {
        color: whitesmoke;
    }

    .but1 {
        background-color: #53284f;
        margin-left: 10px;
        transition: 0.5s all ease;
    }

    .but1:hover {
        opacity: 80%;
    }

    .icon_add {
        position: absolute;
        top: 6%;
        left: 97%;
    }

    .icon_add .bx {
        font-size: 1.5rem;
        color: whitesmoke;
    }

    .img {
        height: 35rem;
        position: relative;
    }

    .img img {
        position: absolute;
        object-fit: cover;
        object-position: center;
        height: 100%;
        width: 100%;
    }

    .text a {

        text-decoration: none;
        color: white;
        font-family: 'Open Sans';
        -webkit-transition: color 0.3s ease 0s, background-color 0.3s ease 0s, border-color 0.3s ease 0s;
        left: 47%;
        top: 53%;
        font-size: 30px;

    }

    .text a:hover {
        color: #53284f;
    }
</style>
<div class="product">
    <div class="header-product">
        <div class="product-title">
            <h1 class="text-center">Products</h1>
            <div>
                <nav class="product-description text-center d-flex justify-content-center">
                    <a href="#">Home</a>/Products
                </nav>
            </div>
        </div>
    </div>
    <div class=" body-product body-product-container container" style="max-width: 85rem;">
        <div class="filter-product">
            <div class="toolbar-products toolbar-top d-flex align-items-center justify-content-center">
                <div class="part-wrap part-filter-wrap">
                    <div class="actions-wrap">
                        <a class="filter-toggle" style="margin-left: 10rem;" href="#"><i class="icon-filter"><i class="fa-solid fa-filter"></i></i>Filter</a>
                    </div>
                </div>
            </div>
            <div class="products-filter-form" style="margin-top: 2rem;">
                <form action="" method="post">
                    <div class="all-option d-flex none">
                        <label style="margin-left: 6rem;font-size: 1.5rem;margin-right: 2rem;">Your option </label>
                        <div class="list-all-option d-flex">
                            <input type="text" name="option-category" class="option option-category none" style="margin-right: 10rem; border-radius: 10px;height:2rem ; width: 6rem; color:#fff ; background:#53284f ; border:none ; padding : 5px ">
                            <input type="text" name="option-brand" class="option option-brand none" style="margin-right: 10rem; border-radius: 10px;height:2rem ; width: 6rem;color:#fff ; background:#53284f ; border:none ;padding : 5px ">
                            <input type="text" name="option-type" class="option option-type none" style="margin-right: 10rem; border-radius: 10px;height:2rem ; width: 6rem; color:#fff ; background:#53284f ; border:none;padding : 5px ">
                        </div>
                    </div>
                    <div class="filter-option">
                        <div class="list-option d-flex ">
                            <div class="category" style="margin-left: 5rem;">
                                <h2 class="title">Categorys</h2>
                                <div class="category-name">
                                    <div class="category-name-1">
                                        <input type="radio" name="category" class="Modern" value="Modern"><label>Modern</label>
                                    </div>
                                    <div class="category-name-2">
                                        <input type="radio" name="category" class="Classic" value="Classic"><label>Classic</label>
                                    </div>
                                    <div class="category-name-3">
                                        <input type="radio" name="category" class="Future" value="Future"><label>Future</label>
                                    </div>
                                    <div class="category-name-4">
                                        <input type="radio" name="category" class="Popular" value="Popular"><label>Popular</label>
                                    </div>
                                </div>
                            </div>
                            <div class="brand" style="margin-left: 20rem;">
                                <h2 class="title">Brand</h2>
                                <div class="brand-name">
                                    <div class="brand-name-1">
                                        <input type="radio" name="brand" class="Panasonic" value="Panasonic"><label> Panasonic</label>
                                    </div>
                                    <div class="brand-name-2">
                                        <input type="radio" name="brand" class="Senko" value="senko"><label>Senko</label>
                                    </div>
                                    <div class="brand-name-3">
                                        <input type="radio" name="brand" class="Morgana" value="Morgana"><label>Morgana</label>
                                    </div>
                                    <div class="brand-name-4">
                                        <input type="radio" name="brand" class="Hunter" value="Hunter"><label>Hunter</label>
                                    </div>
                                    <div class="brand-name-5">
                                        <input type="radio" name="brand" class="Another" value="Another"><label>Another</label>
                                    </div>
                                </div>
                            </div>
                            <div class="type" style="margin-left: 25rem;">
                                <h2 class="title">Type</h2>
                                <div class="type-name">
                                    <div class="type-name-1">
                                        <input type="radio" name="type" class="TreeFan" value="Tree Fan"><label>Tree Fan</label>
                                    </div>
                                    <div class="type-name-2">
                                        <input type="radio" name="type" class="CeilingFan" value="Ceiling Fan"><label>Ceiling Fan</label>
                                    </div>
                                    <div class="type-name-3">
                                        <input type="radio" name="type" class="HandFan" value="Hand Fan"><label>Hand Fan</label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="filter-submit" style="margin-left: 30rem; margin-top: 4rem">
                        <input type="submit" name='filter-submit' class="btn btn-primary btn-filter" style=" font-size: 1.3rem ; background-color: #53284f; border: none" name="filter-submit" value="Filter Selected">
                    </div>
                </form>

            </div>
        </div>
        <div class="list-products">
            <div class="container">
                <div class="row mt-5">
                    <form action="" method="post">
                        <h1>Danh sách sản phẩm</h1>
                        <div class="product-group">
                            <div class="row product-filter">

                                <?php
                                while ($row = mysqli_fetch_assoc($product)) {
                                    foreach ($product as $key => $value) {
                                ?>
                                        <div class="col-md-3 col-sm-6 col-12" style="height: 450px; margin-top:10px">
                                            <div class="card card-product mb-3" style="height:100% ;">
                                                <div class="card-img"><img class="card-img-top" src="../public/image/uploads/<?php echo $value['image'] ?>" alt="" width="100" class="img"></div>
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $value['name'] ?></h5>
                                                    <!-- <p class="card-text"><?php echo $value['ProductDescription'] ?></p> -->
                                                    <div>
                                                        <a href="cart.php?id=<?php echo $value['productid'] ?>&&userid=<?php echo $userid ?> " &action="add" class="buy">Mua hàng</a>
                                                    </div>
                                                    <div class="view_pro">
                                                        <a href="product-detail.php?id=<?php echo $value['productid'] ?>&&userid=<?php echo $userid ?>" class="view">Xem</a>
                                                    </div>
                                                    <!--  -->
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>


                            </div>
                            <div class="row product-filter-sussecc none">
                                <?php
                                while ($row = mysqli_fetch_assoc($product_filter)) {
                                    foreach ($product_filter as $key => $value) {
                                ?>
                                        <div class="col-md-3 col-sm-6 col-12" style="height: 450px; margin-top:10px">
                                            <div class="card card-product mb-3" style="height:100% ;">
                                                <div class="card-img"><img class="card-img-top" src="../public/image/uploads/<?php echo $value['image'] ?>" alt="" width="100" class="img"></div>
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $value['name'] ?></h5>
                                                    <!-- <p class="card-text"><?php echo $value['ProductDescription'] ?></p> -->
                                                    <div>
                                                        <a href="cart.php?id=<?php echo $value['productid'] ?>&&userid=<?php echo $userid ?> " &action="add" class="buy">Mua hàng</a>
                                                    </div>
                                                    <div class="view_pro">
                                                        <a href="product-detail.php?id=<?php echo $value['productid'] ?>&&userid=<?php echo $userid ?>" class="view">Xem</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <ul class="pagination" style="display: flex; flex-wrap: wrap; justify-content: center;">
                <?php if ($cr_page - 1 > 0) {  ?>
                    <li class="page-item"><a class="page-link" href="product.php?page=<?php echo $cr_page - 1 ?>&&userid=<?php echo $userid ?>">Previous</a></li>
                <?php } ?>
                <?php for ($i = 1; $i <=  $page; $i++) { ?>
                    <li style="border: none; margin: 10px 3px 3px 3px; " class=" <?php echo ($cr_page == $i) ? 'active' : '' ?>"><a style="background:#53284f; border:none; color:whitesmoke; " class="page-link" href="product.php?page=<?php echo $i ?>&&userid=<?php echo $userid ?>"> <?php echo $i ?></a></li>
                <?php } ?>

                <?php if ($cr_page + 1 <= $page) {   ?>

                    <li class="page-item" style="border: none; margin: 10px 3px 3px 3px; "><a class="page-link" style="background:#53284f; border:none; color:whitesmoke; " href="product.php?page=<?php echo $cr_page + 1 ?>&&userid=<?php echo $userid ?>">Next</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>
<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/filter.js"></script>
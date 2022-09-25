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
$product = mysqli_query($conn, "SELECT product.productid , product.name , product.price , product.brandid , product.typeid , product.categoryid, product.image , product.ProductDescription, FROM product inner join category  on product.categoryid = category.categoryid   WHERE category.namecategory = 'Classic' LIMIT $start,$limit");

?>
<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/product.css">
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
    <div class="list-products">
        <div class="container">
            <div class="row mt-5">
                <div>
                    <h1>Danh sách sản phẩm</h1>
                    <div class="product-group">
                        <div class="row product-filter">

                            <?php
                            while ($row = ($product)) {
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
                    </div>
                </div>
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
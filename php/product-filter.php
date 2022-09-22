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
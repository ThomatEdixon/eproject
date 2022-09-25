$('#section').load('../html/introduction.html');
$(document).ready(function () {
    $('#product').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../php/product.php",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('#product-1').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');

        $.ajax({
            url: "../php/product.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('#product-2').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');

        $.ajax({
            url: "../php/product-modern.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('#product-3').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');

        $.ajax({
            url: "../php/product-classic.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('#product-4').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');

        $.ajax({
            url: "../php/product-future.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('#product-5').on('click', function () {
        $('.list-1').addClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').removeClass('active');

        $.ajax({
            url: "../php/product-popular.php",
            type: "GET",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        });
    });
    $('.support').on('click', function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: '../php/product-suport.php',
            type: 'get',
            dataType: 'html',
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $('#contact').on('click', function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../php/contact.php",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        })

    });
    $('#aboutus').click(function () {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: "../html/aboutus.html",
            type: "get",
            dataType: "html",
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $("#support").click(function (e) {
        $('.list-1').removeClass('active');
        $('.list-2').addClass('active');
        $('.list-3').removeClass('active');
        $.ajax({
            url: '../php/product-suport.php',
            type: 'get',
            dataType: 'html',
            success: function (data) {
                $('#section').html(data)
            }
        })
    })
    $('#register').click(function () {
        $('.list-1').removeClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').addClass('active');
        $.ajax({
            url: "../php/register.php",
            type: "get",
            dataType: 'html',
            success: function (data) {
                console.log(data);
                $('#section').html(data);
            }
        });
    })
    $('#login').click(function () {
        $('.list-1').removeClass('active');
        $('.list-2').removeClass('active');
        $('.list-3').addClass('active');
        $.ajax({
            url: "../php/login.php",
            type: "get",
            dataType: 'html',
            success: function (data) {
                console.log(data);
                $('#section').html(data);
            }
        });
    });
    $('input[name=search_information]').on('change', function (e) {
        var search = $('input[name=search_information]');
        console.log(search);
        var result = $('.result-search');
        result.innerHTML = `<?php
        require_once 'connect.php';
        if (isset($_POST['search'])) {
            $search = htmlspecialchars($_POST['search_information']);
            $sql = "SELECT * FROM product where [name] like '%''$search'%'";
            $result = $conn->query($sql);;
            if ($result->num_rows > 0) {
                foreach ($result as $key => $val) {
                    echo " <div class='product-search '>";
                        echo "<div class='img-product-search>";
                            echo "<img src= '../public/image/uploads/<?php echo $val[image]?>'";
                        echo "</div>";
                        echo "<div class='name-product-search'>
                            <h2><?php echo $val[name]?></h2>";
                        echo "</div>";
                        echo"</div>";
                    echo "</div>";
                }
            }
        }
    ?>`
    })
});
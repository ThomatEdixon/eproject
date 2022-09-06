<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Production</title>
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="product">
    <div class="header-product">
        <div class="product-title">
            <h1 class="text-center">Products</h1>
            <div>
                <nav class="product-description text-center">
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
                        <a class="filter-toggle" href="#"><i class="fa-light fa-filter"></i>Filter</a>
                    </div>
                </div>
                <div class="part-wrap part-acrion-right-wrap">
                    <div class="filter-ordering">
                        <form class="fami-woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="popularity" selected="selected">Popularity</option>
                                <option value="date">Newness</option>
                            </select>
                        </form>
                    </div>
                    <div class="part-products-size-wrap">
                        <div class="products-sizes">
                            <a href="#" data-products_num="5" class="products-size size-5 ">
                                <svg viewBox="0 0 16 16" id="view-size-5" width="100%" height="100%">
                                    <path d="M4.769 3.385c0 .762-.623 1.385-1.385 1.385S2 4.146 2 3.385 2.623 2 3.385 2s1.384.623 1.384 1.385zM9.385 3.385c0 .762-.623 1.385-1.385 1.385s-1.385-.624-1.385-1.385S7.238 2 8 2s1.385.623 1.385 1.385zM4.769 8c0 .762-.623 1.385-1.385 1.385S2 8.762 2 8s.623-1.385 1.385-1.385S4.769 7.238 4.769 8zM9.385 8c0 .762-.623 1.385-1.385 1.385S6.615 8.762 6.615 8 7.238 6.615 8 6.615 9.385 7.238 9.385 8zM4.769 12.615c0 .762-.623 1.385-1.384 1.385S2 13.377 2 12.615s.623-1.385 1.385-1.385 1.384.624 1.384 1.385zM9.385 12.615C9.385 13.377 8.762 14 8 14s-1.385-.623-1.385-1.385.623-1.384 1.385-1.384 1.385.623 1.385 1.384zM14 3.385c0 .762-.623 1.385-1.385 1.385s-1.385-.623-1.385-1.385S11.854 2 12.615 2C13.377 2 14 2.623 14 3.385zM14 8c0 .762-.623 1.385-1.385 1.385S11.231 8.762 11.231 8s.623-1.385 1.385-1.385C13.377 6.615 14 7.238 14 8zM14 12.615c0 .762-.623 1.385-1.385 1.385s-1.385-.623-1.385-1.385.623-1.385 1.385-1.385A1.39 1.39 0 0 1 14 12.615z"></path>
                                </svg>
                            </a>
                            <a href="#" data-products_num="4" class="products-size size-4 active">
                                <svg viewBox="0 0 16 16" id="view-size-4" width="100%" height="100%">
                                    <path d="M7 4.5C7 5.875 5.875 7 4.5 7S2 5.875 2 4.5 3.125 2 4.5 2 7 3.125 7 4.5zM14 4.5C14 5.875 12.875 7 11.5 7S9 5.875 9 4.5 10.125 2 11.5 2 14 3.125 14 4.5zM7 11.5C7 12.875 5.875 14 4.5 14S2 12.875 2 11.5 3.125 9 4.5 9 7 10.125 7 11.5zM14 11.5c0 1.375-1.125 2.5-2.5 2.5S9 12.875 9 11.5 10.125 9 11.5 9s2.5 1.125 2.5 2.5z"></path>
                                </svg>
                            </a>
                            <a href="#" data-products_num="3" class="products-size ">
                                <svg viewBox="0 0 16 16" id="view-size-3" width="100%" height="100%">
                                    <path d="M14 8c0 3.3-2.7 6-6 6s-6-2.7-6-6 2.7-6 6-6 6 2.7 6 6z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-filter-form">
                <form action="" method="get">
                    <div class="filter-option">
                        <div class="list-option">
                            <div class="category">
                                <h2 class="title">Categorys</h2>
                                <div class="category-name">
                                    <input type="radio" name="category" value="accessories"><label>Accessories</label>
                                    <input type="radio" name="category" value="lighting"><label>Lighting</label>
                                    <input type="radio" name="category" value="blades"><label>Blades</label>
                                    <input type="radio" name="category" value="fans"><label>Fans</label>
                                </div>
                            </div>
                            <div class="brand">
                                <h2 class="title">Brand</h2>
                                <div class="brand-name">
                                    <input type="radio" name="brand" value=""><label></label>
                                    <input type="radio" name="brand" value=""><label></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>
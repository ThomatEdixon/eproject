<link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
<div class="product">
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
                        <a class="filter-toggle" href="#"><i><i class="fa-light fa-filter"></i></i>Filter</a>
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
                                    <input type="radio" name="brand" value=""><label></label>
                                </div>
                            </div>
                            <div>
                                <h2 class="title">Brand</h2>
                                <div class="brand-name">
                                    <input type="radio" name="brand" value=""><label></label>
                                    <input type="radio" name="brand" value=""><label></label>
                                </div>
                            </div>
                            <div>
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
</div>
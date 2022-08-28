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
    <div class=" body-product body-product-container container ">
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
                                <option value="rating">Rating</option>
                                <option value="date">Newness</option>
                                <option value="price">Price: low</option>
                                <option value="price-desc">Price: high</option>
                            </select>
                            <input type="hidden" name="paged" value="1">
                            <input type="hidden" name="offset" value="20">
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
            <div class="prdctfltr_wc prdctfltr_woocommerce woocommerce prdctfltr_wc_regular pf_default prdctfltr_slide prdctfltr_click prdctfltr_rows prdctfltr_scroll_default pf_mod_multirow pf_adptv_default prdctfltr_round prdctfltr_hierarchy_circle prdctfltr_adoptive_reorder " data-page="1" data-loader="css-spinner-full-01" data-id="prdctfltr-6309d4042eda0">
                <form  class="prdctfltr_woocommerce_ordering " method="get" style="display: block;">
                    <div class="prdctfltr_filter_wrapper prdctfltr_columns_5 " data-columns="5">
                        <div class = "container d-flex align-items-center justify-content-centre">
                            <div class="prdctfltr_filter_inner row ">
                                <div class="prdctfltr_filter prdctfltr_attributes prdctfltr_cat prdctfltr_single prdctfltr_adoptive prdctfltr_text col-3" data-filter="product_cat">
                                    <input name="product_cat" type="hidden">
                                    <span class="prdctfltr_regular_title">Categories <i class="prdctfltr-down"></i>
                                    </span>
                                    <div class="prdctfltr_add_scroll">
                                        <div class="prdctfltr_checkboxes">
                                            <div class=" prdctfltr_ft_accessories"><input type="radio" name="categories" value="accessories"><span>Accessories</span></div>
                                            <div class=" prdctfltr_ft_lighting"><input type="radio" name="categories" value="lighting"><span>Lighting</span></div>
                                            <div class=" prdctfltr_ft_controls-remotes"><input type="radio" name="categories" value="controls-remotes"><span>Controls and Remotes</span></div>
                                            <div class=" prdctfltr_ft_blades"><input type="radio" name="categories" value="blades"><span>Blades</span></div>
                                            <div class=" prdctfltr_ft_fans"><input type="radio" name="categories" value="fans"><span>Fans</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prdctfltr_filter prdctfltr_attributes prdctfltr_pa_location-rating prdctfltr_single prdctfltr_adoptive prdctfltr_text col-3" data-filter="pa_location-rating">
                                    <input name="pa_location-rating" type="hidden">
                                    <span class="prdctfltr_regular_title">Location Rating <i class="prdctfltr-down"></i>
                                    </span>
                                    <div class="prdctfltr_add_scroll">
                                        <div class="prdctfltr_checkboxes">
                                            <div class=" prdctfltr_ft_damp"><input type="radio" name="rating" value="damp"><span>Damp</span></div>
                                            <div class=" prdctfltr_ft_dry"><input type="radio" name="rating" value="dry"><span>Dry</span></div>
                                            <div class=" prdctfltr_ft_wet"><input type="radio" name="rating" value="wet"><span>Wet</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prdctfltr_filter prdctfltr_attributes prdctfltr_pa_sweep prdctfltr_single prdctfltr_adoptive prdctfltr_text col-3" data-filter="pa_sweep">
                                    <input name="pa_sweep" type="hidden">
                                    <span class="prdctfltr_regular_title">Sweep <i class="prdctfltr-down"></i>
                                    </span>
                                    <div class="prdctfltr_add_scroll">
                                        <div class="prdctfltr_checkboxes">
                                            <div class=" prdctfltr_ft_48-and-less"><input type="radio" name="sweep" value="48-and-less"><span>48" and less</span></div>
                                            <div class=" prdctfltr_ft_49-60"><input type="radio" name="sweep" value="49-60"><span>49" - 60"</span></div>
                                            <div class=" prdctfltr_ft_greater-than-60"><input type="radio" name="sweep" value="greater-than-60"><span>greater than 60"</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prdctfltr_filter prdctfltr_attributes prdctfltr_pa_motor-type prdctfltr_single prdctfltr_adoptive prdctfltr_text col-3" data-filter="pa_motor-type">
                                    <input name="pa_motor-type" type="hidden">
                                    <span class="prdctfltr_regular_title">Motor Type <i class="prdctfltr-down"></i>
                                    </span>
                                    <div class="prdctfltr_add_scroll">
                                        <div class="prdctfltr_checkboxes">
                                            <div class=" prdctfltr_ft_ac-motor"><input type="radio" name="motor" value="ac-motor"><span>AC Motor</span></div>
                                            <div class=" prdctfltr_ft_dc-motor"><input type="radio" name="motor" value="dc-motor"><span>DC Motor</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3 prdctfltr_filter prdctfltr_attributes prdctfltr_pa_energy-star prdctfltr_single prdctfltr_adoptive prdctfltr_clearnext prdctfltr_text" data-filter="pa_energy-star">
                                    <input name="pa_energy-star" type="hidden">
                                    <span class="prdctfltr_regular_title">Energy Star <i class="prdctfltr-down"></i>
                                    </span>
                                    <div class="prdctfltr_add_scroll">
                                        <div class="prdctfltr_checkboxes">
                                            <div class=" prdctfltr_ft_yes"><input type="radio" name="yes" value="yes"><span>Yes</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="prdctfltr_add_inputs">
                    </div>
                    <div class="prdctfltr_buttons">
                        <a class="button prdctfltr_woocommerce_filter_submit" href="#">
                            Filter Selected </a>
                    </div>

                </form>


            </div>
        </div>
    </div>
</body>

</html>
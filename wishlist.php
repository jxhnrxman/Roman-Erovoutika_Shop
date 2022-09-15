<!DOCTYPE html>
<html lang="en">

    <?php
        require "common/metadata.php";
        require "common/head.php";
    ?> 

<body>
    
    <?php
        require "common/header.php";
        require "common/menu.php";
    ?>  

    <div id="QuicksPlaceholder">
    </div>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--white">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Wishlist</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--black">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="search.php">Shop</a></li>
                                    <li class="active" aria-current="page">Wishlist</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Wishlist Section:::... -->
    <div class="wishlist-section">
        <!-- Start Cart Table -->
        <div class="wishlish-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Wishlist Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove"  style="border-bottom:3px solid #333">Delete</th>
                                            <th class="product_thumb"  style="border-bottom:3px solid #333">Image</th>
                                            <th class="product_name"  style="border-bottom:3px solid #333">Product</th>
                                            <th class="product-price"  style="border-bottom:3px solid #333">Price</th>
                                            <th class="product_stock"  style="border-bottom:3px solid #333">Stocks Status</th>
                                            <th class="product_stock"  style="border-bottom:3px solid #333">Quantity</th>
                                            <th class="product_addcart" style="border-bottom:3px solid #333">Add To Cart</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <?php
                                            require "config/connect.php";
                                            $sql = "SELECT * FROM products_table LIMIT 0,3";
                                            $result = $conn->query($sql);
                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) { ?>

                                            <!-- Start Cart Single Item-->
                                            <tr>
                                                <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a></td>
                                                <td class="product_thumb"><a href="product-details.php?id=<?php echo $row['id']?>"><img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['thumbnail']); ?>" alt=""></a></td>
                                                <td class="product_name"><a href="product-details.php?id=<?php echo $row['id']?>"><?php echo $row['name']?></a></td>
                                                <td class="product-price">₱<?php echo $row['price']?></td>
                                                <td class="product_stock">In Stock</td>
                                                <td class="product_quantity"><label>Quantity</label> <input min="1"
                                                        max=<?php echo $row['stock']?> value="1" type="number"></td>
                                                <td class="product-add-to-cart-btn"><a data-type="quick" id="cart-<?php echo $row['id']; ?>">+ Add To Cart</a></td>
                                            </tr> <!-- End Cart Single Item-->
                                            <?php                                               
                                                }
                                            } else {
                                                //throw empty cart
                                            }
                                            mysqli_close($conn);
                                        ?> 
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->
    </div> <!-- ...:::: End Wishlist Section:::... -->

    <?php
            require "common/footer.php";
            require "common/js.php";
    ?> 

</body>


</html>
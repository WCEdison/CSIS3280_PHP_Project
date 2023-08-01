<?php
class DashBoard
{
    static function generateSideNav()
    {
    ?>
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="./assets/img/sidebar-2.jpg">
            <div class="logo">
                <a href="" class="simple-text logo-normal">
                    Management
                </a>
            </div>
            <div class="sidebar-wrapper ps-container ps-theme-default" data-ps-id="3a8db1f4-24d8-4dbf-85c9-4f5215c1b29a">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="DashBoard.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="Productlist.php">
                            <i class="material-icons">list</i>
                            <p>Product List</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="AddProduct.php">
                            <i class="material-icons">list</i>
                            <p>Add Product</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="MainPage.php">
                            <i class="material-icons">list</i>
                            <p>Back to Main Store</p>
                        </a>
                    </li>

                    
                </ul>
            </div>
        </div>
        <!-- Required CSS -->
        <link rel="stylesheet" type="text/css" href="css/Material+Icons.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link href="css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
        <link href="css/black-dashboard.css" rel="stylesheet" />

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const navLinks = document.querySelectorAll('.nav-link');
                const currentPath = window.location.pathname;

                navLinks.forEach(link => {
                    const href = link.getAttribute('href');
                    if (href && currentPath.endsWith(href)) {
                        link.parentElement.classList.add('active');
                    } else {
                        link.parentElement.classList.remove('active');
                    }
                });
            });
        </script>
    <?php
    }

    static function header()
    {
    ?>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">Admin</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="javascript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">
                                        Some Actions
                                    </p>
                                </a>
                                
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    <?php
    }
    static function footer()
    {
    ?>
        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="">
                                
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>
                </div>
                <!-- footer here -->
            </div>
        </footer>
        <!--   Core JS Files   -->
        <script src="./js/core/jquery.min.js"></script>
        <script src="./js/core/popper.min.js"></script>
        <script src="./js/core/bootstrap-material-design.min.js"></script>
        <script src=""></script>
        <script src="./js/plugins/perfect-scrollbar.jquery.min.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script async defer src=""></script>
        <!--  Google Maps Plugin    -->
        <script src=""></script>
        <!-- Chartist JS -->
        <script src="./js/plugins/chartist.min.js"></script>
        <!--  Notifications Plugin    -->
        <script src="./js/plugins/bootstrap-notify.js"></script>
        <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="./js/material-dashboard.js?v=2.1.0"></script>
        <!-- Material Dashboard DEMO methods, don't include it in your project! -->
        <script src="./js/demo/demo.js"></script>
        
        <script>
            $(document).ready(function() {

                $sidebar = $('.sidebar');

                $sidebar_img_container = $sidebar.find('.sidebar-background');

                $full_page = $('.full-page');

                $sidebar_responsive = $('body > .navbar-collapse');

                window_width = $(window).width();

                $('.fixed-plugin a').click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass('switch-trigger')) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $('.fixed-plugin .active-color span').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-color', new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr('filter-color', new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr('data-color', new_color);
                    }
                });

                $('.fixed-plugin .background-color .badge').click(function() {
                    $(this).siblings().removeClass('active');
                    $(this).addClass('active');

                    var new_color = $(this).data('background-color');

                    if ($sidebar.length != 0) {
                        $sidebar.attr('data-background-color', new_color);
                    }
                });

                $('.fixed-plugin .img-holder').click(function() {
                    $full_page_background = $('.full-page-background');

                    $(this).parent('li').siblings().removeClass('active');
                    $(this).parent('li').addClass('active');


                    var new_image = $(this).find("img").attr('src');

                    if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        $sidebar_img_container.fadeOut('fast', function() {
                            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                            $sidebar_img_container.fadeIn('fast');
                        });
                    }

                    if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $full_page_background.fadeOut('fast', function() {
                            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                            $full_page_background.fadeIn('fast');
                        });
                    }

                    if ($('.switch-sidebar-image input:checked').length == 0) {
                        var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                        var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                        $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
                        $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
                    }
                });

                $('.switch-sidebar-image input').change(function() {
                    $full_page_background = $('.full-page-background');

                    $input = $(this);

                    if ($input.is(':checked')) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn('fast');
                            $sidebar.attr('data-image', '#');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn('fast');
                            $full_page.attr('data-image', '#');
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr('data-image');
                            $sidebar_img_container.fadeOut('fast');
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr('data-image', '#');
                            $full_page_background.fadeOut('fast');
                        }

                        background_image = false;
                    }
                });

                $('.switch-sidebar-mini input').change(function() {
                    $body = $('body');

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $('body').removeClass('sidebar-mini');
                        md.misc.sidebar_mini_active = false;

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

                    } else {

                        $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

                        setTimeout(function() {
                            $('body').addClass('sidebar-mini');

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event('resize'));
                    }, 180);

                    
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);

                });
            });
        </script>
    <?php
    }

    static function productListView($products)
    {
    ?>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="col-md-14">


                    <div class="card-body">
                        <div class="table-responsive ps">
                            <?php self::generateProductTable($products); ?>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <!-- End Content -->
    <?php
    }

    private static function generateProductTable($products)
    {
    ?>
        
        <style>
            .content {
                margin-left: 120px;
                
            }
        </style>

        <div class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Products List</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive ps">
                                <table class="table tablesorter" id="page1">
                                    <thead class="text-primary">
                                        <tr>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Category</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($products as $product) { ?>
                                            <tr>
                                                <td><?php echo $product->getProductName(); ?></td>
                                                <td><?php echo "$" . $product->getPrice(); ?></td>
                                                <td><?php echo $product->getQuantity(); ?></td>
                                                <td><?php echo $product->getCategory(); ?></td>
                                                <td>
                                                    <form method="post" action="ProductList.php">
                                                        <input type="hidden" name="product_id" value="<?php echo $product->getProductID(); ?>">
                                                        <input type="hidden" name="action" value="delete">
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form method="post" action="EditProduct.php">
                                                        <input type="hidden" name="product_id" value="<?php echo $product->getProductID(); ?>">
                                                        <button type="submit" class="btn btn-primary">Edit</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    static function editProductView($product)
    {
        $categories = array(
            "Fruits",
            "Vegetables",
            "Dairy",
            "Bakery",
            "Meat",
            "Grains",
            "Breakfast"
        );
        ?>
        
        <style>
            .content {
                margin-top: 100px;
                margin-left: 250px;
                
            }
        </style>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Edit Product</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="ProductList.php">
                                    <input type="hidden" name="product_id" value="<?php echo $product->getProductID(); ?>">
                                    <input type="hidden" name="action" value="edit">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" value="<?php echo $product->getProductName(); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="number" step="0.01" class="form-control" name="price" value="<?php echo $product->getPrice(); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Quantity</label>
                                        <input type="number" class="form-control" name="quantity" value="<?php echo $product->getQuantity(); ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category</label>
                                        <select class="form-control" name="category" required>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category; ?>" style="color: black;" <?php if ($category === $product->getCategory()) echo 'selected'; ?>>
                                                    <?php echo $category; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content -->
        <?php
    }

    static function addProductFormView()
    {
        $categories = array(
            "Fruits",
            "Vegetables",
            "Dairy",
            "Bakery",
            "Meat",
            "Grains",
            "Breakfast"
        );
?>
       
        <style>
            .content {
                margin-top: 100px;
                margin-left: 250px;
                
            }
        </style>
        <!-- Content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Add Product</h4>
                            </div>
                            <div class="card-body">
                                <form method="post" action="ProductList.php">
                                    <input type="hidden" name="action" value="add">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Product Name</label>
                                        <input type="text" class="form-control" name="product_name" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Price</label>
                                        <input type="number" step="0.01" class="form-control" name="price" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Quantity</label>
                                        <input type="number" class="form-control" name="quantity" required>
                                    </div>
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Category</label>
                                        <select class="form-control" name="category" required>
                                            <?php foreach ($categories as $category) { ?>
                                                <option value="<?php echo $category; ?>" style="color: black;"><?php echo $category; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Add Product</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Content -->
<?php
    }
}
?>
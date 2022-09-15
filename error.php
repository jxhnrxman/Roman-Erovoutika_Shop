
<!DOCTYPE html>
<html lang="en">

<head>
   
</head>
    
    <?php
            require "common/metadata.php";
            require "common/head.php";         
    ?> 

<body>
    <?php
            require "common/header.php";
            require "common/menu.php";
    ?>
    
    <!-- ...:::: Start Error Section :::... -->
    <div class="error-section">
        <div class="container">
            <div class="row">
                <div class="error-form section-top-gap-100">
                    <h1 class="big-title" data-aos="fade-up" data-aos-delay="0">404</h1>
                    <h4 class="sub-title" data-aos="fade-up" data-aos-delay="200">Opps! PAGE NOT BE FOUND</h4>
                    <p data-aos="fade-up" data-aos-delay="400">Sorry but the page you are looking for does not exist,
                        have been<br> removed, name changed or is temporarily unavailable.</p>
                    <div class="row">
                        <div class="col-10 offset-1 col-md-4 offset-md-4">
                            <a href="index.php" class="btn btn-md btn-black-default-hover mt-7" data-aos="fade-up"
                                data-aos-delay="800">Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Error Section :::... -->

    <?php
        require "common/footer.php";
        require "common/js.php";
    ?> 
    
</body>

</html>
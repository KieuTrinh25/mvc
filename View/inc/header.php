<div id="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light "style="background-color: rgba(8, 140, 62, 0.6);" >
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>      
                <a class="navbar-brand" href="<?php echo url_pattern('homeController', 'home'); ?>">
                    <div class="logo" style="padding-left: 100px; "> 
                        <img src="./Public/images/logo.png" width="95px" >  
                            </div>      
                </a>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo url_pattern('homeController', 'home'); ?>"  style="color: black;">Trang chủ </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  " href="<?php echo url_pattern('homeController', 'introduce'); ?>" id="navbardrop" data-toggle="dropdown"  style="color: black;"> Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardropaaa" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="color: black;"> Cửa hàng</a>
                            <div class="dropdown-menu" aria-labelledby="navbardropaaa">
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Rau củ</a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Trái cây</a>                             
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Hải sản</a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Thịt trứng</a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Đồ uống</a>
                                <a class="dropdown-item" href="<?php echo url_pattern('homeController', 'shop'); ?>">Đồ khô</a>
                            </div>                              
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo url_pattern('homeController', 'list'); ?>" style="color: black;" >Danh bạ nhà nông</a>                                    
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo url_pattern('homeController', 'knowledge'); ?>"  style="color: black;">Kiến thức</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="<?php echo url_pattern('homeController', 'contact'); ?>"  style="color: black;">Liên hệ</a>
                        </li>         
                    </ul> 
                    <div class="search " style="margin-right:40px;">
                        <form action="<?php echo url_pattern('homeController', 'search') ?>" method="get">
                            <input type="hidden" name="controller" value="homeController">
                            <input type="hidden" name="page" value="search">
                            <input name="q" type="search-box" size="20" placeholder="Tìm Kiếm...">
                        </form>                     
                    </div>
                    <div class="btn-user">

                        <div class="btn-cart1" onclick="show()">
                            <!-- <img id="icons-cart" src="img/cart.png" style="height: 40px;width: 40px;"> -->
                            <?php if($this->auth->user()) { ?>
                            <a class="btn hover-white " href="<?php echo url_pattern('authController', 'logout'); ?>" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            <?php } else { ?>
                            <a class="btn hover-white" href="<?php echo url_pattern('authController', 'login'); ?>" role="button"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <?php } ?>
                            <a class="btn hover-white" href="<?php echo url_pattern('homeController', 'cart'); ?>" role="button"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>        
        </nav>
    <div class="banner " style="margin-top: 100px;" >
        <div class="container-fluid ">
            <img src="./Public/images/banner1.jpg"  id="anhnen-a">
        </div>
    </div>      
</div> 
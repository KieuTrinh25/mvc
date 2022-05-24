<div id="header">
        <nav class="navbar fixed-top navbar-expand-lg navbar-light "style="background-color: rgba(8, 140, 62, 0.6); " >
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>      
                <a class="navbar-brand" href="index.php">
                    <div class="logo" style="padding-left: 100px;"> 
                        <img src="img/logo.png"  >  
                            </div>      
                </a>
                <div class="collapse navbar-collapse " id="navbarTogglerDemo03" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 " >
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="index.php" >Trang chủ </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link  " href="introduce.php" id="navbardrop" data-toggle="dropdown"> Giới thiệu</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbardropaaa" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Cửa hàng</a>
                            <div class="dropdown-menu" aria-labelledby="navbardropaaa">
                                <a class="dropdown-item" href="shop.php">Rau củ</a>
                                <a class="dropdown-item" href="shop.php">Trái cây</a>                             
                                <a class="dropdown-item" href="shop.php">Hải sản</a>
                                <a class="dropdown-item" href="shop.php">Thịt trứng</a>
                                <a class="dropdown-item" href="shop.php">Đồ uống</a>
                                <a class="dropdown-item" href="shop.php">Đồ khô</a>
                            </div>                              
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="list.php" >Danh bạ nhà nông</a>
                                                               
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="knowledge.php" >Kiến thức</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="contact.php" >Liên hệ</a>
                        </li>
                                
                                
                               
                    </ul> 
                    <div class="search " style="margin-right:40px">
                        <form action="search.php" method="get">
                            <input name="q" type="search-box" size="20" placeholder="Tìm Kiếm...">
                            <a class="btn hover-white " href="#" role="button"><i class="fa fa-search" aria-hidden="true"></i></a>
                            
                        </form>
                        
                    </div>

                    <div class="btn-user">

                        <div class="btn-cart1" onclick="show()">
                            <!-- <img id="icons-cart" src="img/cart.png" style="height: 40px;width: 40px;"> -->
                            <a class="btn hover-white" href="login.php" role="button"><i class="fa fa-user" aria-hidden="true"></i></a>
                            <a class="btn hover-white " href="#" role="button"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                            <a class="btn hover-white" href="cart.php" role="button"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>        
        </nav>
    <div class="banner " style="margin-top: 100px;" >
        <div class="container-fluid ">
            <img src="img/banner1.jpg"  id="anhnen-a">
        </div>
    </div>      
</div> 
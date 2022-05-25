<html>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Trade</title>
    
	<link rel="stylesheet" href="./Public/css/style1.css">
        
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./Public/css/owl.carousel.css">
    <link rel="stylesheet" href="./Public/css/owl.theme.green.css">
     <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./Public/js/owl.carousel.js"></script>
    <script src="./Public/js/web.js"></script>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>
    <div class="container">
        <h1 style = "text-align:center ; margin-top:20px"> LIÊN HỆ </h1>
            <div class="row mt-5">
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7652.988200413251!2d107.57732972502711!3d16.450500221652103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141a1457c1ffc2d%3A0x32d40f91421ce10d!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBQaMO6IFh1w6Ju!5e0!3m2!1svi!2s!4v1653065579250!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div class="row">
                          <div class="col-md-3 text-center">
                              <img src="./public/images/contact.png" width="130px" height="150px">
                          </div>
                          <div class="col-md-9">
                              <p><img src="./public/images/Đc.png"width="30px" height="30px">          176 Trần Phú phường Phước Vĩnh Tp Huế</p>
                              <p><img src="./public/images/phone1.png"width="30px" height="30px">      012345679</p>
                              <p><img src="./public/images/email.jfif"width="30px" height="30px">      Email </p>
                              <p><img src="./public/images/faceb2.png"width="30px" height="30px">      Facebook </p>
                        </div>
                      </div>
                      <div class="row  ">
                          <div class="col-md-12 text-center">  <h2>LIÊN HỆ VỚI CHÚNG TÔI</h2>                 
                      </div>
                  </div>
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-5 text-center">
                          <form>
                            <div class="form-group ">
                                <input type="hoten" class="form-control"  aria-describedby="emailHelp" placeholder="Họ và tên"> 
                            </div>
                            </form>
                          </div>
                          <div class="col-md-5 text-center">
                          <form>
                            <div class="form-group ">
                                <input type="hoten" class="form-control"  aria-describedby="emailHelp" placeholder="Email"> 
                            </div>
                            </form>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-1"></div>
                          <div class="col-md-5 text-center">
                          <form>
                            <div class="form-group ">
                                <input type="hoten" class="form-control"  aria-describedby="emailHelp" placeholder="Số điện thoại"> 
                            </div>
                            </form>
                          </div>
                          <div class="col-md-5 text-center">
                          <form>
                            <div class="form-group ">
                                <input type="hoten" class="form-control"  aria-describedby="emailHelp" placeholder="Địa chỉ"> 
                            </div>
                            </form>
                          </div>
                      </div>
                     
                  
                  <div class="row">
                      <div class="col-md-1"></div>
                      <div class="col-md-10">
                      <form class="was-validated">
                            <div class="mb-3">
                               
                                <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Lời nhắn " required></textarea>
                               
                            </div>
                      </form>
                      
                      </div>
                      <div class="col-md-1"></div>
                      <div class="col-md-12 text-center"> <button type="button" class="btn btn-primary">Gửi</button></div>
                  </div>
              </div>
          </div>
         
      </div>
     
 
     
      </div>
         
      <?php include_once './View/inc/footer.php'?>
         
    </body>
</body>
<script type="text/javascript">
    var vimg = document.getElementById("anhnen-a")
    var t ;
    var i = 1 ;
    function autoloadimg() {
        t = setInterval(function autoloadimg(){
            i++;
            if ( i > 3 ){
                i = 1;
            }
            vimg.src = "./public/images/" + "banner" + i +".jpg" ;
        }, 2000 )
    }
    $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                // loop:true,
                margin:0,
                nav:true,
                // items: 2,
                mouseDrag: true,
                touchDrag: true,
                pullDrag: true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    400: {
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->
   
</html>
<?php include_once './Model/ProductModel.php '?>
<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>

<div id="content" style="margin-top:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-2">
                <img src="<?php echo $product->image; ?>" width="80%"  >
                </div>
                <div class="col-md-6"> 
                    <div class=" row">
                        <div class="col-md-12 mt-3">
                            <a>TRANG CHỦ / TRÁI CÂY</a>
                        </div>
                        <div class="col-md-12">
                            <h3><?php echo $product->name; ?> </h3>
                        </div>
                        <div class="col-md-12">
                            <hr></hr>
                        </div>
                        <div class="col-md-12">
                            <div class="price">
                                <h3><?php echo $product->price; ?>đ</h3>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3">
                            <i class="fa fa-check-square-o">   Gọi mua hàng 1900 636 648</i>
                        </div>
                        <div class="col-md-12 mt-3">
                            <i class="fa fa-check-square-o">   Đảm bảo tươi ngon</i>
                        </div>
                        <div class="col-md-12 mt-3">
                            <i class="fa fa-check-square-o">   Giao hàng trực tiếp từ vườn</i>
                        </div>
                        <div class="col-md-12 mt-3">
                            <i class="fa fa-check-square-o">    Đổi trả trong vòng 24h</i>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                
                            </div>
                            <div class="col-md-8 mt-3">
                                <button type="button" class="btn btn-outline-success " >THÊM VÀO GIỎ HÀNG</button>
                            </div>
                        </div>
                    </div>               
                </div>
            </div>
        </div>
    </div>
    <div id="mota">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <button type="button" class="btn btn-outline-secondary ">Mô Tả</button>
                </div>
                <div class="col-md-12 mt-3">
                    <h3>Giá gà ta thả vườn hôm nay</h3>
                </div>
                <div class="col-md-12 mt-2">
                    <li>
                        <a>195.000đ/kg<a>
                    </li>                   
                </div>
                <div class="col-md-12 mt-2">
                    <a>Gà ta thả vườn Bình Định là giống gà có xuất xứ ở Bình Định được trang trại An Mộc nuôi tại Bình Phước theo hướng hữu cơ, tạo không gian sống tự nhiên và rộng rãi với thức ăn an toàn không dùng cám công nghiệp, không chất kích thích tăng trưởng, chất tạo nạc… Gà thả vườn  là những con gà được nuôi theo phương pháp chăn nuôi thả vườn, phòng bệnh từ các loại thực vật như gừng, tỏi, sả …Gà được nuôi từ giai đoạn ấp cho đến trưởng thành để đảm bảo an toàn cho sức khỏe mọi người. Gà tơ đã làm sạch khoảng 1,1 – 1,5kg/ con nên rất dễ ăn mà không bị ngán. Chất lượng thịt rất tuyệt vời, thịt gà chắc, ngọt, ít mỡ xương nhỏ, da hơi vàng và thịt thì trắng hồng, không bở, khi ăn sẽ cảm nhận được độ mềm dai cũng như mùi thơm khó hòa lẫn với bất cứ loại gà nào khác.</a>
                </div>
                <div class="col-md-3">
                                
                </div>
                <div class="col-md-6 mt-2">
                    <img class="" src="http://file.hstatic.net/1000333483/file/ga-tha-vuon-1_grande.jpg" width="100%">
                </div>
                <div class="col-md-12 mt-3">
                    <h3>Thịt gà ta thả vườn Bình Định tác dụng gì?</h3>
                </div>
                <div class="col-md-12 mt-3">
                    <h4>Tốt cho hệ tim mạch</h4>
                </div>
                <div class="col-md-12 mt-2">
                    <a>Sử dụng gà thả vườn Bình Định rất tốt cho tim mạch. Chính nhờ chức năng kiểm soát hàm lượng Homoccysteine – đây chính là một loại axit amin có thể gây ra bệnh tim mạch nếu nếu với hàm lượng cao trong cơ thể. Thường xuyên bổ sung gà trong các bữa ăn, đặc biệt là ức gà để có một hệ tim mạch khỏe mạnh.</a>
                </div>
                <div class="col-md-12 mt-2">
                    <a>Sử dụng gà thả vườn Bình Định rất tốt cho tim mạch. Chính nhờ chức năng kiểm soát hàm lượng Homoccysteine – đây chính là một loại axit amin có thể gây ra bệnh tim mạch nếu nếu với hàm lượng cao trong cơ thể. Thường xuyên bổ sung gà trong các bữa ăn, đặc biệt là ức gà để có một hệ tim mạch khỏe mạnh.</a>
                    <h4 class="mt-3">Giúp răng, xương phát triển khỏe mạnh</h4 >
                    <a>Như chúng ta đã biết Photpho, Canxi là những dinh dưỡng rất cần thiết cho cơ thể đặc biệt là xương và răng. Gà thả vườn Bình Định chứa rất nhiều Photpho và Canxi giúp xương và răng phát triển khỏe mạnh, phòng ngừa loãng xương và một số vấn đề về răng, miệng. Hơn thế nữa, gà ta còn giúp hệ cơ xương tránh được các nguy cơ chất thương do ngoại lực tác động.</a>
                    <h4 class="mt-3">Loại bỏ áp lực, căng thẳng</h4>
                    <a>Với xã hội ngày càng bận rộn hiện nay việc thường xuyên gặp phải áp lực, căng thẳng trong xã hội là điều không tránh khỏi. Thịt gà thả vườn có tác dụng làm giảm stress, giúp cơ thể khỏe mạnh và phục hồi thể lực một cách nhanh chóng. Đặc biệt vào những ngày đông hoặc ngày mưa, ăn một chén canh gà để giữ ấm và tăng đề kháng cho cơ thể.</a>
                    <h4 class="mt-3">Đẩy mạnh quá trình trao đổi chất trong cơ thể</h4 >
                    <a>Trong thịt gà thả vườn chứa một hàm lượng rất lớn Vitamin B6 góp phần hỗ trợ, khuyến khích các enzyme và các phản ứng trao đổi chất của tế bào trong cơ thể. Chính quá trình ấy giúp giữ cho mạch máu khỏe mạnh, ổn định năng lượng, thúc đầy quá trình trao đổi chất và đốt cháy Calo trong cơ thể.</a>
                    <h4 class="mt-3">Quy trình sản xuất gà ta thả vườn Bình Định</h4   >
                    <a>Gà thả vườn được nuôi tại Bình Phước, do trang trại An Mộc kiểm soát toàn bộ quy trình, gà được chăn thả trên những cánh đồng rộng lớn. Thức ăn tại trang trại hoàn toàn là thức ăn tự nhiên, nguồn nguyên liệu dồi dào được trồng tại trại thông qua quy trình kiểm soát gắt gao để đảm bảo sức khỏe cho gà. Gà thả vườn Bình Định nuôi tại trang trại An Mộc được phát triển tự nhiên, hoàn toàn không dùng cám công nghiệp hay bất cứ chất kích thích tăng trọng nào.</a>
                    <a><strong>Vùng sản xuất:</strong> Bình Phước, Việt Nam</a>
                    <a><strong>Quy cách đóng gói:</strong>  1,1 – 1,5kg/ con (đã làm sạch).</a>
                </div> 
                <div class="col-md-3">
                                
                </div>
                <div class="col-md-6 mt-4">
                    <img class="" src="http://file.hstatic.net/1000333483/file/ga-ta-tha-vuon-binh-dinh-nguyen-con_grande.jpg" width="100%">
                </div> 
                <div class="col-md-12 mt-3">
                    <h4>Cách bảo quản</h4  >     
                    <a>Trong trường hợp dự định trữ gà thả vườn lâu mà chưa thể làm chín, cách tốt nhất chính là bảo quản đông lạnh. Cất gà vào bao bì kín, hút chân không bì trước khi thực hiện đông lạnh. Với cách bảo quản này, bạn có thể giữ gà ta thả vườn sạch trong ít nhất vài tháng.</a> 
                    <h4>Các món ngon được chế biến từ gà ta thả vườn Bình Định</h4 >
                    <a><strong>Cánh gà sốt nước tương</strong></a>
                    <a>Cánh gà sốt nước tương là món ăn không chỉ hấp dẫn về hương vị mà còn thu hút các tín đồ sành ăn bởi màu sắc bắt mắt. Cánh gà cắt đôi, ướp gia vị. Sau đó áp chảo cho cánh gà vàng đều 2 mặt, cho sốt nước tương rim đến khi gà chín và thưởng thức.</a>
                </div> 
                <div class="col-md-3"></div>           
                <div class="col-md-6 mt-4">
                    <img class="" src="http://file.hstatic.net/1000333483/file/canh-ga-sot-nuoc-tuong_grande.jpg" width="100%">
                </div> 
                <div class="col-md-3"></div>
                <div class="col-md-3"></div> 
                <div class="col-md-6 mt-2 text-center">
                    <em>Cánh gà sốt nước tương vàng óng ánh. Nguồn: Internet</em>
                </div> 
                <div class="col-md-12 mt-3">
                    <h4>Gà thả vườn tiềm chôm chôm</h4>
                    <a>Đây là món ăn thích hợp cho người thân bồi bổ sức khỏe và dưỡng bệnh. Gà được mua về rửa sạch, tẩm ướp gia vị. Sau đó cho chôm chôm, hạt sen, kỉ tử, bạch quả vào bụng gà và buộc kín lại. Dùng nước dừa tươi để tiềm gà trong vòng 2 tiếng nhằm phát triển tối đa về mặt dinh dưỡng.</a>
                </div>
                <div class="col-md-3"></div>           
                <div class="col-md-6 mt-4">
                    <img class="" src="http://file.hstatic.net/1000333483/file/ga-tiem-chom-chom_grande.jpg" width="100%">
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div> 
                <div class="col-md-6 mt-2 text-center">
                    <em>Gà tiềm chôm chôm bổ dưỡng. Nguồn: Internet</em>
                </div> 
                <div class="col-md-12 mt-3">
                    <h4>Lẩu gà chua cay</h4>
                    <a>Lẩu gà chua cay là sự kết hợp tuyệt vời của gà thả vườn, tôm, mực, hải sản các loại,… tạo ra một hương thơm ngào ngạt, vị đặc trưng khó quên cho người ăn. Món ăn thích hợp mọi thời điểm trong năm, hè giải nhiệt, đông góp phần giữ ấm cơ thể,… Đây cũng là món ăn tạo được sự quây quần bên nhau trong các buổi họp mặt bạn bè hay các bữa cơm gia đình.</a>
                </div> 
                <div class="col-md-3"></div>           
                <div class="col-md-6 mt-4">
                    <img class="" src="http://file.hstatic.net/1000333483/file/lau-ga-vuon_grande.jpg" width="100%">
                </div>
                <div class="col-md-3"></div>
                <div class="col-md-3"></div> 
                <div class="col-md-6 mt-2 text-center">
                    <em>Lẩu gà thả vườn Bình Định chua cay hấp dẫn. Nguồn: Internet</em>
                </div> 
                <div class="col-md-12 mt-3">
                    <h4>Thông tin nhà cung cấp</h4>
                    <a>An Mộc – Trang trại thuần nông chuyên cung cấp 100% thực phẩm sạch từ gà. Gà An Mộc được kiểm định không nhiễm chì, không nhiễm Cadimi, không thủy ngân, được kiểm định an toàn với sức khỏe người tiêu dùng với thịt mềm, ngọt và vô cùng thơm.</a>
                </div>
                <div class="col-md-12 mt-4">
                    <hr></hr>
                </div>
            </div>
        </div>
    </div>
   <!--end content-->
   <?php include_once './View/inc/footer.php'?>
    <!--end footer-->
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
            vimg.src = "./Public/images/" + "banner" + i +".jpg" ;
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
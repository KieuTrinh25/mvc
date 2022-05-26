<?php
function url($page) {
    return 'index.php?controller=homeController&page=' . $page;
}

function create_order($productId, $name, $image, $price, $quantity) {

    if(isset($_SESSION['cart'])){
        $cart = $_SESSION['cart'];
    }else{
        $cart = array();  
    }

    $productExists = false;

    foreach($cart as $key => $value){
        if($productId == $value['productId']){
            $value['quantity'] = $value['quantity'] + $quantity;
            $cart[$key] = $value;
            $productExists = true;
            break;
        }
    }
    if(!$productExists) {
        $product = array(
            'productId' => $productId,
            'name' => $name,
            'image' => $image,
            'price' => $price,
            'quantity' => $quantity,
        );
    
        $cart[] = $product;
    }
   
    $_SESSION['cart'] = $cart;
}
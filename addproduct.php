<?php
session_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    if(isset($_POST['submit'])){
        //array(4) { ["nameproduct"]=> string(22) "Áo đá bóng MU 2022" ["price"]=> string(6) "199999" ["image"]=> string(13) "product-1.ipg" ["submit"]=> string(0) "" }
        $product = [$_POST['nameproduct'], $_POST['price'], $_POST['image']];
        $_SESSION['cart'][] = $product;
        var_dump($_SESSION['cart']);
    }
    function pushToPage(){
        if(isset($_SESSION['cart'])){
            foreach($_SESSION['cart'] as $value)
            {
                echo $value."".$value[0];
                echo $value."".$value[1];
                echo $value."".$value[2];
            }
        }
    }
?>
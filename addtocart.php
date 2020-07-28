<?php
session_start();

if(isset($_POST["MyCart"]))
{

    if(isset($_SESSION["addtocart"]))
    {
        $product_id=array_column($_SESSION['addtocart'],'id');

        if(!in_array($_POST['id'],$product_id))
        {
            $count=count($_SESSION['addtocart']);

            $product_array =array ('id'=> $_POST['menuid'],
            'name' => $_POST['name'],
            'price'=> $_POST['price'],
            'quantity' => $_POST['quantity']
        );
        $_SESSION['addtocart'][$count]=$product_array;
        }
        else {
            echo '<script>alert("Item already Added")</script>';
            echo '<script>window.location="m.php"</script>';
        }
    }

    else {
      $product_array =array ('id'=> $_POST['menuid'],
        'name' => $_POST['name'],
        'price'=> $_POST['price'],
        'quantity' => $_POST['quantity']
    );
    $_SESSION['addtocart'][0]=$product_array;
    }
}



$_SESSION['menuid']=$id;
$_SESSION['name']=$name;
$_SESSION['price']=$price;
$_SESSION['quantity']=$quantity;

header('LOCATION:m.php');






?>
<?php 
session_start();
include 'Card.php';
include 'Database.php';

$object = new Database();

if(isset($_POST['add'])){
    // print_r($_POST['product_id']);

    if(isset($_SESSION['cart'])){
        // print_r($_SESSION['cart']);
        $item_arary_id = array_column($_SESSION['cart'],column_key:"product_id");
        print_r($item_arary_id);

        if(in_array($_POST['product_id'],$item_arary_id)){
            echo "<script>alert('product is already added in the cart...!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{
            $count = count($_SESSION['cart']);
            $item_array =  array(
                'product_id'=>$_POST['product_id']
            );
            $_SESSION['cart'][$count] = $item_array;
            print_r($_SESSION['cart']);
        }
    }else{
        $item_array = array(
            'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
<?php require_once('header.php'); ?>

    <div class="container">
        <div class="row text-center py-5">
           <?php 

                $result = $object->getData();
                while($row = mysqli_fetch_assoc($result)){
                    Card($row['product_image'],$row['product_name'],$row['product_price'],$row['id']);
                }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>
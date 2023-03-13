<?php

function Card($img, $name, $price,$productID)
{
    $element = "
    <form class='col-md-3 col 6 my-3 md-0' method='post'>
    <div class='card shadow'>
        <div class='text-center'>
            <img src=\"$img\" alt='' class='img-fluid'>
        </div>
        <div class='card body'>
            <h5 class='card-title'>$name</h5>
            <h6>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star'></i>
                <i class='fas fa-star-half'></i>
            </h6>
            <p class='card-text'>sleep night hearing protector earmuffs radio earmuffs active headphones for shooting electronic</p>
            <h5>
                <small><s class='text-secondary'>$423</s></small>
                <span class='price'>$$price</span>
            </h5>
            <button type='submit' class='btn btn-warning my-3' name='add'>Add to Cart <i class='fas fa-shopping-cart'></i></button>
            <input type='hidden' name='product_id' value='$productID' />
        </div>
    </div>
</form>
    ";

    echo $element;
}








function cartElement($productImg,$productname,$productPrice,$productid) {
    $element = "
    <form action='cart.php?action=remove&id=$productid' class='cart-items' method='post'>
                    <div class='border rounded mb-3'>
                        <div class='row bg-white'>
                            <div class='col-md-3'>
                                <img src='$productImg' alt='' class='img-fluid'>
                            </div>
                            <div class='col-md-6'>
                                <h5 class='pt-2'>$productname</h5>
                                <small class='text-secondary'>Seller: Dipak Dai</small>
                                <h5 class='pt-2'>$$productPrice</h5>
                                <button type='submit' class='btn btn-warning'> Save for later</button>
                                <button type='submit' class='btn btn-danger mx-2' name='remove'> Remove</button>
                            </div>
                            <div class='col-md-3 py-5'>
                                <div>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fa-solid fa-minus'></i></button>
                                    <input type='text' value='1' class='form-control w-25 d-inline'>
                                    <button type='button' class='btn bg-light border rounded-circle'><i class='fa-solid fa-plus'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

    ";
    echo $element;
}




?>





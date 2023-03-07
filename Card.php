<?php

function Card($img, $name, $price)
{
    $element = "
    <div class='col-md-3 col 6 my-3 md-0'>
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
        </div>
    </div>
</div>
    ";

    echo $element;
}

?>


<img src="../images/1.jpg" alt="">
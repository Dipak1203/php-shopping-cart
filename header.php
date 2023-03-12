<header id="header">
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-shopping-basket"></i>Shopping Cart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="cart.php">
                            <h5 class="px-5 cart">
                                <i class="fa-solid fa-cart-shopping"></i> cart
                                <?php 
                                    if(isset($_SESSION['cart'])){
                                        $count = count($_SESSION['cart']);
                                        echo "<span style=\"padding: 5px 13px;background: #fff;   text-align: center;color:black;border: none;    border-radius: 50%;\">$count</span>";
                                    }else{
                                        echo "<span style=\"padding: 5px 13px;background: #fff;   text-align: center;color:black;border: none;    border-radius: 50%;\">0</span>";
                                    }
                                ?>
                            </h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</header>
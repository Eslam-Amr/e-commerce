<nav style="background-color: rgba(0, 60, 255, 0.172);" class="navbar navbar-expand-lg bg-body-tertiary pt-3">
            <div class="container ">
                <a class="navbar-brand" href="./e-commerce.php"><b>Eslam-Elmarg store</b></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <?php if ($_SESSION['auth']['role'] == 'user'): ?>
                            <li class="nav-item">
                                <a class="nav-link active me-3 fa-xl mt-2" aria-current="page" href="./profile.php">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="./cart.php"><i
                                        class="fa-solid fa-cart-shopping fa-xl"></i>

                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if ($_SESSION['auth']['role'] == 'admin'): ?>

                            <li class="nav-item">
                                <a class="nav-link position-relative" href="./table.php">table
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="./crud/addProduct.php"> add
                                </a>
                            </li>

                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link position-relative" href="./handelers/logout.php"> Logout
                                </a>
                            </li>

                    </ul>

                </div>
            </div>
        </nav>
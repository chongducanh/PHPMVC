<!doctype html>
<html lang="en">

<head>
    <title>BestSale for GameStation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cd2663b29d.js" crossorigin="anonymous"></script>

</head>

<body class="bg-secondary">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand text-success" href="index.php?url=Game">GAME STORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <!-- <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->

                </div>
                <div class="navbar-nav ml-auto">
                    <?php
                    if (isset($_SESSION['id'])) {
                    ?>

                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Welcome <?php echo $_SESSION['username'] ?></span>
                            <img style="width: 20px; height:20px;" class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Cart
                            </a>
                            <?php
                            if ($_SESSION['userrole'] == 1) {
                            ?>
                                <a class="dropdown-item" href="index.php?url=Admin/OverView">
                                    <i class="fas fa-users-cog  fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Admin Page
                                </a>
                            <?php
                            }
                            ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>

                    <?php
                    } else {
                    ?>

                        <li class="nav-item">
                            <a class="nav-link active text-primary" href="/View/Login.php"><i class="fas fa-sign-in-alt"></i> Sign in</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link active text-primary" href="/View/Login.php"><i class="fas fa-user-plus"></i> Sign up</a>
                        </li> -->

                    <?php
                    }
                    ?>
                    <li class="nav-item">
                            <a class="nav-link active text-primary" href="/View/Cart.php"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i> Cart</a>
                        </li>
                </div>

            </div>

        </nav>
        <div class="bg-light">
            <?php
            if ($data['method'] == "GameList") {
                require_once "./View/GameList.php";
            }
            if ($data['method'] == "GameDetail") {
                require_once "./View/GameDetail.php";
            }
            ?>
        </div>


        <div class="card-footer bg-white mt-2 text-right">&copy; Copyright 2020</div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="/index.php?url=User/LogOut/">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
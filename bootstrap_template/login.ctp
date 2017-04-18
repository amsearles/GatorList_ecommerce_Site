<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img class="slide-image" src="gatorlist.svg" alt="" style="width: 120%">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav-left">
                    <li>
                        <a href="#">Buy</a>
                    </li>
                    <li>
                        <a href="#">Sell</a>
                    </li>
                    <li>
                        <a href="#">About Us</a>
                    </li>

                    <!-- Search -->
                    <li>
                        <a href="#">Search</a>
                    </li>

                </ul>
                <ul class="nav navbar-nav-left">
                    <!-- Search Bar -->
                    <li style="
                        padding-top: 15px;
                        padding-bottom: 15px;
                        padding-left: 15px">
                        <form  action method="post">
                            <select name="category" style="width: 75; height: 25pt; ">
                                <option selected value="1">Electronics</option>
                                <option selected value="2">Furniture</option>
                                <option selected value="3">Books</option>
                                <option selected value="4">Apparel</option>
                            </select>
                        </form>
                    </li>
                    <li style="
                        padding-top: 15px;
                        padding-bottom: 15px;">
                        <input type="text" name="submit" style="height: 25pt;">
                    </li>
                    <li style="
                        padding-top: 15px;
                        padding-bottom: 15px;
                        padding-right: 15px;">
                        <button type="submit" style="height: 25pt;">Search</button>
                    </li>
                </ul>

                <ul class="nav navbar-nav">
                    <!-- Login -->
                    <li>
                        <a href="#">Login</a>
                    </li>

                    <!-- Register -->
                    <li>
                        <a href="#">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <br>
        <div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
        <div class="panel">
            
            <h2 class="text-center">Login</h2>
            
            <?= $this->Form->create(); ?>
            <fieldset>
            <?php
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            ?> 
            </fieldset>
                <div class="text-center"> <?= $this->Form->button('Login'); ?></div>
            <?= $this->Form->end(); ?>
        </div>
        </div>
    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>GatorList</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

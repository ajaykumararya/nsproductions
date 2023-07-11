<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rankers education hub</title>

    <!-- font awesome 4 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- boostrap 4 cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- custom css -->
    <link rel="stylesheet" href="<?=base_url('back/')?>style.css">
    <script>var base_url = '<?=base_url()?>';</script>
</head>

<body>
    <!--  top bar start  -->
    <div class="top_bar">
        <div class="container">
            <div class="top_bar_inside_box d-flex justify-content-between align-items-center p-2">
                <ul class="nav">
                    <?php
                    if($this->session->has_userdata('user_login')){
                        ?>
                      <li class="nav-item linky">
                            <a class="nav-link linky" target="_blank" href="<?=base_url('user')?>"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link linky" href="<?=base_url('user/logout')?>"><i class="fa fa-power-off" aria-hidden="true"></i> Log Out</a>
                        </li>  
                        <?php
                        
                    }
                    else{
                    ?>
                    <li class="nav-item linky">
                        <a class="nav-link linky" href="<?=base_url('user/register')?>"><i class="fa fa-user" aria-hidden="true"></i> Register Now</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link linky" href="<?=base_url('user')?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>

                <ul class="nav mobile_number">
                    <li class="nav-item">
                        <a class="nav-link" href="tel:8619391818"><i class="fa fa-phone" aria-hidden="true"></i> 8619391818</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mailto:rankerstesthub@gmail.com"> <i class="fa fa-envelope" aria-hidden="true"></i> rankerstesthub@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--  top bar end  -->


    <!--  header start -->
    <section class="banner-logo">
        <div class="container">
            <div class="banner-logo-inside">
                <div class="row">
                    <div class="col-md-4">
                        <div class="header-logo">
                            <img src="<?=base_url('upload/ranker.jpg')?>" alt="" class="img-fluid">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="header-logo-name text-center">
                            <h1 class="m-0">RANKERS</h1>
                            <h4>WWW.RANKERS.ORG.IN</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  header end  -->


    <!--  navigation start  -->
    <section class="navigation-bar">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto text-lg-left text-center">
                        <?php
                        include 'important_links.php';
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </section>
    <!--  navigation end  -->


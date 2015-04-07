<?php
/*
Template Name: Home Page
*/

 get_header(); ?>    
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="#">Phased.io - Succession Managment</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About</a>
                    </li>
                    <li>
                        <a href="#services">Services</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1 class="makeItWhite-txt">Phased.<span style="color:#141B26;">io</span></h1>
                        <h3 class="makeItWhite-txt">Succession Managment</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/phased_io" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="" id="playvid" class="btn btn-default btn-lg" data-toggle="modal" data-target="#videoModal"><i class="fa fa-play fa-fw"></i> <span class="network-name">About Us</span></a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/phased.io" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i> <span class="network-name">Facebook</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Does your company have<br> digital institutional memory?</h2>
                    <p class="lead">When employee number 7 leaves your company unexpectiantly, do you have a plan for how their replacement gets up to speed? there is an inefficiency between succession planning and on-the-job training so we created Phased.io. We help transfer knowledge when a new employee is actually in the seat and learning on-the-job.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <!-- <img class="img-responsive" src="img/ipad.png" alt=""> -->
                    <i align="center" class="fa fa-users fa-5x makeItGreen-txt" style="font-size:20em;  margin: 0 auto;display:block; margin-top: 5rem;"></i>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Easy input.<br>Great output.</h2>
                    <p class="lead">Phased.io provides an easy way for current employees to find and document knowledge, share their contacts, and suggest videos and courses that helped them do their job.</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <!-- <img class="img-responsive" src="img/dog.png" alt=""> -->
                    <i align="center" class="fa fa-cloud-download fa-5x makeItGreen-txt" style="font-size:20em;  margin: 0 auto;display:block"></i>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Sign up for our pilot program!</h2>
                    <p class="lead">Phased.io is currently accepting applicants to our pilot program! Accepted members to this pilot program will help us fine tune a solution that meets their needs, helping us generate features to help other companies all over the world. You will become the ambassadors of Phased.io! <a href="/apply-now/" class='makeItGreen-txt'>Apply Now!</a></p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <!-- <img class="img-responsive" src="img/phones.png" alt=""> -->
                    <i class="fa fa-paper-plane-o fa-5x makeItGreen-txt" style="font-size:20em;"></i>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    
    <?php get_footer(); ?>
<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/10/2017
 * Time: 5:03 PM
 */ ?>


    <div class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
            <li data-target="#main-slider" data-slide-to="1"></li>
            <li data-target="#main-slider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="item active" style="background-image: url(<?= $this->Url->image('home/'.$information[5]->value); ?>);">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                                <!--<h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>
                                <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img img-responsive">
                                <img src="<?= $this->Url->image('home/'.$information[6]->value); ?>"
                                     alt="Jalwa Dance Company">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= $this->Url->image('home/'.$information[5]->value); ?>);">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                               <!-- <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>-->
                               <!-- <a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
                            </div>
                        </div>

                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img2.png" class="img-responsive">
                            </div>
                        </div>

                    </div>
                </div>
            </div><!--/.item-->

            <div class="item" style="background-image: url(<?= $this->Url->image('home/'.$information[5]->value); ?>);">
                <div class="container">
                    <div class="row slide-margin">
                        <div class="col-sm-6">
                            <div class="carousel-content">
                              <!--  <h1 class="animation animated-item-1">Lorem ipsum dolor sit amet consectetur adipisicing elit</h1>
                                <h2 class="animation animated-item-2">Accusantium doloremque laudantium totam rem aperiam, eaque ipsa...</h2>-->
                                <!--<a class="btn-slide animation animated-item-3" href="#">Read More</a>-->
                            </div>
                        </div>
                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                            <div class="slider-img">
                                <img src="images/slider/img3.png" class="img-responsive"> (middle pic)
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
    <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
        <i class="fa fa-chevron-left"></i>
    </a>
    <a class="next hidden-xs" href="#main-slider" data-slide="next">
        <i class="fa fa-chevron-right"></i>
    </a>

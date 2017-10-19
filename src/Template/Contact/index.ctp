

<body >
<section id="contact-info">

    <div class="center">
        <h2>How to Reach Us?</h2>
        <!--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>-->
    </div>
    <div class="gmap-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-5 text-center">
                    <div class="gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.9072846217628!2d145.09563771580764!3d-37.932596379730924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad6403aa75e2dad%3A0xa1f8ac5006a9794f!2sJalwa+Dance+Company!5e0!3m2!1sen!2sus!4v1508258695685" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                    </div>
                </div>

                <div class="col-sm-7 map-content">
                    <ul class="row">
                        <li class="col-sm-6">
                            <address>
                                <h5>Jalwa Dance Company</h5>
                                <p> 4/23-25 Bunney Road |Oakleigh South 3167 VIC <br>
                                    </p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:Jalwa@gmail.com</p>
                            </address>

                           <!-- <address>
                                <h5>Zonal Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>
                        </li>


                        <li class="col-sm-6">
                            <address>
                                <h5>Zone#2 Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>

                            <address>
                                <h5>Zone#3 Office</h5>
                                <p>1537 Flint Street <br>
                                    Tumon, MP 96911</p>
                                <p>Phone:670-898-2847 <br>
                                    Email Address:info@domain.com</p>
                            </address>
                        </li>-->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>  <!--/gmap_area -->

<section id="contact-page">
    <div class="container">
        <div class="center">
            <h2>Drop Us Your Message</h2>
            <!--<p class="lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>-->
        </div>
        <div class="row contact-wrap">

                <?= $this->Form->create($contact); ?>
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <?= $this->Form->input('name',
                            [
                                'class' => 'form-control',
                            ]) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->input('email',
                            [
                                'class' => 'form-control',
                            ]) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->input('Number',
                            [
                                'class' => 'form-control',
                            ]) ?>
                    </div>

                </div>
                <div class="col-sm-5">
                    <div class="form-group">

                        <?= $this->Form->input('subject',
                            [
                                'class' => 'form-control',
                            ]) ?>
                    </div>
                    <div class="form-group">

                        <?= $this->Form->input('body',
                            ['id'=> 'message',
                                'class' => 'form-control',
                            ]) ?>

                    </div>
                    <div class="form-group">
                        <?= $this->Form->button('Submit',
                            ['class'=>"btn btn-primary btn-lg" ]) ?>
                    </div>

                </div>
                <?= $this->Form->end(); ?>

        </div><!--/.row-->
    </div><!--/.container-->
</section><!--/#contact-page-->
</body>


</html>



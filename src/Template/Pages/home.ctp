<div class="wrapper">

    <div class="navbar" id="navbar">
        <a href="#" class="nav-toggle" id="nav-toggle"><i class="fa fa-bars" data-swap="fa fa-times"></i> Menu</a>
        <ul class="nav pull-left">
            <li class="current"><a href="http://www.jalwadancecompany.com/">Home</a></li>
            <li><a href="http://www.jalwadancecompany.com/genres/">Genres</a></li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/classes/">Dance Classes</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/classes/">Studio</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/school-incursions/">School Incursions</a></li>
                    <li><a href="http://www.jalwadancecompany.com/team-bonding/">Team Bonding</a></li>
                    <li><a href="http://www.jalwadancecompany.com/hens-nights/">Hen’s Nights</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                </ul>
            </li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/live-entertainment/">Live Entertainment</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/functions-festivals-events/">Functions, Festivals
                            &amp; Events</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                    <li><a href="http://www.jalwadancecompany.com/hens-nights/">Hen’s Nights</a></li>
                </ul>
            </li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kids</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/classes/">Dance Classes</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/school-incursions/">School Incursions</a></li>
                </ul>
            </li>
            <li><a href="http://www.jalwadancecompany.com/studio-hire/">Studio Hire</a></li>
            <li><a href="http://www.jalwadancecompany.com/contact/">Contact</a></li>
        </ul>
        <ul class="social pull-right">
            <li><a href="tel:0423652338"><i class="fa fa-phone"></i><span>
                        <?= h($information[0]->value) ?>
                    </span></a></li>
            <li>
                <?= $this->Html->link("Login / Register",
                    array('controller' => 'Users', 'action' => 'login'));
                ?>
            </li>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="feature front-page"
         style="background-image: url(<?= $this->Url->image('home/'.$information[5]->value); ?>);">
        <div class="container">
            <h1 class="logo">
                <a href="http://www.jalwadancecompany.com">
                    <img src="<?= $this->Url->image('home/'.$information[6]->value); ?>"
                         alt="Jalwa Dance Company">
                </a>
            </h1>
        </div>

    </div>
    <div class="main">

        <div class="container">

            <div class="where-to">
                <ul>
                    <li>
                        <a href="http://www.jalwadancecompany.com/genres/">
                            <div class="box"
                                 style="background-image: url(http://www.jalwadancecompany.com/wp-content/uploads/2016/09/GENRES-300x167.jpg)">
                            </div>
                            <span>Genres ›</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.jalwadancecompany.com/classes/">
                            <div class="box"
                                 style="background-image: url(http://www.jalwadancecompany.com/wp-content/uploads/2016/09/Sequence-01.Still003-300x169.jpg)">
                            </div>
                            <span>Dance Classes ›</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.jalwadancecompany.com/kids/kids-parties/">
                            <div class="box"
                                 style="background-image: url(http://www.jalwadancecompany.com/wp-content/uploads/2016/09/KIDS-300x200.jpg)">
                            </div>
                            <span>Kids ›</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.jalwadancecompany.com/live-entertainment/">
                            <div class="box"
                                 style="background-image: url(http://www.jalwadancecompany.com/wp-content/uploads/2016/09/LIVE-ENTERTAINMENT-300x168.jpg)">
                            </div>
                            <span>Live Entertainment ›</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.jalwadancecompany.com/studio-hire/">
                            <div class="box"
                                 style="background-image: url(http://www.jalwadancecompany.com/wp-content/uploads/2016/09/STUDIO-HIRE-1-1-300x106.jpg)">
                            </div>
                            <span>Studio Hire ›</span>
                        </a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>

            <div class="content">
                <h2>The Jalwa Dance Company is a professional troupe based in Melbourne</h2>
                <h3>We are experts in Bollywood, Bellydancing, Fire Twirling, Latin styles and Aerial Acts.</h3>
                <p>Choose authentic, stunning and colourful costumes. Choose sass, charm and professionalism that will
                    give your function an instant boost in energy and get the party started! Our professional team of
                    dancers unite weekly to create new, updated magical routines and continue to push the boundaries to
                    guarantee your event will only ever receive nothing less than an astonishing floorshow.</p>
                <p>Why book many different troupes when you can book one with all styles for the same cost!*</p>
                <p>*(conditions apply)</p>
                <p>&nbsp;</p>
                <p style="text-align: center;">WATCH OUR LATEST SHOW REEL:</p>
                <p style="text-align: center;">
                    <iframe width="500" height="281" src="https://www.youtube.com/embed/TKfZWxV8FLU?feature=oembed"
                            frameborder="0" allowfullscreen=""></iframe>
                </p>
            </div>


        </div>

    </div>


    <div class="push"></div>

</div>

<div class="footer">

    <div class="container">
        <div class="clear"></div>

        <div class="attribution">

            <p class="pull-left">A passion for cultures, irresistibly contagious </p>

            <p class="pull-right">Copyright © <?= h($information[1]->value) ?> | ABN <?= h($information[2]->value) ?>
                | <?= h($information[3]->value) ?>
                O<?= h($information[4]->value) ?></p>
            <div class="clear"></div>
        </div>

    </div>

</div>
<div class="menu">
    <div class="container clearfix">

        <?php if ($logo): ?>
            <div id="logo" class="grid_3">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                    <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
                </a>
            </div>
        <?php endif; ?>

        <div id="nav" class="grid_9 omega">

            <?php if ($page['header']) : ?>
                <?php print drupal_render($page['header']); ?>
            <?php endif; ?>

            <ul class="navigation">
                <li data-slide="1">Home</li>
                <li data-slide="2">About Lima I/O</li>
                <li data-slide="3">Demo</li>
                <li data-slide="4">Team</li>
                <li data-slide="5">Contact</li>
            </ul>
        </div>

    </div>
</div>


<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
    <div class="container clearfix">

        <div id="content" class="grid_7">
            <h1>Home</h1>
        </div>
    </div>



    <div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
        <div class="container clearfix">

            <div id="content" class="grid_12">
                <h1>About Lima I/O</h1>            
            </div>

        </div>
    </div>



    <div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
        <div class="container clearfix">

            <div id="content" class="grid_12">
                <h1>Demo</h1> 
            </div>


        </div>
    </div>



    <div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
        <div class="container clearfix">

            <div id="content" class="grid_12">
                <h1>Team</h1>
            </div>

        </div>
    </div>


    <div class="slide" id="slide5" data-slide="4" data-stellar-background-ratio="0.5">
        <div class="container clearfix">

            <div id="content" class="grid_12">
                <h1>Contact</h1>
            </div>

        </div>
    </div>

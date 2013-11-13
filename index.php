<?php require_once './hh-config.php'; ?>
<?php 

    $huskyhunt = new HuskyHunt();

    $USER->save();

    if (!is_null($USER)) {
        $module = $USER->next_module();

        if (!is_null($module)) {
            $_SESSION['MODULE_ID'] = $module->get_id();    
        } else {
            unset($_SESSION['MODULE_ID']);
        }
    } else {
        
    }

    $daily_module_id = $USER->daily_module();
    
?>
<html>

    <head>
        <?php include BASE_PATH . '/templates/head.php'; ?>
        <script type="text/javascript" src="<?=BASE_URL?>/js/countdown.js"></script>
    </head>
    <body>
        <?php include BASE_PATH . '/templates/navigation.php'; ?>
        
        <div class="container">
            
            <?php if (!is_null($daily_module_id)) { ?>
            <div id="daily-banner" onclick="window.location='daily.php';">
                <div class="inner">
                        <span>Daily Question!</span>
                </div>
            </div>
            <?php } ?>

            <div class="row" style="z-index: -3">
            
                <?php if (!$huskyhunt->has_begun()) { ?>
            
                    <div class="col-md-6 col-md-offset-3">
                        <h3>HuskyHunt 2013 hasn't begun just yet.</h3>
                        <h4>Check back with us in a few days or head over to our <a href="register.php">registration</a> page for alerts!</h4>
                        <br />
                        <h4 id="countdown" seconds="<?=$huskyhunt->start_time()?>"> 0 Day[s] 0 Hour[s] 0 Minute[s] 0 Second[s] </h4>
                    </div>

                <?php } elseif ($huskyhunt->has_ended()) {?>
 
                    <div class="col-md-6 col-md-offset-3">
                        <h3>HuskyHunt has ended.</h3>
                        <h4>Thank you to those of you who joined us this year. Make sure to check back next year where the game will be bigger and better!</h4>
                        <!-- Some Signature Here? -->
                    </div>

                <?php } else { ?>

                    <?php if (!is_null($module)) { ?> 
                    
                        <div class="col-md-8 col-md-offset-2">
                            <div class="well">
                                <h1> <?=$module->title?> </h1>
                                <hr /> 
                                <div><?=$module->body?> </div>
                            </div>
                        </div>

                        <div class="col-md-8 col-md-offset-2">
                            <button id="mobile_provider" type="button" class="pull-right btn-lg btn-primary" onclick="window.location='quiz.php';">Take The Quiz!</button>
                        </div>
                    <?php

                    } else {

                    ?>

                        <div class="col-md-8 col-md-offset-2">
                            <h3> 
                                You have completed all currently active HuskyHunt modules.
                            </h3>
                            <h4>
                                If you haven't already you can earn additional points by playing the daily question.<br />
                            </h4>
                            <br />
                            <h4>
                                You can also register to be notified when new weekly modules and hunt clues go live <a href="register.php">here!<a/>
                            </h4>
                    </div>
                    <?php

                    }

                    ?>
                <?php } ?>

            </div>
        </div>
    </body>
</html>


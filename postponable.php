<?php require_once './hh-config.php'; ?>
<?php 

    $huskyhunt = new HuskyHunt();

    $incomplete_modules = $USER->postponed_quiz_modules();
    $unshared_modules   = $USER->postponed_share_modules();

    $total = count($incomplete_modules) + count($unshared_modules);
    
?>
<html>

    <head>
        <?php include BASE_PATH . '/templates/head.php'; ?>
    </head>
    <body>
        <?php include BASE_PATH . '/templates/navigation.php'; ?>
        
        <div class="container">
    
            <?php if ($total == 0) { ?>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h3> 
                        You have completed and shared everything which you currently can! 
                    </h3>
                    <h4>
                        You can return to the home page, be sure to check back each day for new quizzes.
                    </h4>
                </div>
            </div>

            <?php 
            } else { 
                if (count($incomplete_modules)) {
            ?>
                    
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table striped-table"> 

                        <thead>
                            <tr>
                                <th>Incomplete Quizes</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($incomplete_modules as $module_id) {
                                $module = new HuskyHuntModule($module_id);
                            ?>      
                            <tr>
                                <td><?=$module->title?></td>
                                <td style="width: 150px;">
                                    <button onclick="window.location='module.php?MODULE_ID=<?=$module->get_id()?>'" class="btn btn-primary" style="width: 150px;">Return To Module</button>
                                </td>
                            </tr>
                            <?php } ?>  
                        </thead>
                    </table>
                </div>
            </div>
           
            <?php 
                } 
                if (count($unshared_modules)) { 
            ?>

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <table class="table striped-table"> 

                        <thead>
                            <tr>
                                <th>Unshared Tips</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach($unshared_modules as $module_id) {
                                $module = new HuskyHuntModule($module_id);
                            ?>      
                            <tr>
                                <td><?=$module->title?></td>
                                <td style="width: 150px;">
                                    <button onclick="window.location='share.php?MODULE_ID=<?=$module->get_id()?>'" class="btn btn-primary" style="width: 150px;">Share</button>
                                </td>
                            </tr>
                            <?php } ?>  
                        </thead>
                    </table>
                </div>
            </div>
            
            <?php
                }
            }
            ?>
 
        </div>
    </body>
</html>


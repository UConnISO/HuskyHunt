<?php require_once '../hh-config.php'; ?>
<?php require_once './hh-admin.php'; ?>
<?php $ADMIN->page_validate(); ?>
<html>

    <head>
        <?php include BASE_PATH . '/templates/head.php'; ?>
        <?php include BASE_PATH . '/admin/head.php'; ?>
    </head>
    <body>
        <?php include BASE_PATH . '/templates/navigation.php'; ?>

        <div class="container">
            
            <button onclick="window.location='list_modules.php'" class="btn btn-lg btn-primary" type="button">Modules</button>
            <button onclick="window.location='emails.php'" class="btn btn-lg btn-primary" type="button">Generate Player Email List</button>

        </div>
    </body>
</html>


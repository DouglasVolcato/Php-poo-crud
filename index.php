<!DOCTYPE html>
<html lang="en">
<?php
    require_once('./src/client/components/head/head.php');
    require_once('./src/client/pages/home.php');
    require_once('./src/client/utils/echoComponents.php');

    echoComponents([
        head(),
        homePage()
    ]);
?>
</html>

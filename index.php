<!DOCTYPE html>
<html lang="en">
<?php

if(isset($_GET["page"])){
    if ($_GET["page"] === "update"){
        include("./src/client/pages/update.php");
    } else if ($_GET["page"] === "delete"){
        include("./src/client/pages/delete.php");
    } else {
        include("./src/client/pages/home.php");
    }
} else {
    include("./src/client/pages/home.php");
}
?>
</html>

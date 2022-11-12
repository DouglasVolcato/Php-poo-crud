<?php
require("./src/client/routes/createMovie-route.php");

function creationForm(){
    return '
    <form class="creationForm" method="post" action="">
        <input class="creationForm-input" type="text" name="title" placeholder="Title" required />
        <input class="creationForm-input" type="number" name="year" placeholder="Year" required />
        <input class="creationForm-input" type="text" name="image" placeholder="Image" required />
        <button class="creationForm-button" type="submit">Add Movie</button>
    </form>
    ';
}
?>

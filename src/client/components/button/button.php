<?php
function button($name, $type, $buttonClickFunction, $buttonColor = "default"){
    return '<button onClick="'.$buttonClickFunction.'()" class="button button-color-'.$buttonColor.'" type="'.$type.'">'.$name.'</button>';
}
?>
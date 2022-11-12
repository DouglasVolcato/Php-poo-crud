<?php
require('./src/client/components/button/button.php');

function form($inputFieldNames, $inputFieldTypes, $inputFieldValues, $buttonNames, $buttonTypes){
    $inputs = "";
    for ($i = 0; $i < count($inputFieldNames); $i++) {
        $inputs = $inputs . " " . '<input class="form-input" type="'.$inputFieldTypes[$i].'" name="'.$inputFieldNames[$i].'" value="'.$inputFieldValues[$i].'" placeholder="'.ucfirst($inputFieldNames[$i]).'" required />';
    }

    $buttons = "";
    for ($i = 0; $i < count($buttonNames); $i++) {
        $buttons = $buttons . " " . button($buttonNames[$i], $buttonTypes[$i]);
    }

    return '
    <form class="form" method="post" action="">'.
    $inputs.
    $buttons.
    '</form>
    ';
}
?>
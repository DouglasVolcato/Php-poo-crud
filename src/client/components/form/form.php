<?php
require('./src/client/components/button/button.php');

function form($action ,$inputFieldNames, $inputFieldTypes, $inputFieldValues, $buttonNames, $buttonTypes, $buttonClickFunctions){
    $inputs = "";
    for ($i = 0; $i < count($inputFieldNames); $i++) {
        if($inputFieldTypes[$i] !== "hidden"){
            $inputs = $inputs . " " . '<label class="form-label">'.ucfirst($inputFieldNames[$i]).'</label>';
        }
        $inputs = $inputs . " " . '<input class="form-input" type="'.$inputFieldTypes[$i].'" name="'.$inputFieldNames[$i].'" value="'.$inputFieldValues[$i].'" placeholder="'.ucfirst($inputFieldNames[$i]).'" required />';
    }

    $buttons = "";
    for ($i = 0; $i < count($buttonNames); $i++) {
        $buttons = $buttons . " " . button($buttonNames[$i], $buttonTypes[$i], $buttonClickFunctions[$i], 'blue');
    }

    return '
    <form class="form" method="post" action="'.$action.'">'.
    $inputs.
    $buttons.
    '</form>
    ';
}
?>
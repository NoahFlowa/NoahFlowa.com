<?php

function displayJumbotron($dText1, $dText2, $desc) {
echo "
<div class=\"my-5 rounded-3\">
    <div class=\"container-fluid py-5\">
        <h1 class=\"display-2 fw-bold\"><span class=\"typeWriter\" data-end=\"5000\" data-speed=\"2\" data-text='[\"$dText1\",\"$dText2\"]'></span></h1>
        <p class=\"col-md-8 fs-3\">$desc</p>
    </div>
</div>
";
}

?>
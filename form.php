<?php
    // START OF SUBMISSION FORM
    if (isset($_POST['formName'])) {  
        $formName = $_POST['formName'];
    };

    if (isset($_POST['formEmail'])) {
        $formEmail = $_POST['formEmail'];
    };

    if (isset($_POST['formMessage'])) {
        $formMessage = $_POST['formMessage'];
    };

    if(isset($formName) && isset($formEmail) && isset($formMessage)) {
        mail('thewoolifox@gmail.com', 'Message from '.$formName.' at '.$formEmail, $formMessage);
        echo ('{"success": "true"}');
    } else {
        echo ('{"success": "false"}');
    };
    // END OF SUBMISSION FORM
?>
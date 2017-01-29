<?php
if (isset($_POST['send'])) {
    $full_name = $_POST['full_name'];
    $email     = $_POST['email'];
    $mobile    = $_POST['mobile'];
    $message   = $_POST['message'];
    $to        = "dubaipropertiesinfo@gmail.com";
    $subject   = "Dubai Properties Info - Enquiry";
    $body      = "
<table border=1 cellpadding=2 cellspacing=2>
    <tr>
        <td>Full name</td>
        <td>$full_name</td>
    </tr>
    <tr>
        <td>Email address</td>
        <td>$email</td>
    </tr>
    <tr>
        <td>Mobile number</td>
        <td>$mobile</td>
    </tr>
    <tr>
        <td>Message</td>
        <td>$message</td>
    </tr>
</table>";

    $headers   = "Content-type: text/html;\r\nFrom: Dubai Properties Info Admin<admin@dubaipropertiesinfo.com>\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Your message sent successfully";
    }
    else {
        echo "Your message sending failed. Please try later.";
    }
}
?>
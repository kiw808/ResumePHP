<?php
$formData = [];
$formData = [
    'firstname' => htmlspecialchars($_POST['firstname']),
    'lastname' => htmlspecialchars($_POST['lastname']),
    'email' => htmlspecialchars($_POST['mail']),
    'tel' => htmlspecialchars($_POST['tel']),
    'subject' => htmlspecialchars($_POST['subject']),
    'msg' => htmlspecialchars($_POST['msg'])
];
?>
<?php

// Two types of feedback depending on the subject chosen by the user
if ($_POST['subject'] != 'riding my car') {

?>
    <div class="form-feedback">
        <p>Thank you <strong><?= $formData['firstname'] . ' ' . $formData['lastname']; ?></strong> for reaching to me
            about <strong><?= $formData['subject']; ?></strong> !</p>
        <p>I will come back to you as soon as possible by mail at the address
            <strong><?= $formData['email']; ?></strong>, or I will give you a call at
            <strong><?= $formData['tel']; ?></strong>.</p>
        <p>Greetings, and see you soon !</p>
    </div>
<?php

}
else {

?>
    <div class="form-feedback">
        <p>Thank you <strong><?= $formData['firstname'] . ' ' . $formData['lastname']; ?></strong> for reaching to me
            about <strong><?= $formData['subject']; ?></strong> !</p>
        <p>Bloody hell, you can forget about it, go away freak !</p>
        <p>Greetings, and see you soon !</p>
    </div>
<?php

}


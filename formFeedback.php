<?php
$formData = [];
$formData = [
    'name' => htmlspecialchars($_POST['name']),
    'email' => htmlspecialchars($_POST['mail']),
    'tel' => htmlspecialchars($_POST['tel']),
    'subject' => htmlspecialchars($_POST['subject']),
    'msg' => htmlspecialchars($_POST['msg'])
];
?>

<div class="form-feedback">
    <p>Thank you <strong><?= $formData['name']; ?></strong> for reaching to me about <strong><?= $formData['subject']; ?></strong> !</p>
    <p>I will come back to you as soon as possible by mail at the address <strong><?= $formData['email']; ?></strong>, or I will give you a call at <strong><?= $formData['tel']; ?></strong>.</p>
    <p>Greetings, and see you soon !</p>
</div>

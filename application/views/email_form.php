<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Send Email</title>
</head>
<body>

<h2>Send Email</h2>

<?php
$email_data = $this->session->flashdata('email_sent');

if ($email_data) {
    echo "<p>Status: " . $email_data['status'] . "</p>";
    echo "<p>From: " . $email_data['from'] . "</p>";
    echo "<p>To: " . $email_data['to'] . "</p>";
    echo "<p>Message: " . $email_data['message'] . "</p>";
}
?>

<form method="post" action="<?php echo base_url('email/send'); ?>">
    <label for="to">Recipient Email:</label><br>
    <input type="email" name="to" id="to" required><br><br>
    
    <label for="message">Message:</label><br>
    <textarea name="message" id="message" required></textarea><br><br>
    
    <button type="submit">Send Email</button>
</form>

</body>
</html>

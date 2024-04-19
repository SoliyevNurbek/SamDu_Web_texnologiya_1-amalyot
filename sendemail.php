<?php
if(isset($_POST['submit'])) {
    $to = 'shiorxon9911@gmail.com'; // Enter the recipient's email address here
    $subject = 'Message from My Website'; // Enter the subject of the email here
    $message = $_POST['message'];
    $headers = 'soliyevnurbek4243@gmail.com'; // Enter your email address here
    
    // Send email
    if(mail($to, $subject, $message, $headers)) {
        echo 'Message has been sent successfully!';
    } else {
        echo 'Failed to send the message.';
    }
}
?>

<!-- HTML form to input the message -->
<html>
<head>
<title>Send Email</title>
</head>
<body>
    <h1>Send Email</h1>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <textarea name="message" rows="5" cols="30" placeholder="Enter your message"></textarea><br>
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>

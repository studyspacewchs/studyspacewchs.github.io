<?php

    // Get the form fields, removes html tags and whitespace.
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subjectrequest = strip_tags(trim($_POST["subject"]));
    $subjectrequest = str_replace(array("\r","\n"),array(" "," "),$name);
    $unit = strip_tags(trim($_POST["unit"]));
    $unit = str_replace(array("\r","\n"),array(" "," "),$name);
    $comments = trim($_POST["comments"]);

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.studyspacewchs.com/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "studyspacewchs@gmail.com";

    // Set the email subject.
    $subject = "New request for $subjectrequest";

    // Build the email content.
    $email_content = "Subject: $subject\n";
    $email_content = "Unit: $unit\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Comments:\n$comments\n";

    // Build the email headers.
    $email_headers = "From: <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.studyspacewchs.com/index.php?success=1#form");

?>
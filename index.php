
<?php

  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "mrjustinfry@gmail.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
      mail($recipient, $subject, $formcontent, $mailheader);
      header("Location: index.html?mailsend");
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Matt's Coaching</title>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="logo.gif" />
  <link rel="stylesheet" href="index.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="author" content="Justin Fry">
</head>
<body>
  <nav>
    <p>navigation - About / Plans < Triathalon + Running / Social / Contact</p>
  </nav>
  <main>
    <section class="heroSection">
      <p>Hero</p>
    </section>
    <section class="aboutMeSection">
      <p>About Me</p>
    </section>
    <section class="planSection">
      <div class="runningPlansBox">
        <p>Running Plans</p>
      </div>
      <div class="triathalonPlansBox">
        <p>Triathalon Plans</p>
      </div>
    </section>
    <section class="testimonialSection">
      <p>Testimonials and Maybe IG</p>
    </section>
    <section class="contactSection">
      <p>Contact form</p>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>Name</label> <input type="text" name="name"><br />
        <label>Email</label> <input type="text" name="email"><br />
        <label>Message</label><textarea name="message" rows="6" cols="25"></textarea><br />
        <input type="submit" value="Send" name="submit"><input type="reset" value="Clear">
      </form>
    </section>
  </main>
  <footer>
    <p>&copy; Matt's Coaching (logo?/email link?) <span id="year"></span></p>
    <p>Justin's plug (portfolio link)</p>
  </footer>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="./index.js"></script>
</body>
</html>

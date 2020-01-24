<?php include "includes/header.php"; ?>

<?php
if(isset($_POST['btnSubmit'])) {
  $name     = strip_tags(trim($_POST["txtName"]));
  $email    = strip_tags(trim($_POST["txtEmail"]));
  $subj     = strip_tags(trim($_POST["txtSubject"]));
  $mesg     = strip_tags(trim($_POST["txtMessage"]));

  $errors = array();

  if(empty($name)) { $errors[] = "Please specify your name."; }

  if(empty($email)) {
    $errors[] = "Please specify your email address.";
  }
  else {
    if(!preg_match("/([a-z0-9-\_]+)\@([a-z0-9-]+)\.([a-z0-9\.]+)/i", $email)) {
      $errors[] = "Please enter a valid email address.";
    }
  }

  if(empty($subj)) { $errors[] = "Please select an email subject."; }
  if(empty($mesg)) { $errors[] = "Please enter your email message."; }

  if(count($errors) == 0) {

    // Email Headers
    $headers = "From: {$name}<{$email}>\r\n";
    $headers .= "Return-Path: {$name}<{$email}>\r\n";
    $headers .= "Reply-To: {$name}<{$email}>\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $mail_to = "hello@method1947.com";
    $subject  = $subj;

    $content  = "<html>
            <body>
            <div style=\"color: #000;font-family:Arial; font-size: 12px;\">\n

              The following message has been sent via Andrew Gormley's Website contact form:<br>\n\n";

    $content  .=  "<br>From: <b>" . $name . "</b>";
    $content  .=  "<br>Email: <b>" . $email . "</b><br>\n";
    $content  .= "<br>Subject: <b>". $subject . "</b>\n";
    $content  .=  "<br><br>" . nl2br($mesg);
    $content  .=  "</div></body></html>";

    mail($mail_to, $subject, $content, $headers);
    header("location:index.php?act=ok");
  }
  else {
    $name = stripslashes($name);
    $email = stripslashes($email);
    $subj = stripslashes($subj);
    $mesg = stripslashes($mesg);
  }
}
else {
  $name = "";
  $email = "";
  $subj = "";
  $mesg = "";
}

$required = "<span style=\"color:red;font-weight: bold\">*</span>";
?>

    <main>

      <div class="grid-x grid-margin-x grid-margin-y main-container">
        <div class="small-12 cell">
          <h1>Contact</h1>
        </div>

        <div class="grid-y small-12 large-9 cell">

          <div class="grid-x cell shrink module module-padded border grid-padding-x grid-padding-y">

            <div class="small-12 cell">
              <h2>Contact me</h2>
              <p>
                If you would like to discuss a potential full time position or happen to have a specific project in mind you would like my help with, please do not hesitate to get in contact with me by filling out the form below. Thanks.
              </p>
            </div>

            <div class="contact-form small-12 cell">

              <?php
              $act = isset($_GET['act']) ? $_GET['act'] : "";
              if($act == "ok") {
              ?>
                  <div class="green">
                      <div class="success">
                        <p>Message sent</p>
                      </div>
                      <p>Your message was sent successfully. I'll be in touch soon.</p>
                  </div>
              <?php
              }
              else {
                      if(count($errors) > 0) {
                          echo "
                          <div class=\"red\">
                              The following problems were encountered:
                              <ul>\n";

                          foreach($errors as $error) {
                              echo "
                                  <li>" . $error . "</li>\n";
                          }

                          echo "
                              </ul>
                          </div>\n";
                      }
                      ?>

                  <form action="<?=$_SERVER['PHP_SELF']; ?>" method="post">
                    <h2>Name</h2>
                    <input id="txtName" placeholder="John Doe" name="txtName" type="text" maxlength="50" style="width: 100%;" value="<?=$name?>" required>
                    <h2>Email</h2>
                    <input id="txtEmail" placeholder="example@email.com" name="txtEmail" type="email" maxlength="50" style="width: 100%;" value="<?=$email?>" required>
                    <h2>Subject</h2>
                    <input type="text" id="txtSubject" placeholder="Hey there!" name="txtSubject" maxlength="50" style="width: 100%;" value="<?=$subj?>" required>
                    <h2>Your Message</h2>
                    <textarea id="txtMessage" name="txtMessage" placeholder="Did you know Hedgehogs can run at a top speed of 4mph." style="width: 100%; height: 150px;"><?=$mesg?></textarea>

                    <input type="submit" id="btnSubmit" name="btnSubmit" value="Send Message" class="button">
                  </form>
              <?php
              }
              ?>

            </div>

          </div>

        </div>

        <div class="grid-y cell small-12 large-3">
          <div class="grid-x grid-margin-x grid-margin-y shrink cell">

            <div class="small-12 cell">
              <div class="module module-padded border">

                <div class="process">
                  <h2>Social Links</h2>
                  <ul>
                    <li>
                      <a href="https://www.linkedin.com/in/andrew-gormley-59487699/" target="_blank">
                        <div class="process-icon process-icon-linkedin">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </div>
                        <p>LinkedIn</p>
                      </a>
                    </li>
                    <li>
                      <a href="https://dribbble.com/AndrewGormley" target="_blank">
                        <div class="process-icon process-icon-dribbble">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-circle"><circle cx="12" cy="12" r="10"></circle></svg>
                        </div>
                        <p>Dribbble</p>
                      </a>
                    </li>
                    <li>
                      <a href="https://github.com/andrewgormley" target="_blank">
                        <div class="process-icon process-icon-github">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                        </div>
                        <p>Github</p>
                      </a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/gorms_12/" target="_blank">
                        <div class="process-icon process-icon-instagram">
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.5" y2="6.5"></line></svg>
                        </div>
                        <p>Instagram</p>
                      </a>
                    </li>

                  </ul>
                </div>

              </div>
            </div>

          </div>
        </div>


      </div>
    </main>

<?php include "includes/footer.php"; ?>

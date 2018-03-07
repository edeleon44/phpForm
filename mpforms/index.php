<?php include_once("header.php"); ?>
  <section id="form">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="form-container">
            <h3 class="heading">Step 1: Contact Information</h3>
            <form action="page2.php" method="post">
              <?php
              text('name','name','Your Name:','Enter your name here');
              text('email','email','Your Email Address','Enter your Email here');
              submit('Go to Step 2 &raquo;');
              ?>
          </div>
        </div>
      </div>
    </div>
<?php include_once('footer.php'); ?>

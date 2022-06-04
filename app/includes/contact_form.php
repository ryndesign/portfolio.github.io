
<!-- Contact Form -->
<form method="post" action="inc/mail_process.php">
<?php if((isset($_SESSION['alert'])) && ($_SESSION['alert'] != "")){ echo '<div class="alert alert-danger" role="alert">'.$_SESSION['alert'].'</div>'; $_SESSION['alert'] = ""; } ?>

  <div class="form-row">
    <div class="col-sm-6 pb-3">
      <label for="name">Name</label>
        <input type="text" class="form-control" placeholder="*Name" name="name" id="name" maxlength="45" value="<?php if(isset($_SESSION['name'])) echo $_SESSION['name'] ?>" required>
    </div>
    <div class="col-sm-6 pb-3">
      <label for="company">Company</label>
        <input type="text" class="form-control" placeholder="Company" name="company" id="company" maxlength="45" value="<?php if(isset($_SESSION['company'])) echo $_SESSION['company'] ?>">
    </div>
    <div class="w-100"></div>
    <div class="col-sm-6 pb-3">
      <label for="email">Email</label>
        <input type="email" class="form-control" placeholder="*Email Address" name="email" id="email" maxlength="45" value="<?php if(isset($_SESSION['email'])) echo $_SESSION['email'] ?>"required>
    </div>
    <div class="col-sm-6 pb-3">
      <label for="phone">Phone</label>
        <input type="tel" class="form-control" placeholder="Phone Number" maxlength="40" name="phone" id="phone" value="<?php if(isset($_SESSION['phone'])) echo $_SESSION['phone'] ?>">
    </div>
    <div class="w-100"></div>
    <div class="col-sm-12 pb-3">
      <label for="comment">Question/Comment</label>
        <textarea class="form-control" rows="4" name="comment" id="comment" value="<?php if(isset($_SESSION['comment'])) echo $_SESSION['comment'] ?>" required></textarea>
    </div>
    <div class="w-100"></div>
    <div class="clearfix"></div>
    <div class="reCaptcha"><div class="g-recaptcha" data-sitekey="SITEKEY_GOES_HERE"></div></div>
    <div class="col">
      <button type="submit" class="button-main">Submit</button>
    </div>
  </div>
</form>



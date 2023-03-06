<?php
overall_header("Delete Account");
?>

    <div class="bdrd-top"></div>
<main class="main mt-50">
<section class="section-box mt-30">
  <div class="content" style="min-height: 50.5px;">
    <div class="container">
    <div class="row">
    <div class="col-md-8 col-sm-8 offset-md-2">
    
    <div class="delete-account-bg empty-content text-center">
    <img src="<?php _esc(TEMPLATE_URL);?>/assets/imgs/acctdeletion.png" style="max-width:60%;" alt="logo" id="delete-logo">
    <h2 class="delete-account-title text-center">We’re sorry to see you go</h2>
    <p class="delete-account-subtxt text-center mt-10">If you’d like to unsubscribe from our email notifications, you can <a class="color-brand-2" href="<?php url("EDITPROFILE") ?>">disable them here</a> or if you just want to change your username, you can 
        <a class="color-brand-2" href="<?php url("EDITPROFILE") ?>"> that here.</a></p>
<p class="delete-account-subtxt">Be advised, account deletion is final. There will be no way to restore your account.</p>
    <div class="btn-item">
      <div class="pt-20"><span class="btn delete-btn"><a href="<?php url("MYACCOUNT") ?>" class="text-white">Nevermind</a></span>
        <span class="btn delete-btn-light"><a href="delete_account?delete-account=true">Delete my account</a></span></div>
    </div>
    <br />
    <br />
  </div>
    
    </div>
    </div>
    </div>
    </div>
      </section>
    </main>
<?php
overall_footer();
?>
<?php
    $msg="";
    if($err=="1")
    {
        $msg="Erreur d'authentification";
    }
?>

<!-- contact section start -->
<div class="contact_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="email_box">
            <div class="text-center"><h1>Login backoffice</h1></div>            
            <div class="text-center"><p style="color:red"><?php echo $msg; ?></p></div>            
                    <div class="input_main">
                       <div class="container">
                          <form action="<?php echo base_url("Controller/login"); ?>" method="post">
                            <div class="form-group">
                              <input type="text" value="admin1" class="email-bt" placeholder="Email" name="email">
                            </div>
                            <div class="form-group">
                              <input type="password" value="admin1" class="email-bt" placeholder="Mot de passe" name="mdp">
                            </div>
                            <div class="text-center">
                              <button type="submit" class="btn btn-primary">Se connecter</button>
                            </div>
                          </form>   
                       </div> 
                    </div>
                 </div>
        </div>
        <div class="col-md-6">
          <div class="image_6"><img src="<?php echo base_url("assets/images/img-6.png") ?>"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact section end -->
<div>
<section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Login</h2>
                        <p>Welcome to the official Takalo-takalo.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Login Section Begin -->
    <section class="login spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="login__form">
                        <h3>Login</h3>
                        <form action="<?php echo site_url('Login/verification_login') ?>" method="post">
                        <?php

	                        if(isset($email) || isset($admin)){
	                    
                        ?>
                            <div class="input__item">
                                <input type="email" name="email" placeholder="Email address"  value="<?php echo  $email ?>">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="pw" placeholder="Password" value="<?php echo $pass ?>">
                                <span class="icon_lock"></span>
                            </div>
                        <?php

	                        }else{

                        ?>
                        <div class="input__item">
                                <input type="email" name="email" placeholder="Email address">
                                <span class="icon_mail"></span>
                            </div>
                            <div class="input__item">
                                <input type="password" name="pw" placeholder="Password">
                                <span class="icon_lock"></span>
                            </div>
                        <?php

                            }

                        ?>
                            <button type="submit" class="site-btn">Login Now</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login__register">
                        <a href="<?php echo site_url('Login/button') ?>" class="primary-btn" style="margin-top: 20px;">S' inscrire</a>
		                <a href="<?php echo site_url('Login/admin') ?>" class="primary-btn" style="margin-top: 20px;">Se connecter en tant qu' admin</a>
		                <a href="<?php echo site_url('Login/index') ?>" class="primary-btn" style="margin-top: 20px;">Retour</a>
                    </div>
                </div>
            </div>
            <div class="login__social">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With
                                Facebook</a></li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
    <!-- Login Section End -->

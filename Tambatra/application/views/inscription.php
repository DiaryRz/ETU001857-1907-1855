<div>
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="normal__breadcrumb__text">
                            <h2>Sign Up</h2>
                            <p>Welcome to the official Takalo_takalo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Normal Breadcrumb End -->

        <!-- Signup Section Begin -->
        <section class="signup spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="login__form">
                            <h3>Sign Up</h3>
                            <form action="<?php echo site_url('Login/verification_inscription')?>" method="post">
                            <?php if(!isset($email)){ ?>
                                <div class="input__item">
                                    <input type="email" name="email" placeholder="Email address">
                                    <span class="icon_mail"></span>
                                </div>
                                <div class="input__item">
                                    <input type="text" name="nom"  placeholder="Your Name">
                                    <span class="icon_profile"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" name="pw" placeholder="Password">
                                    <span class="icon_lock"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" name="pass_conf" placeholder="Password confirmation">
                                    <span class="icon_lock"></span>
                                </div>
                                <div class="input__item">
                                    <select name="genre" style="width: 100px;" >
                                        <option value="#">sexe</option>
                                        <option value="1">Homme</option>
                                        <option value="2">Femme</option>
                                    </select>
                                    <br>
                                </div>
                                <?php }else{ ?>
                                    <div class="input__item">
                                    <input type="email" name="email" placeholder="Email address" value="<?php echo $email ?>">
                                    <span class="icon_mail"></span>
                                </div>
                                <div class="input__item">
                                    <input type="text" name="nom"  placeholder="Your Name" value="<?php echo $nom ?>">
                                    <span class="icon_profile"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" name="pw" placeholder="Password" value="<?php echo $password ?>">
                                    <span class="icon_lock"></span>
                                </div>
                                <div class="input__item">
                                    <input type="password" name="pass_conf" placeholder="Password confirmation" value="<?php echo $passconf ?>">
                                    <span class="icon_lock"></span>
                                </div>
                                <div class="input__item">
                                    <select name="genre" style="width: 100px;" >
                                        <option value="#">sexe</option>
                                        <option value="1">Homme</option>
                                        <option value="2">Femme</option>
                                    </select>
                                    <br>
                                </div>
                                <br>
                                    <?php
                                }
                                    ?>
                                <button type="submit" class="site-btn">Login Now</button>
                            </form>
                            <h5>Already have an account? <a href="<?php site_url('Login/'); ?>">Log In!</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="login__social__links">
                            <h3>Login With:</h3>
                            <ul>
                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i> Sign in With Facebook</a>
                                </li>
                                <li><a href="#" class="google"><i class="fa fa-google"></i> Sign in With Google</a></li>
                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i> Sign in With Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<?php 
/**
** Core Simple Quiz Template
**/

    // not run if accessed directly
    if( ! defined("ABSPATH" ) )
        die("Not Allewed");
?>
    <div class="container">
        <div class="wpmq-intro-box-header">
            <p class="wpmq-intro-box"><?php _e('In the name of Allah, most gracious and merciful', 'wp_mega_quiz') ?></p>
            <div class="row" style="margin-top: 37px;">
                <div class="col-md-4">
                    <div class="wpmq-member-detail">
                        <span> <?php _e('First Name:','wp_mega_quiz') ?></span>
                            <p><?php _e('Ansar Bhatti','wp_mega_quiz') ?></p><br>
                        <span><?php _e('Last Name:','wp_mega_quiz') ?></span>
                        <p><?php _e('Ansar Bhatti','wp_mega_quiz') ?></p><br>
                        <span><?php _e('Email:','wp_mega_quiz') ?></span>
                        <p><?php _e('ahmadansar41@gmail.com','wp_mega_quiz') ?></p>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="wpmq-member-detail">
                        <span><?php _e('First Name:','wp_mega_quiz') ?></span>
                        <p><?php _e('Ansar Bhatti','wp_mega_quiz') ?></p>
                    </div>
                 </div>
                 <div class="col-md-4">
                    <div class="wpmq-member-detail">
                        <span><?php _e('Time','wp_mega_quiz') ?></span>
                        <p><?php _e('2 hour','wp_mega_quiz') ?></p><br>
                        <span><?php _e('Requiremnt:','wp_mega_quiz') ?></span>
                        <p><?php _e('tick','wp_mega_quiz') ?></p>
                    </div>
                 </div>
            </div>
            <hr>
        </div>
        <div class="wpmq-para-box">
            <h3><?php _e('Scince Paragraph:','wp_mega_quiz') ?></h3>      
            <p><?php _e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum..','wp_mega_quiz') ?></p>
        <div class="row wpmq-multi-option">
            <div class="row">
                <div class="col-md-6">
                    <div class="mpmq-check-box">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 style="text-align: justify;"><?php _e('1 : which colour has you like most which colour has you like most which colour has you like most?','wp_mega_quiz') ?></h6>
                                <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                    <label>
                                         <?php _e('i think you like black','wp_mega_quiz') ?>
                                    </label>
                                </div>
                                <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                        <label>
                                            <?php _e('i think you like black','wp_mega_quiz') ?>
                                        </label>
                                </div>
                               <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                        <label>
                                            <?php _e('i think you like black','wp_mega_quiz') ?>
                                        </label>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo WPMQ_URL.'/images/download.jpg' ?>" class="responsive" style="width: 100%; height: 100px;">
                            </div>
                        </div>
                    </div>      
                </div>
                <div class="col-md-6">
                    <div class="mpmq-check-box">
                        <div class="row">
                            <div class="col-md-8">
                                <h6 style="text-align: justify;"><?php _e('1 : which colour has you like most which colour has you like most which colour has you like most?','wp_mega_quiz') ?></h6>
                                <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                    <label>
                                         <?php _e('i think you like black','wp_mega_quiz') ?>
                                    </label>
                                </div>
                                <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                        <label>
                                            <?php _e('i think you like black','wp_mega_quiz') ?>
                                        </label>
                                </div>
                               <div class="mpmq-check-ques">
                                    <input type="checkbox" name="" style=" zoom: 2.2;" />
                                        <label>
                                            <?php _e('i think you like black','wp_mega_quiz') ?>
                                        </label>
                                </div> 
                            </div>
                            <div class="col-md-4">
                                <img src="<?php echo WPMQ_URL.'/images/download.jpg' ?>" class="responsive" style="width: 100%; height: 100px;">
                            </div>
                        </div>
                    </div>      
                </div>
            </div> 
        </div>  
        </div>
    </div>
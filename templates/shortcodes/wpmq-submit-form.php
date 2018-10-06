<?php 
/**
** Core Submit Template
**/

    // not run if accessed directly
    if( ! defined("ABSPATH" ) )
        die("Not Allewed");
?>
<div class="container wmq-main-header">
    <div class="form">
        <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/>
        </div>
        <div class="panel-body">
            <form class="login-form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label><?php _e('Your Name:','wp_mega_quiz') ?></label>
                            <input id="name" type="text" name="first_name" class="form-control input-lg" >
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label><?php _e('Your Email:','wp_mega_quiz') ?></label>
                            <input id="name" type="text" name="first_name" class="form-control input-lg" >
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label><?php _e('Phone NO:','wp_mega_quiz') ?></label>
                            <input id="name" type="text" name="first_name" class="form-control input-lg" >
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label><?php _e('Address:','wp_mega_quiz') ?></label>
                            <input id="name" type="text" name="first_name" class="form-control input-lg" >
                        </div>
                        
                    </div>
                </div>
                <input class="form-btn btn-info btn-block" style="" value="Submit"> 
            </form>
        </div>
    </div>
</div>
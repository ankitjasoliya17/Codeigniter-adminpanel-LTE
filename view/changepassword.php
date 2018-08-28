



<div class="wrapper">
    <div class="row">

        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading col-sm-12">
                    <h1> Change Password</h1>
    <?php if(isset($error)){
    echo $error;
    } ?>
                </header>
                <div class="container">
                <div class="panel-body">
                
                    <div class="form">
                        <?php
                        $attributes = array('name' => 'frmadminprofile', 'id' => 'frmadminprofile', 'class' => 'adminprofileform form-horizontal adminex-form');

                        echo form_open('',$attributes);
                        ?>
                        <div class="form-group col-sm-12">
                            <label for="admin_firstname" class="control-label col-lg-2">Old Password </label>
                            <div class="col-lg-4">
                                <?php
                                $adminoldpassword = array(
                                    'name'        => 'old_password',
                                    'id'          => 'old_password',
                                    'class'     => 'form-control',
                                );
                                echo form_password($adminoldpassword);
                                ?>
                            </div>
                        </div>  
                        <div class="form-group col-sm-12">
                            <label for="admin_firstname" class="control-label col-lg-2">New Password</label>
                            <div class="col-lg-4">
                                <?php
                                $adminoldpassword = array(
                                    'name'        => 'new_password',
                                    'id'          => 'new_password',
                                    'class'     => 'form-control'
                                );
                                echo form_password($adminoldpassword);
                                ?>
                            </div>
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="admin_firstname" class="control-label col-lg-2">Re-Type Password</label>
                            <div class="col-lg-4">
                                <?php
                                $adminoldpassword = array(
                                    'name'        => 'new_password_confirm',
                                    'id'          => 'new_password_confirm',
                                    'class'     => 'form-control'
                                );
                                echo form_password($adminoldpassword);
                                ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-1 col-xs-offset-2">
                                <?php
                                $changepassword= array(
                                    'name'        => 'changepass',
                                    'id'          => 'changepass',
                                    'class'     => 'btn btn-success',
                                    'value'     => 'UPDATE Password'
                                );
                                echo form_submit($changepassword);
                                ?>
                            </div>

                        </div>
                       
                        <?php echo form_close(); ?>

                    </div>
                </div>
                </div>
            </section>
        </div>
    </div>
</div>



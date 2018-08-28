
    <div class="row">
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading col-sm-12">
                    <h1> Edit Admin Profile</h1>

                </header>
                <div class="container">
                    <div class="panel-body">
                        <div class="form">
                            <?php
                            $attributes = array('name' => 'frmadminprofile', 'id' => 'frmadminprofile', 'class' => 'adminprofileform form-horizontal adminex-form');

                            echo form_open_multipart('',$attributes);
                            ?>
                            <div class="form-group col-sm-12">
                                <label for="admin_firstname" class="control-label col-lg-2">Admin Firstname</label>
                                <div class="col-lg-4">
                                    <?php
                                    $adminFirstname = array(
                                        'name'        => 'admin_firstname',
                                        'id'          => 'admin_firstname',
                                        'class'		=> 'form-control',
                                        'value'  => $editProfile[0]['admin_firstname'],
                                        $_SESSION = $editProfile[0]['admin_firstname']
                                    );
                                    echo form_input($adminFirstname);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="admin_lastname" class="control-label col-lg-2">Admin Lastname</label>
                                <div class="col-lg-4">
                                    <?php
                                    $adminLastname = array(
                                        'name'        => 'admin_lastname',
                                        'id'          => 'admin_lastname',
                                        'class'		=> 'required form-control',
                                        'value' =>$editProfile[0]['admin_lastname']

                                    );
                                    echo form_input($adminLastname);
                                    ?>

                                </div>
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="admin_email" class="control-label col-lg-2">Admin Email</label>
                                <div class="col-lg-4">
                                    <?php
                                    $adminEmail = array(
                                        'name'      => 'admin_email',
                                        'id'        => 'admin_email',
                                        'class'		=> 'required form-control',
                                        'value'     =>  $editProfile[0]['admin_email']

                                    );
                                    echo form_input($adminEmail);
                                    ?>

                                </div>
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="admin_password" class="control-label col-lg-2">Admin Password</label>
                                <div class="col-lg-4">
                                    <?php
                                    $adminPassword = array(
                                        'name'        => 'admin_password',
                                        'id'          => 'admin_password',
                                        'class'		=> 'required form-control',
                                        'readonly' =>'true',
                                        'value'    => $editProfile[0]['admin_password'],
                                        $_SESSION = $editProfile[0]['admin_password']

                                    );
                                    echo form_password($adminPassword);
                                    ?>

                                </div>
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="admin_mobile" class="control-label col-lg-2">Admin Mobile</label>
                                <div class="col-lg-4">
                                    <?php
                                    $adminmobile = array(
                                        'name'        => 'admin_mobile',
                                        'id'          => 'admin_mobile',
                                        'class'		=> 'required form-control',
                                        'value'   => $editProfile[0]['admin_phone'],
                                        $_SESSION = $editProfile[0]['admin_password']

                                    );
                                    echo form_input($adminmobile);
                                    ?>

                                </div>
                            </div>
                            <div class="form-group col-sm-12 ">
                                <label for="testimage" class="control-label col-lg-2">Admin Image</label>
                                <div class="col-lg-4">
                                    <?php
                                    $Admin_image = array(
                                        'name'        => 'admin_image',
                                        'id'          => 'admin_image',
                                        'class'		=> 'form-control',
                                        'value'     => $editProfile[0]['admin_avatar']
                                    );
                                    echo form_upload($Admin_image);
                                    ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-1 col-xs-offset-2">
                                    <?php
                                    $datasubmit = array(
                                        'name'        => 'adminsubmit',
                                        'id'          => 'adminsubmit',
                                        'class'		=> 'btn btn-success',
                                        'value'		=> 'UPDATE Detail'
                                    );
                                    echo form_submit($datasubmit);
                                    ?>
                                </div>

                            </div>
                            <?php echo form_hidden('adminImage', $editProfile[0]['admin_avatar']); ?>
                            <?php echo form_close(); ?>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>


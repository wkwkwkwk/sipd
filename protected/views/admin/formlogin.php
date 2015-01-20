<?php 

                                $form=$this->beginWidget('CActiveForm',array('id'=>'frmlogin',
                                    'enableClientValidation'=>true,
                                    'clientOptions'=>array('validateOnSubmit'=>true,
                                        ),
                                    ));

                            ?>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <input class="form-control" style="width:200px" type="text" placeholder="Username" name="username" />
                                        <?php echo $form -> error($model,'username'); ?>
                                    </div>
                                </div>
                                <div class="row control-group">
                                    <div class="form-group col-xs-12 floating-label-form-group controls">
                                        <input class="form-control" type="password" placeholder="Password" name="password" />
                                        <?php echo $form -> error($model,'password'); ?>
                                    </div>
                                </div>
                               <!--  <div class="checkbox">
                                   <label>
                                       <input type="checkbox" name="remember-me" value="1" />Remember Me
                                   </label>
                               </div> -->
                                <input class="btn btn-info btn-block" type="submit" name="btnlogin" value="Log In" />
                                <?php $this -> endWidget(); ?>
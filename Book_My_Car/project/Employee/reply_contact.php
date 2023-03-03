<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">CONTACT FORM</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add CONTACT
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div  class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">ENTER CONTACT NAME</label>
                                            <input class="form-control" name="Name" type="text"  pattern="[A-Za-z]+" required="required" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">ENTER CONTACT EMAIL</label>
                                            <input class="form-control" name="Email" type="text"  pattern="[A-Za-z]+" required="required" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                       
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">ENTER CONTACT COMMENT</label>
                                            <input class="form-control" name="Comment" type="text"  required="required" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-info"> SUBMIT </button>

                                    </form>
                            </div>
                        </div>
                </div>


        </div>
    </div>
    </div>
   <?php
  include_once('footer.php');
  ?>
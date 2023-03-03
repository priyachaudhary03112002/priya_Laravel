<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">LOCATION FORM</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           ADD LOCATION
                        </div>
                        <div class="panel-body">
                            <form role="form">
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">LOCATION NAME</label>
                                            <input class="form-control" name="Location_Name" type="text"  pattern="[A-Za-z]+" required="required" />
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
<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">BLOG FORM</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add BLOG
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data">
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">ENTER BLOG TITLE</label>
                                            <input class="form-control" name='Title' type="text" placeholder="Enter Alphabets Only" pattern="[A-Za-z]+" required="required"  />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group  has-success has-feedback">
                                            <label  class="control-label" for="inputSuccess5">ENTER BLOG IMAGE</label>
                                            <input class="form-control" name='Image' type="file"  required="required" accept="image/*" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>

                                       
                                        <div class="form-group  has-success has-feedback">
                                            <label  class="control-label" for="inputSuccess5">ENTER BLOG DESCRIPTION</label>
                                            <input class="form-control" name='Description' type="text" placeholder="Enter Alphabets Only"  pattern="[A-Za-z]+" required="required" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        
                                        <button type="submit" name='submit'  class="btn btn-success"> SUBMIT </button>

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
<?php
include_once('header.php');
?>



    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">CATEGORIES FORM</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Categories
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data" >
                                        <div class="form-group  has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">CATEGORIES NAME</label>
                                            <input class="form-control" placeholder="Enter Only Alphabets" name='Category_Name' type="text"  pattern="[A-Za-z]+" required="required" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                 <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">CATEGORIES IMAGE </label>
                                            <input class="form-control"  name='Category_Image' type="file" required="required"  accept="image/*" />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                     <p class="help-block"></p>
                                        </div>
                                           
                           
                                        <button type="submit" name='submit' id="submit" class="btn btn-info"> SUBMIT </button>

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
  <!-- <script>
                    function check(file)
                        {
                        var filename=file.value;
                        var ext=filename.substring(filename.lastIndexOf('.')+1);
                            if(ext=="jpg" || ext=="png" || ext=="jpeg" || ext=="gif" || ext=="JPG" || 
                            ext=="PNG" || ext=="JPEG" || ext=="GIF")
                            {
                            document.getElementById("msg1").innerHTML="";
                            document.getElementById("submit").disabled=false;
                            }
                            else
                            {
                            document.getElementById("msg1").innerHTML="! Please upload only JPG , GIF , JPEG File";
                            document.getElementById("msg1").style='red'";
                            document.getElementById("submit").disabled=true;
                            }
                        } 
                </script>     -->

              <!-- id="photo" onChange="return check(this)"-->
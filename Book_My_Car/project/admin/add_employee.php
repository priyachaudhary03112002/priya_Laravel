<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line"> Add Employee</h4>
                
                            </div>

        </div>
             <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-info">
                        <div class="panel-heading">
                           Add Employee
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" enctype="multipart/form-data">
                            <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">ENTER Employee Email</label>
                                            <input class="form-control" name='Email' type="email" placeholder="Enter Alphabets Only"    />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">Name</label>
                                            <input class="form-control" name='Emp_Name' type="text" placeholder="Enter Alphabets Only" pattern="[A-Za-z]+" required="required"  />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group has-success has-feedback">
                                            <label class="control-label" for="inputSuccess5">User Name</label>
                                            <input class="form-control" name='Emp_Username' type="text" placeholder="Enter Alphabets Only" pattern="[A-Za-z]+" required="required"  />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" name='Password' type="password" placeholder="Enter Alphabets Only"  required="required"  />
                                            <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                            <p class="help-block"></p>
                                        </div>
                                            <!-- <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
										<div class="form-group">
                                            <label>Select Example</label>
                                            <select class="form-control">
                                                <option>One Vale</option>
                                                <option>Two Vale</option>
                                                <option>Three Vale</option>
                                                <option>Four Vale</option>
                                            </select>
                                        </div>
										<div class="form-group">
                                            <label>Checkboxes</label>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example One
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example Two
                                                </label>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example Three
                                                </label>
                                            </div>
                                  <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="" />Checkbox Example Four
                                                </label>
                                            </div>
                                        </div>
                            <hr />
                            <div class="form-group">
                                            <label>Radio Button Examples</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Radio Example One
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio Example Two
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio Example Three
                                                </label>
                                            </div>
                                        </div> -->
                           
                                        <button type="submit" name="submit"class="btn btn-info"> Submit </button>

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
@extends('backend.layout.main')

@section('main_section')
      
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Form elements </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form Employee</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Employee Form</h4>
                    <form class="form-sample" action="{{url('edit_employee/'.$fetch->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                      <p class="card-description"> Personal info </p>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">First Name</label>
                            <div class="col-sm-9">
                              <input type="text" value="{{$fetch->name}}" name="name" class="form-control" placeholder="Name" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                              <input type="email" value="{{$fetch->email}}" name="email" class="form-control" placeholder="Email" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Gender</label>
                            <div class="col-sm-9">
                              <select name="gender" class="form-control">
                              <option value="">Select gender</option>
                              <option value="Male"<?=$fetch['gender'] == 'Male' ? ' selected="selected"' : '';?>>Male</option>
                              <option value="Female"<?=$fetch['gender'] == 'Female' ? ' selected="selected"' : '';?>>Female</option>
                              
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                            <div class="col-sm-9">
                              <input name="birthdate" value="{{$fetch->birthdate}}" class="form-control" placeholder="dd/mm/yyyy" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                      
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Languages:</label>
                            <div class="col-sm-3">
                              <div class="form-check">
                              <?php
                                $lag=$fetch->lag;
                                $lag_arr=explode(",",$lag);
                                ?>
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="lag[]"  value="English" 
                                  <?php
                        if(in_array("English",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>> English </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="lag[]"  value="Hindi" 
                                  <?php
                    if(in_array("Hindi",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>> Hindi </label>
                              </div>
                            </div>
                            <div class="col-sm-3">
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input type="checkbox" class="form-check-input" name="lag[]"  value="Gujarati" 
                                  <?php
                        if(in_array("Gujarati",$lag_arr))
                        {
                            echo "checked";
                        }
                        ?>> Gujarati </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                        <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Image:</label>
                        <div class="input-group col-sm-9">
                          <input class="form-control" type="file" name="img">
                          <img src="{{url('backend/assets/images/upload/'.$fetch->img)}}" width="50px" alt="">
                        </div>
                      </div>
                      </div>
                     
                      
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Address </label>
                            <div class="col-sm-9">
                              <input type="text" value="{{$fetch->address}}" name="address" class="form-control" placeholder="Address" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Mobile</label>
                            <div class="col-sm-9">
                              <input type="mobile" name="mobile" value="{{$fetch->mobile}}" class="form-control" placeholder="mobile" />
                            </div>
                          </div>
                        </div>
                      </div>
                    
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">City</label>
                            <div class="col-sm-9">
                              <input type="text" name="city" value="{{$fetch->city}}" class="form-control" placeholder="City" />
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Country</label>
                            <div class="col-sm-9">
                              <select name="country" class="form-control">
                              <option value="">Select Country</option>
                              <option value="India"<?=$fetch['country'] == 'India' ? ' selected="selected"' : '';?>>India</option>
                              <option value="Canada"<?=$fetch['country'] == 'Canada' ? ' selected="selected"' : '';?>>Canada</option>
                              <option value="America"<?=$fetch['country'] == 'America' ? ' selected="selected"' : '';?>>America</option>
                              
                                
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                      <button type="submit" name="submit"  class="btn btn-primary mb-2">Save</button>
                      <a href="{{url('/manage_employee')}}" type="button" class="btn btn-primary mb-2">Back</a>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endsection
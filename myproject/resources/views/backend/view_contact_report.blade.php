@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Contact Tables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard"><i class="la la-home font-20"></i></a>
        </li>
        
    </ol>
</div>
<div class="page-content fade-in-up">
  
   
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Manage contact</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>Contact Id</th>
                            <th> Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                        </tr>
                    </thead>
                   
                </table>
            </div>
        </div>
    </div>
    
   
</div>
@endsection
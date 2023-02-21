@extends('backend.layout.main')

@section('main_section')

<div class="content-wrapper">
<!-- START PAGE CONTENT-->
<div class="page-heading">
    <h1 class="page-title">Cart Tables</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="dashboard"><i class="la la-home font-20"></i></a>
        </li>
        
    </ol>
</div>
<div class="page-content fade-in-up">
  
   
    <div class="ibox">
        <div class="ibox-head">
            <div class="ibox-title">Manage Cart</div>
        </div>
        <div class="ibox-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            
                            <th>Cart Id</th> 
                            <th>Product Id</th>
                            <th>Cust Id</th>
                            <th>Qty</th>
                           </tr>
                    </thead>
                    <tbody>
                        @foreach($fetch as $d)
                        <tr>                            
                            <td>{{$d->id}}</td>
                            <td>{{$d->product_id}}</td>
                            <td>{{$d->cust_id}}</td>
                            <td>{{$d->qty}}</td>
                                                                                  
                          </tr>
                        @endforeach
 
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    
   
</div>
@endsection
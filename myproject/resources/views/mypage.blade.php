<h1> Hy how are you priya </h1>
{{"i am fine"}} <br>
{{"Ok, Good"}} <br>
@php
echo 10+10
@endphp <br>
<?php $name="Zalak"?>
@if($name=="Zalak")
<h1>Hi my name is {{$name}}</h1>
@elseif($name=="Mahesh")
<h1>Hi my name is {{$name}}</h1>
@else
<h1>Unknown</h1>	
@endif

@for($i=1;$i<=10;$i++)
<h4>{{$i}}</h4>	
@endfor

<?php $data=['sam','raj','mahesh'];?>
@foreach($data as $d)
<h4>{{$d}}</h4>
@endforeach



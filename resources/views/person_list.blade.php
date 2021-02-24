@extends('layouts.admin')

@section('content')


<div class="col-md-12">

@if (session()->has('success'))

<div class="alert alert-success">
    <i>Action completed successfully</i><br>
</div>
@endif


<table class="table table-striped">
<thead>
<tr>


<th><center>photo</center></th>
<th><center>Name</center></th>
<th><center>Age</center></th>
<th><center>Email</center></th>
<th><center>Phone</center></th>
<th><center>Address</center></th>


<th colspan="2"><center></center></th>
</tr>

@foreach($people as $person)
<tr>


<td><center><img src="public/images/{{$person->filename}}" height="67" width="60"></center></td>
<td><center>{{$person->name}}</center></td>
<td><center>{{$person->email}}</center></td>
<td><center>{{$person->phone}}</center></td>
<td><center>{{$person->address}}</center></td>


<td>{!! Form::open(['url' => URL::to('/person/'.$person->id),"method"=>"DELETE"]) !!} 
    <button type="submit" class="btn btn-xs btn-danger"><i class="fa  fa-trash-o"></i></button>
    {!! Form::close() !!}</td>
<td>
<td>
<a href="{{ URL::to('/person/'.$person->id.'/edit') }}" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-edit"></i></a>
</td>
</td>

<!-- Modal content -->

</tr>
@endforeach
</table>




















</div>



@endsection

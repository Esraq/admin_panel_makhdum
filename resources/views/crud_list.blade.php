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






<th><center>Name</center></th>
<th><center>Email</center></th>
<th><center>Phone</center></th>
<th><center>Address</center></th>


<th colspan="2"><center></center></th>
</tr>

@foreach($cruds as $crud)
<tr>



<td><center>{{$crud->name}}</center></td>
<td><center>{{$crud->email}}</center></td>
<td><center>{{$crud->phone}}</center></td>
<td><center>{{$crud->address}}</center></td>


<td>{!! Form::open(['url' => URL::to('/crud/'.$crud->id),"method"=>"DELETE"]) !!}
    <button type="submit" class="btn btn-xs btn-danger"><i class="fa  fa-trash-o"></i></button>
    {!! Form::close() !!}</td>
<td>
<td>
<a href="{{ URL::to('/crud/'.$crud->id.'/edit') }}" class="btn btn-sm btn-icon btn-primary"><i class="fa fa-edit"></i></a>
</td>
</td>

<!-- Modal content -->

</tr>
@endforeach
</table>




















</div>



@endsection

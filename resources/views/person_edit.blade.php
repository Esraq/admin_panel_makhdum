@extends('layouts.admin')

@section('content')


<div class="col-md-12">
                    

{!! Form::open(['url' => URL::to('/person/'.$person->id), 'method'=>"put",  'id'=>'myform', 'enctype'=>'multipart/form-data']) !!}
                                @csrf

                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" type="text" name="name" value="{{$person->name}}"  />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Age:</label>
                                            <input class="form-control" type="age" name="age" value="{{$person->age}}" />
                                            @if ($errors->first('age'))<div class="alert alert-danger">{!! $errors->first('age') !!}</div> @endif
                                        </div>
                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="email" value="{{$person->email}}" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Phone:</label>
                                            <input class="form-control" type="text" name="phone" value="{{$person->phone}}" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" type="text" name="address" value="{{$person->address}}"/>
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                        </div>
                                      
                                      
                                      
                                        <button type="submit" class="btn btn-info">Submit</button>
                                     

                                    </form>


@endsection

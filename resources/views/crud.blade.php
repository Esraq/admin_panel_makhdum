@extends('layouts.admin')

@section('content')


<div class="col-md-12">
                    

<form action="crud" method="post" role="form">

@csrf

                                        <div class="form-group">
                                            <label>Name:</label>
                                            <input class="form-control" type="text" name="name" value="{{old('name')}}"  />
                                            @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Email:</label>
                                            <input class="form-control" type="email" name="email" value="{{old('email')}}" />
                                            @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Phone:</label>
                                            <input class="form-control" type="text" name="phone" value="{{old('phone')}}" />
                                            @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                        </div>

                                        <div class="form-group">
                                            <label>Address:</label>
                                            <input class="form-control" type="text" name="address" value="{{old('address')}}"/>
                                            @if ($errors->first('address'))<div class="alert alert-danger">{!! $errors->first('address') !!}</div> @endif
                                        </div>
                                      
                                      
                                      
                                        <button type="submit" class="btn btn-info">Submit</button>
                                     

                                    </form>






@endsection

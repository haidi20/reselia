@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h3>Product <small><a href="{{route('products.create')}}" class="btn btn-sm btn-warning">New Product</a></small></h3>
        {!! Form::open(['url' => 'products.index','method'=>'get','class'=>'form-inline']) !!}
        <div class="form-group {{$errors->has('q') ? 'has-error':''}}">
          {!! Form::text('q',isset($q) ? $q : null,['class' => 'form-control','placeholder' => 'Type name/model..']) !!}
          {!! $errors->first('q', '<p class="help-block">:message</p>') !!}
        </div>

      </div>
    </div>
  </div>
@endsection

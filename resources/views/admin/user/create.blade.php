@extends('layouts.app')
@section('title', 'user')
@section('header')
	<h1>
        USER
    </h1>
    <ol class="breadcrumb">
    	<li>User</li>
        <li><a href="{{route('user.index')}}">Index User</a></li>
        <li class="active" >Create User</li>
    </ol>
@endsection
@section('content')
<div class="box box-info">
    <div class="box-header with-border">
       <h3 class="box-title">CREATE USER</h3>
    </div>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form class="form-horizontal" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
		<div class="box-body">
			<div class="form-group">
				<label for="name" class="col-sm-2 control-label">Name User</label>
				<div class="col-sm-10">
					<input type="text" name="name" class="form-control" id="name" placeholder="Name User" value="{{ old('name') }}">
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="form-group">
				<label for="email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10">
					<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
				</div>
			</div>
		</div>
		<div class="box-body">
			<div class="form-group">
				<label for="password" class="col-sm-2 control-label">Password</label>
				<div class="col-sm-10">
					<input type="password" name="password" class="form-control" id="password" placeholder="Password" value="{{ old('password') }}">
				</div>
			</div>
		</div>
        <div class="box-body">
            <div class="form-group">
                <label for="foto" class="col-sm-2 control-label">Foto</label>
                <div class="col-sm-10">
                    <input type="file" name="photo" id="foto" value="{{ old('foto') }}">
                </div>
            </div>
        </div>
        <div class="box-footer">
            <a href="{{route('user.index')}}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-info pull-right">Submit</button>
        </div>
    </form>
</div>
@endsection
@extends('layouts.master_recruteur')
@section('recruteur')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/logo/{{ $recruteur->logo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">logo</h2>
            <form enctype="multipart/form-data" action="{{ route('profil1') }}" method="POST">
                <label>Update logo Image</label>
                <input type="file" name="logo">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection
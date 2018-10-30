@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="text-center">
        <h3>Tambah Data</h3>
        <p>Silahkan tambah data category yang baru</p>
    </div>
    </div>    
</div>
<form action="{{ route('category.store') }}" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="name">Category</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
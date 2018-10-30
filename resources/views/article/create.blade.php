@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="text-center">
        <h3>Tambah Data</h3>
        <p>Silahkan tambah data member yang baru</p>
    </div>
    </div>    
</div>
<form action="{{ route('article.store') }}" method="post">
    {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="category_id">Category</label>
        <select name="category_id" class="form-control" id="sel1">
        @foreach( $categories as $category )
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="text">Test</label>
    <textarea class="form-control" rows="5" id="text" name="text"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
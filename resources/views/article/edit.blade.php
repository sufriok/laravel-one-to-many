@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col">
        <div class="text-center">
        <h3>Edit Data</h3>
        <p>Silahkan Edit data member yang sudah ada</p>
    </div>
    </div>    
</div>
<form action="{{ route('article.update', $article) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
  </div>
  <div class="form-group">
    <label for="category_id">Category</label>
        <select name="category_id" class="form-control" id="category_id" value="{{ $article->category_id }}">
        @foreach( $categories as $category )
            <option 
            value="{{ $category->id }}"
            @if ($category->id === $article->category_id)
            selected
            @endif>
            {{ $category->name }}</option>
        @endforeach
        </select>
  </div>
  <div class="form-group">
    <label for="text">Test</label>
    <textarea class="form-control" rows="5" id="text" name="text">{{ $article->text }}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-lg-8">
<h3>Data Member</h3>
<p>Dibawah ini merupakan data member yang terdaftar untuk saat ini</p>
</div>
<div class="col-lg-2">
<a href="{{ route('article.create') }}" class="btn btn-info" role="button">Tambah Data</a>
</div>
<div class="col-lg-2">
<a href="{{ route('category.create') }}" class="btn btn-info" role="button">Tambah Category</a>
</div>
</div>
<div class="table-responsive">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Category</th>
        <th>Text</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $articles as $article )
      <tr>
        <td>{{ $article->title }}</td>
        <td>{{ $article->category->name }}</td>
        <td>{{ $article->text }}</td>
        <td class="center">
            <form action="{{ route('article.destroy', $article) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="button" class="btn btn-info"><a href="{{ route('article.edit', $article) }}"><i class="fa fa-edit fa-fw"></i></a></button>
            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash-alt fa-fw"></i></button>
            </form>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

<br>
<br>

<div class="table-responsive">
<table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Category</th>
        <th>Title</th>
      </tr>
    </thead>
    <tbody>
    @foreach( $categories as $category )
      <tr>
        <td>{{ $category->name }}</td>
        <td>
        @foreach( $category->article as $article)
        {{ $article->title }} <br>
        @endforeach
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
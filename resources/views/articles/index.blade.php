@extends('layouts.app') 

@section('content') 
@if ($message = Session::get('success')) 
        <div class="alert alert-success"> 
            <p>{{ $message }}</p> 
        </div> 
    @endif 
    <table class="table table-bordered" style="width:95%;margin: 0 auto;"> 
        <tr> 
            <th>Judul</th> 
            <th>Konten</th> 
            <th>Gambar</th> 
        </tr> 
        @foreach ($articles as $article) 
        <tr> 
            <td><a href="{{ route('articles.edit',['article'=>$article->id]) }}">{{ $article->title }}</a></td> 
            <td>{{ $article->content }}</td> 
            <td><img width="150px" src="{{asset('storage/'.$article->featured_image)}}"></td> 
        </tr> 
        @endforeach 
    </table> 
    <div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary mt-3 btn-center" href="{{ route('articles.cetak_pdf') }}">Cetak Artikel</a>
        </div>
    </div>
@endsection 

@extends('base')
@section('content')


<div class="h-100 p-2 card text-white bg-secondary  border rounded-3 container-fluid py-1">

      <h1 class="display-5 fw-bold text-center">{{$article->title}}</h1>
      <h5 class="text-center my-3 pt-3"> {{$article->subtitle}} </h5>

     <div class="container">
        <img src="{{ voyager::image($article->image) }} " class="img-fluid my-1  rounded-3" alt="Responsive image">
        <blockquote class="blockquote">
        <p class="text-center row justify-content-center">{!!$article->content!!} </p>
    </blockquote>
    </div>

     <div   class="d-flex justify-content-center my-3 " >
         <span class="badge bg-info"> {{ $article->category->label}} </span>
     </div>

        <div class="d-flex justify-content-center ">
            <a  class="btn btn-primary" href="{{route('articles' )}}  ">
                <i class="fas fa-arrow-left">Retour</i></a>
        </div>
    </div>
</div>

@endsection


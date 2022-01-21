@extends('base')
@section('content')


<div class="h-100 p-5 card text-white bg-secondary  border rounded-3 container-fluid py-5">
      <h1 class="display-5 fw-bold text-center">{{$article->title}}</h1>
      <h5 class="text-center my-3 pt-3"> {{$article->subtitle}} </h5>

      <div class="container">
        <p class="text-center">{!!$article->content!!} </p>
     </div>

        <div class="d-flex justify-content-center ">
         <a  class="btn btn-primary" href="{{route('articles' )}}  "><i class="fas fa-arrow-left">Retour</i></a>
          </div>


        </div>
</div>

@endsection


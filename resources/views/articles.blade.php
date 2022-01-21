@extends('base')
@section('content')
<div class="jumbotron">
<h1 class="displa-2 text-center">Articles</h1>
<div class="articles row justify-content-center">
@foreach ($articles as $article )

<div class=" mb-2 card text-white bg-secondary mb-3 rounded-3">
    <div class="container-fluid py-2">
      <h5 class="display-7 fw-bold">{{$article->title}}</h5>
      <h6 class="display-7 fw-bold">{{$article->subtitle}}</h6>
<a  class="btn btn-primary" href="{{route('article',$article->slug)}}  ">lire la suite <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>

@endforeach
<div class="d-flex justify-content-center mt-5">
    {{$articles->links('vendor.pagination.custome')}}
</div>
</div>


</div>
@endsection


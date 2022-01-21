@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-3"> liste d'articles </h1>
    <div class="d-flex justify-content-center">
        <a class="btn btn-info my-2" href=" {{route('articles.create')}} ">ajouter un article<i class="fas fa-plus-square mx-2"></i>  </a>
    </div>
    <table class="table table-hover">
        <thead>
          <tr class="table-active">
            <th scope="col">ID </th>
            <th scope="col">titre</th>
            <th scope="col">cree le</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article )
          <tr >
            <th> {{$article ->id}} </th>
            <td>{{$article ->title}}</td>
            <td>{{$article ->dateFormatted()}}</td>
            <td class="d-flex">
            <a href="" class="btn btn-warning mx-3"> Editer</a>
            <a href="" class="btn btn-primary"> suprimer</a>

            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
      <div class="d-flex justify-content-center mt-5">
        {{$articles->links('vendor.pagination.custome')}}
    </div>
</div>
@endsection

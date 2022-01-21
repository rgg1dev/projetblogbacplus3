@extends('base')

@section('content')
<div class="container">

</div>

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
            <a href="" class="btn btn-info mx-3"> Editer</a>
            <button type="botton" class="btn btn-danger " onclick="document.getElementById ('modal-open-{{$article->id}} ').style.display='block' ">Suprimer</button>
  <form action= {{ route('articles.delete', $article->id)}} method="POST">
    @csrf
                @method("DELETE")

                <!-- modale securite supresion-->

                <div class="modal" id="modal-open-{{$article->id}} ">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">supretion definitive</h5>
                          <button type="button" class="btn-close" onclick="document.getElementById ('modal-open-{{$article->id}} ').style.display='none' " data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true"></span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>vous voulez supprimer cette article ? </p>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary">oui</button>
                          <button type="button" class="btn btn-secondary" onclick="document.getElementById ('modal-open-{{$article->id}} ').style.display='none' " data-bs-dismiss="modal">annuler</button>
                        </div>
                      </div>
                    </div>
                  </div>





    </form>

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

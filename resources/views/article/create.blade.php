@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-3"> cree un article </h1>
    <form methode="POST" action="#">
       @csrf
       <div class="col-12">
            <div class="form-group">
            <label class="mx-2 " for="">Titre</label>
            <input type="text" name="title" class="form-control" placeholder="Titre de l'article "/>


       </div>
    </div>


    <div class="col-12">
        <div class="form-group">
        <label class="mx-2 " for="">sous-titre</label>
        <input type="text" name="subtitle" class="form-control" placeholder="Sous-titre de l'article "/>
            <small class="form-text text-muted">le théme traité</small>
   </div>


   <div class="col-12">
    <div class="form-group">
    <label class="mx-2 " for="">contenu</label>
   <textarea class="form-control w-100" name="content" id="" cols="30" rows="10"></textarea>

   <div class="d-flex jusfy-content-center mb-5">

<button type="submit" class="btn btn-primary ">poster l'article</button>
   </div>



    </form>

</div>
@endsection

@extends('base')

@section('content')
<div class="container">
    <h1 class="text-center my-3">EDITER </h1>
    <form method="POST" action=" {{route('articles.update',$article->id)}} ">
        @method("PUT")
       @csrf
       <div class="col-12">
            <div class="form-group">
            <label class="mx-2 h2  " for="">Titre</label>
            <input type="text" value="{{$article->title}}" name="title" class="form-control @error('title')is-invalid @enderror" placeholder="Titre de l'article "/>

 <!-- mesage d error champ no remplis-->

 @error('title')
<span class="invalidate-feedback" role="alert" >
<strong>
    {{$message}}
</strong>



</span>
@enderror
       </div>
    </div>


    <div class="col-12">
        <div class="form-group">
        <label class="mx-2 h2  " for="">sous-titre</label>
        <input value="{{$article->subtitle}} "type="text" name="subtitle" class="form-control  @error('subtitle')
        is-invalid

        @enderror" placeholder="Sous-titre de l'article "/>
            <small class="form-text text-muted">le théme traité</small>
 <!-- mesage d error champ no remplis-->


   </div>

@error('subtitle')
           <span class="invalidate-feedback" role="alert" >
           <strong>
               {{$message}}
           </strong>
          </span>


           @enderror
                <div class="col-12">
                            <div class="form-group">
                                    <label class="mx-1 h2 " for="">Corp de l'article</label>
                                    <textarea id="tinycme-edidor"  class="form-control w-100 @error('title')is-invalid @enderror" name="content"> {{$article->content}} </textarea>
<!-- mesage d error champ no remplis-->

                                    @error('content')

                        <span class="invalidate-feedback" role="alert" >
                        <strong>
                            {{$message}}
                        </strong>
                        </span>
                        @enderror
                            </div>
         <script>
        tinymce.init({
        selector: '#tinycme-edidor'
                        });
        </script>

   <div class="d-flex justify-content-center  my-2">
    <button type="submit" class="btn btn-primary  ">modifier</button>
   </div>



    </form>

</div>
@endsection

@extends('layout')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update Ville</div>
                <div class="panel-body">



                <form action="{{ url('ville/'.$ville->id) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                {{ csrf_field()}}
                            <div class="form-group ml-4 ">
                            <label for="">Nom Ville</label>
                            <input type="text" name="title" value="{{ $ville->libelle }}" class="form-control ml-4" style="width:80%">
                            </div>

                            <div class="form-group ml-4">
                            <button type="submit" class="form-control btn btn-primary ml-4 " style="width:15%" ><img src="{{ asset('u.png') }}" style="width:60%; height:30px;"/></button>
                            </div>
                        </form>
               </div>
            </div>
<br>


        </div>
    </div>
</div>
@endsection

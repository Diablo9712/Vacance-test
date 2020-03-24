@extends('layout')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Saisons</div>
                <div class="panel-body">


                <form action="{{ url('saison') }}" method="post">
                {{ csrf_field()}}
                            <div class="form-group ml-4 ">
                            <label for="">Nom Saison</label>
                            <input type="text" name="title" class="form-control ml-4" style="width:80%">
                            </div>
                            <div class="form-group ml-4 ">
                            <label for="">Date Début</label>
                            <input type="date" name="debut" class="form-control ml-4" style="width:80%">
                            </div>
                            <div class="form-group ml-4 ">
                            <label for="">Date Fin</label>
                            <input type="date" name="fin" class="form-control ml-4" style="width:80%">
                            </div>

                            <div class="form-group ml-4">
                            <button type="submit" class="form-control btn btn-primary ml-4 " style="width:15%" >   <img src="{{ asset('img/c.png') }}" style="width:60%; height:30px;"/></button>
                            </div>
                        </form>
               </div>
            </div>
<br>


        </div>
    </div>
</div>
@endsection

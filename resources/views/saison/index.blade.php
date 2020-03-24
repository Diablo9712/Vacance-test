@extends('layout')

@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

                    @if(Session::has('message'))
                        <div class="alert alert-success">{{ Session::get('message')}}</div>
                    @endif


            <div class="card">
                <div class="card-header">Saison</div>
                <div class="panel-body">
                    <table class="table">
                        <tr>
                                <th>#</th>
                                <th>Libelle Saison</th>
                                  <th>Date Début</th>
                                    <th>Date Fin</th>
                                <th>Action</th>
                        </tr>
                        @foreach($saisons as $saison)
                            <tr>
                                <td>{{ $saison->id }}</td>
                                <td>{{ $saison->libelle  }}</td>
                                <td>{{ $saison->date_debut }}</td>
                                <td>{{ $saison->date_fin  }}</td>
                                <td>
                            <form action="{{ url('saison/'.$saison->id) }}" method="post">
                   @csrf
                            <a href="{{ url('saison/'.$saison->id.'/edit') }}" class="btn btn-primary"><img src="{{ asset('e.png') }}" style="width:70%; height:30px;"/></a>
                            <input type="hidden" name="_method" placeholder='{{ csrf_token()}}' value="POST">
                            {{ method_field('DELETE')}}


                                <button type="submit"name="_method" placeholder='{{ csrf_token()}}' value="POST" class="btn btn-danger"><img src="{{ asset('d.png') }}" style="width:70%; height:30px;"/></button>

                             </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
               </div>
            </div>
<br>
<a href="{{ url('saison/create') }}" class="btn btn-success"><img src="{{ asset('c.png') }}" style="width:80%; height:40px;"></a>


        </div>
    </div>
</div>
@endsection



  <input type="hidden" name="_method"  value="POST">

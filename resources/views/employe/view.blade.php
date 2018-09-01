 @extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion des Employés
                <small>Gestion des employés</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li class="active">Employés</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Liste des Employés</h3>

                <a type="button" href="/employe/create" class="btn btn-primary pull-right " ><div class="glyphicon glyphicon-plus"></div> Ajouter un Employé</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body " >
                <table  id="example1" class="table table-bordered table-striped" >
                    <thead>
                    <tr>

                        <th>ID</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Adresse</th>
                        <th>Date Ajout</th>
                        <th>Date Modification</th>
                        <th>Email</th>
                        <th>CIN</th>
                        <th>Salaire</th>
                        <th>Statut</th>
                        <th>Tel 1</th>
                        <th>Tel 2</th>
                        <th>Bank</th>
                        <th>BK-banc</th>

                        <th>Action</th>


                    </tr>
                    </thead>
                    <tbody>

                    @foreach($emp as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td>{{ $value->photo }}</td>

                            <td>{{$value->nom }}</td>
                            <td>{{$value->prenom }}</td>
                            <td>{{$value->adresse }}</td>
                            <td>{{$value->created_at }}</td>
                            <td>{{$value->updated_at}}</td>
                            <td>{{$value->email }}</td>
                            <td>{{$value->CIN }}</td>
                            <td>{{$value->salaire }}</td>
                            <td>{{$value->statut }}</td>
                            <td>{{$value->tel1 }}</td>
                            <td>{{$value->tel2}}</td>
                            <td>{{$value->Bank}}</td>
                            <td>{{$value->BK_banc}}</td>

                                <td>  <form action="/employe/{{$value->id}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                  <a href="{{url ('employe/'.$value->id.'/edit')}}" class="btn-warning btn glyphicon glyphicon-pencil" ></a>
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                     
                             <button type="submit" class="btn-danger btn glyphicon glyphicon-trash"></button></form> </td>
                        </tr>  
                        @endforeach

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->


    
@endsection
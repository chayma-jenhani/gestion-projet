@extends('layouts.menu')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Tâches
                <small>Gestion des tâches</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li ><a href="/projet">Projets</a></li>
                <li class="active"> Tâches</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <!-- left column -->
                <div class="col-xs-12">
                    <!-- general form elements -->
                    <div class="box box-primary ">
                        <div class="box-header with-border">
                            <h3 class="box-title">Modifer Tâche</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="/tache/{{$t->id}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('titre') ? 'has-error' : '' }} ">
                                            <label >Titre</label>

                                            <input type="text" class="form-control" name="titre" value="{{ $t->titre }}" placeholder="Enter titre">
                                            @if( $errors->has('titre'))
                                                <span class="help-block"> {{$errors->first('titre')}}</span>
                                            @endif
                                        <label >Deadline</label>
                                        <input type="date" class="form-control"   value="{{$t->deadline}}"name="deadline" >
                                        <label >statut</label>
                                       <select  class="form-control select2"  name="statut">
                                        <option>active </option>
                                        <option> en progression</option>
                                        <option>en pause</option>
                                        <option> terminé</option>
                                    </select>
                                        <label >priorité</label>
                                        <input type="text" class="form-control"  value="{{$t->priorite}}" name="priorite" >

                                       <label >Employé</label>
                                    <select  class="form-control select2"  name="employe">
                                            @foreach($emp as $value)
                                                <option>{{$value->nom}}</option>
                                            @endforeach

                                        </select>

                                        <label >Description</label>
                                        <textarea class="form-control" name="description" placeholder="Entrer la description "></textarea>

                                        <div class="box-footer">

                                            <input type="submit" class="btn btn-info " value="Modifier">
                                            <input type="reset" class="btn pull-right" value="Annuler">
                                        </div>




                                    </div>
                                </div>
                            </div>

                        </form>

                    </div>
                    <!-- /.box -->
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection
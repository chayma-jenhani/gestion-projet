@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Clients
                <small>Gestion des clients</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li ><a href="/client">Client</a></li>
                <li class="active"> Ajouter Client</li>
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
                            <h3 class="box-title">Nouveau Client</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  role="form" action="/client" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class=" form-group {{ $errors->has('nom') ? 'has-error' : '' }} ">
                                        <label >Nom</label>

                                        <input type="text" class="form-control" name="nom" value="{{ Request::old('nom') }}" placeholder="Enter nom">
                                            @if( $errors->has('nom'))
                                                <span class="help-block"> {{$errors->first('nom')}}</span>
                                                @endif
                                        </div>
                                        <div class=" form-group {{ $errors->has('prenom') ? 'has-error' : '' }} ">
                                        <label >Prénom</label>
                                        <input type="text" class="form-control" name="prenom" value="{{ Request::old('prenom') }}" placeholder="Enter prénom">
                                            @if( $errors->has('prenom'))
                                                <span class="help-block"> {{$errors->first('prenom')}}</span>
                                            @endif
                                        </div>

                                        <label >Date</label>
                                        <input type="date" class="form-control" value="{{ Request::old('date') }}" name="date" >


                                        <div class=" form-group {{ $errors->has('adresse') ? 'has-error' : '' }} ">
                                        <label >Adresse</label>
                                        <input type="text" class="form-control" name="adresse" value="{{ Request::old('adresse') }}" placeholder="Enter adresse">
                                            @if( $errors->has('adresse'))
                                                <span class="help-block"> {{$errors->first('adresse')}}</span>
                                            @endif
                                        </div>
                                                    <div class=" form-group {{ $errors->has('tel') ? 'has-error' : '' }} ">
                                                    <label >Téléphone</label>
                                        <input type="tel" class="form-control" name="tel" value="{{ Request::old('tel') }}" placeholder="Enter téléphone" >
                                                        @if( $errors->has('tel'))
                                                            <span class="help-block"> {{$errors->first('tel')}}</span>
                                                        @endif
                                                    </div>
                                                        <div class=" form-group {{ $errors->has('email') ? 'has-error' : '' }} ">
                                        <label >Email</label>
                                        <input type="text" class="form-control" name="email"  value="{{ Request::old('email') }}"placeholder="Enter email">
                                                            @if( $errors->has('email'))
                                                                <span class="help-block"> {{$errors->first('email')}}</span>
                                                            @endif
                                                        </div>
                                        <label >Statut</label>
                                        <input type="text" class="form-control" name="statut" value="{{ Request::old('statut') }}"placeholder="Enter statut">
                                    <br>
                                        <div class="box-footer">

                                        <input type="submit" class="btn btn-info " value="Ajouter">
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
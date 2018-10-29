@extends('layouts.menu')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Gestion Des Factures
                <small>Gestion des factures</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Accueil</a></li>
                <li ><a href="/facture">Facture</a></li>
                <li class="active"> Ajouter Facture</li>
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
                            <h3 class="box-title">Nouvelle Facture</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form  role="form" action="/facture" method="POST">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                       
                                            <label >Devis</label>

                                            <select  class="form-control select2"  name="devis"  >
                                     @foreach($devis as $value)
                                  <option>{{$value->nom}}</option>
                                  
                                                @endforeach 
                                           </select>
                                        
                                            <label >Client</label>
                                           <select  class="form-control select2"  name="client"  >
                                     @foreach($cl as $value)
                                  <option>{{$value->nom}}</option>
                                  
                                                @endforeach 
                                                 </select>
                                    
                                       
                                           <label >Projet</label>
                                           <select  class="form-control select2"  name="projet"  >
                                     @foreach($projets as $value)
                                  <option>{{$value->titre}}</option>
                                  
                                                @endforeach 
                                                 </select>
                                         <div class=" form-group {{ $errors->has('montant') ? 'has-error' : '' }} ">
                                        <label >Montant</label>

                                        <input type="text" class="form-control" name="montant" value="{{ Request::old('montant') }}" placeholder="Enter montant">
                                            @if( $errors->has('montant'))
                                                <span class="help-block"> {{$errors->first('montant')}}</span>
                                                @endif
                                        </div>
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
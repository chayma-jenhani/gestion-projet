<@extends('layouts.menu')
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
                <li> <a href="/client">Factures</a></li>
                <li class="active">Modifier Facture</li>
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
                            <h3 class="box-title">Modifier Facture</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" action="/facture/{{$facture->id}}" method="post">
                            <input type="hidden" name="_method" value="PUT">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        
                                            <label >Devis</label>

                                            <select  class="form-control select2"  name="devis" value="{{ $facture->devis->nom }}" >
                                     @foreach($devis as $value)
                                  <option>{{$value->nom}}</option>
                                  
                                                @endforeach 
                                           
                                        
                                            <label >Client</label>
                                           <select  class="form-control select2"  name="client" value="{{ $facture->client->nom }}" >
                                     @foreach($cl as $value)
                                  <option>{{$value->nom}}</option>
                                  
                                                @endforeach 
                                                 </select>
                                           
                                       
                                       

                                       
                                            <label >Projet</label>
                                            <select  class="form-control select2"  name="projet" value="{{ $facture->projet->titre }}" >
                                     @foreach($projet as $value)
                                  <option>{{$value->titre}}</option>
                                  
                                                @endforeach 
                                        
                                       <div class=" form-group {{ $errors->has('montant') ? 'has-error' : '' }} ">
                                        <label >Montant</label>

                                        <input type="text" class="form-control" name="montant" value="{{ $facture->montant }}" placeholder="Enter montant">
                                            @if( $errors->has('montant'))
                                                <span class="help-block"> {{$errors->first('montant')}}</span>
                                                @endif
                                        </div>
                                        <br>
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
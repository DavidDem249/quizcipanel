@extends('base.master',['title' => 'Question'])

@section('style')
	
@stop

@section('content')
	<div class="main-content container-fluid">

		<section class="section">
            <div class="card">
                <div class="card-header">
                	<div style="float: left;">
                		LISTE DES QUESTIONS
                	</div>
                    
                    <div style="float:right;">
                    	<!-- <a href="#"> -->
                    		<button class="btn btn-info btn-outline-info" style="border-radius: 20px;" type="button" class="close" data-bs-toggle="modal" data-bs-target="#inlineForm">
	                            Ajouter une question 
	                        </button>

	                        <a href="#">
		                        <button class="btn btn-warning btn-outline-success" style="border-radius: 20px;">
		                            Ajouter des questions
		                        </button>
		                    </a>
                    	<!-- </a> -->
                    </div>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>TELEPHONE</th>
                               
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data_abonnes->abonnes as $data)
	                            <tr>
	                                <td>{{ $data->id }}</td>
	                                <td>{{ $data->telephone }}</td>
	                                
	                                <td>
	                                   <a title="Détails abonnés" href="{{ route('detail.abonne', ['id_abonne' => $data->id]) }}" class="btn icon btn-info">
	                                   		<i data-feather="eye"></i>
	                                   	</a>
	                                   	
	                                    <a title="Supprimer abonnés" href="" class="btn icon btn-danger">
	                                    	<i data-feather="trash"></i>
	                                    </a>

	                                    <a title="Désactiver abonnés" href="" class="btn icon btn-warning">
	                                    	<i data-feather="plus"></i>
	                                    </a>
	                                    <!-- <div class="form-check form-switch">
										    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
										     <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
										</div> -->
	                                </td>
	                            </tr>
	                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

	</div>
@stop

@section('script')

@stop
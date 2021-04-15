@extends('base.master',['title' => 'Question'])

@section('style')
	
@stop

@section('content')
	<div class="main-content container-fluid">
		{{--<div class="row mb-2">
	        <div class="col-12 col-md-4">
	            <div class="card card-statistic">
	                <!-- <div class="row"> -->
                	<div class="card-header">
                		<h4>INFORMATION ABONNE</h4>

                		<div class="card-body">
                			<div>
                				<h5>NUMERO : {{ $data_collect['telephone'] }}</h5>
                			</div>
                		</div>
                	</div>
	                <!-- </div> --> 
	            </div>
	        </div>
		</div>--}}
		<div class="container">
		    <div class="row">
		        <div class="col-12">
		            <div class="card">
		                <div class="card-body p-0">
		                    <div class="row p-5">
		                        <div class="col-md-6">
		                            <!-- <img src="http://via.placeholder.com/400x90?text=logo"> -->
		                            <h4 style="font-weight: bolder;">INFORMATIONS SUR ABONNE</h4>
		                        </div>

		                        <div class="col-md-6 text-right">
		                            <h5 class="font-weight-bold mb-1" style="font-weight: bold;">TELEPHONE : {{ $data_collect['telephone'] }} </h5>
		                            
		                        </div>
		                    </div>

		                    <hr class="my-5">

		                    <div class="row pb-5 p-5">
		                        <div class="col-md-6">
		                            <h4 class="font-weight-bold mb-4">
		                            	SCORE 
		                            </h4>
		                            <p class="mb-1">
		                            	<span class="badge bg-warning">
		                            		{{ $datascores['scores'] }}
		                            	</span>
		                            </p>
		                            
		                        </div>

		                        <div class="col-md-6 text-right">
		                            <h4 class="font-weight-bold mb-4">
		                            	RANG
		                            </h4>
		                            <p class="mb-2">
		                            	<span class="text-muted">Général: </span> 
		                            	<span style="font-weight: bold;">x ème</span>
		                            </p>
		                            <p class="mb-2">
		                            	<span class="text-muted">Hebdommadaire: </span> 
		                            	<span style="font-weight: bold;">y ème</span>
		                            </p>
		                            <p class="mb-2">
		                            	<span class="text-muted">Mensuel: </span> 
		                            	<span style="font-weight: bold;">z ème</span>
		                            </p>
		                            
		                        </div>
		                    </div>

		                    <div class="row p-5">
		                        <div class="col-md-12">
		                            <table class="table">
		                            	<h5>LISTE DES PACKS DE L'ABONNE</h5>
		                                <thead>
		                                    <tr>
		                                        
		                                        <th class="border-0 text-uppercase small font-weight-bold">
		                                        	DATE DE CREATION
		                                        </th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">
		                                        	TYPE PACK
		                                        </th>
		                                        <th class="border-0 text-uppercase small font-weight-bold">
		                                        	ETAT DU PACK
		                                        </th>
		                                        
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	@foreach($data_collect['packs'] as $pack)
			                                    <tr>
			                                        <td>{{ $pack->date_creation }}</td>
			                                        <td>
			                                        	@if($pack->option_turbo == 0)
					                                    	<span class="badge bg-info">Normal</span>
					                                    @else
					                                    	<span class="badge bg-warning">Turbo</span>
					                                    @endif
					                                </td>
			                                        <!-- <td>Normal</td> -->
			                                        <td>
			                                        	@if($pack->encours == 0)
					                                    	<span class="badge bg-success">En cours</span>
					                                    @else
					                                    	<span class="badge bg-primary">Terminé</span>
					                                   	@endif
					                                </td>
			                                        <!-- <td>En cours</td> -->
			                                    </tr>
			                                @endforeach
		                                </tbody>
		                            </table>
		                        </div>
		                    </div>

		                    <!-- <div class="d-flex flex-row-reverse bg-dark text-white p-4">
		                        <div class="py-3 px-5 text-right">
		                            <div class="mb-2">Grand Total</div>
		                            <div class="h2 font-weight-light">$234,234</div>
		                        </div>

		                        <div class="py-3 px-5 text-right">
		                            <div class="mb-2">Discount</div>
		                            <div class="h2 font-weight-light">10%</div>
		                        </div>

		                        <div class="py-3 px-5 text-right">
		                            <div class="mb-2">Sub - Total amount</div>
		                            <div class="h2 font-weight-light">$32,432</div>
		                        </div>
		                    </div> -->
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
@stop
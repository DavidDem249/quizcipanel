@extends('base.master',['title' => 'Question'])

@section('style')
	<link rel="stylesheet" href="{{ asset('assets/vendors/simple-datatables/style.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
@stop

@section('content')
	<div class="main-content container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h4>QUESTION</h4>
                </div>
                {{--<div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class='breadcrumb-header'>
                        <ol class="breadcrumb">
                            <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
                            <button class="btn  btn-primary">
	                            <li class="breadcrumb-item active" aria-current="page">
	                            	Datatable
	                            </li>
	                        </button>
                        </ol>
                    </nav>
                </div>--}}
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                	<div style="float: left;">
                		LISTE DES QUESTIONS
                	</div>
                    
                    <div style="float:right;">
                    	<!-- <a href="#"> -->
                    		<button class="btn btn-info btn-outline-info" style="border-radius: 20px;" type="button" class="close" data-bs-toggle="modal" data-bs-target="#inlineForm">
	                            Add question 
	                        </button>
                    	<!-- </a> -->
                    </div>
                </div>
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>LIBELE</th>
                                
                                <th>STATUS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        	@foreach($data_collection as $data)
	                            <tr>
	                                <td>{{ $data->id }}</td>
	                                <td>{{ $data->libelle }}</td>
	                                
	                                @if($data->status == 0)
		                                <td>
		                                    <span class="badge bg-success">Active</span>
		                                </td>
		                            @else
		                            	<td>
		                                    <span class="badge bg-danger">Inactive</span>
		                                </td>
		                            @endif
	                                <td>
	                                   <a title="Voir proposition" href="{{ route('propositions', ['id_question' => $data->id]) }}" class="btn icon btn-info">
	                                   		<i data-feather="eye"></i>
	                                   	</a>
	                                   	<!-- <a href="{{ $data->id }}" class="btn icon btn-success">
	                                    	<i data-feather="plus"></i>
	                                    </a> -->
	                                    <a title="Supprimer question" href="{{ $data->id }}" class="btn icon btn-danger">
	                                    	<i data-feather="trash"></i>
	                                    </a>
	                                </td>
	                            </tr>
	                        @endforeach
                            {{--<tr>
                                <td>8</td>
                                <td>Qui est Messi ?</td>
                                
                                <td>
                                    <span class="badge bg-success">Active</span>
                                </td>

                                <td>
                                   <a href="#" class="btn icon btn-info">
                                   		<i data-feather="eye"></i>
                                   	</a>
                                    <a href="#" class="btn icon btn-danger">
                                    	<i data-feather="trash"></i>
                                    </a>
                                    <a href="#" class="btn icon btn-success">
                                    	<i data-feather="plus"></i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td>83</td>
                                <td>Qui est saint joseph</td>
                                
                                <td>
                                    <span class="badge bg-danger">Inactive</span>
                                </td>

                                <td>
                                   <a href="#" class="btn icon btn-info">
                                   		<i data-feather="eye"></i>
                                   	</a>
                                    <a href="#" class="btn icon btn-danger">
                                    	<i data-feather="trash"></i>
                                    </a>
                                    <a href="#" class="btn icon btn-success">
                                    	<i data-feather="plus"></i>
                                    </a>
                                </td>

                            </tr> --}}
                         
                        </tbody>
                    </table>
                </div>
            </div>


         	@include('admin.pages._partials.modal')

        </section>
    </div>
@stop

@section('script')
	<script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    

    <script src="{{ asset('assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
@stop
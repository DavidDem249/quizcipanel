@extends('base.master',['title' => 'Dashboard'])

@section('style')

@stop

@section('content')

	 @if(session()->has('success'))
        <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>
        <script type="text/javascript">
            iziToast.success({
            theme: 'light',
            message: "{{ session()->get('success')}}",
            //backgroundColor: 'green',
            //messageSize: 12,
            timeout: 8000,
            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
           //progressBarColor: 'rgb(100, 255, 104)',
        
           });
        </script>
    @endif

	<div class="main-content container-fluid">
        <div class="page-title">
            <h5>TABLEAU DE BORD QUIZ CI APP</h5>
            <p class="text-subtitle text-muted">Binvenue</p>
        </div>


        <section class="section">
        	<div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Analyse</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <!-- <div class="col-md-4 col-12">
                                    <div class="pl-3">
                                        <h1 class='mt-5'>$21,102</h1>
                                        <p class='text-xs'><span class="text-green"><i data-feather="bar-chart" width="15"></i> +19%</span> than last month</p>
                                        <div class="legends">
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-info me-2'></div><span
                                                    class='text-xs'>Last Month</span>
                                            </div>
                                            <div class="legend d-flex flex-row align-items-center">
                                                <div class='w-3 h-3 rounded-full bg-blue me-2'></div><span
                                                    class='text-xs'>Current Month</span>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-md-8 col-12">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
    </div>
@stop
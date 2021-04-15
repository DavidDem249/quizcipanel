@extends('base.master',['title' => 'Dashboard'])

@section('style')
    <link rel="stylesheet" href="{{ asset('assets/vendors/apexcharts/apexcharts.css') }}">
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


        <!-- <section class="section">
        	<div class="row mb-4">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class='card-heading p-1 pl-3'>Analyse</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                
                                <div class="col-md-8 col-12">
                                    <canvas id="bar"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section> -->

         <section class="section">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Radial Gradient Chart</h4>
                        </div>
                        <div class="card-body">
                            <div style="width:75%;">
                                {!! $chartjs->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Radial Gradient Chart</h4>
                        </div>
                        <div class="card-body">
                            <div style="width:75%;">
                                {!! $datajs->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            {{--<div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Line Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="line"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Bar Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="bar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Radial Gradient Chart</h4>
                        </div>
                        <div class="card-body">
                            <div id="candle"></div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </section>
    </div>
@stop


@section('script')
    <script src="{{ asset('assets/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ui-apexchart.js') }}"></script>
@stop
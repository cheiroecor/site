@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-md-offset-2">
                <h3 class="text-center">Bem vindo à sua nova inspiração!</h3>
                <div class="panel panel-default" style="border: none;">

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div style="position: relative">
                            <img src="img/hidratantes/fiore-di-seduzione.png"
                                 style="margin: 0 auto; height: 40vh;" class="img-responsive"/>
                            <div class="d-flex product-overlay">
                                <div class="close close-info">
                                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                                </div>
                                <h3>Fiore di Seduzione</h3>
                                <p>Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de
                                    impressos, e vem sendo utilizado desde o século XVI, quando um impressor
                                    desconhecido pegou uma bandeja de tipos.</p>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <br>
                        <label>Selecione sua fragrância:</label>
                        <br>
                        <br>
                        <div class="col-xs-4 col-sm-3 product-option">
                            <a href="javascript:void(0);">
                                <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-3 product-option">
                            <a href="javascript:void(0);">
                                <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-3 product-option">
                            <a href="javascript:void(0);">
                                <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-3 product-option">
                            <a href="javascript:void(0);">
                                <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                            </a>
                        </div>
                            <div class="col-xs-4 col-sm-3 product-option">
                                <a href="javascript:void(0);">
                                    <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-3 product-option">
                                <a href="javascript:void(0);">
                                    <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-3 product-option">
                                <a href="javascript:void(0);">
                                    <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-3 product-option">
                                <a href="javascript:void(0);">
                                    <img alt="40x40" class="img-circle" src="http://via.placeholder.com/64x64">
                                </a>
                            </div>


                            <div class="clearfix"></div>
                            <br>
                        <div class="col-xs-12">
                            <form>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <label for="">Quantidade:</label>
                                        <input type="number" class="form-control" id="qtde" value="1">
                                    </div>
                                    <div class="col-xs-8">
                                        <a href="#" class="btn btn-primary btn-block" style="margin-top: 27px;">COMPRAR</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

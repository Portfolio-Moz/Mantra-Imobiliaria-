@extends('layouts.app')

@section('title')
{{$produto->nome}}
@endsection

@section('content')

<section class="listings-content-wrapper section-padding-100">
    <div class="container">
        <div class="row" >

           {{--<livewire:frontend.produto.view :produto="$produto" :categoria="$categoria" />--}}
           
            <div>
                <section class="listings-content-wrapper section-padding-100">
                    <div class="container">
                        {{--<div class="row">
                            <div class="col-12">
                                <div class="single-listings-sliders ">
                                    @if ($produto->produtoImages)
                                    <img src="{{asset($produto->produtoImages[0]->imagem)}}" alt="">
                                    @endif
                                </div>
                                
                            </div>
                        
                        </div>--}}
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                @foreach ( $produto->produtoImages as $itemImg)
                                    <div class="carousel-item active">
                                            @if ($produto->produtoImages)
                                                {{--<img src="{{ asset("$sliderItem->imagem")}}" class="d-block w-100" alt="">--}}
                                                <img src="{{asset($itemImg->imagem)}}" alt="">
                                            @endif
                
                                    </div>
                                @endforeach
                        

                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 col-lg-8">
                                <div class="listings-content">
                                    <!-- Price -->
                                    <div class="list-price">
                                        <p>{{$produto->Preco}}Mts</p>
                                    </div>
                                    <h5>{{$produto->nome}}</h5>
                                    <p class="location"><i class="fa fa-map-location" aria-hidden="true"></i> {{$produto->localizacao}}</p>
                                    <p>{{$produto->discricao}}</p>

                                    <div class="property-meta-data d-flex align-items-end">
                                        <div class="new-tag">
                                            <img src="img/icons/new.png" alt="">
                                        </div>
                                        <div class="bathroom">
                                            <i class="fa fa-house-user" aria-hidden="true"></i>
                                            <span>{{$produto->quartos}}</span>
                                        </div>
                                        <div class="garage">
                                            <i class="fa fa-restroom" aria-hidden="true"></i>
                                            <span>{{$produto->casaBanho}}</span>
                                        </div>
                                        
                                    </div>
                                    <ul class="listings-core-features d-flex align-items-center">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{$produto->numero}} </li>
                                    </ul>
                                    

                                </div>
                            </div>

                            
                        </div>
                        <!-- Listing Maps -->
                        
                    </div>
                </section>
            </div>

        </div>
    </div>
</section>
 
@endsection
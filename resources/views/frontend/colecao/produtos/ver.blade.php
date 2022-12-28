@extends('layouts.app')

@section('title')
{{$imobiliario->nome}}
@endsection

@section('content')

<section class="listings-content-wrapper section-padding-100">
    <div class="container">
        <div class="row" >

           
           
            <div>
                <section class="listings-content-wrapper section-padding-100">
                    <div class="container">
                        
                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                            <div class="carousel-inner">
                                @foreach ( $imobiliario->imobiliarioImages as $itemImg)
                                    <div class="carousel-item active">
                                            @if ($imobiliario->imobiliarioImages)
                                                {{--<img src="{{ asset("$sliderItem->imagem")}}" class="d-block w-100" alt="">--}}
                                                <img src="{{asset($itemImg->image)}}" alt="">
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
                                        <p>{{$imobiliario->montante}}Mts</p>
                                    </div>
                                    <h5>{{$imobiliario->nome}}</h5>
                                    <p class="location"><i class="fa fa-map-location" aria-hidden="true"></i> {{$imobiliario->local}}</p>
                                    <p>{{$imobiliario->disc}}</p>

                                    <div class="property-meta-data d-flex align-items-end">
                                        <div class="new-tag">
                                            <img src="img/icons/new.png" alt="">
                                        </div>
                                        <div class="bathroom">
                                            <i class="fa fa-house-user" aria-hidden="true"></i>
                                            <span>{{$imobiliario->quartos}}</span>
                                        </div>
                                        <div class="garage">
                                            <i class="fa fa-restroom" aria-hidden="true"></i>
                                            <span>{{$imobiliario->casaBanho}}</span>
                                        </div>
                                        
                                    </div>
                                    <ul class="listings-core-features d-flex align-items-center">
                                        <li><i class="fa fa-phone" aria-hidden="true"></i>{{$imobiliario->numero}} </li>
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
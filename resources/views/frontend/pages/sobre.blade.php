@extends('layouts.app')

@section('title','Sobre Nos')

@section('content')


    <!-- ##### About Content Wrapper Start ##### -->
    <section class="about-content-wrapper section-padding-100">
        <div class="container">
            <div class="row" style="margin-top:4rem;">
                <div class="col-12 col-lg-8">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>Arranjamos a melhor casa para voce</h2>
                        <p>Mantra O Futuro da Imobiliaria em Mocambique</p>
                    </div>
                    <div class="about-content">
                        <img class="wow fadeInUp" data-wow-delay="350ms" src="../assets/img/about.jpg" alt="">
                        <p class="wow fadeInUp" data-wow-delay="450ms">
                        Em primeiro lugar, a importância da imobiliária está ligada à segurança e à tranquilidade no aluguel de um imóvel. Sua principal função é intermediar a relação e garantir os direitos e deveres de inquilinos e proprietários. 

A chave para garantir esses direitos é o contrato de aluguel. Nele, estarão descritas todas as situações relacionadas à locação, desde a entrada até a saída do inquilino do imóvel. 

A importância da imobiliária no momento da elaboração desse contrato é ainda maior. Isso porque tudo que for estabelecido nele deve estar de acordo com a Lei do Inquilinato..</p>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading text-left wow fadeInUp" data-wow-delay="250ms">
                        <h2>CAsas Disponiveis </h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>

                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                        <div class="carousel-inner">
                    
                            @forelse ( $novaImobiliario as $produtoItem)
                                
                                <div class="carousel-item active">
                                    @if ($produtoItem->produtoImages->count() > 0)
                                            <a  href="{{url('/colecao/'.$produtoItem->categoria->nome.'/'.$produtoItem->nome)}}">
                                                <img src="{{ asset($produtoItem->produtoImages[0]->imagem)}}" alt="{{$produtoItem->nome}}">
                                            </a>
                                    @endif
                                    <div class="carousel-caption d-none d-md-block">
                                        <div class="custom-carousel-content">
                                            
                                                <a  href="{{url('/colecao/'.$produtoItem->categoria->nome.'/'.$produtoItem->nome)}}">{{$produtoItem->nome}}
                                                </a>
                                                 
                                           
                                            <p>{{$produtoItem->Preco}}</p>
                                           
                                        </div>
                                    </div>
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


                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Content Wrapper End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(../assets/img/cta.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Esta a procura de uma casa para arrendar?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Nos somos a Solucao para o seu problema.</h6>
                        <a href="{{ url('/novidades') }}" class="btn south-btn mt-50 wow fadeInUp" style="background: #19547b;color: #fff;" data-wow-delay="500ms">Novidades</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Meet The Team Area Start ##### 
    <section class="meet-the-team-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h2>Meet The Team</h2>
                        <p>Suspendisse dictum enim sit amet libero</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <!-- Single Team Member 
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Team Member Thumb 
                        <div class="team-member-thumb">
                            <img src="../assets/img/team1.jpg" alt="">
                        </div>
                        <!-- Team Member Info 
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../assets/icons/prize.png" alt="">
                                <h2>Jean </h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="../assets/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../assets/icons/envelope.png" alt=""> office@template.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member 
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Team Member Thumb 
                        <div class="team-member-thumb">
                            <img src="../assets/img/team2.jpg" alt="">
                        </div>
                        <!-- Team Member Info 
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../assets/icons/prize.png" alt="">
                                <h2>Maria Williams</h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="../assets/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../assets/icons/envelope.png" alt=""> office@template.com</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Team Member 
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-team-member mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Team Member Thumb 
                        <div class="team-member-thumb">
                            <img src="../assets/img/team3.jpg" alt="">
                        </div>
                        <!-- Team Member Info 
                        <div class="team-member-info">
                            <div class="section-heading">
                                <img src="../assets/icons/prize.png" alt="">
                                <h2>Patrick Joe</h2>
                                <p>Realtor</p>
                            </div>
                            <div class="address">
                                <h6><img src="../assets/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                                <h6><img src="../assets/icons/envelope.png" alt=""> office@template.com</h6>
                            </div>
                        </div>
                        -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
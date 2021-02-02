@extends('layouts.site')

@section('conteudo')
    <div class="container-fluid npar">
        <div class="container nimpar">
        <br>
        <div class="row align-items-end">
{{--            Noticias--}}
            <h1 class="title-index animTitle fas fa-heart">GALERIA E PUBLICAÇÕES </h1>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://oabce.org.br/wp-content/uploads/2014/05/Confer%C3%AAncia-Nacional-dos-Advogados.jpg" width="1140" height="650" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="nav-link">Conferência Nacional: grandes nomes do direito na abertura do evento</h5>
                            <p class="nav-link">A abertura da XXII Conferência Nacional dos Advogados terá pronunciamento dos maiores nomes da área jurídica do país. Marcado para as 10h do dia 20 de outubro, a cerimônia dará início ao maior evento jurídico da América Latina, com milhares de participantes.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/4597285/pexels-photo-4597285.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="1140" height="650" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="https://images.pexels.com/photos/4062290/pexels-photo-4062290.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" width="1140" height="650" class="d-block" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

{{--            sOCIOS aDVOGADOS--}}
           <div class="container nimpar">
            <h2 class="title-index animTitle">CLIENTES</h2>
           </div>
            <div class="row divshome">
                <div class="col">
                    <div class="card" style="width:20rem;margin:20px 0 24px 0">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void(0)" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width:20rem;margin:20px 0 24px 0">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void(0)" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width:20rem;margin:20px 0 24px 0">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar3.png" alt="image" style="width:100%">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                            <a href="javascript:void(0)" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

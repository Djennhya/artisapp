@extends('layout.layout')

@section('content')
    <x-page-header title="Témoignages" />
    <!-- Tastimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="testimonial-header text-center">
                <h4 class="text-primary">Nos témoignages</h4>
                <h1 class="display-5 mb-5 text-dark">Ce que disent nos clients !</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <!-- Témoignage 1 -->
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                "ArtisApp a complètement transformé ma façon de faire mes courses ! Les produits sont
                                toujours frais, la livraison est rapide et le service client est exceptionnel.
                                Je recommande vivement cette application à tous mes amis et ma famille."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Marie Dubois">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Marie Dubois</h4>
                                <p class="m-0 pb-3">Infirmière</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 2 -->
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                "En tant que chef de famille nombreuse, ArtisApp me fait gagner énormément de temps.
                                La qualité des fruits et légumes est excellente, et j'apprécie particulièrement
                                la possibilité de programmer mes commandes à l'avance."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Jean-Pierre Martin">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Jean-Pierre Martin</h4>
                                <p class="m-0 pb-3">Père de famille</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 3 -->
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                "Je suis très satisfaite du service d'ArtisApp. Les produits bio sont de très bonne qualité
                                et les prix sont compétitifs. L'interface de l'application est intuitive et facile à
                                utiliser.
                                Bravo à toute l'équipe !"
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Sophie Leroy">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Sophie Leroy</h4>
                                <p class="m-0 pb-3">Nutritionniste</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 4 -->
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                "ArtisApp a révolutionné ma façon de cuisiner ! Grâce à la fraîcheur des produits
                                et à la variété proposée, je peux créer des plats délicieux pour mes clients.
                                Un service professionnel et fiable."
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Pierre Durand">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Pierre Durand</h4>
                                <p class="m-0 pb-3">Chef cuisinier</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Témoignage 5 -->
                <div class="testimonial-item img-border-radius bg-light rounded p-4">
                    <div class="position-relative">
                        <i class="fa fa-quote-right fa-2x text-secondary position-absolute"
                            style="bottom: 30px; right: 0;"></i>
                        <div class="mb-4 pb-4 border-bottom border-secondary">
                            <p class="mb-0">
                                "Depuis que j'utilise ArtisApp, je n'ai plus besoin de me déplacer pour faire mes courses.
                                La livraison est toujours ponctuelle et les produits sont parfaitement emballés.
                                Un gain de temps considérable !"
                            </p>
                        </div>
                        <div class="d-flex align-items-center flex-nowrap">
                            <div class="bg-secondary rounded">
                                <img src="{{ asset('assets/img/testimonial-1.jpg') }}" class="img-fluid rounded"
                                    style="width: 100px; height: 100px;" alt="Nathalie Petit">
                            </div>
                            <div class="ms-4 d-block">
                                <h4 class="text-dark">Nathalie Petit</h4>
                                <p class="m-0 pb-3">Entrepreneur</p>
                                <div class="d-flex pe-5">
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star text-primary"></i>
                                    <i class="fas fa-star "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tastimonial End -->
@endsection

@extends('layout.layout')

@section('content')
    <x-page-header title="Contact" />


    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="p-5 bg-light rounded">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="text-center mx-auto" style="max-width: 700px;">
                            <h1 class="text-primary">Entrer en contact</h1>
                            <p class="mb-4">
                                Si vous avez des questions ou des préoccupations, n'hésitez pas à nous contacter en
                                utilisant le formulaire ci-dessous.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="h-100 rounded">
                            <iframe class="rounded w-100" style="height: 400px;"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3977.303703300245!2d1.181250!3d6.200583!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2stg!4v1720616800000!5m2!1sfr!2stg"
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="" class="">
                            <input type="text" class="w-100 form-control border-0 py-3 mb-4" placeholder="Votre nom">
                            <input type="email" class="w-100 form-control border-0 py-3 mb-4"
                                placeholder="Entrez votre email">
                            <textarea class="w-100 form-control border-0 mb-4" rows="5" cols="10" placeholder="Votre message"></textarea>
                            <button class="w-100 btn form-control border-secondary py-3 bg-white text-primary "
                                type="submit">Soumettre</button>
                        </form>
                    </div>
                    <div class="col-lg-5">
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Adresse</h4>
                                <p class="mb-2">12 Rue de la Paix Limousine, Lome, Togo</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded mb-4 bg-white">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Email</h4>
                                <p class="mb-2">info@artisapp.com</p>
                            </div>
                        </div>
                        <div class="d-flex p-4 rounded bg-white">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div>
                                <h4>Téléphone</h4>
                                <p class="mb-2"> +228 96xxxxxx</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
@endsection

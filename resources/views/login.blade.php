@extends('layout.layout')

@section('content')
    <x-page-header title="Connexion" />
    <!-- Checkout Page Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <h1 class="mb-4 text-center">Page de connexion</h1>
            <form action="#">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="row g-4">


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Adresse email <sup>*</sup></label>
                                    <input type="email" class="form-control" placeholder="Votre adresse email">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">Mot de passe <sup>*</sup></label>
                                    <input type="password" class="form-control" placeholder="**************">
                                </div>
                            </div>



                            <div class="col-12">
                                <div class="form-check my-1">
                                    <input type="checkbox" class="form-check-input" id="createAccount" name="Accounts">
                                    <label class="form-check-label" for="createAccount">Se souvenir de moi</label>
                                </div>
                            </div>

                            <button type="button" class="btn btn-primary text-white fs-6">Se connecter</button>

                            <div class=" text-end mt-4">
                                <a href="/signup" class="px-4 py-3 text-primary ">Vous n'avez pas de compte ? Créer un
                                    compte</a>
                            </div>
                        </div>
                    </div>
            </form>
        </div>
    </div>
    <!-- Checkout Page End -->
@endsection

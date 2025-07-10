@extends('layout.layout')

@section('content')
    <x-page-header title="Profile" />

    <div class="container py-5" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0 rounded-3">
                    <div class="card-header bg-primary text-white fw-bold">
                        Mon Profil
                    </div>

                    <div class="card-body">
                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="text-center mb-4" class="rounded-circle mb-2" width="120" height="120"
                                alt="Photo de profil">
                                <div class="form-group">
                                    <label for="photo">Changer la photo</label>
                                    <input type="file" class="form-control" name="photo" accept="image/*">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="name">Nom complet</label>
                                <input type="text" class="form-control" name="name" value="" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="email">Adresse Email</label>
                                <input type="email" class="form-control" name="email" value="" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="phone">Téléphone</label>
                                <input type="text" class="form-control" name="phone" value="">
                            </div>

                            <div class="form-group mb-4">
                                <label for="created_at">Date d’inscription</label>
                                <input type="text" class="form-control" disabled value="">
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Mettre à jour</button>
                                <a href=""
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-danger">Se déconnecter</a>
                            </div>

                            <form id="logout-form" action="" method="POST" class="d-none">
                                @csrf
                            </form>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

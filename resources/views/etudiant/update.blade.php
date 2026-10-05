<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD - LARAVEL 13</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous">
    </head>
    <body class="p-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-12">
                    <h1>CRUD IN LARAVEL 13</h1>

                    <h4 class="text-secondary fst-italic">Formulaire de modification</h4>
                    <a href="/" class="btn btn-primary mt-2">Retourner à la liste</a>
                    <form action="/update/traitement" method="post" class="form-group rounded-5 bg-dark p-5 mt-4">
                        @csrf

                        @if (session('status'))
                            <div class="alert alert-success col-12 rounded-3 text-center">{{ session('status') }}</div>
                        @endif

                        <div class="row">
                            <div class="col">
                                <input
                                    type="hidden"
                                    class="form-control"
                                    placeholder="Nom"
                                    name="id"
                                    value="{{$etudiants->id}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Nom"
                                    aria-label="First name"
                                    name="nom"
                                    value="{{$etudiants->nom}}">
                                @error ('nom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Prénom"
                                    aria-label="Last name"
                                    name="prenom"
                                    value="{{$etudiants->prenom}}">
                                @error ('prenom')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Ajouter une classe"
                                    aria-label="First name"
                                    name="classe"
                                    value="{{$etudiants->classe}}">
                                @error ('classe')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col">
                                <select
                                    class="form-select"
                                    aria-label="Default select example"
                                    name="sexe"
                                    value="{{$etudiants->sexe}}">
                                    @if ($etudiants->sexe === "feminin")
                                        <option value="feminin">Féminin</option>
                                        <option value="masculin">Masculin</option>
                                    @else
                                    <option value="masculin">Masculin</option>
                                        <option value="feminin">Féminin</option>
                                    @endif
                                </select>
                                @error ('sexe')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-success mt-3 col-12">Modifier un étudiant</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous">

        </script>
    </body>
</html>

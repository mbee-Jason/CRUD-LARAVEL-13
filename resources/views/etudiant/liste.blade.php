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

                    <h4 class="text-secondary fst-italic">Liste des étudiants</h4>
                    <a href="/ajouter" class="btn btn-primary mt-2">Ajouter un étudiant</a>
                    @if (session('status'))
                        <div class="alert alert-success col-12 rounded-3 text-center mt-3">{{ session('status') }}</div>
                    @endif

                    <table class="table table-dark table-striped mt-2">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Prénom</th>
                                <th>Nom</th>
                                <th>Classe</th>
                                <th>Sexe</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($etudiants as $etudiant)
                                <tr>
                                    <td>
                                        @if ($loop->iteration < 10)
                                            0{{ $loop->iteration }}
                                        @else
                                            {{ $loop->iteration }}
                                        @endif
                                    </td>
                                    <td>{{ $etudiant->prenom }}</td>
                                    <td>{{ $etudiant->nom }}</td>
                                    <td>{{ $etudiant->classe }}</td>
                                    <td>{{ $etudiant->sexe }}</td>
                                    <td class="">
                                        <a href="/update-etudiant/{{ $etudiant->id }}" class="btn btn-warning">
                                            Update
                                        </a>
                                        <a href="/delete-etudiant/{{ $etudiant->id }}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{ $etudiants->links(); }}
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

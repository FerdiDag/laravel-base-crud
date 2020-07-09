@extends('layouts.app')

@section('page-title', 'Inserimento Nuovo Studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Inserisci Nuovo Studente</h1>
                <form action="{{ route('students.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nome studente">
                    </div>
                    <div class="form-group">
                        <label for="cognome">Cognome</label>
                        <input type="text" name="surname" class="form-control" id="surname" placeholder="Cognome studente">
                    </div>
                    <div class="form-group">
                        <label for="matricola">Numero Matricola</label>
                        <input type="number" name="student_id" class="form-control" id="student_id" placeholder="Numero Matricola">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-primary">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection

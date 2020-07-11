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
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome studente" value="{{ old('name') }}">
                    @error ('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Cognome studente" value="{{ old('surname') }}">
                    @error ('surname')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="matricola">Numero Matricola</label>
                    <input type="text" name="student_id" class="form-control" id="student_id" placeholder="Numero Matricola" value="{{ old('student_id') }}">
                    @error ('student_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}">
                    @error ('email')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Salva</button>
            </form>
        </div>
    </div>
</div>
@endsection
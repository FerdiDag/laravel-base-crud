@extends('layouts.app')

@section('page-title', 'Modifica dati studente')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="mt-3 mb-3">Modifica dati studente</h1>
            <form action="{{ route('students.update', ['student' => $student->id]) }}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nome studente" value="{{ old('name', $student->name) }}">
                    @error ('name')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="surname" class="form-control" id="surname" placeholder="Cognome studente" value="{{ old('surname', $student->surname) }}">
                    @error ('surname')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="matricola">Numero Matricola</label>
                    <input type="text" name="student_id" class="form-control" id="student_id" placeholder="Numero Matricola" value="{{ old('student_id', $student->student_id) }}">
                    @error ('student_id')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{ old('email', $student->email) }}">
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

@extends('layouts.app')

@section('page-title', 'Info studente')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-3 mb-3">Info studente</h1>
                <ul>
                    <li>ID: {{ $student->id }}</li>
                    <li>Nome: {{ $student->name }}</li>
                    <li>Cognome: {{ $student->surname }}</li>
                    <li>Numero Matricola: {{ $student->student_id }}</li>
                    <li>Email: {{ $student->email }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection

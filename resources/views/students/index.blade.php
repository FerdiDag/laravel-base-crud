@extends('layouts.app')

@section('page-title', 'Lista studenti')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="mt-3 mb-3">Lista studenti</h1>
                <a class="btn btn-primary" href="{{ route('students.create') }}">
                    Inserisci Nuovo Studente
                </a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Matricola</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->surname }}</td>
                        <td>{{ $student->student_id }}</td>
                        <td>{{ $student->email }}</td>
                        <td class="text-right">
                            <a class="btn btn-info btn-sm" href="{{ route('students.show', ['student' => $student->id]) }}">
                                Dettagli
                            </a>
                        </td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

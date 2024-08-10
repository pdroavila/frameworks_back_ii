@extends('layouts.app')

@section('content')
<div class="task-create-container">
    <div class="task-create-card">
        <h1 class="task-create-title">Nova Tarefa</h1>
        <form action="{{ route('tasks.store') }}" method="POST" class="task-create-form">
            @csrf
            <div class="form-group">
                <input type="text" name="title" id="title" class="form-input @error('title') is-invalid @enderror" value="{{ old('title') }}" required placeholder="Título da tarefa">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <textarea name="description" id="description" class="form-input @error('description') is-invalid @enderror" rows="4" placeholder="Descrição da tarefa">{{ old('description') }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <input type="date" name="due_date" id="due_date" class="form-input @error('due_date') is-invalid @enderror" value="{{ old('due_date') }}">
                @error('due_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Criar Tarefa</button>
                <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>

<style>
    .task-create-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f7f7f7;
        padding: 20px;
    }
    .task-create-card {
        background: white;
        border-radius: 20px;
        padding: 40px;
        width: 100%;
        max-width: 500px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }
    .task-create-title {
        font-size: 28px;
        font-weight: 700;
        color: #333;
        margin-bottom: 30px;
        text-align: center;
    }
    .task-create-form .form-group {
        margin-bottom: 25px;
    }
    .form-input {
        width: 100%;
        padding: 15px;
        border: 2px solid #e1e1e1;
        border-radius: 10px;
        font-size: 16px;
        transition: all 0.3s ease;
    }
    .form-input:focus {
        border-color: #4a90e2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.1);
        outline: none;
    }
    .form-actions {
        display: flex;
        justify-content: space-between;
        margin-top: 30px;
    }
    .btn {
        padding: 12px 25px;
        border-radius: 8px;
        font-size: 16px;
        font-weight: 600;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    .btn-primary {
        background-color: #4a90e2;
        color: white;
        border: none;
    }
    .btn-primary:hover {
        background-color: #3a7bc8;
    }
    .btn-secondary {
        background-color: #f5f5f5;
        color: #333;
        border: 1px solid #e1e1e1;
    }
    .btn-secondary:hover {
        background-color: #e9e9e9;
    }
    .invalid-feedback {
        color: #e74c3c;
        font-size: 14px;
        margin-top: 5px;
    }
</style>
@endsection
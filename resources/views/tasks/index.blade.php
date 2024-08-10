@extends('layouts.app')

@section('content')
<div class="task-list-container">
    <div class="task-list-header">
        <h1 class="task-list-title">Minhas Tarefas</h1>
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Nova Tarefa</a>
    </div>
    
    <div class="task-list">
        @forelse ($tasks as $task)
            <div class="task-card">
                <div class="task-content">
                    <h2 class="task-title">{{ $task->title }}</h2>
                    <p class="task-description">{{ $task->description }}</p>
                    <span class="task-due-date">{{ $task->due_date ? $task->due_date->format('d/m/Y') : 'Sem prazo' }}</span>
                </div>
                <div class="task-actions">
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-edit">Editar</a>
                    <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete">Excluir</button>
                    </form>
                </div>
            </div>
        @empty
            <div class="no-tasks">
                <p>Você ainda não tem tarefas. Que tal criar uma?</p>
            </div>
        @endforelse
    </div>
</div>

<style>
    .task-list-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 0 20px;
    }
    .task-list-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }
    .task-list-title {
        font-size: 32px;
        font-weight: 700;
        color: #333;
    }
    .task-list {
        display: grid;
        gap: 20px;
    }
    .task-card {
        background: white;
        border-radius: 12px;
        padding: 20px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }
    .task-content {
        flex-grow: 1;
    }
    .task-title {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 10px;
    }
    .task-description {
        font-size: 16px;
        color: #666;
        margin-bottom: 10px;
    }
    .task-due-date {
        font-size: 14px;
        color: #888;
    }
    .task-actions {
        display: flex;
        gap: 10px;
    }
    .btn {
        padding: 8px 16px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        cursor: pointer;
    }
    .btn-primary {
        background-color: #4a90e2;
        color: white;
        border: none;
    }
    .btn-primary:hover {
        background-color: #3a7bc8;
    }
    .btn-edit {
        background-color: #f0ad4e;
        color: white;
        border: none;
    }
    .btn-edit:hover {
        background-color: #ec971f;
    }
    .btn-delete {
        background-color: #d9534f;
        color: white;
        border: none;
    }
    .btn-delete:hover {
        background-color: #c9302c;
    }
    .no-tasks {
        text-align: center;
        padding: 40px;
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    @media (max-width: 600px) {
        .task-card {
            flex-direction: column;
        }
        .task-actions {
            margin-top: 15px;
            justify-content: flex-start;
        }
    }
</style>
@endsection
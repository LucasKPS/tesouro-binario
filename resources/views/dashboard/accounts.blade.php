@extends('layout.app')

@section('title', 'Gerenciar Contas')

@section('link')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection

@section('content')

<div class="container-fluid">
    <h1 class="display-5">Gerencie seus Usuários</h1>

    <!-- Botão para abrir o Modal de Criação de Subconta -->
    <div class="container">
        <div class="card p-4" style="margin-top: 25px;">
            <div class="table-responsive">
                @if ($people->count() > 0)
                    <table class='table table-bordered' id='dataTable' width='100%' cellspacing='0'>
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Telefone</th>
                                <th>Salário</th>
                                <th>Nível</th>
                                <th>Opções</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($people as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->telefone }}</td>
                                    <td>R${{ number_format($user->salario ?? 0, 2, ',', '.') }}</td>
                                    <td>{{ $user->nivel_label }}</td>
                                    <td class='d-flex justify-content-center gap-3'>
                                        <!-- Botão de Edição -->
                                        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal-{{ $user->id }}">
                                            <i class='fa-solid fa-pen-to-square'></i> Editar
                                        </button>

                                        <!-- Botão de Exclusão -->
                                        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $user->id }}">
                                            <i class='fa-solid fa-trash'></i> Excluir
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal de Edição -->
                                @include('components.edit', ['user' => $user])

                                <!-- Modal de Exclusão -->
                                @include('components.delete', ['user' => $user])

                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Nenhum usuário encontrado.</p>
                @endif
            </div>
        </div>
    </div>

    <!-- Botão para abrir o modal de criação de subconta -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSubContaModal">
        Criar Subconta
    </button>
</div>

<!-- Modal para criação de subconta -->
@include('components.criar') <!-- Adicione a inclusão do modal aqui -->
@endsection

<script>
    (() => {
        'use strict';

        const forms = document.querySelectorAll('.needs-validation');

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();

    function mask(o, f) {
        setTimeout(() => {
            const v = mphone(o.value);
            if (v !== o.value) {
                o.value = v;
            }
        }, 1);
    }

    function mphone(v) {
        let r = v.replace(/\D/g, "");
        r = r.replace(/^0/, "");
        if (r.length > 11) {
            r = r.replace(/^(\d{2})(\d{5})(\d{4}).*/, "($1) $2-$3");
        } else if (r.length > 5) {
            r = r.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, "($1) $2-$3");
        } else if (r.length > 2) {
            r = r.replace(/^(\d{2})(\d{0,5})/, "($1) $2");
        } else if (r.length > 0) {
            r = r.replace(/^(\d*)/, "($1");
        } else {
            r = "";
        }
        return r;
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script> <!-- Link para o arquivo JS customizado -->
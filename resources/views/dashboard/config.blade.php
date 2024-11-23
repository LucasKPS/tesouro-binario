@extends('layout.app')

@section('style')
    href="{{ asset('css/dashboard.css') }}"
@endsection

@section('title', 'Balanço')

@section('content')

    <!-- Conteúdo do card com seções alternáveis -->
    <div class="section" style="padding-top: 100px">
        <div class="card">
            <div class="dashboard-container">
                <div class="menu">
                    <button onclick="showSection('perfil')" id="btn-perfil" class="menu-btn active">Editar Perfil</button>
                    <button onclick="showSection('preferencias')" id="btn-preferencias" class="menu-btn">Preferências</button>
                    <button onclick="showSection('seguranca')" id="btn-seguranca" class="menu-btn">Segurança</button>
                </div>

                <!-- Conteúdo alternável do card -->
                <div id="perfil" class="content-section">
                    <form id="editarPerfilForm">
                        <h2 class="section-title" style="padding-bottom: 10px; text-align: center; color: #27599b">Editar Perfil</h2>
                        <!-- Campos de perfil -->
                        <div class="form-row">
                            <div class="form-group2">
                                <label for="nome">Seu Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control" placeholder="Charlene Reed">
                            </div>
                            <div class="form-group">
                                <label for="username">Nome de Usuário</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="Charlene Reed">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group2">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="charlenereed@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" id="senha" name="senha" class="form-control" placeholder="********">
                            </div>
                        </div>
                        <button type="button" class="btn-save">Salvar</button>
                    </form>
                </div>

                <div id="preferencias" class="content-section" style="display: none;">
                    <h2 class="section-title">Preferências</h2>
                    <form id="preferenciasForm">
                        <div class="form-group">
                            <label for="tema">Tema</label>
                            <select id="tema" name="tema" class="form-control">
                                <option value="claro">Claro</option>
                                <option value="escuro">Escuro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="notificacoes">Notificações</label>
                            <input type="checkbox" id="notificacoes" name="notificacoes">
                            <label for="notificacoes">Ativar notificações</label>
                        </div>
                        <button type="button" class="btn-save">Salvar Preferências</button>
                    </form>
                </div>

                <div id="seguranca" class="content-section" style="display: none;">
                    <h2 class="section-title">Segurança</h2>
                    <form id="segurancaForm">
                        <div class="form-group">
                            <label for="senha_atual">Senha Atual</label>
                            <input type="password" id="senha_atual" name="senha_atual" class="form-control" placeholder="********">
                        </div>
                        <div class="form-group">
                            <label for="nova_senha">Nova Senha</label>
                            <input type="password" id="nova_senha" name="nova_senha" class="form-control" placeholder="********">
                        </div>
                        <div class="form-group">
                            <label for="confirmar_senha">Confirmar Nova Senha</label>
                            <input type="password" id="confirmar_senha" name="confirmar_senha" class="form-control" placeholder="********">
                        </div>
                        <button type="button" class="btn-save">Atualizar Segurança</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function showSection(sectionId) {
            // Esconder todas as seções de conteúdo
            document.querySelectorAll('.content-section').forEach(section => {
                section.style.display = 'none';
            });

            // Mostrar apenas a seção selecionada
            document.getElementById(sectionId).style.display = 'block';

            // Alterar o botão ativo no menu
            document.querySelectorAll('.menu-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            document.getElementById(`btn-${sectionId}`).classList.add('active');
        }
    </script>
@endsection

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
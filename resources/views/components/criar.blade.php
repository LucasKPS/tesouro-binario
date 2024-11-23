<!-- Modal -->
<div class="modal fade" id="createSubContaModal" tabindex="-1" aria-labelledby="createSubContaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createSubContaModalLabel">Criar Subconta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Formulário para criação da subconta -->
                <form action="{{ route('subconta.store') }}" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                    @csrf
                    <div class="col-sm-9">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite seu nome completo" required>
                        <div class="invalid-feedback">Você deve informar o seu nome.</div>
                    </div>
                    <div class="col-sm-3">
                        <label class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(99) 99999-9999" onkeypress="mask(this, mphone);" required>
                        <div class="invalid-feedback">Você deve informar o telefone.</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                        <div class="invalid-feedback">Você deve informar o email.</div>
                    </div>
                    <div class="col-sm-6">
                        <label class="form-label">Senha</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Digite sua senha" required>
                        <div class="invalid-feedback">Você deve informar a senha.</div>
                    </div>
                    <div class="col-sm-12">
                        <label class="form-label">Imagem de usuário</label>
                        <input type="file" class="form-control" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Criar Subconta</button>
                </form>
            </div>
        </div>
    </div>
</div>
<h1>Novo Usuario</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
    <label for="">Nome</label>
    <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">E-mail</label>
    <input type="text" name="email" class="form-control" >
    </div>
    <div class="mb-3">
    <label for="">Senha</label>
    <input type="password" name="senha" class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Data Nascimento</label>
    <input type="date" name="data_nasc" class="form-control">
    </div>
    <div class="mb-3">
    <button type="submit" class="btn-primary">ENVIAR</button>
    </div>
</form>
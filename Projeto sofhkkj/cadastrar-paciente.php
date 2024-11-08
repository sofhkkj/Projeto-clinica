<h1>Cadastrar Pacientes</h1>
<form action = "?page=salvar-paciente" method="POST">
    <input type ="hidden" name = "acao" value="cadastrar">
    <div class = "mb-3">
        <label> Nome </label>
        <input type = "text" name = "nome_paciente" class = "form-control">
    </div>
    <div class = "mb-3">
        <label> CPF </label>
        <input type = "number " name = "cpf_paciente" class = "form-control">
    </div>
    <div class = "mb-3">
        <label> EMAIL </label>
        <input type = "email" name = "email_paciente" class = "form-control">
    </div>
    <div class = "mb-3">
        <label> Data de Nascimento </label>
        <input type = "date" name = "dt_nasc_paciente" class = "form-control">
    </div>
    <div class = "mb-3">
        <label> Endereço </label>
        <input type = "text" name = "endereco_paciente" class = "form-control">
    </div>
    <div class="mb-3">
        <label for="sexo_paciente">Sexo</label>
        <select name="sexo_paciente" id="sexo_paciente" class="form-control" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="outro">Outro</option>
        </select>
    </div>
    <div class = "mb-3">
       <button type = "submit" class = "btn btn-success"> Salvar </button>
    </div>
</form>
<main class="content">

<h2>Formulário de inspeção</h2>
<h2>Travaquedas</h2>
<br>
<h6>Objetivo</h6>
<p>Além da rotina de virficacao de cada uso, o EPI deve ser submetido regularmente a uma inspecao detalhada por uma pessoa competente. 
    A Ultra Safe recomenda inspecao a cada 12 meses ou apos quailquer acontecimento excepecional na vida do produto.
A inspecao de EPI deve ser realizada de acordo com as instrucoes de uso do fabricante.
Baixe as instrucoes em <a href="https://www.ultrasafe.com.br" target="_blank">UltraSafe.com</a></p>

<br>

<form action="#" method="post">
<h6>Informações do usuário</h6>
    <div class="form-row">
        <div class="form-group col-md-8">
            <label for="nome">Nome</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-4">
            <label for="nascimento">Empresa</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="email">Local de Trabalho(Endereço)</label>
            <input type="text"
                class="form-control <?= $erros['email'] ? 'is-invalid' : ''?>"
                id="email" name="email" placeholder="E-mail"
                value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback">
                <?= $erros['email'] ?>
            </div>
        </div>
    </div>


    
    <h6>Informações do EPI</h6>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nome">Codigo</label>
            <input type="text" 
                class="form-control <?= $erros['nome'] ? 'is-invalid' : ''?>"
                id="nome" name="nome" placeholder="Nome"
                value="<?= $_POST['nome'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nome'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Ano de fabricacao</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Data de compra</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="nascimento">Data do primeiro uso</label>
            <input type="text"
                class="form-control <?= $erros['nascimento'] ? 'is-invalid' : ''?>"
                id="nascimento" name="nascimento"
                placeholder="Nascimento"
                value="<?= $_POST['nascimento'] ?>">
            <div class="invalid-feedback">
                <?= $erros['nascimento'] ?>
            </div>
        </div>
    </div>




<br>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>    
</main>
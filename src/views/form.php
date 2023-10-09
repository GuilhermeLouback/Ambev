
<link rel="icon" href="/assets/css/favicon.ico" type="image/x-icon">

<title>Ultra Safe</title>

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
            <label for="empresa">Empresa</label>
            <input type="text"
                class="form-control <?= $erros['empresa'] ? 'is-invalid' : ''?>"
                id="empresa" name="nascimento"
                placeholder="Empresa"
                value="<?= $_POST['empresa'] ?>">
            <div class="invalid-feedback">
                <?= $erros['empresa'] ?>
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="ltrabalho">Local de Trabalho(Endereço)</label>
            <input type="text"
                class="form-control <?= $erros['ltrabalho'] ? 'is-invalid' : ''?>"
                id="ltrabalho" name="ltrabalho" placeholder="Local de Trabalho"
                value="<?= $_POST['ltrabalho'] ?>">
            <div class="invalid-feedback">
                <?= $erros['ltrabalho'] ?>
            </div>
        </div>
    </div>


    <br></br>
    

    <h6>Informações do EPI</h6>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="codigo">Codigo</label>
            <input type="text" 
                class="form-control <?= $erros['codigo'] ? 'is-invalid' : ''?>"
                id="codigo" name="codigo" placeholder="Código"
                value="<?= $_POST['codigo'] ?>">
            <div class="invalid-feedback">
                <?= $erros['codigo'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="anofabric">Ano de fabricacao</label>
            <input type="date"
                class="form-control <?= $erros['anofabric'] ? 'is-invalid' : ''?>"
                id="anofabric" name="anofabric"
                placeholder="anofabric"
                value="<?= $_POST['anofabric'] ?>">
            <div class="invalid-feedback">
                <?= $erros['anofabric'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="dt_compra">Data de compra</label>
            <input type="date"
                class="form-control <?= $erros['dt_compra'] ? 'is-invalid' : ''?>"
                id="dt_compra" name="dt_compra"
                placeholder="dt_compra"
                value="<?= $_POST['dt_compra'] ?>">
            <div class="invalid-feedback">
                <?= $erros['dt_compra'] ?>
            </div>
        </div>
        <div class="form-group col-md-3">
            <label for="prim_uso">Data do primeiro uso</label>
            <input type="date"
                class="form-control <?= $erros['prim_uso'] ? 'is-invalid' : ''?>"
                id="prim_uso" name="prim_uso"
                placeholder="prim_uso"
                value="<?= $_POST['prim_uso'] ?>">
            <div class="invalid-feedback">
                <?= $erros['prim_uso'] ?>
            </div>
        </div>
    </div>




<br>
    <button class="btn btn-primary btn-lg">Enviar</button>
</form>    
</main>
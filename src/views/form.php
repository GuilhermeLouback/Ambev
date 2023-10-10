<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultra Safe</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $("form").submit(function (event) {
                event.preventDefault();
                var formData = $(this).serialize();

                if (!validateForm()) {
                    alert("Por favor, preencha todos os campos antes de enviar o formulário.");
                    return;
                } else {
                    $.ajax({
                        type: "POST",
                        url: "data.php",
                        dataType: "json",
                        data: formData,
                        success: function (response) {
                            console.log('Requisicao Enviada');
                        },
                        error: function (error) {
                            console.error("Erro ao enviar variáveis por AJAX: " + error);
                        }
                    });
                    window.location.href = "response.php";
                    return false;
                }
            });
        });
        function validateForm() {
            var nome = $("#nome").val();
            var empresa = $("#empresa").val();
            var ltrabalho = $("#ltrabalho").val();
            var codigo = $("#codigo").val();
            var anofabric = $("#anofabric").val();
            var dt_compra = $("#dt_compra").val();
            var prim_uso = $("#prim_uso").val();
            var antecedentes_produto = $("#antecedentes_produto").val();
            var obs_prev = $("input[name='obs_prev']:checked").val();
            var ins_part_met = $("input[name='ins_part_met']:checked").val();
            var test_func = $("input[name='test_func']:checked").val();
            var verif_conect = $("input[name='verif_conect']:checked").val();
            var comentarios = $("#comentarios").val();
            var estado_result = $("input[name='estado_result']:checked").val();
            var nome_insp = $("#nome_insp").val();
            var empresa_insp = $("#empresa_insp").val();
            var ano_insp = $("#ano_insp").val();
            var dt_px_insp = $("#dt_px_insp").val();
            if (
                nome === "" || empresa === "" || ltrabalho === "" || codigo === "" || anofabric === "" ||
                dt_compra === "" || prim_uso === "" || antecedentes_produto === "" || !obs_prev || !ins_part_met ||
                !test_func || !verif_conect || comentarios === "" || !estado_result || nome_insp === "" ||
                empresa_insp === "" || ano_insp === "" || dt_px_insp === ""
            ) {
                return false;
            }

            return true;
        }
    </script>
</head>

<body>
    <main class="content">
        <h2 class="Title">Formulário de Inspeção Travaquedas</h2>
        <br>
        <h6>OBJETIVO</h6>
        <p>Além da rotina de verificação de cada uso, o EPI deve ser submetido regularmente a uma inspeção detalhada por
            uma pessoa competente.
            A Ultra Safe recomenda inspeção a cada 12 meses ou após qualquer acontecimento excepcional na vida do
            produto.
            A inspeção de EPI deve ser realizada de acordo com as instruções de uso do fabricante.
            Baixe as instruções em <a href="https://www.ultrasafe.com.br" target="_blank">UltraSafe.com</a>.</p>
        <br>
        <form id='form' action="#" method="post">
            <h6>INFORMAÇÕES DO USUÁRIO</h6>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '' ?>" id="nome"
                        name="nome" placeholder="Nome" value="<?= $_POST['nome'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nome'] ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="empresa">Empresa</label>
                    <input type="text" class="form-control <?= $erros['empresa'] ? 'is-invalid' : '' ?>" id="empresa"
                        name="empresa" placeholder="Empresa" value="<?= $_POST['empresa'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['empresa'] ?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label for="ltrabalho">Local de Trabalho (Endereço)</label>
                    <input type="text" class="form-control <?= $erros['ltrabalho'] ? 'is-invalid' : '' ?>"
                        id="ltrabalho" name="ltrabalho" placeholder="Local de Trabalho"
                        value="<?= $_POST['ltrabalho'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['ltrabalho'] ?>
                    </div>
                </div>
            </div>
            <br>
            <h6>INFORMAÇÕES DO EPI</h6>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="codigo">Código</label>
                    <input type="text" class="form-control <?= $erros['codigo'] ? 'is-invalid' : '' ?>" id="codigo"
                        name="codigo" placeholder="Código" value="<?= $_POST['codigo'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['codigo'] ?>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="anofabric">Ano de fabricação</label>
                    <input type="date" class="form-control <?= $erros['anofabric'] ? 'is-invalid' : '' ?>"
                        id="anofabric" name="anofabric" placeholder="Ano de Fabricação"
                        value="<?= $_POST['anofabric'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['anofabric'] ?>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="dt_compra">Data de compra</label>
                    <input type="date" class="form-control <?= $erros['dt_compra'] ? 'is-invalid' : '' ?>"
                        id="dt_compra" name="dt_compra" placeholder="Data de Compra" value="<?= $_POST['dt_compra'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['dt_compra'] ?>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="prim_uso">Data do primeiro uso</label>
                    <input type="date" class="form-control <?= $erros['prim_uso'] ? 'is-invalid' : '' ?>" id="prim_uso"
                        name="prim_uso" placeholder="Data do Primeiro Uso" value="<?= $_POST['prim_uso'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['prim_uso'] ?>
                    </div>
                </div>
            </div>
            <br>
            <h6>1. ANTECEDENTES CONHECIDOS DO PRODUTO</h6>
            <p>Relate as condições de utilização do produto ou algum evento excepcional durante o uso (exemplo: quedas,
                uso
                ou armazenamento em temperaturas extremas, modificação fora das oficinas do fabricante).</p>
            <div class="form-row">
                <textarea class="form-control" id="antecedentes_produto" name="antecedentes_produto" rows="4"
                    placeholder="Descreva aqui os antecedentes conhecidos do produto..."></textarea>
            </div>
            <br>
            <p class="center-paragraph">Através da legenda: B (Bom estado) - V (Verificar) - C (Concerto) - D
                (descartável) -
                N/A (não aplicável). Avalie os itens abaixo.</p>
            <br>
            <h6>2. OBSERVAÇÕES PREVIAS</h6>
            <ul>
                <li>Verifique a presença e legibilidade do código e das marcações de CA (TQ Retrátil), OCP e INMETRO (TQ
                    BLOCK, Brake, SteelBlock);</li>
                <li>Verifique se o produto está dentro do prazo de vida útil;</li>
                <li>Compare com um produto novo a ausência de modificação ou perda de algum elemento.</li>
            </ul>
            <div class="check-box-content" id="obs_prev">
                <label><input type="radio" name="obs_prev" value="B"> B (Bom estado)</label><br>
                <label><input type="radio" name="obs_prev" value="V"> V (Verificar)</label><br>
                <label><input type="radio" name="obs_prev" value="C"> C (Concerto)</label><br>
                <label><input type="radio" name="obs_prev" value="D"> D (descartável)</label><br>
                <label><input type="radio" name="obs_prev" value="N/A"> N/A (não aplicável)</label>
            </div>
            <br>
            <h6>3. INSPEÇÃO DAS PARTES METÁLICAS</h6>
            <ul>
                <li>Verifique a existência de marcas, deformações, rachaduras e/ou corrosões no corpo do dispositivo;
                </li>
                <li>Verifique o estado da parte dentada e das bordas dos orifícios do came: marcas, deformações ou
                    rachaduras são sinais de queda (TQs BLOCK, Brake, SteelBlock);</li>
                <li>Verifique o estado do eixo - marcas, deformações ou rachaduras são sinais de queda (TQ Block);</li>
                <li>No travaquedas Block, verifique se o cabo de aço que prende o eixo ao corpo do travaquedas não
                    apresenta desfiamento;</li>
                <li>No travaquedas retrátil, verifique o estado da carcaça (rachaduras, deformações) e do cabo de aço.
                    Um eventual desfiamento do mesmo pode indicar necessidade de revisão;</li>
                <li>Verifique o estado da caixa protetora do botão de segurança: marcas, deformações ou rachaduras são
                    sinais de queda (TQ Block);</li>
                <li>Verifique o estado e funcionamento do botão de segurança de liberação de eixo (TQ Block);</li>
                <li>Verifique a eficiência da mola na liberação do eixo (TQ Block)</li>
                <li>No travaqueda retrátil, verifique o indicador de stress localizado na junção do Destocedor / Gancho
                    dupla trava: na cor verde, ele sinaliza que o dispositivo não teve estresse, se aparecer um
                    indicador na cor vermelha, ele sinaliza que o dispositivo sofreu queda. Nesse caso o travaquedas
                    retrátil deverá ser encaminhado ao fabricante para reparo (TQ Retrátil)</li>
            </ul>
            <div class="check-box-content" id="ins_part_met">
                <label><input type="radio" name="ins_part_met" value="B"> B (Bom estado)</label><br>
                <label><input type="radio" name="ins_part_met" value="V"> V (Verificar)</label><br>
                <label><input type="radio" name="ins_part_met" value="C"> C (Concerto)</label><br>
                <label><input type="radio" name="ins_part_met" value="D"> D (descartável)</label><br>
                <label><input type="radio" name="ins_part_met" value="N/A"> N/A (não aplicável)</label>
            </div>
            <br>
            <h6>4. TESTE FUNCIONAL</h6>
            <ul>
                <li>Instale o travaquedas em uma corda (TQ Block ou Brake) ou cabo de aço (TQ Steel Block) compatível
                    com o dispositivo (diâmetro e tipo de construção) conforme indicado no manual do produto;</li>
                <li>Verifique o deslizamento adequado do dispositivo através da corda ou cabo de aço: totalmente
                    liberado na subida, deslizamento suave descida em velocidade controlada e frenagem instantânea
                    quando puxado para baixo, na direção da queda (TQs Block, Brake, Steel Block);</li>
                <li>Depois do travamento, verifique se a remoção do travaquedas da corda ou cabo de aço é realizada com
                    facilidade (TQs Block, Brake e Steel Block);</li>
                <li>No TQ Retrátil, puxe o cabo de aço com firmeza e verifique se o mecanismo interno está travando
                    corretamente. Se não travar, o dispositivo deverá ser enviado ao fabricante para reparo.</li>
            </ul>
            <div class="check-box-content" id="test_func">
                <label><input type="radio" name="test_func" value="B"> B (Bom estado)</label><br>
                <label><input type="radio" name="test_func" value="V"> V (Verificar)</label><br>
                <label><input type="radio" name="test_func" value="C"> C (Concerto)</label><br>
                <label><input type="radio" name="test_func" value="D"> D (descartável)</label><br>
                <label><input type="radio" name="test_func" value="N/A"> N/A (não aplicável)</label>
            </div>
            <br>
            <h6>5. VERIFICAÇÃO DO CONECTOR</h6>
            <p>Consulte o formulário de inspeção em <a href="https://www.ultrasafe.com.br"
                    target="_blank">UltraSafe.com</a></p>
            <div class="check-box-content" id="verif_conect">
                <label><input type="radio" name="verif_conect" value="B"> B (Bom estado)</label><br>
                <label><input type="radio" name="verif_conect" value="V"> V (Verificar)</label><br>
                <label><input type="radio" name="verif_conect" value="C"> C (Concerto)</label><br>
                <label><input type="radio" name="verif_conect" value="D"> D (descartável)</label><br>
                <label><input type="radio" name="verif_conect" value="N/A"> N/A (não aplicável)</label>
            </div>
            <br>
            <h6>COMENTÁRIOS</h6>
            <div class="form-row">
                <textarea class="form-control" id="comentarios" name="comentarios" rows="4"
                    placeholder="Descreva aqui os comentários..."></textarea>
            </div>
            <br>
            <h6>RESULTADO</h6>
            <div class="check-box-content" id="estado_result">
                <label><input type="radio" name="estado_result" value="APV"> Produto APROVADO para continuar em
                    serviço</label><br>
                <label><input type="radio" name="estado_result" value="RPV"> Produto NÃO APROVADO para continuar em
                    serviço</label><br>
            </div>
            <br>
            <h6>DADOS FINAIS</h6>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="nome_insp">Nome do inspetor</label>
                    <input type="text" class="form-control <?= $erros['nome_insp'] ? 'is-invalid' : '' ?>"
                        id="nome_insp" name="nome_insp" placeholder="Nome Inspetor" value="<?= $_POST['nome_insp'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['nome_insp'] ?>
                    </div>
                </div>
                <div class="form-group col-md-4">
                    <label for="empresa_insp">Empresa</label>
                    <input type="text" class="form-control <?= $erros['empresa_insp'] ? 'is-invalid' : '' ?>"
                        id="empresa_insp" name="empresa_insp" placeholder="Empresa"
                        value="<?= $_POST['empresa_insp'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['empresa_insp'] ?>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="ano_insp">Ano da inspeção</label>
                    <input type="date" class="form-control <?= $erros['ano_insp'] ? 'is-invalid' : '' ?>" id="ano_insp"
                        name="ano_insp" placeholder="Ano da Inspeção" value="<?= $_POST['ano_insp'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['ano_insp'] ?>
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="dt_px_insp">Data da próxima inspeção</label>
                    <input type="date" class="form-control <?= $erros['dt_px_insp'] ? 'is-invalid' : '' ?>"
                        id="dt_px_insp" name="dt_px_insp" placeholder="Data da Próxima Inspeção"
                        value="<?= $_POST['dt_px_insp'] ?>">
                    <div class="invalid-feedback">
                        <?= $erros['dt_px_insp'] ?>
                    </div>
                </div>
            </div>
            <br>
            <div class="center">
                <button id="enviarButton" class="btn btn-primary btn-lg">Enviar</button>
            </div>
        </form>
    </main>
</body>

</html>
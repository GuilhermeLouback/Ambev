<?php


require_once(dirname(__FILE__, 2) . '/src/config/config.php');
session_start();
requireValidSession();

if(!empty($_POST["nome"]) | !empty($_POST["empresa"]) | !empty($_POST["ltrabalho"]) | !empty($_POST["codigo"]) | !empty($_POST["anofabric"]) | !empty($_POST["dt_compra"]) | !empty($_POST["prim_uso"]) | !empty($_POST["antecedentes_produto"]) | !empty($_POST["obs_prev"]) | !empty($_POST["ins_part_met"]) | !empty($_POST["test_func"]) | !empty($_POST["verif_conect"]) | !empty($_POST["comentarios"]) | !empty($_POST["estado_result"]) | !empty($_POST["nome_insp"]) | !empty($_POST["empresa_insp"]) | !empty($_POST["ano_insp"]) | !empty($_POST["dt_px_insp"])){
$nome = $_POST["nome"];
$empresa = $_POST["empresa"];
$ltrabalho = $_POST["ltrabalho"];
$codigo = $_POST["codigo"];
$anofabric = $_POST["anofabric"];
$dt_compra = $_POST["dt_compra"];
$prim_uso = $_POST["prim_uso"];
$antecedentes_produto = $_POST["antecedentes_produto"];
$obs_prev = $_POST["obs_prev"];
$ins_part_met = $_POST["ins_part_met"];
$test_func = $_POST["test_func"];
$verif_conect = $_POST["verif_conect"];
$comentarios = $_POST["comentarios"];
$estado_result = $_POST["estado_result"];
$nome_insp = $_POST["nome_insp"];
$empresa_insp = $_POST["empresa_insp"];
$ano_insp = $_POST["ano_insp"];
$dt_px_insp = $_POST["dt_px_insp"];


$db = new Database();
$conn = $db->getConnection();

$sql = "INSERT INTO respostas_formulario (user_id, nome, empresa, ltrabalho, codigo, anofabric, dt_compra, prim_uso, antecedentes_produto, obs_prev, ins_part_met, test_func, verif_conect, comentarios, estado_result, nome_insp, empresa_insp, ano_insp, dt_px_insp)
        VALUES (".$_SESSION['user']->id.", '$nome', '$empresa', '$ltrabalho', '$codigo', '$anofabric', '$dt_compra', '$prim_uso', '$antecedentes_produto', '$obs_prev', '$ins_part_met', '$test_func', '$verif_conect', '$comentarios', '$estado_result', '$nome_insp', '$empresa_insp', '$ano_insp', '$dt_px_insp')";

$stmt = $conn->prepare($sql);
$stmt->execute();
$conn->close();



$response = array(
    "nome" => $nome,
    "empresa" => $empresa,
    "ltrabalho" => $ltrabalho,
    "codigo" => $codigo,
    "anofabric" => $anofabric,
    "dt_compra" => $dt_compra,
    "prim_uso" => $prim_uso,
    "antecedentes_produto" => $antecedentes_produto,
    "obs_prev" => $obs_prev,
    "ins_part_met" => $ins_part_met,
    "test_func" => $test_func,
    "verif_conect" => $verif_conect,
    "comentarios" => $comentarios,
    "estado_result" => $estado_result,
    "nome_insp" => $nome_insp,
    "empresa_insp" => $empresa_insp,
    "ano_insp" => $ano_insp,
    "dt_px_insp" => $dt_px_insp,
    "usuario" => array(
        'user' => $_SESSION['user']->id,
    )
);

header("Content-Type: application/json");
echo json_encode($response);

}


?>
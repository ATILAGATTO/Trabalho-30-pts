<?php
include_once('config/constantes.php');
include_once('config/conexao.php');
include_once('func/funcoes.php');

$conn = conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnAddContato"])) {
    $nome = $_POST["nomeAdd"];
    $whatsapp = $_POST["whatsappAdd"];
    $senha = $_POST["senhaAdd"];

    // Verifica se o nome e o WhatsApp estão preenchidos
    if (!empty($nome) && !empty($whatsapp) && !empty($senha)) {
        $registro = $conn->prepare('INSERT INTO contato(nome, whatsapp, senha) VALUES(:nome, :whatsapp, :senha)');
        $registro->bindValue(':nome', $nome, PDO::PARAM_STR);
        $registro->bindValue(':whatsapp', $whatsapp, PDO::PARAM_STR);
        $registro->bindValue(':senha', $senha, PDO::PARAM_STR);

        try {
            $conn->beginTransaction();
            $registro->execute();
            $conn->commit();
            header("Location: index.php?page=cadastro");
        } catch (PDOException $e) {
            $conn->rollback();
            echo 'Erro ao cadastrar: ' . $e->getMessage();
        }
    } else {
        $erromsg = "Por favor, preencha todos os campos.";
    }
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
    <div class="card border border-4  border-light bg-dark text-white text-center position-absolute top-50 start-50 translate-middle">
        <div class="card-header">
            <h1>Cadastro</h1>
            <?php
            $options = [
                'cost' => 12,
            ];
            $senha = '12345678';
            $senhaHash = password_hash($senha, PASSWORD_BCRYPT, $options);
            echo $senhaHash;
            ?>
        </div>
        <form method="POST" action="#">
            <div class="card-body border border-light">
                <div class="mb-3">
                    <label for="nomeAdd" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nomeAdd" name="nomeAdd">
                </div>
                <div class="mb-3">
                    <label for="whatsappAdd" class="form-label">WhatsApp</label>
                    <input type="text" class="form-control" name="whatsappAdd" id="whatsappAdd">
                </div>
                <div class="mb-3">
                    <label for="senhaAdd" class="form-label">Senha</label>
                    <input type="text" class="form-control" name="senhaAdd" id="senhaAdd">
                </div>
            </div>
            <div class="alert alert-danger text-center text-white" role="alert"><?php echo $errom?></div>
            <div class="card-footer text-body-secondary">
                <button type="button" name="btnAddContato" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>

    <script src="./js/func.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
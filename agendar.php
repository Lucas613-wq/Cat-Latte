<?php
$host = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'cat latte';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$banco;charset=utf8", $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_Cliente = $_POST['nome'] ?? '';
    $data         = $_POST['data_visita'] ?? '';
    $hora         = $_POST['horario'] ?? '';
    $data_hora    = $data . ' ' . $hora;
    $servico      = "Pessoas: " . ($_POST['qtd_pessoas'] ?? '') . " | Tel: " . ($_POST['telefone'] ?? '') . " | Obs: " . ($_POST['observacoes'] ?? '');

    // Garante que a coluna 'date_hora' exista no banco para não dar erro nunca mais
    try {
        $pdo->exec("ALTER TABLE agendamentos ADD COLUMN date_hora VARCHAR(100)");
    } catch (PDOException $e) {
        // Se a coluna já existir, ele ignora o erro e segue em frente
    }

    try {
        $sql = "INSERT INTO agendamentos (nome_Cliente, date_hora, servico) 
                VALUES (:nome_Cliente, :date_hora, :servico)";
        
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nome_Cliente' => $nome_Cliente,
            ':date_hora'    => $data_hora,
            ':servico'      => $servico
        ]);

        echo "<div style='text-align:center; padding: 50px; font-family: sans-serif;'>";
        echo "<h1>🐾 Agendamento Confirmado!</h1>";
        echo "<p>Obrigado, <strong>" . htmlspecialchars($nome_Cliente) . "</strong>! Seu agendamento para <strong>$data_hora</strong> foi registrado com sucesso.</p>";
        echo "<a href='index.html' style='color:#a67c52;'>Voltar ao site</a>";
        echo "</div>";

    } catch (PDOException $e) {
        echo "Erro ao salvar: " . $e->getMessage();
    }
}
?>
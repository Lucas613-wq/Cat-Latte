<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento | Cat Latte</title>
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500&family=Parisienne&display=swap" rel="stylesheet">
</head>
<body>

    <nav>
        <a href="index.html">Início</a>
    </nav>

    <section class="agendamento" id="agendamento">
        <div class="agendamento-container">

            <!-- Lado Esquerdo -->
            <div class="info">
                <span class="subtitulo">AGENDAMENTO</span>

                <h2>
                    Agende sua visita <br>
                    ao <span>Cat Latte</span> 
                </h2>

                <p>
                    Preencha o formulário ao lado e venha viver
                    momentos de café, carinho e ronronar.
                </p>

                <div class="card-info">
                    <div class="icone">☕</div>
                    <div>
                        <h4>Um café feito com amor</h4>
                        <p>Bebidas, doces e muito carinho para tornar seu dia especial.</p>
                    </div>
                </div>

                <div class="card-info">
                    <div class="icone">🐾</div>
                    <div>
                        <h4>Gatinhos felizes</h4>
                        <p>Todos os gatos são vacinados, castrados e muito bem cuidados.</p>
                    </div>
                </div>

                <div class="card-info">
                    <div class="icone">🤍</div>
                    <div>
                        <h4>Ambiente tranquilo</h4>
                        <p>Espaço pensado para o bem-estar dos visitantes e dos gatos.</p>
                    </div>
                </div>

                <div class="aviso">
                    <h3>Informações importantes</h3>
                    <ul>
                        <li> ▫️Crianças menores de 12 anos devem estar acompanhadas por um responsável.</li>
                        <li> ▫️Não é permitido correr ou gritar dentro do café.</li>
                        <li> ▫️Evite acordar ou pegar gatos que estiverem dormindo.</li>
                        <li> ▫️Não ofereça alimentos aos gatos.</li>
                        <li> ▫️Caso apresente sintomas gripais, remarque sua visita.</li>
                        <li> ▫️Respeite sempre o espaço dos animais.</li>
                    </ul>
                </div>
            </div>

            <!-- Lado Direito -->
            <div class="formulario">
                <h3>Formulário de Agendamento</h3>

                <form action="agendar.php" method="POST">

                    <div class="duas-colunas">
                        <div class="campo">
                            <label>Nome Completo</label>
                            <input type="text" name="nome" placeholder="Seu nome" required>
                        </div>

                        <div class="campo">
                            <label>E-mail</label>
                            <input type="email" name="email" placeholder="seu@email.com" required>
                        </div>
                    </div>

                    <div class="campo">
                        <label>Telefone / WhatsApp</label>
                        <input type="text" name="telefone" placeholder="(41) 99999-9999" required>
                    </div>

                    <div class="campo">
                        <label>Data da visita</label>
                        <input type="date" name="data_visita" required>
                    </div>

                    <div class="campo">
                        <label>Horário da Visita</label>
                        <input type="time" id="horario" name="horario" required>
                    </div>

                    <div class="campo">
                        <label>Quantidade de pessoas</label>
                        <input type="number" name="qtd_pessoas" placeholder="Ex.: 2" min="1" required>
                    </div>

                    <div class="campo">
                        <label>Observações</label>
                        <textarea name="observacoes" rows="5" placeholder="Aniversário, acessibilidade, alergias..."></textarea>
                    </div>

                    <div class="checkbox-container">
                        <label>
                            <input type="checkbox" required>
                            Li e concordo com as regras de convivência do Cat Latte, e estou ciente de que a visita será cancelada caso não sejam respeitadas.
                        </label>
                    </div>

                    <button type="submit">Enviar Agendamento</button>

                </form>
            </div>

        </div>
    </section>

</body>
</html>
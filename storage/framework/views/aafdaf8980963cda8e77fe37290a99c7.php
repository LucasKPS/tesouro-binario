<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia - Bem-estar e Saúde</title>
    <style>
        /* Estilos Globais */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        header {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header h1 {
            margin: 0;
        }

        nav ul {
            display: flex;
            gap: 15px;
        }

        nav ul li {
            margin: 0;
        }

        /* Botões */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #45a049;
        }

        /* Main */
        main {
            padding: 20px;
            max-width: 900px;
            margin: 0 auto;
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            margin-bottom: 10px;
            color: #4CAF50;
        }

        section p,
        section ul {
            margin: 0 0 10px 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 30px;
        }

        footer p {
            margin: 0;
        }
    </style>
</head>

<body>
    <!-- Cabeçalho -->
    <header>
        <h1>Academia Fitness</h1>
        <nav>
            <ul>
                <!-- Rotas Laravel -->
                <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                <li><a href="<?php echo e(route('register')); ?>">Cadastro</a></li>
            </ul>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main>
        <section id="sobre">
            <h2>Sobre Nós</h2>
            <p>Bem-vindo à Academia Fitness! Aqui você encontra um ambiente acolhedor e motivador para atingir seus objetivos de saúde e bem-estar.</p>
        </section>

        <section id="planos">
            <h2>Planos Disponíveis</h2>
            <ul>
                <li>Plano Mensal</li>
                <li>Plano Trimestral</li>
                <li>Plano Anual</li>
            </ul>
        </section>

        <section id="horarios">
            <h2>Horários</h2>
            <p>Segunda a Sexta: 6h às 22h</p>
            <p>Sábado: 8h às 14h</p>
            <p>Domingo: Fechado</p>
        </section>

        <section id="contato">
            <h2>Fale Conosco</h2>
            <p>Email: contato@academiafitness.com</p>
            <p>Telefone: +55 (11) 99999-9999</p>
            <p>Endereço: Rua da Saúde, 123 - São Paulo, SP</p>
        </section>
    </main>

    <!-- Rodapé -->
    <footer>
        <p>&copy; 2024 Academia Fitness - Todos os direitos reservados.</p>
    </footer>
</body>

</html>
<?php /**PATH C:\laragon\www\academia_Tesourobinario\resources\views/index.blade.php ENDPATH**/ ?>
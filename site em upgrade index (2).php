<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meu primeiro site em PHP! Olá Mundo!</title>
// atualizar com tempo esse projeto primeiro site em php_check_syntax
    <!-- Corrigido o espaço extra na URL do jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Corrigido os espaços e a tag <style> -->
    <style type="text/css">
        .linha {
            font-weight: bold;
            color: green;
            padding-left: 10px;
            line-height: 50px;
        }
    </style>
</head>

<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        // Aplicando a classe CSS 'linha'
        echo "<div class='linha'>Linha número $i</div>";
    }
    ?>
</body>

<!-- Corrigido fechamento de aspas e chaves no script -->
<script type="text/javascript">
    $(document).ready(function () {
        alert("wohoo!");
    });
</script>

</html>

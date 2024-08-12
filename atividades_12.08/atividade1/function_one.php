<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['notaUm']) && isset($_POST['notaDois']) && isset($_POST['notaTres']) && isset($_POST['notaQuatro'])) {
        $nota1 = floatval($_POST['notaUm']);
        $nota2 = floatval($_POST['notaDois']);
        $nota3 = floatval($_POST['notaTres']);
        $nota4 = floatval($_POST['notaQuatro']);

        $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

        if ($media >= 7) {
            echo "Parabéns, você está aprovado! Sua nota final é $media.";
        } else {
            echo "Sua média foi $media. Você precisa fazer o exame.<br><br>";
            echo '<form action="" method="POST">';
            echo '<label for="nota_exame">Digite a nota do exame:</label>';
            echo '<input type="number" name="nota_exame" step="0.01" required>';
            echo '<input type="hidden" name="media" value="'.$media.'">';
            echo '<br><br>';
            echo '<button type="submit" name="calcular_exame">Calcular</button>';
            echo '</form>';
        }
    } else if (isset($_POST['nota_exame'])) {
        $nota_exame = floatval($_POST['nota_exame']);
        $media = floatval($_POST['media']);
        $nova_media = ($media + $nota_exame) / 2;

        if ($nova_media >= 5) {
            echo "Parabéns, você foi aprovado na recuperação! Sua nova média é $nova_media.";
        } else {
            echo "Não foi desta vez. Você está reprovado! Sua nova média é $nova_media.";
        }
    }
}
?>
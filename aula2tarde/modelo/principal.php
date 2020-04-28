<?php
include "mes.class.php";

$mes = new Mes();
$mes->setMes($_POST['mes']);
echo "<p><br>Mês digitado: " . $mes->getMes();
echo "<br>Verificação com IF: " . $mes->verificarMesIf();
echo "<br>Verificação: " . $mes->verificarMes(). "</p>";

<?php
echo "<b>Notas dos Bimestres: </b>";
echo "<br> Primeiro Bimestre: ".$_POST["bim1"];
echo "<br> Segundo Bimestre: ".$_POST["bim2"];
echo "<br> Terceiro Bimestre: ".$_POST["bim3"];
echo "<br> Quarto Bimestre: ".$_POST["bim4"];
echo "<br>";
for($i=0; $i < count($_POST["atividade"]); $i++){
 echo $_POST["atividade"][$i]."<br>";}
$notas[0]=$_POST["bim1"];
$notas[1]=$_POST["bim2"];
$notas[2]=$_POST["bim3"];
$notas[3]=$_POST["bim4"];
echo "<br>";
echo "<br>";
if ($_POST["calculos"] == "soma"){
 echo "Total dos bimestres: ".$_POST["bim1"]+$_POST["bim2"]+$_POST["bim3"]+$_POST["bim4"];}
else if ($_POST["calculos"] == "media"){
 echo "Média das notas bimestrais: ".($_POST["bim1"]+$_POST["bim2"]+$_POST["bim3"]+$_POST["bim4"])/4;}
echo "<a href='diario.html'> Voltar para a página anterior </a>" ;
 ?>

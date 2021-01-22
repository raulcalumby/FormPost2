<?php 


function mensagem ($enviarMensagem){

	echo $enviarMensagem   .  "<br>"; 
	

}
function calcularIdade($data){
    $time = strtotime($data);
    if($time === false){
      return '';
    }
 
    $year_diff = '';
    $data = data('Y-m-d', $time);
    list($year,$month,$day) = explode('-',$data);
    $year_diff = data('Y') - $year;
    $month_diff = data('m') - $month;
    $day_diff = data('d') - $day;
    if ($day_diff < 0 || $month_diff < 0) $year_diff-;
  // no site esse if não tinha chaves{ }
    return $year_diff;
}
// 


$nome = $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$email = $_POST['email'];
$data = calcularIdade($_POST['date']);

// Não sei se esta errado colocar o $Post como parametro  pra função 
// pensei em colocar a variavel data  assim
// echo caulcularIdade(data) . 'essa é sua idade';





mensagem("Aqui está seu nome : $nome ");
mensagem("Aqui está seu Sobrenome: $sobrenome");
mensagem("Aqui está seu email: $email " );
mensagem("Aquiesta a sua data de nascimento: $idade");


 

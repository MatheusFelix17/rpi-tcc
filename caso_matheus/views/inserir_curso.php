<form action="" method="post">
	<input type= "text" name="nome_curso" placeholder="Insira o nome do curso">
	<input type = "text" name="carga_horaria" placeholder="Insira a carga horária">
	
	<button type="submit" class="btn btn-block btn-sucess btn-lg" name="turnon" value="Acender">Acender Lampada</button>
	<button type="submit" class="btn btn-block btn-sucess btn-lg" name="turnoff" value="Apagar">Apagar Lampada</button>
	
</form>

<?php

if (isset($_POST['turnon'])) {
	echo "Acendeu!<br>";
	shell_exec("sudo python /var/www/painel.com/public_html/scripts/acender.py");
	#$a = shell_exec("ls");
	#$output = shell_exec($a);
	#echo $a;
}

else if (isset($_POST['turnoff'])) {
	echo "Apagou!";
	shell_exec("sudo python /var/www/painel.com/public_html/scripts/apagar.py");
}

<?php 
session_start();

if (!isset($_SESSION['logged']) || !$_SESSION['logged']) {
    header('location: log.php?error=3');
}

 ?>

=<?php 
    if (isset($_POST['submit'])) {
        extract($_POST);
        if (!empty($nbr1) and !empty($nbr2)) {
            if ($choix == '+') {
                $message = "$nbr1 $choix $nbr2 = ".($nbr1 + $nbr2);
            } elseif ($choix == 'N') {
                $message = "Impossible d'éffectuer cette opération!";
            } elseif ($choix == '-') {
                $message = "$nbr1 $choix $nbr2 = ".($nbr1 - $nbr2);
            }
        } elseif ($choix == '*') {
            $message = "$nbr1 $choix $nbr2 = ".($nbr1 * $nbr2);
        } elseif ($choix == '%' and $nbr2 == 0) {
            $message = 'Impossible de diviser par Zero!';
        } elseif ($choix == '/' and $nbr2 == 0) {
            $message = 'Impossible de diviser par Zero!';
        }
    }
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<style type="text/css">
	
	select{
		background-color: pink;
	}
	table{
		background-color:chocolate;
		color: white;
		font-weight: bolder;
		border-radius: 10px;
	}
	body{
		background-color: lightgray;
	}

</style>
<body>
	<fieldset>
		<legend align="center">Calculatrice</legend>
		<form method="POST">
			<table align="center">
			<tr>
				<td>Nombre 1</td>
				<td><input type="number" name="nbr1" required="" placeholder=" Entrer le Nombre 1 "></td>
			</tr>
			<tr>
				<td>Nombre 2</td>
				<td><input type="number" name="nbr2" required="" placeholder=" Entrer le Nombre 2"></td>
			</tr>
			<tr>
				<td>Operateur</td>
				<td>
					<select name="choix">
						<option value="N" selected="">Selectionner un opérateur</option>
						<option value="+">+</option>
						<option value="-">-</option>
						<option value="*">*</option>
						<option value="/">/</option>
						<option value="%">%</option>
					</select>
				</td> 
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" name="submit" value="Calculer">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<?php if (isset($message)) {
     echo '<font color="#F3E5F5">'.$message.'</font>';
 }?>
				</td>
			</tr>
		</table>
		</form>

	</fieldset>
</body>
</html>

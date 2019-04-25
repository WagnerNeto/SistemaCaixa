<?php
session_start();
set_time_limit(0);

$pagina_login = 1;

include 'config.php';
include 'funcoes.php';

if (isset($_GET['sair'])) {
    $_SESSION['logado'] = "";
}
?>

<html>
    <head>
		<script src="jquery.js" type="text/javascript"></script>
		<script src="jquery.validate.js" type="text/javascript"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title id='titulo'>Caixa</title>
        <meta name="LANGUAGE" content="Portuguese" />
        <meta name="AUDIENCE" content="all" />
        <meta name="RATING" content="GENERAL" />
        <link href="styles.css" rel="stylesheet" type="text/css" />
        <script language="javascript" src="scripts.js"></script>
		<script language="javascript" src="validacoes.js"></script>
    </head>
    <body style="padding:10px">
        <table cellpadding="1" cellspacing="10"  width="900" align="center" style="background-color:#033">

            <tr>
                <td colspan="11" style="background-color:#005B5B;">
                    <h2 style="color:#FFF; margin:5px">Caixa - <?php echo $lc_titulo ?></h2>
                </td>
                <td colspan="3" align="center" style="background-color:#005B5B">
                    <a style="color:#FFF" href="?mes=<?php echo date('m') ?><?php echo date('y') ?>">Hoje:<strong> <?php echo date('d') ?> de <?php echo mostraMes(date('m')) ?> de <?php echo date('y') ?></strong></a>&nbsp;
                </td>
            </tr>
        </table>
        <br />
        <br />
        <table cellpadding="1" cellspacing="10"   width="900" align="center" >
            <th align="center" colspan="3">
                Faça Login para entrar no sistema
			</th>
			<br><br>
			<script type="text/javascript">
			
			</script>
			<form action="" method="post" name="form1" id="form1" onSubmit="return validaLogin(form1)">
				<tr>
					<td align="right" colspan="2">
						Login:
					</td>
					<td  align="left" >
						 <input type='text' name='login'><br>
					</td>
				</tr>
				<tr>
					<td align="right" colspan="2" width="450">
							Senha:
					</td>
					<td align="left" colspan="2" width="450">
							<input type='password' name='senha'><br>
					</td>
				</tr>
				<tr>
					<td align="center" colspan="3">
							<input type='submit' name='OK' value='Entrar'>
                    </form>
				</td>
			</tr>
        </table>
        <table cellpadding="5" cellspacing="0" width="900" align="center">
            <tr>
                <td align="right">
                    <hr size="1" />
					<em>Caixa - Desenvolvido por <strong>Wagner Orlando Neto</strong></em>
				</td>
			</tr>
		</table>
	</body>
</html>
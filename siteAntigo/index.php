<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contato</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
        <form name="form" method="post" action="mail_send.php" onSubmit="validacao()";>
        <table width="300" border="0" cellspacing="0" cellpadding="3" align="center">
  <tbody>
    <tr>
      <td><strong>Nome:</strong></td>
      <td><input name="nome" type="text" class="bordaform" width="200px" /></td>
    </tr>
    <tr>
      <td><strong>E-mail:</strong></td>
      <td><input name="email" type="text" class="bordaform" width="200px" /></td>
    </tr>
    <tr>
      <td><strong>Assunto:</strong></td>
      <td><input name="subject" type="text" class="bordaform" width="200px" /></td>
    </tr>
    <tr>
      <td><strong>Mensagem:</strong></td>
		<td><textarea name="msg" cols="22" rows="5" class="bordaform" style="resize: none" /></textarea></td>
    </tr>
    <tr>
    	<td></td>
    	<td><input type="submit" name="submit" value="Enviar" /></td>
    </tr>
  </tbody>
</table>
</form>
</body>
</html>
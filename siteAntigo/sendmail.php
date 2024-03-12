<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
</head>

<body>
<p>&lt;?php</p>
<p>&nbsp;</p>
<p>$para= &quot;vendas@plasmarcos.com.br, gabriel@plasmarcos.com.br&quot;;</p>
<p>$assunto= &quot;Contato pela Web&quot;;</p>
<p>$nome= $_REQUEST['nome'];</p>
<p>$email= $_REQUEST['email'];</p>
<p>$subject= $_REQUEST['assunto'];</p>
<p>$msg= $_REQUEST['mensagem'];</p>
<p>&nbsp;</p>
<p>$corpo= &quot;&lt;strong&gt;Mensagem de Contato&lt;/strong&gt;&lt;br&gt;&lt;br&gt;&quot;;</p>
<p>$corpo .=&quot;&lt;strong&gt;Nome:&lt;/strong&gt; $nome;</p>
<p>$corpo .=&quot;&lt;strong&gt;Empresa:&lt;/strong&gt; $empresa;</p>
<p>$corpo .=&quot;&lt;strong&gt;E-mail:&lt;/strong&gt; $email;</p>
<p>$corpo .=&quot;&lt;strong&gt;Assunto:&lt;/strong&gt; $subject;</p>
<p>$corpo .=&quot;&lt;strong&gt;Mensagem:&lt;/strong&gt; $msg;</p>
<p>&nbsp;</p>
<p>$header=&quot;Content-Type: text/html; charset= utf-8\n&quot;;</p>
<p>$header .=&quot;From: $email Reply-to: $email\n&quot;;</p>
<p>&nbsp;</p>
<p>@mail($para,$assunto,$corpo,$header);</p>
<p>?&gt;</p>
</body>
</html>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE>Smilies And AGCodes</TITLE>
<META content="text/html; charset=windows-1252" http-equiv="Content-Type">
<style type="text/css">
<!--
td {  font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 8pt}
-->
</style>
</HEAD>
<BODY bgColor=#ffffff link=#000080 text=#000000 vLink=#000080>
<CENTER>
  <table width="95%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="25"> W H A T &nbsp;&nbsp;&nbsp;A R E&nbsp;&nbsp;&nbsp;S M I L I E S ?</td>
    </tr>
    <tr>
      <td>
        <p>'Smilies' são pequenas imagens gráficas que podem ser usadas para demonstrar um sentimento ou emoção.
	Se você já usou e-mail ou chat de internet, você já conhece esse conceito. Certas sequências de caracteres 
	são convertidos automaticamente em smlies. Se vocÊ não entendeu, tente inclinar a cabeça para o lado e use
	um pouco de imaginação para compreender os Smiles.</p>
        <p> Esta é a lista de Smiles aceitos atualmente: </p>
      </td>
    </tr>
  </table>
  <table bgcolor=#f7f7f7 border=0 width="95%" cellspacing="1" cellpadding="4">
    <tbody>
    <tr>
      <td bgcolor="#996699"><font color=#ffffff><b>O que digitar</b></font></td>
      <td bgcolor="#996699"><font color=#ffffff><b>Emoção</b></font></td>
      <td bgcolor="#996699"><font color=#ffffff><b>Imagem que irá aparecer</b></font></td>
    </tr>

<?php include ("./smilies.inc"); ?>

    </tbody>
  </table>
  <br>
  <table width="95%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="25">O &nbsp;&nbsp;&nbsp; Q  U E &nbsp;&nbsp;&nbsp; É &nbsp;&nbsp;&nbsp; A G C O D E ?</td>
    </tr>
    <tr>
      <td>
        <p>AGCode (Advanced Guestbook Code) é uma variação das tags HTML que você já deve conhecer.
	Basicamente, ele permite adicionar funcionalidade ou estilo em sua mensagem onde normalmente seria preciso usar HTML.
	Você pode usar AGCode mesmo que HTML não esteja habilitado para o livro de visitas.
	Você pode querer usar AGCode no lugar do HTML, mesmo que o HTML esteja habilitadopara o livro de visitas,
        porque ele necessita de menos códico para ser usado e mais seguro (um erro de sintaxe não causa tantos problemas).
        <p>AGCodes atuais:
      </td>
    </tr>
  </table>
<TABLE border=0 cellPadding=0 cellSpacing=0 width="95%" align="center">
  <TBODY>
  <TR>
    <TD bgColor=#000000>
      <TABLE border=0 cellPadding=4 cellSpacing=1 width="100%">
        <TBODY>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">URL Hyperlinking</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>Se o AGCode estiver ativado, você não precisará usar o código [URL] para criar um hiperlink.
		Simplesmente digite a URL completa de uma das duas maneiras a seguir e o hiperlink será criado automaticamente:
            <UL>
              <LI><font color="#800000">http://www.suaURL.com </font>
              <LI><FONT color=#800000>www.suaURL.com </FONT>Note que você precisará usar o endereço completo com http:// ou
		o endereço curto apenas com o www. Se o site não começar com "www", então você deve usar o enderço completo com "http://".
		Além disso, você pode usar os prefixos de URL do tipo https e ftp (quando o AGCode estiver ativado).<BR>
                <BR>
              <LI>Você pode também criar hiperlinks usando o código [url]. Apenas use o formato abaixo: <br><br>
                <CENTER>
                  <FONT color=#ff0000>[url=http://www.proxy2.de]</FONT>hiperlink<FONT color=#ff0000>[/url]</FONT>
                </CENTER><br><br>
              <LI>
                <P>O antigo código [URL] continua funcionando, como demonstrado abaixo. Apenas digite o texto entre as tags [url] [/url] como mostrado no exemplo abaixo
		(AGCode está em <FONT color=#ff0000>vermelho</FONT>).
                <P>
                  <CENTER>
                    <FONT color=#ff0000>[url]</FONT>http://www.proxy2.de<FONT color=#ff0000>[/url]</FONT>
                  </CENTER>
                <P>Nos exemplos acima o AGCode gera automaticamente
                  um hiperlink para a URL entre as tags. Também se garantirá que o link
                  será aberto em uma nova janela quando clicado.
                  Note que o "http://" é completamente opcional.
                  No segundo exemplo acima, a URL será linkada ao texto com qualquer URL que você digitar depois do sinal de igual ("=").
		  Além disso, note que você NÃO DEVE usar aspas dentro da tag URL.</P>
              </LI>
            </UL>
          </TD>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">Links de Emails</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>Para adicionar hiperlinks de e-mails na sua mensagem, basta digitar o e-mail entre as tags [email] [/email] como no exemplo abaixo.
           (AGCode está em <FONT color=#ff0000>vermelho</FONT>).
            <P>
              <CENTER>
                <FONT color=#ff0000>[email]</FONT>webmaster@proxy2.de<FONT color=#ff0000>[/email]</FONT>
              </CENTER>
            <P>No exemplo acima, o AGCode gera automaticamente o hiperlink para o endereço de e-mail entre as tags.</P>
          </TD>
        </TR>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">Negrito e Itálico</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>Você pode tornar o seu texto negrito ou itálico utilizando as tags [b] [/b] ou [i] [/i] ("i" para itálico, "b" para negrito ou "bold").
            <P>
              <CENTER>
                Olá, <FONT color=#ff0000>[b]</FONT><B>João</B><FONT color=#ff0000>[/b]</FONT><BR><br>
                Olá, <FONT color=#ff0000>[i]</FONT><I>Maria</I><font color="#FF0000">[i]</font>
              </CENTER>
          </TD>
        </TR>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">Adicionando Imagens</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>Para adicionar uma imagem gráfica na sua mensagem, basta digitar a URL da imagem entre as tags [img] [/img] como mostrado no exemplo abaixo 
	  (AGCode está em <FONT color=#ff0000>vermelho</FONT>).
            <P>
              <CENTER>
                <FONT color=#ff0000>[img]</FONT>http://www.suaURL.com/imagem/logo.gif<FONT color=#ff0000>[/img]</FONT>
              </CENTER>
            <P>No exemplo acima, o AGCode exibe automaticamente a imagem na sua mensagem. 
	    Nota: o "http://" como parte da URL é OBRIGATÓRIA para a tag <FONT color=#ff0000>[img]</FONT>.</P>
          </TD>
        </TR>
        </TBODY>
      </TABLE>
    </TD>
  </TR>
  </TBODY>
</TABLE>
<table width="95%" border="0" cellspacing="1" cellpadding="4" align="center">
  <tr>
    <td><font color=#800000>Observações:</font><br>
      Você não deve usar ao mesmo tempo o HTML e o AGCode para fazer a mensa função. Além disso note 
      que o AGCode não é "case-sensiteve" (ou seja, você pode usar <font color=#ff0000>[URL]</font>
      ou <font color=#ff0000>[url]</font>).<br><br>
      <font color="#800000">Usos Incorretos de AGCode:</font> <br>
       <font color="#ff0000">[url]</font> www.proxy2.de <font color=#ff0000>[/url]</font> - não coloque espaços entre as tags e o texto que você está aplicando o código.<br>
        <br>
        <font color="#ff0000">[email]</font>webmaster@proxy2.de<font color=#ff0000>[email]</font> - a tag final deve incluir a barra inclinada (<font color=#ff0000>[/email]</font>)
    </td>
  </tr>
</table>
</CENTER>
<BR>
</BODY>
</HTML>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//SWE">
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
        <p>'Smilies' �r sm� bilder du kan anv�nda f�r att visa k�nslor. Om du vrider huvudet
	i sida s� kan du vanligen se vad de f�rest�ller.</p>
        <p> H�r �r en lista p� allm�nnt accepterade smilies: </p>
      </td>
    </tr>
  </table>
  <table bgcolor=#f7f7f7 border=0 width="95%" cellspacing="1" cellpadding="4">
    <tbody>
    <tr>
      <td bgcolor="#996699"><font color=#ffffff><b>S� h�r skrivs det</b></font></td>
      <td bgcolor="#996699"><font color=#ffffff><b>K�nsla</b></font></td>
      <td bgcolor="#996699"><font color=#ffffff><b>Vad som visar sig grafiskt.</b></font></td>
    </tr>

<?php include ("./smilies.inc"); ?>

    </tbody>
  </table>
  <br>
  <table width="95%" border="0" cellspacing="1" cellpadding="0">
    <tr>
      <td height="25">V A D &nbsp;&nbsp;&nbsp;� R &nbsp;&nbsp;&nbsp;A V A
        N C E R A D &nbsp;&nbsp;&nbsp;G � S T B  O K &nbsp;&nbsp;&nbsp;C O D E ? </td>
    </tr>
    <tr>
      <td>
        <p>AGCode �r en variation p� vanlig enkel HTML kod. Man anv�nder dessa koder
	f�r att formatera sitt meddelande. Du kan anv�nda AGCode �ven om
          HTML inte f�r anv�ndas i g�stboken. Du kan ocks� v�lja att anv�nda AGCode ist�llet
	f�r HTML, den inneh�ller f�rre kommando att h�lla reda p� och �r s�krare.
        <p>Vanliga AGCodes:
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
          <TD>Om AGCode �r till�ten s� beh�ver du inte l�ngre anv�nda 
            [URL] code f�r att skapa en l�nk. Bara skriv in hela URL:en p� n�got av
		f�ljande s�tt s� kommer l�nken att skapas automatiskt.:
            <UL>
              <LI><font color="#800000">http://www.yourURL.com </font>
              <LI><FONT color=#800000>www.yourURL.com </FONT>Notera att du antingen kan
                anv�nda den kompletta http:// address eller den kortare varianten www
                domain. Om hemsida inte b�rjar med "www", s� m�ste du anv�nda den l�ngre varianten.
		 Du kan ocks� anv�nda https och ftp URL
                prefix i auto-link l�ge (n�r AGCode is p�). <BR>
                <BR>
              <LI>Du kan ocks� ha �kta [url] l�nkar genom att skriva code. Andv�nd
		bara f�ljande format: <br><br>
                <CENTER>
                  <FONT color=#ff0000>[url=http://www.proxy2.de]</FONT>hyperlink<FONT color=#ff0000>[/url]</FONT>
                </CENTER><br><br>
              <LI>
                <P>Den gamla [URL] coden kommer fortfarande att fungera, som beskrivs nedan. Men 
                  utifall l�nken visas som i exemplet(AGCode �r
                  i <FONT color=#ff0000>r�tt</FONT>).
                <P>
                  <CENTER>
                    <FONT color=#ff0000>[url]</FONT>http://www.proxy2.de<FONT color=#ff0000>[/url]</FONT>
                  </CENTER>
                <P>I exemplet ovan, kommer AGCoden automatiskt att generera
                  en l�nkt till URL:en. Den kommer ocks� att g�ra s� att l�nken �ppnas i ett nytt f�nster n�r 
		man klicka p� den. Notera att "http://" delen av URL:en �r frivillig. 
		I det andra exemplet ovan, kommer URL:en l�nka texten till den URL du skriver in efter likhetstecknet.
                  Notera ocks� att du inte skall anv�nda citationstecken inne i en l�nk. 
		</P>
              </LI>
            </UL>
          </TD>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">Email Links</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>F�r att l�gga till en l�nkad e-mail adress inuti ett meddelande, skriva bara in den som i exemplet nedan. 	(AGCode is in
            <FONT color=#ff0000>red</FONT>).
            <P>
              <CENTER>
                <FONT color=#ff0000>[email]</FONT>webmaster@proxy2.de<FONT color=#ff0000>[/email]</FONT>
              </CENTER>
            <P>I exemplet ovan kommer AGCoden automatiskt att generera en l�nk till e-mail adressen som finns d�r.
              </P>
          </TD>
        </TR>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">Fet ock kursiv stil</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>Om du vill ha fet- eller kursiv stil s� skriver du bara in den mellan taggarna [b] [/b] [i] [/i] .
            <P>
              <CENTER>
                Hello, <FONT color=#ff0000>[b]</FONT><B>John</B><FONT color=#ff0000>[/b]</FONT><BR><br>
                Hello, <FONT color=#ff0000>[i]</FONT><I>Maria</I><font color="#FF0000">[i]</font>
              </CENTER>
          </TD>
        </TR>
        <TR bgColor=#0099CC>
          <TD><b><font color="#FFFFFF">L�gga till bilder</font></b></TD>
        </TR>
        <TR bgColor=#ffffff>
          <TD>F�r att l�gga in en bild i ett meddelande s� skriver du bara in adressen och namnet p� bilden
		som det �r beskrivet h�r nedan. (AGCode is in <FONT color=#ff0000>red</FONT>).
            <P>
              <CENTER>
                <FONT color=#ff0000>[img]</FONT>http://www.yourURL.com/image/logo.gif<FONT color=#ff0000>[/img]</FONT>
              </CENTER>
            <P>I exemplet ovan s� kommer AGCcoden automatiskt visa bilden i ditt meddelande.Notera: "http://" delen av URL:en 		m�ste skrivas in.<FONT color=#ff0000>[img]</FONT> </P>
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
    <td><font color=#800000>Till�gg</font><br>
      Du skall inte anv�nda b�de HTML och AGCode f�r att g�ra samma sak. Notera ocks�
      att AGCoden inte �r beroende av sm� och stora bokst�ver (s� du kan anv�nda <font color=#ff0000>[URL]</font>
      or <font color=#ff0000>[url]</font>).<br><br>
      <font color="#800000">Felaktig AGCode anv�ndning:</font> <br>
       <font color="#ff0000">[url]</font> www.proxy2.de <font color=#ff0000>[/url]</font> - l�gg inte in mellanslag mellan 
	code inom paranteser eller texten som du formaterar.<br>
        <br>
        <font color="#ff0000">[email]</font>webmaster@proxy2.de<font color=#ff0000>[email]</font> - den avslutande parantesen har alltid ett fram�t lutande snedstreck.(<font color=#ff0000>[/email]</font>)
    </td>
  </tr>
</table>
</CENTER>
<BR>
</BODY>
</HTML>

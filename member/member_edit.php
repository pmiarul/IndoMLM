<?
require( "label.php" );
dbConnect();
if( !verifyUser() ) header( "Location: index.php" );
$test = mysql_query("SELECT * from member where username='$session_username'")or error( mysql_error() );
$member = mysql_fetch_array( $test );

?>



<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML><HEAD>
<meta http-equiv="Content-Language" content="en-us">
<title>.: NETWORK INDONESIA :.</title>
<META content=Noerhadi name=Author>
<META 
content="Dapatkan uang duit dollar atau penghasilan abadi tiap bulan dari MLM bisa juga gratis atau free." 
name=Keywords>
<META 
content="tutorial situs dalam bahasa indonesia, membahas teknik-teknik mencari uang secara online melalui internet." 
name=Description>
<META http-equiv=robots content="index, follow">
<META http-equiv=rating content=general>
<META content="Microsoft FrontPage 5.0" name=GENERATOR></HEAD>

<STYLE>BODY {
	SCROLLBAR-FACE-COLOR: #006699; SCROLLBAR-HIGHLIGHT-COLOR: #CC3300; SCROLLBAR-SHADOW-COLOR: #000000; SCROLLBAR-3DLIGHT-COLOR: #006699; SCROLLBAR-ARROW-COLOR: #ffffff ; SCROLLBAR-TRACK-COLOR: #0099CC; SCROLLBAR-DARKSHADOW-COLOR: #000000; SCROLLBAR-BASE-COLOR: #848ea9}
.lnk1:hover {
	COLOR: #0000fa; TEXT-DECORATION: none
}
.lnk:link {
	COLOR: #ffff00; TEXT-DECORATION: none
}

</STYLE>

<body topmargin="0" leftmargin="0">

<div align="center">
  <center>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="780" id="AutoNumber1">
    <tr>
      <td>
      <p align="center">
   
      <? include "banner.php"; ?>
      </td>
    </tr>
    <tr>
      <td>
      <div align="center">
        <center>
        <table border="1" cellpadding="4" cellspacing="0" style="border-collapse: collapse" bordercolor="#3E6F7C" width="780" id="AutoNumber2">
          <tr>
            <td width="207" valign="top">
            <p style="margin-top: 0; margin-bottom: 0" align="center">
            <font face="Verdana" style="font-weight: 700" size="2" color="#990000">..:: 
            MENU MEMBER ::..</font></p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;
            
            <? include "member_menu.php"; ?>
            </p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
            <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</td>
            <td width="573" valign="top">
            <div align="center">
             <center>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" bordercolor="#111111" width="549" id="AutoNumber3">
              <tr>
               <td width="549">
      <p style="margin-top: 0; margin-bottom: 0" align="center">
      <font face="Verdana" size="2" color="#000080">Nama : <b><? echo "$session_nama_member" ?></b> - Username 
      : <b><? echo "$session_username" ?></b></font></p>

               </td>
              </tr>
              <tr>
               <td width="549">&nbsp;</td>
              </tr>
              <tr>
    <TD align=center width="527">
      
<p style="margin-top: 0; margin-bottom: 0"><b>
                  <font face="Arial" size="4" color="#990000">SELAMAT DATANG DI 
                  MEMBER AREA</font></b></p>
      
<p style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
      
<p style="margin-top: 0; margin-bottom: 0"><b>
<font face="Verdana" color="#000080">EDITING PASSWORD &amp; EMAIL</font></b></p>
<p style="margin-top: 0; margin-bottom: 0">
      
<font face="Verdana"><b><br>
</b></font><font face="Verdana" size="2">Jika anda mengganti <b>password</b>, setelah 
melakukan editing anda <b>harus logout</b> dan tutup browser anda kemudian dapat dicoba login kembali
lagi.</font></TD>
                      </tr>
              <tr>
    <TD align=middle width="527">
<br>
      <FORM action=member_edit2.php method=post>
      <TABLE bgColor=#3e5b00 border=0 cellPadding=3 cellSpacing=1 width=471 height="157">
        <TBODY>
        <TR>
          <TD align=right bgColor=#fff9fa vAlign=top width=168 height="16">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="2">Username :</font></TD>
          <TD bgColor=#fff9fa vAlign=top width=506 height="16"><b>
          <font face="Verdana" size="2"><? echo"{$member['username']}" ?></font></b></TD></TR>
        <TR>
          <TD align=right bgColor=#fff9fa vAlign=top width=168 height="22">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="2">Password :</font></TD>
          <TD bgColor=#fff9fa vAlign=top width=506 height="22"><FONT face=arial 
            size=2>
          <INPUT name=password1 value="<? echo"{$member['passwd']}" ?>" size=20></FONT></TD></TR>
        <TR>
          <TD align=right bgColor=#fff9fa vAlign=top width=168 height="1">
          <font face="Verdana, Arial, Helvetica, sans-serif" size="2">Email :</font></TD>
          <TD bgColor=#fff9fa vAlign=top width=506 height="1"><FONT face=arial
            size=2>
          <INPUT name=email value="<? echo"{$member['email']}"  ?>" size=30></FONT></TD></TR>
        <TR>
          <TD align=right bgColor=#fff9fa vAlign=top width=168 height="19">&nbsp;
          </TD>
          <TD bgColor=#fff9fa vAlign=top width=506 height="19">&nbsp;</TD>
          </TR>
        <TR>
          <TD align=middle bgColor=#d1e3ce colSpan=2 width="679" height="26"><FONT face=arial size=2>
          <INPUT type=submit value="Klik disini untuk edit">&nbsp;&nbsp;&nbsp; </FONT></TD></TR></TBODY></TABLE></FORM></TD>
                      </tr>
              <tr>
               <td width="549">
                  <p align="center" style="margin-top: 0; margin-bottom: 0">&nbsp;</p>
                  <p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;</p>
                  </td>
              </tr>
             </table>
             </center>
            </div>
            <p style="margin-top: 0; margin-bottom: 0">&nbsp;<p style="margin-top: 0; margin-bottom: 0">&nbsp;</td>
          </tr>
        </table>
        </center>
      </div>
      </td>
    </tr>
    <tr>
      <td background="bg3.jpg">&nbsp;</td>
    </tr>
    <tr>
      <td bgcolor="#6D93A0">
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Copyright (c) 
      2005 Nama Bisnis Anda</font></p>
      <p align="center" style="margin-top: 0; margin-bottom: 0">
      <font face="Verdana" style="font-size: 8pt" color="#FFFFFF">Powered by
      <a target="_blank" href="http://www.klikabadi.com/" style="text-decoration: none; font-weight: 700">
      <font color="#FFFFFF">klikabadi.com</font></a></font></p>
      </td>
    </tr>
    <tr>
      <td bgcolor="#3E6F7C">&nbsp;</td>
    </tr>
  </table>
  </center>
</div>

</body>

</html>
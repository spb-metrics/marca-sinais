<?php
/*

 @author Rafael Rodrigues Bastos
 @updated 01/12/2012 by Alex Camargo
 Controle de Marcas e Sinais

 Copyright (C) 2008 PMB - Prefeitura Municipal de Bag�
                          webmaster@bage.rs.gov.br

 Este arquivo � parte do programa Controle de Marcas e Sinais.
 
 Controle de Marcas e Sinais � um software livre; voc� pode
 redistribui-lo e/ou modifica-lo dentro dos termos da Licen�a
 P�blica Geral GNU como publicada pela Funda��o do Software
 Livre (FSF); na vers�o 2 da Licen�a, ou (na sua opni�o)
 qualquer vers�o.

 Este programa � distribuido na esperan�a que possa ser util, mas
 SEM NENHUMA GARANTIA; sem uma garantia implicita de ADEQUA��O a
 qualquer MERCADO ou APLICA��O EM PARTICULAR. Veja a Licen�a
 P�blica Geral GNU para maiores detalhes.
 Voc� deve ter recebido uma c�pia da Licen�a P�blica Geral GNU
 junto	com este programa, se n�o, escreva para a Funda��o do
 Software Livre (FSF) Inc., 51 Franklin St, Fifth Floor, Boston,
 MA  02110-1301 USA.

*/

if ($_GET['erro'] == 1) {
    echo '<script language="Javascript">
            alert("Usu�rio ou senha inv�lida!");
          </script>';
}

?>

<form action="pmb_login.php" method="post" name="formulario">
    <table border="0" width="100%" height="100%"><tr><td align="center" valign="center">
    <table border=0>
	<tr>
	    <td colspan="3" align="center">
			<img src="imagens/cabecalho_login.png">
	    </td>
	</tr>
    <tr>
        <td colspan="3" align="center">
			<font size="5" color="black">
				login
			</font>
	    </td>
    </tr>
	<tr>
	    <td colspan="3">
			<br>
	    </td>
	</tr>
    <tr>
        <td align="right">
			usu&aacute;rio
		</td>
        <td>
			<input type="text" name="login">
	    </td>
        <td rowspan="2">
			<a href="pmb_cms_ver_marca.php">consulta</a>
	    </td>
    </tr>
    <tr>
        <td align="right">
			senha
	    </td>
        <td>
			<input type="password" name="senha">
	    </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
			<input type="submit" value="ok">
	    </td>
    </tr>
	<tr>
		<td colspan="3" align="center">
			<img src="imagens/rodape_login.png">
		</td>
	</tr>
</table>
</td></tr></table>
</form>

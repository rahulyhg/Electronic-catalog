<?php /* Smarty version 2.6.12, created on 2007-01-14 17:34:13
         compiled from inc/right_block.tpl */ ?>
<table border=0 height=100% cellpadding=0 cellspacing=0>
<!--����������� �������-->
	<tr height=10>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>
		<td bgcolor="#E8E7E3"><img src="img/gray2.gif"></td>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>
	</tr>
<!--/����������� �������-->
	<tr height=350>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>		
		<td width=240>
			<table width="240" border=0 cellpadding="0" cellspacing="0">
				<tr>
					<td height="350" width="240" align="center" bgcolor="#E8E7E3">
<!---������ ������--->								
<!-- Ukrainian Banner Network 160�60 START -->
<center><script>
//<!--
user = "40837";
page = "1";
pid = Math.round((Math.random() * (10000000 - 1)));
document.write("<iframe src='http://banner.kiev.ua/cgi-bin/bi.cgi?h" +
user + "&amp;"+ pid + "&amp;" + page + "&amp;5' frameborder=0 vspace=0 hspace=0 " +
" width=160 height=60 marginwidth=0 marginheight=0 scrolling=no>");
document.write("<a href='http://banner.kiev.ua/cgi-bin/bg.cgi?" +
user + "&amp;"+ pid + "&amp;" + page + "&amp;5' target=_top>");
document.write("<img border=0 src='http://banner.kiev.ua/" +
"cgi-bin/bi.cgi?i" + user + "&amp;" + pid + "&amp;" + page +
"&amp;5' width=160 height=60 alt='Ukrainian Banner Network'></a>");
document.write("</iframe>");
//-->
</script>
<!-- Ukrainian Banner Network 160�60 END -->
<br>
<br>
<br>
<!-- Ukrainian Banner Network 160�60 START -->
<center><script>
//<!--
user = "40837";
page = "2";
pid = Math.round((Math.random() * (10000000 - 1)));
document.write("<iframe src='http://banner.kiev.ua/cgi-bin/bi.cgi?h" +
user + "&amp;"+ pid + "&amp;" + page + "&amp;5' frameborder=0 vspace=0 hspace=0 " +
" width=160 height=60 marginwidth=0 marginheight=0 scrolling=no>");
document.write("<a href='http://banner.kiev.ua/cgi-bin/bg.cgi?" +
user + "&amp;"+ pid + "&amp;" + page + "&amp;5' target=_top>");
document.write("<img border=0 src='http://banner.kiev.ua/" +
"cgi-bin/bi.cgi?i" + user + "&amp;" + pid + "&amp;" + page +
"&amp;5' width=160 height=60 alt='Ukrainian Banner Network'></a>");
document.write("</iframe>");
//-->
</script>
<!-- Ukrainian Banner Network 160�60 END -->

<!---/������ ������--->								
					</td>
				</tr>
			</table>		
		</td>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>		
	</tr>
<!--����������� �������-->
	<tr height=10>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>
		<td bgcolor="#E8E7E3"><img src="img/gray2.gif"></td>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>		
	</tr>		
<!--/����������� �������-->						
	<?php if (! $this->_tpl_vars['is_logged']): ?>
	<tr>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>		
		<td valign=top bgcolor="#E8E7E3">
			<form name=log_form action="index.php?cmd=login" method="POST">
			<table border="0" width="240" cellpadding="0" cellspacing="0" bgcolor="#DAD9D4">
				<tr>
					<td colspan=4 bgcolor="#BBB9AD"><img src="img/gray7.gif"></td>
				</tr>		
				<tr height=30>
					<td width=15 rowspan=7></td>
					<td colspan=2><b>���� ��� ���������</b></td>
					<td width=15 rowspan=7></td>
				</tr>
				<?php if ($this->_tpl_vars['login_warn']): ?>
				<tr>
					<td colspan="2"><font color="Red">����� ��� ������ �������</font></td>
				</tr>
				<?php endif; ?>
				<tr>
					<td colspan=2>�����:</td>
				</tr>
				<tr>
					<td colspan=2><input type="text" name="login" size=25></td>
				</tr>
				<tr>
					<td colspan=2>������:</td>
				</tr>
				<tr>
					<td colspan=2><input type="password" name="pas" size=25></td>
				</tr>
				<tr height=28>
					<td colspan="2" align="leftt"><input type="submit" value="����"></td>
				</tr>
			</table>
			</form>
		</td>
		<td bgcolor="#E8E7E3" width=5><img src="img/gray2.gif"></td>		
	</tr>
	<?php endif; ?>									
	<tr height=100%>
		<td colspan=3 bgcolor="#E8E7E3"><img src="img/gray2.gif"></td>
	</tr>
</table>
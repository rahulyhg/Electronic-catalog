<?php /* Smarty version 2.6.12, created on 2007-01-17 17:48:01
         compiled from verification.tpl */ ?>
<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0">
<!--Gray line-->
	<tr>
		<td width=137 bgcolor="#E8E7E3"><img src="img/gray2.gif"></td>
		<td width=6 bgcolor="#C8C6C1"><img src="img/gray3.gif"></td>
		<td bgcolor="#E8E7E3"><img src="img/gray4.gif"></td>
		<td width=250 bgcolor="#D9D7D2"><img src="img/gray5.gif"></td>
	</tr>
<!--/Gray line-->	
	<tr>
		<td width=137 bgcolor="#E8E7E3" align=center>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/left_block.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>			
		
		</td>
		<td width=6 bgcolor="#C8C6C1"><img src="img/gray3.gif"></td>
		<td valign="top">
<!--����������� ����� -->
			<table border="0" width="100%" height="100%" bgcolor="#FFFFFF" cellpadding="2" cellspacing="0">
				<tr>
					<td valign="top" colspan="3" height="20">
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td width=24><img src="img/white2.gif"></td>
								<td>
									<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
										<tr>
											<td class=path_filter><b>�����������</b></td>
										</tr>
									</table>		
								</td>
								<td><img src="img/white2.gif"></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td valign="top" colspan="3">
						<table border="0" width="100%" cellpadding="0" cellspacing="0">
							<tr>
								<td width=24><img src="img/white2.gif"></td>
								<td>
									<table border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td style="BORDER-TOP: #C4C4C4 1px solid; FONT-SIZE:12px; PADDING-TOP:20px;" align="center">
											<?php if ($this->_tpl_vars['reg_confirmed'] == 1): ?>	
												���� ����������� ������������, ��� ���������� � ������� ������ ��������<br>
												���������� ���������� �� ����� ����� ���� ������:<br><br>
												<a href="http://www.webcat.com.ua" target="new"><img src="img/blue88x31.gif" width=88 height=31 alt="WebCatalog" border=0></a><br><br>
												<?php echo $this->_tpl_vars['button_code']; ?>
<br><br>
											<?php elseif ($this->_tpl_vars['reg_confirmed'] == 2): ?>
												��� ����������� ��� ���� ������������!
											<?php else: ?>
												���� ����������� �� ����� ���� ������������,<br>
												��� ��������� ������� ���������� � ������ ��������� <a href="mailto:support@webcat.com.ua">support@webcat.com.ua</a>
											<?php endif; ?>
											</td>
										</tr>
									</table>		
								</td>
								<td><img src="img/white2.gif"></td>
							</tr>
						</table>					
					</td>
				</tr>							
				<tr>
					<td width=10 bgcolor="#FFFFFF"><img src="img/white1.gif"></td>
					<td height=10>
						<table border=0 cellpadding="5" cellspacing="0">
							<tr>
								<td>
									<a href="index.php?cmd=about">� �������</a> | 
								 	<a href="index.php?cmd=order">��� ���������� ����� ����</a> |
								 										<a href=""><a href="mailto:support@webcat.com.ua">������ ���</a>	
								</td>																
							</tr>
						</table>	
					</td>
				</tr>
			</table>
<!--/����������� ����� -->			
		</td>
		<td width="250" align="right" valign="top">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "inc/right_block.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
	</tr>
</table>
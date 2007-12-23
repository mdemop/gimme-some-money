<script>
function displaymessage(which, message) {
	document.getElementById("message").innerHTML = message;
}

function clearmessage(which) {
	document.getElementById("message").innerHTML = "";
}
</script>

<?

include "config.php";

print <<<HTML

<p><a href="{$GLOBALS['ROOT']}">support {$GLOBALS['ARTIST']}</a></p>

HTML;

@mysql_connect($sqlhost, $sql_user, $sql_pass); 
@mysql_select_db($sql_name);

$sql = mysql_query("SELECT * FROM {$GLOBALS['PURCHASE_TABLE']} ORDER BY id DESC LIMIT 10") or die(mysql_error());
$info = mysql_fetch_array($sql);

$i=0;
while($info) {

print <<<HTML
<img id="{$info[itemid]}" style="padding: 2px;" onmouseover="displaymessage(this, '{$info['comment']}');" onmouseout="clearmessage();" src="/images/icon{$info[itemid]}-small.png" />
HTML;

	if($i == 4) {
		echo "<br />";
	}

	$info = mysql_fetch_array($sql);
	$i++;		
}

?>
<div id="message"></div>
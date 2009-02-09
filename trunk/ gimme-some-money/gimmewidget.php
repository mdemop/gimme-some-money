<?

include "config.php";

@mysql_connect($sqlhost, $sql_user, $sql_pass); 
@mysql_select_db($sql_name);

$sql = mysql_query("SELECT * FROM {$GLOBALS['PURCHASE_TABLE']} ORDER BY id DESC LIMIT {$GLOBALS['WIDGET_ITEMS']}") or die(mysql_error());
$info = mysql_fetch_array($sql);

$headertext = "support {$GLOBALS['ARTIST']}";

if($_GET['headertext']) {
	$headertext = addslashes($_GET['headertext']);
}

print <<<HTML
	document.write('<div id="gimme-main"><p><a href="{$GLOBALS['ROOT']}">$headertext</a></p>');
HTML;

$i=0;
while($info) {

$info[comment] = addslashes($info[comment]);

print <<<HTML
	document.write("<img id=\"{$info[itemid]}\" style=\"padding: 2px;\" onmouseover=\"document.getElementById('gimme-message').innerHTML = '{$info['comment']}';\" onmouseout=\"document.getElementById('gimme-message').innerHTML = '&nbsp;';\" src=\"{$GLOBALS['ROOT']}/images/icon{$info[itemid]}-small.png\" />");
HTML;

$info = mysql_fetch_array($sql);
$i++;

if($i == ($GLOBALS['WIDGET_ITEMS_PER_LINE'])) {
	echo 'document.write("<br />");';
	$i=0;
}

}
?>
	document.write('<div id="gimme-message">&nbsp;</div></div>');
<?

die();
?>
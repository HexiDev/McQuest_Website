

<?php
if (isset($_GET['u']) && $_GET['u'] == "yt") {
header("Location: https://www.youtube.com/channel/UC23PJ2VmL9w1eQJBOA2N7JA");
die();
}else if (isset($_GET['u']) && $_GET['u'] == "discord") {
header("Location: https://discord.gg/fRpQHCE");
die();
}
die('Hey dat URL werkt niet :(');
?>
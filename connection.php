<?php
require_once '_defines.php';
$site_data[PAGE_ID] = 'connection';
require_once 'view_parts/_page_base.php'
?>

<h1><?= ucfirst($site_data[PAGE_ID]); ?></h1>

<h2>Veuillez vous indentifier</h2>
<form>
    <label for="username">username</label>
    <input type="text" id="username" name="username">
    <label for="password">username</label>
    <input type="text" id="password" name="password">


</form>
<?php
require_once 'view_parts/_page_bottom.php'
?>

<?php 
require __DIR__.'/vendor/autoload.php';
?>
<!DOCTYPE html>
<html>
<body>

<h1>PHP Demo</h1>
<p>
<?php
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$env1 = $_ENV['MY_ENV_VAR_1'];
$env2 = $_ENV['MY_ENV_VAR_2'];
$env3 = $_ENV['MY_ENV_VAR_3'];

echo 'MY_ENV_VAR_1 = ' . $env1 . '<br/>' ;
echo 'MY_ENV_VAR_2 = ' . $env2 . '<br/>' ;
echo 'MY_ENV_VAR_3 = ' . $env3 . '<br/>' ;
?>
</p>

</body>
</html>
<?php if(!class_exists('Rain\Tpl')){exit;}?><h1>HELLO <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de Template!</p>
<p>Versão do php: <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
<?php if(!class_exists('Rain\Tpl')){exit;}?><!--aqui chamamos a variável $name que foi criada na index.php, usamos entre <?php echo htmlspecialchars( $variável, ENT_COMPAT, 'UTF-8', FALSE ); ?>-->
<h1>Hello <?php echo htmlspecialchars( $name, ENT_COMPAT, 'UTF-8', FALSE ); ?></h1>

<p>Teste de template</p>

<p>Versão do PHP <?php echo htmlspecialchars( $version, ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
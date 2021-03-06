<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'WebArena videogames');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


    <?php

		echo $this->Html->meta('icon');
		echo $this->Html->css('webarena');

        echo $this->fetch('meta');
    //	echo $this->fetch('css');
     //   echo $this->Html->script('bootstrap.min');
//		echo $this->fetch('script');

	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>

            <p class="navbar-text">Signed in as Mark Otto</p>


            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">WebArena</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><?php echo $this->Html->link('Vision', array('controller' => 'Arena', 'action' => 'sight')); ?><span class="sr-only">(current)</span></a></li>
                            <li><?php echo $this->Html->link('Creation de personnage', array('controller' => 'Arena','action'=>'createchar')); ?></a></li>
                            <li><?php echo $this->Html->link('Vos personnages',array('controller'=>'Arena','action'=>'character')); ?></li>
                            <li><?php echo $this->Html->link('Evenements',array('controller'=>'Arena','action'=>'diary')); ?></li>
                            <li><?php echo $this->Html->link('Choisir avatar',array('controller'=>'Arena','action'=>'chooseAvatar'));                            ?></li>
                            <li><?php echo $this->Html->link('Login',array('controller'=>'Arena','action'=>'login')); ?></li>

                        </ul>

                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

        </div>
		</div>
		<div id="content">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
            
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
                   echo "WebArena : SI-4 | PORTIER,SAMBRES,RAOUL,ROY <br>";
                   echo "GitHub : https://github.com/robinsonroy/WebArena";
			?>
			<p>
				<?php echo $cakeVersion; ?>
			</p>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>

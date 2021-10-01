<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transforms Community</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    
    <link rel="icon" href="images/icon.png">

    
</head>
<body>
    <div id="dashboard">

        <div class="item header">Header</div>
        <div class="center">
        <?php echo $this->section( 'content' ) ?>
        </div>
        
        <div class="center2">graph2</div>
        
    
    </div>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class= "Logo">
            <a href=""> <img src="images/logo.webp">
            </a>
        </div>


        <ul class = "links"> 
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
            <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over ons</a>
            <li><a href="">Wordt transformer!</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Aanmelden</a></li>
            <li><a href="">Inloggen</a></li>
    
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
</body>
</html>
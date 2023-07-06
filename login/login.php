<!DOCTYPE html>

<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="config.php" method="post">
    <div class="black">
        <h1 class="logo"><span>i</span>Smart</h1>
        <div class="login">
            <h1>S'identifier</h1>

            <?php if (isset($_GET['error'])) { ?>
	  		<div class="alert alert-danger" role="alert">
			  <?=htmlspecialchars($_GET['error'])?>
			</div>
		    <?php } ?>
            
            <input type="email" name="email" required placeholder="Adresse E-Mail">
            <input type="password" name="password" required placeholder="Mot de Pass">
            <input type="submit" name="submit" value="Se connecter" class="form-btn">
            
        </form>
        </div>
    </div>
</body>
</html>
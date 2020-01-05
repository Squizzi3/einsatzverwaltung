<?php
    // Allow the config 
    define('__CONFIG__', true);

    require_once("./inc/config.php");
    include_once("./inc/header.php");
?>
    <div class="background-image">
        <div class="login-container">
            <h2>Einsatzverwaltung</h2>
            <form>                
                <div class="input-container">
                    <i class="fa fa-envelope icon"></i>
                    <input class="input-field" type="email" placeholder="E-Mail" name="email">
                </div>                            
                <div class="input-container">
                    <i class="fa fa-lock icon"></i>
                    <input class="input-field" type="password" placeholder="Passwort" name="psw">
                </div>                
                <button type="submit" class="login-btn">LOGIN</button>
            </form>
        </div>
    </div>
<?php
    include_once("./inc/footer.php");
?>
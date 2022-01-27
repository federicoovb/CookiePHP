<?php
        echo '<h1>Salvo il cookie</h1>';
        $name = "1"; //è il nome del cookie
        $value = "ciao mondo"; //valore memorizzato nel cookie
        $expire = 86000; //data di scadenza
        $path = "/"; //specifica il percorso in cui il cookie sarà disponibile
        $domain = ""; //specifica il dominio in cui il cookie è disponibile
        $secure = ""; //impostato a 1, specifica che il cookie può essere...
        $httpOnly = true; //la modalità in cui il cookie è accessibile soltanto in http
        setcookie($name, $value, time()+$expire, $path, $domain, $secure, $httpOnly);
?>
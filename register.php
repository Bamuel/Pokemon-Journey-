<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <!-- Phone  https://goo.gl/CvCEpm -->
    <meta name="theme-color" content="red"><!-- Chrome, Firefox OS and Opera -->
    <meta name="msapplication-navbutton-color" content="red"><!-- Windows Phone -->
    <meta name="apple-mobile-web-app-capable" content="yes"><!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="red"> <!-- iOS Safari -->
    <!-- Phone END -->
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name='author' content='Samuel Levin, Samuel_ipad2@hotmail.com'>
    <meta name='author' content='Sam Zhu, shengbozhu@yahoo.com'>
    <meta name="application-name" content="Pokemon Journey" />
    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png" />
    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png" />
    <link rel="manifest" href="favicon/manifest.json">
    <meta name="msapplication-TileColor" content="red">
    <meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="red">
    <title>Register</title>
</head>
<body>
<style>
    a{
        font-size: large;
        color: red;
    }
    a:hover{
        color: blue;
    }
</style>
<h1>Register</h1>
<pre>Your password will be saved as a hash (md5 & sha1), Meaning that noone will be able to access to your password *Not even me*</pre>
<pre>The same thing that Google, Youtube, Facebook, etc... use</pre>
<pre>For more information click <a href="http://php.net/manual/en/faq.passwords.php" target="_blank"><b>here</b></a> </pre>
<form action="action.php" method="get">
    <p>Your username: <input type="text" name="username" maxlength="15" minlength="3" required/></p>
    <p>Your password: <input type="password" name="password" maxlength="15" minlength="5" required/></p>
    <p>Your gender: </p>
    <input type="radio" name="gender" value="male" checked required> Male<br>
    <input type="radio" name="gender" value="female" required> Female<br>
    <p><input type="submit" /></p>
</form>
</body>
</html>
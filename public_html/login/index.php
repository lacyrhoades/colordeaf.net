<html>
<head>
    <title>Login</title>
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-27644954-2', 'colordeaf.net');
      ga('send', 'pageview');
    </script>
<style>
body {
    background-color: #EEE;
    margin: 0px;
    padding: 0px;
    font-family: "Georgia", "Times", serif;
    font-size: 12px;
}
a {
    text-decoration: none;
    color: #333;
}
ul {
    list-style-type: none;
}
div#menu {
    background-color: none;
    position: absolute;
    top: 15px;
    bottom: 15px;
    left: 15px;
    margin: auto;
    width: 220px;
    z-index: 1;
    transition: background-color 1s;
}
div#menu:hover {
    background-color: #FFF;
    transition: background-color 500ms;
}
div#menu h2 {
    margin: 15px;
    font-size: 12px;
}
div#menu li {
    margin: 5px 5px 10px 5px;
}
div#wrapper {
    position: relative;
    height: 100%;
    margin: 0px;
    overflow: scroll;
}
div.thumbs {
    position: absolute;
    top: 50%;
    height: 340px;
    margin-top:-170px;
    display: none;
}
div.thumbs.default {
    display: block;
}
div.thumbs img {
    display: inline;
    margin: 5px;
    height: 320px;
}
div.thumbs img.first {
    margin-left: 250px;
}
div#big {
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    width: 100%;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
    background-color: #151515;
    z-index: 2;
    display: none;
}
div.nav {
    position: absolute;
    height: 100%;
    width: 100px;
    text-align: center;
}
div.nav a:hover {
    color: rgba(180,180,180,1);
}
div.nav a {
    color: rgba(255,255,255,0.1);
    position: absolute;
    height: 20px;
    margin-top: -10px;
    left: 0;
    right: 0;
    top: 50%;
    margin: auto;
}
div#next {
    right: 0px;
}
div#previous {
    left: 0px;
}

div.thumbs.default img {
    margin-left: 300px;
    position: absolute;
    height: 375px;
    top: -25px;
}
div#itll-still-be-there {
    width: 2200px;
}
div#contented {
    width: 2400px;
}
div#litany {
    width: 3100px;
}
div#cost-of-living {
    width: 2600px;
}
div#nolo-contendere {
    width: 2200px;
}
div#untitled {
    width: 9400px;
}

div#login {
    height: 150px;
    width: 240px;
    left: 0;
    right: 0;
    margin: auto;
    position: absolute;
    top: 50%;
    margin-top: -150px;
}
div.text input {
    width: 100%;
}
label {
    display: block;
}
div.text label {
    font-size: 14px;
    margin: 4px;
}
div.checkbox {
    text-align: center;
    margin: 10px;
}
div.checkbox label {    
    display: inline;
}
</style>
</head>
<body>
    <div id="login">
        <form name="login" method="POST">
            <div class="text">
                <label for="username">Username</label>
                <input type="text" name="username" id="username"/>
            </div>
            <div class="text">
                <label for="password">Password</label>
                <input type="password" name="password" id="password"/>
            </div>
            <div class="checkbox">
                <input type="checkbox" name="remember" id="remember" checked="checked"/>
                <label for="remember">Remember me like this forever</label>
            </div>
        </form>
    </div>
</body>
</html>
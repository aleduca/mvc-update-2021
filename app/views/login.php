<h2>Login</h2>

<form action="/login/store" method="post">
    <input type="text" name="email" placeholder="Seu email." value="wehner.vincenza@gleason.net">
    <input type="password" name="password" placeholder="Sua senha." value="123">
    <button type="submit">Logar</button>
</form>


<br>

<?php echo flash('login'); ?>

<?php $this->layout('layouts::website');?>

<form action="<?php echo url("register.handle")?>" method="POST">
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" value="" class="form-controll" id="email">
    </div>
    <div class="form-group">
        <label for="wachtwoord">Wachtwoord</label>
        <input type="password" name="wachtwoord" class="formcontrol" id="wachtwoord">
    </div>
    <button type="submit class btn btn-primary">Registreren</button>
</form>



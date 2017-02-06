<?php
    if(isset($_SESSION['message']))
    {
        echo '<div class="'.$_SESSION['messageType'].'">'.$_SESSION['message'].'</div>';
    }
?>

<form method="POST">
    <p></p>
    <div class="input-group col-sm-4">
        <span class="input-group-addon" id="basic-addon1">Email</span>
        <input type="text" name="email" class="form-control" aria-describedby="basic-addon1">
    </div>
    <p></p>

    <div class="input-group col-sm-4">
        <span class="input-group-addon" id="basic-addon2">Password</span>
        <input type="password" name="password" class="form-control" aria-describedby="basic-addon2">
    </div>
    <p></p>

    <div class="input group col-sm-4">
        <input type="submit" class="btn btn-default" value="Login" />
    </div>
    <br/><br/>
    
    <p><a href="register" class="btn btn-default" role="button">Register a new account</a></p>

</form>
<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
<body>
<br><br>
<div class="container" style="margin-bottom: 7%">
    <div class="users form content">
        <?= $this->Form->create() ?>
        <fieldset>
            <h1>Login</h1>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1"
                       aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                       placeholder="Enter Password">
            </div>
        </fieldset>
        <?= $this->Form->button(__('Login'), ['class' => 'nav-item btn']); ?>
        <?= $this->Form->end() ?>

    </div>
</div>


</form>
</body>
</html>

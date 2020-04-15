<section style="width:50%; margin: auto">
    <h3 class="display-3">Add edit User</h3>
    <form action="<?php echo $formAction; ?>" method="post">
        <div class="form-group">
            <label for="exampleInputName">Fullname</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Fullname" require autocomplete="off" name="fullName" value="<?php echo isset($record->user_name) ? $record->user_name : ""; ?>">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" autocomplete="off" name="email" value="<?php echo isset($record->user_email) ? $record->user_email : ""; ?>" <?php if (isset($record->user_email)) : ?> disabled <?php else : ?> required <?php endif; ?>>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass" <?php if (isset($record->user_email)) : ?> placeholder="Không đổi password thì không nhập thông tin vào ô textbox này" <?php else : ?> required <?php endif; ?>>
        </div>
        <button type="submit" class="btn btn-outline-danger">Change</button>
    </form>
</section>
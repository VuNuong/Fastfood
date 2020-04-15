<section style="width:50%; margin: auto">
    <h3 class="display-3">Add edit Product</h3>
    <form action="<?php echo $formAction; ?>" method="post">
        <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Fullname" require autocomplete="off" name="fullName" value="<?php echo isset($record->category_product_name) ? $record->category_product_name : ""; ?>">
        </div>
        <button type="submit" class="btn btn-outline-danger">Change</button>
    </form>
</section>
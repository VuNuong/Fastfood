<style>
    .row {
        margin-bottom: 1rem;
    }
</style>
<section style="width:80%; margin: auto">
    <h3 class="display-3">Add edit slide_2</h3>
    <form action="<?php echo $formAction; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2">Images</div>
            <div class="col-md-10">
                <input type="file" name="img" class="form-control-file">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-danger">Submit</button>
        <button type="button" class="btn btn-outline-dark" onclick="history.go(-1);">Back</button>
    </form>
</section> 
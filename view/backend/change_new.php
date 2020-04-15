<style>
    .row {
        margin-bottom: 1rem;
    }
</style>
<section style="width:80%; margin: auto">
    <h3 class="display-3">Add edit New</h3>
    <form action="<?php echo $formAction; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-2"><label for="inputName">Name</label></div>
            <div class="col-md-10">
                <input type="text" class="form-control" id="inputName" placeholder="Enter Fullname" require autocomplete="off" name="fullName" value="<?php echo isset($record->new_name) ? $record->new_name : ""; ?>">
            </div>
        </div>
        <!-- <div class="row">
            <div class="col-md-2">Date</div>
            <div class="col-md-10">
                <input type="date" class="form-control" name="date">
            </div>
        </div> -->
        <div class="row">
            <div class="col-md-2">Content</div>
            <div class="col-md-10">
                <textarea name="content" class="form-control" style="height:250px;">
					<?php echo isset($record->new_content) ? $record->new_content : ""; ?>					
					</textarea>
                <script type="text/javascript">
                    CKEDITOR.replace("content");
                </script>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">Img</div>
            <div class="col-md-10">
                <input type="file" name="img" class="form-control-file">
            </div>
        </div>
        <button type="submit" class="btn btn-outline-danger">Submit</button>
        <button type="button" class="btn btn-outline-dark" onclick="history.go(-1);">Back</button>
    </form>
</section> 
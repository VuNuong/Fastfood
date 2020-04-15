<div class="container">
    <h1 class="display-4">Đăng nhập tài khoản</h1>
    <?php if (isset($_GET["action"]) && $_GET["action"] == "fail") { ?>
        <p style="color:red">Đăng nhập chưa thành công</p>
    <?php } else { ?>
        <p style="font-style: italic; color: #34abab">Nếu bạn có tài khoản xin vui lòng đăng nhập</p>
    <?php } ?>
    <div class="row justify-content-between" style="margin-top:50px;">
        <div class="col-md-6">
            <form method="post">
               <div class='form-group'>
                   <label for='exName'>Email</label>
                   <input type='email' class='form-control' id='exName' placeholder='Enter email' name="email" require autocomplete="off">
               </div>
               <div class='form-group'>
                   <label for='exPass'>Password</label>
                   <input type='password' class='form-control' id='exPass' placeholder='Password' name="password" require>
               </div>
               <input type='submit' class='btn btn-outline-danger' value="Đăng nhập"></input>
            </form>
        </div>
        <div class="col-md-5">
            <div class="">
                <p class="display-4"><span>Tạo tài khoản mới</span></p>
                <p>Đăng ký tài khoản để mua hàng nhanh hơn. Theo dõi đơn đặt hàng, vận chuyển. Cập nhật các sự kiện và chương trình giảm giá của chúng tôi.</p>
                <a href="index.php?controller=register" class="btn btn-outline-warning">Đăng ký</a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1 class="display-4">Đăng ký tài khoản</h1>
    <?php
    if (isset($_GET["action"]) && $_GET["action"] == "success") {
        ?>
        <p style="color:red;">Bạn đã đăng ký thành công!</p>
    <?php } else { ?>
        <p style="font-style: italic; color: #34abab">Nếu bạn chưa có tài khoản, hãy đăng ký ngay để nhận thông tin ưu đãi cùng những ưu đãi từ cửa hàng.</p>
    <?php } ?>
    <div class="row justify-content-between" style="margin-top:50px;">
        <div class="col-md-6">
            <form method="post">
                <div class="form-group">
                    <label for="exName">Họ và tên</label>
                    <input type="text" class="form-control" id="exName" placeholder="Your name.." name="hovaten" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exAdd">Địa chỉ</label>
                    <input type="text" class="form-control" id="exAdd" placeholder="Address.." name="diachi" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exMail">Email</label>
                    <input type="email" class="form-control" id="exMail" aria-describedby="emailHelp" placeholder="Enter email" name="email" autocomplete="off" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exPhone">Điện thoại</label>
                    <input type="text" class="form-control" id="exPhone" placeholder="Your phone.." name="dienthoai" autocomplete="off" required>
                </div>
                <div class="form-group">
                    <label for="exPass">Password</label>
                    <input type="password" class="form-control" id="exPass" placeholder="Password" name="password" required>
                </div>
                <input type="submit" class="btn btn-outline-success" value="Đăng ký" id="btn"></input>
            </form>
        </div>
        <div class="col-md-5">
            <div class="">
                <p class="display-4"><span>Đăng nhập</span></p>
                <p>Đăng nhập tài khoản nếu bạn đã có tài khoản. Đăng nhập tài khoản để theo dõi đơn đặt hàng, vận chuyển và đặt hàng được thuận lợi.</p>
                <a href="index.php?controller=login" class="btn btn-outline-warning">Đăng nhập</a>
            </div>
        </div>
    </div>
</div>
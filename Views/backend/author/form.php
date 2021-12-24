<?php require "Views/backend/layouts/header.php"; ?>

<div class="container">  
  <form id="contact" action="index.php?controller=admin&action=addAuthor" method="post">
    <h3>Thêm Tác giả</h3>
    <h4>Nhập họ tên</h4>
    <fieldset>
      <input placeholder="Tên Tác giả" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <h4>Nhập tên hiển thị</h4>
    <fieldset>
      <input placeholder="Tên hiển thị" name="display_name" type="text" tabindex="2" required>
    </fieldset>
    <h4>Nhập email</h4>
    <fieldset>
      <input placeholder="Email của bạn" name="email" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
            <label for="account_status">Chọn trạng thái</label>
            <select name="account_status" id="status"> 
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </fieldset>
    <fieldset>
    <label for="img">Chọn ảnh đại diện</label>
            <input type="text" placeholder="number.jpg | png | jpeg" id="img" name="profile" accept="image/*">
    </fieldset>
    <h4>Username</h4>
    <fieldset>
      <input placeholder="Username" name="username" type="text" tabindex="5" required></input>
    </fieldset>
    <h4>Password</h4>
    <fieldset>
      <input placeholder="Password" name="password" type="password" tabindex="5" required style="width:100%;"></input>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php require "Views/backend/layouts/footer.php"; ?>

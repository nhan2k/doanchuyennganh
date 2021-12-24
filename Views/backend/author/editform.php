<?php require "Views/backend/layouts/header.php"; ?>

<div class="container">  
  <form id="contact" action="index.php?controller=admin&action=editAuthor&author_id=<?= $data["author"][0]["author_id"] ?>" method="post">
    <h3>Sửa Tác giả</h3>
    <h4>ID</h4>
    <fieldset>
      <input  name="author_id" type="text" tabindex="1" required autofocus value="<?= $data["author"][0]["author_id"] ?>" disabled>
    </fieldset>
    <h4>Nhập họ tên</h4>
    <fieldset>
      <input  name="name" type="text" tabindex="1" required autofocus value="<?= $data["author"][0]["name"] ?>">
    </fieldset>
    <h4>Nhập tên hiển thị</h4>
    <fieldset>
      <input placeholder="Tên hiển thị" name="display_name" value="<?= $data["author"][0]["display_name"] ?>" type="text" tabindex="2" required>
    </fieldset>
    <h4>Nhập email</h4>
    <fieldset>
      <input placeholder="Email của bạn" name="email"  value="<?= $data["author"][0]["email"] ?>" type="email" tabindex="3" required>
    </fieldset>
    <fieldset>
            <label for="account_status">Chọn trạng thái</label>
            <?php $account_status = $data["author"][0]["account_status"];
              if($account_status == 1){
                $newStatus = 0;
              }else{
                $newStatus = 1;
              }
              ?>
            <select name="account_status" id="status"> 
                <option value="<?= $account_status ?>"> <?= $account_status ?> </option>
                <option value="<?= $newStatus ?>"> <?= $newStatus ?> </option>
                </option>
            </select>
        </fieldset>
    <fieldset>
    <label for="img">Chọn ảnh đại diện</label>
            <input type="text" id="img" name="profile" value="<?= $data['author'][0]['profile']?>">
    </fieldset>
    <h4>Username</h4>
    <fieldset>
      <input placeholder="Username" name="username" type="text" tabindex="5" required value="<?= $data['author'][0]['username']?>"></input>
    </fieldset>
    <h4>Password</h4>
    <fieldset>
      <input placeholder="Password" name="password" type="text" tabindex="5" required style="width:100%;" value="<?= $data['author'][0]['password']?>"></input>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php require "Views/backend/layouts/footer.php"; ?>

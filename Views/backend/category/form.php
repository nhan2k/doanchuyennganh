<?php require "Views/backend/layouts/header.php"; ?>

<div class="container">  
  <form id="contact" action="index.php?controller=admin&action=addCategory" method="post">
    <h3>Thêm Danh Mục</h3>
    <h4>Nhập tên danh mục</h4>
    <fieldset>
      <input placeholder="Tên danh mục" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <h4>Nhập mô tả danh mục</h4>
    <fieldset>
      <input placeholder="Mô tả danh mục" name="description" type="text" tabindex="2" required>
    </fieldset>
    <!-- <fieldset>
      <input placeholder="Your Phone Number (optional)" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Web Site (optional)" type="url" tabindex="4" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Type your message here...." tabindex="5" required></textarea>
    </fieldset> -->
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
  </form>
</div>

<?php require "Views/backend/layouts/footer.php"; ?>

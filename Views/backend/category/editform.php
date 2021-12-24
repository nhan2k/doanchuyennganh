<?php require "Views/backend/layouts/header.php"; ?>
<div class="container">  
  <form id="contact" action="index.php?controller=admin&action=updateCategory&id=<?= $data['category'][0]["id"] ?>" method="post">
    <h3>Sửa Danh Mục</h3>
    <h4>ID danh mục</h4>
    <fieldset>
      <input name="id" type="text" tabindex="1" required value="<?= $data['category'][0]["id"] ?>" disabled>
    </fieldset>
    <h4>Tên danh mục</h4>
    <fieldset>
      <input name="name" type="text" tabindex="1" required autofocus value="<?= $data['category'][0]["name"] ?>">
    </fieldset>
    <h4>Mô tả danh mục</h4>
    <fieldset>
      <input name="description" type="text" tabindex="2" required value="<?= $data['category'][0]["description"] ?>">
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

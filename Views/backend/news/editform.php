<?php require "Views/backend/layouts/header.php"; ?>

<div class="container">
    <form id="contact" action="index.php?controller=admin&action=editNews&id=<?= $data["news"][0]["newsId"] ?>" method="post">
        <h3>Sửa Tin tức</h3>
        <fieldset>
            <label for="">ID</label>
            <input  name="title" type="text" tabindex="1" required autofocus value="<?= $_GET["id"] ?>" disabled>
        </fieldset>
        <h4>Nhập tiêu đề</h4>
        <fieldset>
            <input  name="title" type="text" tabindex="1" required autofocus value="<?= $data["news"][0]["title"] ?>">
        </fieldset>
        <h4>Nhập nội dung</h4>
        <fieldset>
            <textarea name="content" tabindex="5" required value=""><?= $data["news"][0]["content"] ?></textarea>
        </fieldset>
        <h4>Ngày đăng</h4>
        <fieldset>
            <input type="date" name="date_posted" id="start" name="date_posted " value="<?= $data["news"][0]["date_posted"] ?>">
        </fieldset>
        <h4>Ngày cập nhật</h4>
        <fieldset>
            <input type="date" id="start" name="date_updated" value="<?= $data["news"][0]["date_updated"] ?>">
        </fieldset>
        <fieldset>
            <label for="status">Chọn trạng thái</label>
            <select name="status" id="status">
                <option value="<?= $data["news"][0]["status"] ?>"><?= $data["news"][0]["status"] ?></option>
            </select>
        </fieldset>
        <fieldset>
            <label for="status">Chọn trạng thái bình luận</label>
            <select name="comment_status" id="comment_status">
                <option value="<?= $data["news"][0]["comment_status"] ?>"><?= $data["news"][0]["comment_status"] ?></option>
            </select>
        </fieldset>
        <fieldset>
            <label for="img">Chọn hình ảnh</label>
            <input type="text" id="img" name="hinhanh" accept="image/*" value="<?= $data["news"][0]["hinhanh"] ?>">
        </fieldset>
        <fieldset>
            <label for="status">Chọn danh mục</label>
            <select name="category" id="status">
                <option value="<?= $data["news"][0]["category_id"] ?>"> <?= $data["news"][0]["category_name"] ?> </option>
            </select>
        </fieldset>
        <fieldset>
            <label for="status">Chọn tác giả</label>
            <select name="author_id" id="status">
                <option value="<?= $data["news"][0]["author_id"] ?>"> <?= $data["news"][0]["author_name"] ?> </option>
            </select>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
</div>
<?php require "Views/backend/layouts/footer.php"; ?>

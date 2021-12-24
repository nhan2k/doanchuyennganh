<?php require "Views/backend/layouts/header.php"; ?>

<div class="container">
    <form id="contact" action="index.php?controller=admin&action=addNews" method="post">
        <h3>Thêm Tin tức</h3>
        <h4>Nhập tiêu đề</h4>
        <fieldset>
            <input placeholder="Tên tiêu đề" name="title" type="text" tabindex="1" required autofocus>
        </fieldset>
        <h4>Nhập nội dung</h4>
        <fieldset>
            <textarea placeholder="Nhập nội dung ở đây...." name="content" tabindex="5" required></textarea>
        </fieldset>
        <h4>Ngày đăng</h4>
        <fieldset>
            <input type="date" id="start" name="date_posted" value="<?= date("d-M-Y") ?>"min="2021-10-31">
        </fieldset>
        <h4>Ngày cập nhật</h4>
        <fieldset>
            <input type="date" id="start" name="date_updated" value="<?= date("d-M-Y") ?>"min="2021-10-31">
        </fieldset>
        <fieldset>
            <label for="status">Chọn trạng thái</label>
            <select name="status" id="status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </fieldset>
        <fieldset>
            <label for="status">Chọn trạng thái bình luận</label>
            <select name="comment_status" id="comment_status">
                <option value="0">0</option>
                <option value="1">1</option>
            </select>
        </fieldset>
        <fieldset>
            <label for="img">Chọn hình ảnh</label>
            <input type="text" placeholder="number.jpg | png | jpeg" id="img" name="hinhanh" accept="image/*">
        </fieldset>
        <fieldset>
            <label for="status">Chọn danh mục</label>
            <select name="category" id="status">
                <?php foreach($data["nameCategory"] as $name) : ?>
                <option value="<?= $name["id"]?>"><?= $name["name"]?></option>
                <?php endforeach; ?>
            </select>
        </fieldset>
        <fieldset>
            <label for="status">Chọn tác giả</label>
            <select name="author_id" id="status">
                <?php foreach($data["nameAuthor"] as $name) : ?>
                <option value="<?= $name["author_id"]?>"><?= $name["name"]?></option>
                <?php endforeach; ?>
            </select>
        </fieldset>
        <fieldset>
            <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
        </fieldset>
    </form>
</div>

<?php require "Views/backend/layouts/footer.php"; ?>

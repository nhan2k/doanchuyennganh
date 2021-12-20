<?php require "Views/backend/layouts/header.php"; ?>

<div class="wrapper">
    <a class="button is-small is-primary pull-right" href="index.php?controller=admin&action=newsform">Thêm tin tức</a>

    <div class="table">

        <div class="row header green">
            <div class="cell">
                ID
            </div>
            <div class="cell">
                Hình ảnh
            </div>
            <div class="cell">
                Tiêu đề
            </div>
            <div class="cell">
                Nội dung
            </div>
            <div class="cell">
                Tác giả
            </div>
            <div class="cell">
                ID Danh mục
            </div>
            <div class="cell">
                Ngày đăng
            </div>
            <div class="cell">
                Ngày cập nhật
            </div>
            <div class="cell">
                Trạng thái
            </div>
            <div class="cell">
                Bình luận
            </div>
            <div class="cell">
                Sửa
            </div>
            <div class="cell">
                Xóa
            </div>
        </div>

        <?php foreach ($data["allNews"] as $item) : ?>
            <div class="row">
                <div class="cell" data-title="Name">
                    <?= $item["id"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <img src="./public/images/<?= $item["hinhanh"] ?>" alt="">
                </div>
                <div class="cell" data-title="Age">
                    <?= substr($item["title"], 0, 100). "..."?>
                </div>
                <div class="cell" data-title="Age">
                    <?= substr($item["content"], 0, 100). "..." ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["author_id"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["category_id"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["date_posted"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["date_updated"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["status"] ?>
                </div>
                <div class="cell" data-title="Age">
                    <?= $item["comment_status"] ?>
                </div>
                <div class="cell" data-title="Occupation">
                    <a href="index.php?controller=admin&action=pageEditNews&id=<?= $item["id"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                </div>
                <div class="cell" data-title="Location">
                    <a href="index.php?controller=admin&action=deleteNews&id=<?= $item["id"] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "Views/backend/layouts/footer.php"; ?>
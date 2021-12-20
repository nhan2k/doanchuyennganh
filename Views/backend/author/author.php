
    <?php require "Views/backend/layouts/header.php"; ?>
<div class="wrapper">
<a class="button is-small is-primary pull-right" href="index.php?controller=admin&action=authorForm">Thêm Tác giả</a>

    <div class="table">

        <div class="row header blue">
            <div class="cell">
                ID
            </div>
            <div class="cell">
                Họ tên
            </div>
            <div class="cell">
                Tên hiển thị 
            </div>
            <div class="cell">
                Email
            </div>
            <div class="cell">
                Trạng thái tài khoản
            </div>
            <div class="cell">
                Profile
            </div>
            <div class="cell">
                Username 
            </div>
            <div class="cell">
                Password
            </div>
            <div class="cell">
                Sửa
            </div>
            <div class="cell">
                Xóa
            </div>
        </div>

        <?php foreach ($data["author"] as $item) : ?>
        <div class="row">
            <div class="cell" data-title="Name">
                <?= $item["author_id"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["name"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["display_name"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["email"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["account_status"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["profile"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= $item["username"] ?>
            </div>
            <div class="cell" data-title="Age">
                <?= substr($item["password"], 0, 10). '...' ?>
            </div>
            <div class="cell" data-title="Occupation">
                <a href="index.php?controller=admin&action=authorEdit&author_id=<?= $item["author_id"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
            </div>
            <div class="cell" data-title="Location">
                <a href="index.php?controller=admin&action=deleteAuthor&author_id=<?= $item["author_id"] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require "Views/backend/layouts/footer.php"; ?>
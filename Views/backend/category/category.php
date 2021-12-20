
    <?php require "Views/backend/layouts/header.php"; ?>

                <div class="wrapper">
                <a class="button is-small is-primary pull-right" href="index.php?controller=admin&action=form">Thêm danh mục</a>

                    <div class="table">

                        <div class="row header">
                            <div class="cell">
                                ID
                            </div>
                            <div class="cell">
                                Tên
                            </div>
                            <div class="cell">
                                Mô tả
                            </div>
                            <div class="cell">
                                Sửa
                            </div>
                            <div class="cell">
                                Xóa
                            </div>
                        </div>

                        <?php foreach ($data["category"] as $item) : ?>
                        <div class="row">
                            <div class="cell" data-title="Name">
                                <?= $item["id"] ?>
                            </div>
                            <div class="cell" data-title="Age">
                                <?= $item["name"] ?>
                            </div>
                            <div class="cell" data-title="Age">
                                <?= $item["description"] ?>
                            </div>
                            <div class="cell" data-title="Occupation">
                                <a href="index.php?controller=admin&action=editform&id=<?= $item["id"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            </div>
                            <div class="cell" data-title="Location">
                                <a href="index.php?controller=admin&action=deleteCategory&id=<?= $item["id"] ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
    <?php require "Views/backend/layouts/footer.php"; ?>
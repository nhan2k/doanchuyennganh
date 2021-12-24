<?= require "Views/frontend/layouts/header.php" ?>

<div id="fh5co-title-box" style="background-image: url(public/images/<?= $data["news"][0]["hinhanh"] ?>); background-position: 50% 90.5px;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="page-title">
        <img src="public/images/<?= $data["news"][0]["hinhanh"] ?>" alt="Free HTML5 by FreeHTMl5.co">
        <span><?= $data["news"][0]["date_posted"] ?></span>
        <h2><?= $data["news"][0]["title"] ?></h2>
    </div>
</div>
<div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
    <div class="container paddding">
        <div class="row mx-0">
            <div class="col-md-8 animate-box" data-animate-effect="fadeInLeft">
                <p>
                    <?= $data["news"][0]["content"] ?>
                </p>
            </div>
            <div class="col-md-3 animate-box" data-animate-effect="fadeInRight">
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Danh mục</div>
                </div>
                <div class="clearfix"></div>
                <div class="fh5co_tags_all">
                    <?php foreach ($data["categoryName"] as $name) : ?>
                        <a href="#" class="fh5co_tagg"><?= $name["name"] ?></a>
                    <?php endforeach; ?>
                </div>
                <div>
                    <div class="fh5co_heading fh5co_heading_border_bottom pt-3 py-2 mb-4">Tin tức phổ biến</div>
                </div>
                <?php foreach ($data["allNews"] as $item) : ?>
                    <div class="row pb-3">
                        <div class="col-5 align-self-center">
                            <img src="public/images/<?= $item["hinhanh"] ?>" alt="img" class="fh5co_most_trading" />
                        </div>
                        <div class="col-7 paddding">
                            <div class="most_fh5co_treding_font"> <?= $item["title"] ?></div>
                            <div class="most_fh5co_treding_font_123"> <?= $item["date_posted"] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Bình luận</div>
        </div>
        <?php foreach($data["comment"] as $item) : ?>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="media g-mb-30 media-comment">
                        <img class="d-flex g-width-50 g-height-50 rounded-circle g-mt-3 g-mr-15" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Image Description">
                        <div class="media-body u-shadow-v18 g-bg-secondary g-pa-30">
                            <div class="g-mb-15">
                                <h5 class="h5 g-color-gray-dark-v1 mb-0"><?= $item["user_id"]?></h5>
                                <span class="g-color-gray-dark-v4 g-font-size-12"><?= $item["date"]?></span>
                            </div>

                            <p><?= $item["content"]?></p>

                            <ul class="list-inline d-sm-flex my-0">
                                <li class="list-inline-item g-mr-20">
                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                        <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3"></i>
                                        178
                                    </a>
                                </li>
                                <li class="list-inline-item g-mr-20">
                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                        <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3"></i>
                                        34
                                    </a>
                                </li>
                                <li class="list-inline-item ml-auto">
                                    <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                                        <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3"></i>
                                        Reply
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>

<?= require "Views/frontend/layouts/footer.php" ?>

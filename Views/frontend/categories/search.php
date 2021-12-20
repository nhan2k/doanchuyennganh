<?= require "Views/frontend/layouts/header.php" ?>


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
                                <img src="public/images/<?= $item["hinhanh"] ?>" alt="img" class="fh5co_most_trading"/>
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
                <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">Tin tức HOT</div>
            </div>
            <div class="owl-carousel owl-theme" id="slider2">
                <?php foreach($data["lastedNews"] as $item) : ?>
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="public/images/<?= $item["hinhanh"] ?>" alt=""/></div>
                            <div>
                                <a href="#" class="d-block fh5co_small_post_heading"><span class=""><?= $item["title"] ?></span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> <?= $item["date_posted"] ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

<?= require "Views/frontend/layouts/footer.php" ?>

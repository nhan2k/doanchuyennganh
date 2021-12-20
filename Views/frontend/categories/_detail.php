<?= require "Views/frontend/layouts/header.php" ?>
    <div id="fh5co-single-content" class="container-fluid pb-4 pt-4 paddding">
        <div class="container paddding">
            <div class="row mx-0">
                <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                    <div>
                        <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4"><?= $data["categoryName"][0]["name"] ?? 'Không có loại tin tức này.' ?></div>
                    </div>
                    <?php foreach ($data["categoryName"] as $item) : ?>
                        <div class="row pb-4">
                            <div class="col-md-5">
                                <div class="fh5co_hover_news_img">
                                    <div class="fh5co_news_img"><img src="public/images/<?= $item["hinhanh"] ?>" alt="" /></div>
                                    <div></div>
                                </div>
                            </div>
                            <div class="col-md-7 animate-box">
                                <a href="index.php?controller=news&action=show&id=<?= $item["id"]; ?>" class="fh5co_magna py-2"> <?= $item["title"] ?> </a>
                                <br />
                                <a href="single.html" class="fh5co_mini_time py-3"> <?= $item["name"] ?> </a>
                                <div class="fh5co_consectetur"> <?= substr($item["content"], 0, 200) . "..." ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-0 animate-box" data-animate-effect="fadeInUp">
    <div class="col-12 text-center pb-4 pt-4">
        <a href="#" class="btn_mange_pagging"><i class="fa fa-long-arrow-left"></i>&nbsp;&nbsp; Trang trước</a>
        <a href="#" class="btn_pagging">1</a>
        <a href="#" class="btn_pagging">2</a>
        <a href="#" class="btn_pagging">3</a>
        <a href="#" class="btn_pagging">...</a>
        <a href="#" class="btn_mange_pagging">Trang sau <i class="fa fa-long-arrow-right"></i>&nbsp;&nbsp; </a>
    </div>
    </div>

<?= require "Views/frontend/layouts/footer.php" ?>

<?php require "Views/backend/layouts/header.php"; ?>

        <section class="info-tiles">
          <div class="tile is-ancestor has-text-centered">
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumNews"][0]["count"];?></p>
                <p class="subtitle">Tin tức</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumCategory"][0]["count"];?></p>
                <p class="subtitle">Danh mục</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumAuthor"][0]["count"];?></p>
                <p class="subtitle">Tác giả</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumComment"][0]["count"];?></p>
                <p class="subtitle">Bình luận</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumSubscriber"][0]["count"];?></p>
                <p class="subtitle">Người đăng ký</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumBackup"][0]["count"];?></p>
                <p class="subtitle">Sao lưu</p>
              </article>
            </div>
            <div class="tile is-parent">
              <article class="tile is-child box">
                <p class="title"><?= $data["sumUser"][0]["count"];?></p>
                <p class="subtitle">User</p>
              </article>
            </div>
          </div>
        </section>
        
          <?php require "Views/backend/layouts/footer.php"; ?>

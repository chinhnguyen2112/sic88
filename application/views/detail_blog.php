<div class="widget_home">
    <div class="container_widget_about body_width">
        <div class="main_content_blog">
            <div class="blog_content">
                <div class="breadcrumb">
                    <span>
                        <img src="/images/icons/icons8-home-20.png" alt="icon home small">
                    </span>
                    <span>
                        <img src="/images/icons/icons8-arrow-right-10.png" alt="icon arrow right">
                    </span>
                    <?php if (isset($cate_1) && $cate_1 != null) { ?>
                        <a class="link_breadcrumb" href="/<?= $cate_1['alias'] ?>/"><?= $cate_1['name'] ?></a>
                        <span>
                            <img src="/images/icons/icons8-arrow-right-10.png" src="icon arrow right">
                        </span>
                    <?php }
                    if (isset($cate) && $cate != null) { ?>
                        <a class="link_breadcrumb" href="/<?= $cate['alias'] ?>/"><?= $cate['name'] ?></a>
                        <span>
                            <img src="/images/icons/icons8-arrow-right-10.png" src="icon arrow right">
                        </span>
                    <?php } ?>
                    <span class="this_breadcrumb"><?= $blog['title'] ?></span>
                </div>
                <div class="box_data_blog">
                    <div class="left_blog">
                        <h1 class="title_h1"><?= $blog['title'] ?></h1>
                        <div class="box_author">
                            <?php if (isset($author) && $author != null) { ?>
                                <div class="text_author">
                                    <img src="/<?= ($author['image'] != null) ? $author['image'] : 'images/avt.png' ?>" alt="Tác giả">
                                    <a class="name_author" href="/tac-gia/<?= $author['alias'] ?>/"><?= $author['name'] ?></a>
                                </div>
                            <?php } ?>
                            <div class="box_date">
                                <img src="/images/date.svg" alt="Ngày đăng">
                                <p class="date_blog">Đăng ngày: <?= date('d-m-Y', $blog['created_at']) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sapo"> <?= $blog['sapo'] ?></div>
                <div class="right_detail">
                    <div class="mucluc_blog" id="mucluc_blog">
                        <div class="box_title_ml">
                            <p class="title_mucluc" id="title_mucluc"><img class="img_ml" src="/images/icons/mucluc.png" alt="mục lục"> Mục lục</p>
                            <img src="/images/arrow.svg" class="img_show_ml" alt="mục lục">
                        </div>
                        <ul class="list_mucluc" id="list_mucluc">

                        </ul>
                    </div>
                </div>
                <div class="left_detail">
                    <div class="content_blog" id="content_blog">
                        <?= $blog['content'] ?>
                    </div>
                </div>
                <?php
                if ($blog['tag'] != '') {
                    $tag = explode(',', $blog['tag']); ?>
                    <div class="box_tag">
                        <p class="title_tag"><img src="/images/icons/icon-chu-de.svg" alt="Chủ đề"> Chủ đề:</p>
                        <?php foreach ($tag as $key_tag => $val) {
                            $this_tag = tag(['id' => $val]);
                            echo '<a href="/' . $this_tag[0]['alias'] . '/" class="this_tag">' . $this_tag[0]['name'] . '</a>';
                        } ?>
                    </div>
                <?php } ?>
                <?php if ($blog_same != null) { ?>
                    <div class="blog_same">
                        <div class="list_blog_same">
                            <?php
                            foreach ($blog_same as $val) { ?>
                                <div class="this_handbook ">
                                    <a class="img_item" href="/<?= $val['alias'] ?>/">
                                        <img class="img_blog_same" src="/<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                    </a>
                                    <div class="data_handbook">
                                        <a class="title_handbook" href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                                        <p class="date_post">
                                            <a class="name_cate" href="/<?= $blog['alias_cate'] ?>"><?= $blog['name_cate'] ?></a>
                                            <span>
                                                <?= date('d-m-Y', $val['created_at']) ?>
                                                <span>
                                        </p>
                                        <div class="this_des_handbook"><?= $val['sapo'] ?></div>
                                    </div>

                                </div>
                            <?php
                            } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
            <?php include('includes/sidebar.php') ?>
        </div>
    </div>
</div>
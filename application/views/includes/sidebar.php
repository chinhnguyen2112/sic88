<link rel="stylesheet" href="/assets/css/css_sidebar.css">
<div class="sidebar_content">
    <!-- <div class="sidebar_box">
        <div class="box_heading">
            <a href="#">Liên Kết Hữu Ích</a>
        </div>
        <div class="box_content_sidebar">
            <ul>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Game Bắn Súng
                    <strong>
                        <a href="#">CSGO</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/pubg/">PUBG</a>
                    </strong>
                    Phiên Bản Mới
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Bóng Đá
                    <strong>
                        <a href="/fifa-online-4/">Fifa Online 4</a>
                    </strong>
                    Đỉnh Cao
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Garena
                    <strong>
                        <a href="/lien-quan-mobile/">Liên Quân Mobile</a>
                    </strong>
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    Khám Phá
                    <strong>
                        <a href="/lien-minh-huyen-thoai/">LMHT</a>
                    </strong>
                    Việt Nam
                </li>
                <li class="item_content_sidebar">
                    <img class="icon_li" src="/images/icons8-star-50.png" />
                    News
                    <strong>
                        <a href="/valorant/">Valorant</a>
                    </strong>
                    Riot Games
                </li>
            </ul>
        </div>
    </div> -->
    <div class="sidebar_box">
                <div class="box_heading">
                    <a href="#">Liên Kết Hữu Ích</a>
                </div>
                <div class="box_content">
                    <ul>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Kiếm Tiền Từ
                            <strong>
                                <a href="/casino-online/">Casino Online</a>
                            </strong>
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Mẹo Hack
                            <strong>
                                <a href="/game-bai/">Game Bài</a>
                            </strong>
                            Hiệu Quả
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Luật Chơi
                            <strong>
                                <a href="/poker/">Poker</a>
                            </strong>
                            Là Gì
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Top 6 Trang
                            <strong>
                                <a href="/da-ga-truc-tiep/">Đá Gà</a>
                            </strong>
                            Uy Tín
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            6 Cách Soi Cầu
                            <strong>
                                <a href="/tai-xiu/">Tài Xỉu</a>
                            </strong>
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Phiên Bản
                            <strong>
                                <a href="/ban-ca/">Bắn Cá</a>
                            </strong>
                            Hấp Dẫn
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Phiên Bản
                            <strong>
                                <a href="/no-hu/">Nổ Hũ</a>
                            </strong>
                            Chào 2023
                        </li>
                        <li class="item_content_sidebar">
                            <img class="icon_li" src="/images/icons/icons8-star-15.png" />
                            Game
                            <strong>
                                <a href="/baccarat/">Baccarat</a>
                            </strong>
                            Beginner Guide
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hot_news">
                <div class="box_heading">
                    <a href="#">
                        <img src="/images/icons/icons8-fire-30.png" />
                        Tin Mới Nóng
                    </a>
                </div>
                <div class="box_content">
                    <ul>
                        <?php foreach ($blog_new as $key => $val) { 
                                    if ($key > 0 && $key < 5) { ?>
                        <li class="item_hot_news">
                            <a href="/<?= $val['alias'] ?>"><?= $val['title'] ?></a>
                        </li>
                        <?php }
                                } ?>
                    </ul>
                    <div class="see_more_news">
                        <button class="btn_more">
                            <a href="/">Xem Thêm</a>
                        </button>
                    </div>
                </div>
            </div>
</div>
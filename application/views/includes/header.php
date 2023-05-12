<div class="header ">
    <div class="header_width body_width">
        <div class="header_top" id="header_top">
            <div class="header_scroll">
                <img src="/images/menu_mb.svg" alt="show menu" class="img_show_menu" onclick="show_menu(this,1)">
                <div class="logo_header">
                    <img src="/images/icons/logo.png">
                </div>
                <div class="search">
                    <img class="img_search" src="/images/icons/icons8-search-30.png">
                    <input placeholder="Search..." />
                </div>
                <div class="all_btn_acc">
                    <a class="btn_acc btn_login" href="#">Đăng Nhập</a>
                    <a class="btn_acc btn_register" href="#">Đăng Ký</a>
                </div>
                <img class="search_nonpc" src="/images/icons/icons8-search-25.png">
            </div>
        </div>
        <div class="header_menu">
            <div class="list_menu">
                <div class="menu" id="menu">
                    <ul class="list_menu">
                        <li class="item_menu">
                            <a class="item_home" href="#">
                                <img class="logo_home" src="/images/icons/icons_home.png">
                                <p>TRANG CHỦ</p>
                            </a>
                        </li>
                        <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 20 AND id != 22 AND id != 24 AND id != 25');
                            foreach ($menu_cate_parent as $val) {
                                $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                        <div class="item_menu">
                            <span><a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></span>
                            <?php if ($menu_cate != null) { ?>
                            <div class="sub_menu">
                                <?php foreach ($menu_cate as $val1) { ?>
                                <p><a href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a></p>
                                <?php } ?>
                            </div>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <li class="item_menu">
                            <a class="link_special" href="#">
                                <img src="/images/icons/icons_km.png">
                                <p>KHUYẾN MÃI</p>
                            </a>
                        </li>
                        <li class="item_menu">
                            <a href="#">
                                <img src="/images/icons/icons_vip.png">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header_bot" id="header_bot">
            <div class="header_scroll">
                <div class="left_noti">
                    <img src="/images/icons/icons_tb.png">
                    <p class="title_noti">Thông Báo:</p>
                </div>
                <marquee>
                    <a class="text_noti" href="#">Khuyến mãi khủng nhất trong năm từ Fic88 duy nhất chỉ có trong đợt
                        nghỉ lễ 30/4-1/5 nhanh tay nào các game thủ</a>
                </marquee>
            </div>
        </div>
    </div>
</div>
<div class="main_content">
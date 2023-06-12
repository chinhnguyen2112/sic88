<div class="header">
    <div class="header_width ">
        <div class="header_top body_width" id="header_top">
            <div class="header_scroll">
                <img src="/images/icons/menu_mb.svg" alt="show menu" class="img_show_menu" id="open_menu" onclick="show_menu(this,1)">
                <img src="/images/icons/icons8-cancel-30 .png" alt="close menu" class="img_show_menu close_menu" id="close_menu" onclick="show_menu(this,2)">
                <a href="/" class="logo_header">
                    <img src="/images/Logo_sic88.png" alt="logo">
                    <!-- <p class="fic">SIC</p>
                    <p class="number_logo">88</p> -->
                </a>
                <div class="search">
                    <form id="search" method="get" action="/search">
                        <img class="img_search" src="/images/icons/icons8-search-30.png" alt="icon search">
                        <input id="search_input" autocomplete="off" name="search" placeholder="Search..." />
                    </form>
                </div>
                <div class="all_btn_acc">
                    <a class="btn_acc btn_login" href="#">Đăng Nhập</a>
                    <a class="btn_acc btn_register" href="#">Đăng Ký</a>
                </div>
                <img class="search_nonpc" id="open" src="/images/icons/icons8-search-25.png" alt="icon search" onclick="show_search(this,1)">
                <img class="search_nonpc cancel" id="cancel" src="/images/icons/icons8-cancel-30 .png" alt="icon search" onclick="show_search(this,2)">
            </div>
        </div>
        <div class="header_menu">
            <div class="menu body_width" id="menu">
                <ul class="list_menu">
                    <div class="all_item_menu">
                        <li class="logo_menu">
                            <a href="/">
                                <img src="/images/icons8-home-30-2.png" alt="icons home">
                            </a>
                        </li>
                        <?php $menu_cate_parent = chuyen_muc('parent = 0 AND id != 20 AND id != 22 AND id != 24 AND id != 25');
                        foreach ($menu_cate_parent as $val) {
                            $menu_cate = chuyen_muc(['parent' => $val['id']]); ?>
                            <li class="item_menu" onclick="show_submenu(this,1)">
                                <span>
                                    
                                    <?php if ($menu_cate != null) { ?>
                                        <img class="img_arrow" src="/images/icons/icons8-forward-30.png" alt="icon arrow">
                                    <?php } ?>
                                    <a id="val_a" href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a>
                                </span>
                                <?php if ($menu_cate != null) { ?>
                                    <div class="sub_menu">
                                        <div class="content_submenu">
                                            <?php foreach ($menu_cate as $val1) { ?>
                                                <p><a class="item_sub_menu" href="/<?= $val1['alias'] ?>/"><?= $val1['name'] ?></a></p>
                                            <?php } ?>
                                        </div>
                                    </div>
                                <?php } ?>
                            </li>
                        <?php } ?>
                    </div>
                    <div class="another_item_menu">
                        <li class="item_menu">
                            <span>
                                <a class="link_special" href="/khuyen-mai/" rel=”nofollow”>
                                    <img src="/images/icons/icons_km.png" alt="icon khuyến mãi">
                                    <p>Khuyến Mãi</p>
                                </a>
                            </span>
                        </li>
                        <li class="item_menu">
                            <span>
                                <a class="vip" href="/vip-sic88/" rel=”nofollow”>
                                    <img src="/images/icons/icons_vip.png" alt="icon vip">
                                </a>
                            </span>
                        </li>
                    </div>
                    <div class="social">
                        <a href="#">
                            <img src="/images/icons/zalo.png" alt="icon zalo">
                        </a>
                        <a href="#">
                            <img src="/images/icons/fb.png" alt="icon facebook">
                        </a>
                        <a href="#">
                            <img src="/images/icons/tw.png" alt="icon twitter">
                        </a>
                        <a href="#">
                            <img src="/images/icons/ytb.png" alt="icon youtube">
                        </a>
                        <a href="#">
                            <img src="/images/icons/rss.png" alt="icon rss">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="main_content">
<?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
$count_line = 0;
if (count($menu_cate_parent) > 2) {
    $count_line =  count($menu_cate_parent) - 2;
} ?>
<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="footer-widgets body_width">
        <div class="box_logo_ft">
            <img class="logo_ft" src="/images/logo.png">
        </div>
        <div class="list_footer bg_mb ">
            <!-- <p class="title_ft">Giới thiệu</p> -->
            <div id="text-1" class="widget widget--footer widget_text">
                <p class="address_ft">Fic88 là trung tâm giải trí có trụ sở tại Phillippines, với các trò chơi hấp dẫn như Lô Đề Online, Casino Live, Cá Độ Bóng Đá, Đá Gà,… thì Fic88 hiện đang thực sự là trung tâm giải trí hàng đầu Đông Nam Á.</p>
            </div>
        </div>
        <div class="list_footer pd_mb mg_ft">
            <div id="text-1" class="widget widget--footer widget_text">
                <!-- <div class="textwidget">
                    <p>Danh mục</p>
                </div> -->
                <div class="fl_ft">
                    <div class="left_ft">
                        <?php foreach ($menu_cate_parent as $key =>  $val) {
                            if ($key < count($menu_cate_parent) / 2) { ?>
                                <p class="address_ft cate_ft"><a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></p>
                        <?php }
                        } ?>
                    </div>
                    <div class="left_ft">
                        <?php foreach ($menu_cate_parent as $key => $val) {
                            if ($key >= count($menu_cate_parent) / 2) { ?>
                                <p class="address_ft cate_ft"><a href="/<?= $val['alias'] ?>/"><?= $val['name'] ?></a></p>
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="list_footer pd_mb list_footer_50">
            <div id="text-1" class="widget widget--footer widget_text">
                <!-- <div class="textwidget">
                    <p>Về chúng tôi</p>
                </div> -->
                <p class="address_ft cate_ft"><a href="#">Giới thiệu</a></p>
                <p class="address_ft cate_ft"><a href="#">Liên hệ</a></p>
            </div>
        </div>
        <div class="list_footer pd_mb mg_ft ">
            <div class="box_ft">
                <p class="title_down_ft">Tải ứng dụng</p>
                <p class="btn_down_ft p_down_ft"><img src="/images/favicon.png" alt="Sic88"> Sic88</p>
                <p class="btn_down_ft p_down_ft"><img src="/images/favicon.png" alt="Sic88"> International</p>

                <p class="title_down_ft">Liên hệ</p>
                <p class="p_down_ft"><img src="/images/sms.svg" alt="Sic88"> Tòa soạn</p>
                <p class="p_down_ft"><img src="/images/icon-eclick.svg" alt="Sic88"> Quảng cáo</p>
                <p class="p_down_ft"><img src="/images/logo_vlight.svg" alt="Sic88"> Hợp tác bản quyền</p>
            </div>
            <div class="box_ft">
                <p class="title_down_ft">Đường dây nóng</p>
                <p class="p_hotline"><span>083.888.0123</span> <span class="mini_hotline_ft">(Hà Nội)</span> </p>
                <p class="p_hotline"><span>082.233.3555</span> <span class="mini_hotline_ft">(Hà Nội)</span> </p>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class=" body_width">
            <div class="site-info">© Copyright 2022 Sic88 All Rights Reserved.</div>
        </div>
    </div>
</footer>
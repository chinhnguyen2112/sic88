<?php $menu_cate_parent = chuyen_muc(['parent' => 0]);
$count_line = 0;
if (count($menu_cate_parent) > 2) {
  $count_line =  count($menu_cate_parent) - 2;
} ?>
<div class="footer">
    <div class="footer_width body_width">
        <div class="content_footer">
            <div class="item_ft01">
                <div class="logo_ft">
                    <img src="/images/logo/Logo_sic88.png" alt="logo">
                </div>
                <div class="introduce">
                    <div class="content_intro">
                        <p class="infor_01">
                            <a href="/">Sic88</a>
                            là trung tâm giải trí có trụ sở tại Phillippines, với các trò chơi hấp dẫn như Lô Đề Online,
                            Casino Live, Cá Độ Bóng Đá, Đá Gà,… thì sic88 hiện đang thực sự là trung tâm giải trí hàng
                            đầu Đông Nam Á.
                        </p>
                        <p class="infor_01">Địa chỉ: 24 ngõ 18 đường Phan Đình Giót, Tổ 2 La Khê, Hà Đông, Hà Nội</p>
                        <p class="infor_01">Email: nhacaisic88@gmail.com</p>
                    </div>
                    <div class="icons_contact">
                        <a href="#" class="item_icons">
                            <img src="/images/icons/icons8-facebook-30.png">
                        </a>
                        <a href="#" class="item_icons">
                            <img src="/images/icons/icons8-instagram-30.png">
                        </a>
                        <a href="#" class="item_icons">
                            <img src="/images/icons/icons8-youtube-30.png">
                        </a>
                    </div>
                </div>
            </div>
            <div class="item_ft02">
                <ul class="list_game_ft">
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/casino-online/">Casino Online</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/no-hu/">Nổ Hũ</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/game-bai/">Game Bài</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/tai-xiu/">Tài Xỉu</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/game-slot-doi-thuong/">Game Đổi Thưởng</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/ban-ca/">Bắn Cá</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/da-ga-truc-tiep/">Đá Gà Trực Tiếp</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/co-ca-ngua/">Cờ Cá Ngựa</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/lo-de-online/">Lô Đề Online</a>
                    </li>
                </ul>
            </div>
            <div class="item_ft03">
                <ul class="list_guide">
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/dang-ky-sic88/">Đăng ký sic88</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/rut-tien-sic88/">Rút tiền sic88</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/nap-tien-sic88/">Nạp tiền sic88</a>
                    </li>
                    <li class="item_game_ft">
                        <img src="/images/icons/icons8-more-than-30.png">
                        <a href="/dang-nhap-sic88/">Đăng nhập sic88</a>
                    </li>
                </ul>
                <div class="div_dmca">
                    <a
                        href="https://www.dmca.com/Protection/Status.aspx?ID=edfe211c-add0-4955-8a3c-0b6973cd7020&amp;refurl=https://sic88.org/"><img
                            src="https://images.dmca.com/Badges/_dmca_premi_badge_2.png?ID=edfe211c-add0-4955-8a3c-0b6973cd7020"
                            alt="DMCA.com Protection Status"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="coppy_right">
        <p class="text_cr">© 2023 - sic88. All Rights Reserved.</p>
    </div>
    <div class="back_to_top">
        <a id="btn_to_top" class="btn_to_top">
            <img src="/images/icons/icons8-arrow-50.png">
        </a>
    </div>
    <div class="footer_btn">
        <div class="content_ft_btn">
            <a class="btn_ft_regis">Đăng Ký Tài Khoản</a>
            <a class="btn_ft_login">Đăng Nhập</a>
        </div>
    </div>
</div>
<script>
$(window).scroll(function() {
    if ($(this).scrollTop()) {
        $('#btn_to_top').fadeIn(500);
    } else {
        $('#btn_to_top').fadeOut(500);
    }
});
$("#btn_to_top").click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, 2000);
    document.getElementById("btn_to_top").style.display = 'none';
});
</script>
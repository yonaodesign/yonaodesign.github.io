$(function(){function e(){s.addClass(""),o.show(),setTimeout(function(){s.addClass("side-menu-visible"),d.fadeIn()},50)}function n(){s.removeClass("side-menu-visible"),d.fadeOut(),setTimeout(function(){o.hide(),s.removeClass("")},400)}var s=$("body"),i=$(".navbar"),a=$(".navbar-collapse");s.append('<div class="side-menu-overlay"></div>');var d=$(".side-menu-overlay");s.append('<div id="side-menu"></div>');var o=$("#side-menu");o.append('<button class="close btn btn-primary"><span aria-hidden="true">×</span></button>');var t=o.find(".close");o.append(`<div class="content"><br><br><ul class="nav" id="navId">

                        <a href="https://www.google.com/maps/dir//%E3%80%92557-0063+%E5%A4%A7%E9%98%AA%E5%BA%9C%E5%A4%A7%E9%98%AA%E5%B8%82%E8%A5%BF%E6%88%90%E5%8C%BA%E5%8D%97%E6%B4%A5%E5%AE%88%EF%BC%95%E4%B8%81%E7%9B%AE%EF%BC%92%E2%88%92%EF%BC%96%EF%BC%94+%E6%A0%AA%E5%BC%8F%E4%BC%9A%E7%A4%BE%E3%82%BB%E3%83%B3%E3%82%B7%E3%83%A7%E3%83%BC/@34.6298008,135.4778858,17z/data=!4m16!1m6!3m5!1s0x6000dd70793fffff:0x38c65a84bb2438cd!2z5qCq5byP5Lya56S-44K744Oz44K344On44O8!8m2!3d34.6298008!4d135.4800745!4m8!1m0!1m5!1m1!1s0x6000dd70793fffff:0x38c65a84bb2438cd!2m2!1d135.4800745!2d34.6298008!3e3"
                            class="nav-link btn btn-sidemenu btn-primary" style="min-height: 50px; min-width:50px; margin-right:14px;">
                            <span><svg width="14" height="19" viewBox="0 0 14 19" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7 19C5.73693 17.9226 4.56619 16.7415 3.5 15.469C1.9 13.558 8.83662e-07 10.712 8.83662e-07 7.99999C-0.00141728 5.16754 1.70425 2.61338 4.32107 1.52939C6.93789 0.445394 9.95007 1.04523 11.952 3.04899C13.2685 4.3596 14.0059 6.14238 14 7.99999C14 10.712 12.1 13.558 10.5 15.469C9.43382 16.7415 8.26307 17.9226 7 19ZM7 2.99999C4.23995 3.0033 2.00331 5.23994 2 7.99999C2 9.16599 2.527 11.185 5.035 14.186C5.65314 14.924 6.30902 15.6297 7 16.3C7.69105 15.6304 8.34724 14.9259 8.966 14.189C11.473 11.184 12 9.16499 12 7.99999C11.9967 5.23994 9.76006 3.0033 7 2.99999ZM7 11C5.34315 11 4 9.65684 4 7.99999C4 6.34313 5.34315 4.99999 7 4.99999C8.65686 4.99999 10 6.34313 10 7.99999C10 8.79564 9.68393 9.5587 9.12132 10.1213C8.55871 10.6839 7.79565 11 7 11Z"
                                        fill="#2E3A59" />
                                </svg></span>
                            <span class="label"> 地図で表示</span></a>

                        <a href="tel:06-6657-0007" class="nav-link btn btn-sidemenu btn-primary" style="min-height: 50px; min-width:50px; margin-right:14px;">
                            <span><svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.595 19.006H15.567C11.7253 18.9114 8.05925 17.3775 5.29498 14.708C2.6245 11.9462 1.08967 8.28156 0.994862 4.441C0.989205 3.903 1.20044 3.38536 1.58098 3.005L4.29498 0.293C4.68548 -0.0973819 5.31848 -0.0973819 5.70898 0.293L9.70898 4.293C10.0994 4.6835 10.0994 5.3165 9.70898 5.707L8.11298 7.3C8.40899 8.40592 8.95425 9.4294 9.70698 10.292C10.568 11.045 11.5902 11.5906 12.695 11.887L14.295 10.293C14.6855 9.90262 15.3185 9.90262 15.709 10.293L19.709 14.293C20.0994 14.6835 20.0994 15.3165 19.709 15.707L16.995 18.42C16.6249 18.7939 16.121 19.0048 15.595 19.006ZM4.99998 2.415H4.99498L2.99498 4.419C3.07652 7.73766 4.4013 10.9047 6.70698 13.293C9.09541 15.5979 12.2618 16.9225 15.58 17.005L17.587 15L14.995 12.415L13.702 13.707C13.517 13.894 13.265 13.9995 13.002 14C12.9317 14 12.8617 13.9927 12.793 13.978C11.1266 13.6094 9.57937 12.8285 8.29298 11.707C7.17143 10.4206 6.39059 8.87337 6.02198 7.207C5.95244 6.87577 6.05517 6.53184 6.29498 6.293L7.58698 5L4.99998 2.415Z"
                                        fill="#2E3A59" />
                                </svg>
                            </span>
                            <span class="label"> 06-6657-0007</span></a>

                            <li class="nav-item">
                            <a href="/contact/index.php" class="nav-link btn btn-sidemenu btn-secondary" style="min-height: 50px; min-width:50px; margin-right:14px;"><span><svg width="20" height="16"
                                        viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18 16H2C0.89543 16 0 15.1046 0 14V1.913C0.0466084 0.842548 0.928533 -0.00101238 2 9.11911e-07H18C19.1046 9.11911e-07 20 0.895432 20 2V14C20 15.1046 19.1046 16 18 16ZM2 3.868V14H18V3.868L10 9.2L2 3.868ZM2.8 2L10 6.8L17.2 2H2.8Z"
                                            fill="#2E3A59" />
                                    </svg></span><span class="label"> お問い合わせ</span></a>
                        </li>
    


<li style="display:block; width:100%">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">めっき技術・表面処理</a>
    <div>

        <a class="dropdown-item" href="/plating/nickel.html">ニッケルめっき</a>
        <a class="dropdown-item" href="/plating/tin.html">錫めっき</a>
        <a class="dropdown-item" href="/plating/hardchromium.html">硬質クロムめっき</a>
        <a class="dropdown-item" href="/plating/electroless_nickel.html">無電解ニッケルめっき</a>
        <a class="dropdown-item" href="/plating/nickelchrome.html">ニッケルクロムめっき</a>
        <a class="dropdown-item" href="/plating/compositeplating.html">複合めっき</a>
        <a class="dropdown-item" href="/plating/colored_titanium.html">チタン材カラーリング</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">会社案内</a>
    <div >
        <a class="dropdown-item" href="/company.html">会社概要</a>
        <a class="dropdown-item" href="/company.html#message">社長あいさつ</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">SDGsの取り組み</a>
    <div >
        <a class="dropdown-item" href="/SDGs.html">センショーのSDGsの取り組み</a>
        <a class="dropdown-item visually-hidden" href="/SDGs.html">2021年の実績報告</a>
        <a class="dropdown-item" href="/SDGs.html">SDGsとは</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">採用</a>
    <div >
        <a class="dropdown-item" href="/recruit.html">募集要項</a>
        <a class="dropdown-item" href="/recruit.html">先輩社員の声</a>
        <a class="dropdown-item" href="/recruit.html">仕事内容</a>
        <a class="dropdown-item" href="/recruit.html">従業員教育</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">ニュース</a>
    <div >
        <a class="dropdown-item" href="/news.html">新着情報</a>
        <a class="dropdown-item" href="/blog.html">ブログ</a>
    </div>
</li>
</ul>



</div>`);var l=o.find(".contents");i.hasClass("better-bootstrap-nav-left")&&o.addClass("side-menu-left"),a.on("show.bs.collapse",function(n){n.preventDefault();var s=$(this).html();l.html(s),e()}),t.on("click",function(e){e.preventDefault(),n()}),d.on("click",function(e){n()}),$(window).resize(function(){!a.is(":visible")&&s.hasClass("side-menu-visible")?(o.show(),d.show()):(o.hide(),d.hide())})});
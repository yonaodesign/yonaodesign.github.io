$(function(){function e(){s.addClass("overflow-hidden"),o.show(),setTimeout(function(){s.addClass("side-menu-visible"),d.fadeIn()},50)}function n(){s.removeClass("side-menu-visible"),d.fadeOut(),setTimeout(function(){o.hide(),s.removeClass("overflow-hidden")},400)}var s=$("body"),i=$(".navbar"),a=$(".navbar-collapse");s.append('<div class="side-menu-overlay"></div>');var d=$(".side-menu-overlay");s.append('<div id="side-menu"></div>');var o=$("#side-menu");o.append('<button class="close btn btn-primary"><span aria-hidden="true">×</span></button>');var t=o.find(".close");o.append(`<div class="content"><br><br><ul class="nav" id="navId">
<li style="display:block; width:100%">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">めっき技術・表面処理</a>
    <div>

        <a class="dropdown-item" href="./plating/nickel.html">ニッケルめっき</a>
        <a class="dropdown-item" href="./plating/tin.html">錫めっき</a>
        <a class="dropdown-item" href="./plating/hardchromium.html">硬質クロムめっき</a>
        <a class="dropdown-item" href="./plating/electroless_nickel.html">無電解ニッケルめっき</a>
        <a class="dropdown-item" href="./plating/nickelchrome.html">ニッケルクロムめっき</a>
        <a class="dropdown-item" href="./plating/compositeplating.html">複合めっき</a>
        <a class="dropdown-item" href="./plating/colored_titanium.html">チタン材カラーリング</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">会社案内</a>
    <div >
        <a class="dropdown-item" href="./company.html">会社概要</a>
        <a class="dropdown-item" href="./company.html#message">社長あいさつ</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">SDGsの取り組み</a>
    <div >
        <a class="dropdown-item" href="./SDGs.html">センショーのSDGsの取り組み</a>
        <a class="dropdown-item visually-hidden" href="./SDGs.html">2021年の実績報告</a>
        <a class="dropdown-item" href="./SDGs.html">SDGsとは</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">採用</a>
    <div >
        <a class="dropdown-item" href="./recruit.html">募集要項</a>
        <a class="dropdown-item" href="./recruit.html">先輩社員の声</a>
        <a class="dropdown-item" href="./recruit.html">仕事内容</a>
        <a class="dropdown-item" href="./recruit.html">従業員教育</a>
    </div>
</li>

<li style="display:block; width:100%" >
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
        aria-haspopup="true" aria-expanded="false">ニュース</a>
    <div >
        <a class="dropdown-item" href="./news.html">新着情報</a>
        <a class="dropdown-item" href="./blog.html">ブログ</a>
        <a class="dropdown-item" href="./news.html">メルマガ登録</a>
    </div>
</li>
</ul>



</div>`);var l=o.find(".contents");i.hasClass("better-bootstrap-nav-left")&&o.addClass("side-menu-left"),a.on("show.bs.collapse",function(n){n.preventDefault();var s=$(this).html();l.html(s),e()}),t.on("click",function(e){e.preventDefault(),n()}),d.on("click",function(e){n()}),$(window).resize(function(){!a.is(":visible")&&s.hasClass("side-menu-visible")?(o.show(),d.show()):(o.hide(),d.hide())})});
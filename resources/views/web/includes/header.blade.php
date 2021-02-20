<div class="header">
    <div class="site-topbar">
        <div class="container">
            <div class="topbar-nav">
                <a rel="nofollow" href="/">mishop</a>
                <span class="sep">|</span>
                <a rel="nofollow" href="/" target="_blank">MIUI</a> <span class="sep">|</span><a rel="nofollow" href="/" target="_blank">协议规则</a>
            </div>
            <div id="J_miniCartTrigger" class="topbar-cart"><a id="J_miniCartBtn" href="/" class="cart-mini"><em class="iconfont-cart"></em><em class="iconfont-cart-full hide"></em>购物车<span class="cart-mini-num J_cartNum">（0）</span></a>
                <div id="J_miniCartMenu" class="cart-menu ">
                    <div class="menu-content">
                        <div class="loading">
                            <div class="loader"></div>
                        </div>
                        <ul id="J_miniCartList" class="cart-list hide"></ul>
                        <div id="J_miniCartListTotal" class="cart-total clearfix hide"></div>
                        <div class="msg msg-error hide"></div>
                        <div class="msg msg-empty hide">购物车中还没有商品，赶紧选购吧！</div>
                    </div>
                </div>
            </div>
            @if(!$user)
            <div id="J_siteUserInfo" class="topbar-info">
                <a class="link" href="/login">登录</a> <span class="sep">|</span> <a href="javascript:void(0);" class="link" data-href="/register">注册</a><span class="sep">|</span><span class="message"><a href="javascript:void(0);" class="J_needAgreement">消息通知<i class="J_miMessageTotal"></i></a></span>
            </div>
            @else
            <div id="J_siteUserInfo" class="topbar-info">
                <a class="link" href="/user/order"><i class="iconfont icon-info-circle"></i> {{$user->username}}</a><span class="sep">|</span>
                @if($user->is_admin)
                <a href="/admin" class="link">管理后台</a>
                @endif
            </div>
            @endif
        </div>
        </div>
    </div>
    <div class="site-header">
        <div class="container">
            <div class="header-logo"><a href="/" title="小米官网" class="logo ir"></a></div>
            <div class="header-nav ">
                <ul class="nav-list J_navMainList clearfix">
                    <li id="J_navCategory" class="nav-category"><a href="/category" class="link-category"><span class="text">全部商品分类</span></a></li>
                    <li class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">小米手机</span></a></li>
                    <li data-index="1" class="nav-item"><a href="javascript: void(0);"  class="link"><span class="text">Redmi 红米</span></a></li>
                    <li data-index="2" class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">电视</span></a></li>
                    <li data-index="3" class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">笔记本</span></a></li>
                    <li data-index="4" class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">家电</span></a></li>
                    <li data-index="5" class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">路由器</span></a></li>
                    <li data-index="6" class="nav-item"><a href="javascript: void(0);" class="link"><span class="text">智能硬件</span></a></li>
                </ul>
            </div>
            <div class="header-search ">
                <form id="J_searchForm" action="/search" method="get" class="search-form clearfix">
                    <label for="search" class="hide">站内搜索</label>
                    <a class="no-style-msq" >
                        <input type="search" id="search" name="keyword" autocomplete="off" class="search-text" placeholder="Redmi Note 9 Pro">
                    </a>
                    <a id="J_submitBtn" class="no-style-msq">
                        <div type="submit" value="" class="search-btn"><i class=" iconfont icon-search1"></i></div>
                    </a>
                    <div class="search-hot-words"></div>
                </form>
            </div>
        </div>
    </div>
</div>
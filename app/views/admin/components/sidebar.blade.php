<div class="sidebar">
    <div class="user clearfix">
        <div class="user-portrait">
            <img class="portrait-img" src="/images/test/u70.png">
        </div>
        <div class="user-info">
            <div class="user-name">{{Auth::user()->account}}</div>
            <div class="user-role">超级管理员</div>
        </div>
    </div>
    <ul class="menu">
        <li class="sub-menu"> <!--  active-menu -->
            <div class="dropdown-btn">
                <img src="/images/icon/official.png" class="dropdown-btn-icon">
                <a href="#" class="dropdown-btn-title">微官网</a>
            </div>
            <ul class="sub-menu-item">
                <li class="sub-menu-link-wrap">
                    <a href="/admin/official/title/manage" class="sub-menu-link">标题设置</a>
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/official/title/manage" class="three-level-menu-item-link">标题设置</a>
                        </li>
                    </ul>
                </li>
                
                <li class="sub-menu-link-wrap">
                    <a href="/admin/official/resource/manage" class="sub-menu-link">干货管理</a> <!-- active-link -->
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/official/resource/add" class="three-level-menu-item-link">添加干货</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/official/resource/edit" class="three-level-menu-item-link">编辑干货</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/official/resource/manage" class="three-level-menu-item-link">干货管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/official/advert/manage" class="sub-menu-link">广告管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/official/advert/add" class="three-level-menu-item-link">添加广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/official/advert/edit" class="three-level-menu-item-link">编辑广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/official/advert/manage" class="three-level-menu-item-link">广告管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
            </ul>
        </li>
        <li class="sub-menu">
            <div class="dropdown-btn">
                <img src="/images/icon/vote.png" class="dropdown-btn-icon">
                <a href="#" class="dropdown-btn-title">微投票</a>
            </div>
            <ul class="sub-menu-item">
                <li class="sub-menu-link-wrap">
                    <a href="/admin/vote/project/manage" class="sub-menu-link">项目管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/project/add" class="three-level-menu-item-link">添加项目</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/project/edit" class="three-level-menu-item-link">编辑项目</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/project/manage" class="three-level-menu-item-link">项目管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/vote/content/manage" class="sub-menu-link">内容管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/content/add" class="three-level-menu-item-link">添加内容</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/content/edit" class="three-level-menu-item-link">编辑内容</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/content/manage" class="three-level-menu-item-link">内容管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/vote/advert/manage" class="sub-menu-link active-link">广告管理</a>
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/advert/add" class="three-level-menu-item-link">添加广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/advert/edit" class="three-level-menu-item-link">编辑广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/vote/advert/manage" class="three-level-menu-item-link">广告管理</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sub-menu">
            <div class="dropdown-btn">
                <img src="/images/icon/album.png" class="dropdown-btn-icon">
                <a href="#" class="dropdown-btn-title">微相册</a>
            </div>
            <ul class="sub-menu-item">
                <li class="sub-menu-link-wrap">
                    <a href="/admin/album/photo/manage" class="sub-menu-link">相片管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/album/photo/add" class="three-level-menu-item-link">添加相片</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/photo/edit" class="three-level-menu-item-link">编辑相片</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/photo/manage" class="three-level-menu-item-link">相片管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/album/album/manage" class="sub-menu-link">相册管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/album/album/add" class="three-level-menu-item-link">添加相册</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/album/edit" class="three-level-menu-item-link">编辑相册</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/album/manage" class="three-level-menu-item-link">相册管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/album/video/manage" class="sub-menu-link">视频管理</a>
                    <!-- 三级下拉菜单 start 万一你要这玩意呢？-->
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/album/video/add" class="three-level-menu-item-link">添加视频</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/video/edit" class="three-level-menu-item-link">编辑视频</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/video/manage" class="three-level-menu-item-link">视频管理</a>
                        </li>
                    </ul>
                    <!-- 三级下拉菜单 end -->
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/album/advert/manage" class="sub-menu-link">广告管理</a>
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/album/advert/add" class="three-level-menu-item-link">添加广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/advert/edit" class="three-level-menu-item-link">编辑广告</a>
                        </li>
                        <li class="three-level-menu-item">
                            <a href="/admin/album/advert/manage" class="three-level-menu-item-link">广告管理</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="sub-menu">
            <div class="dropdown-btn">
                <img src="/images/icon/setting.png" class="dropdown-btn-icon">
                <a href="#" class="dropdown-btn-title">系统管理</a>
            </div>
            <ul class="sub-menu-item">
                <li class="sub-menu-link-wrap">
                    <a href="/admin/system/manage-user" class="sub-menu-link">用户管理</a>
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/system/manage-user" class="three-level-menu-item-link">用户管理</a>
                        </li>
                    </ul>
                </li>
                <li class="sub-menu-link-wrap">
                    <a href="/admin/system/manage-news" class="sub-menu-link">新闻管理</a>
                    <ul class="three-level-menu">
                        <li class="three-level-menu-item">
                            <a href="/admin/system/manage-news" class="three-level-menu-item-link">新闻管理</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</div>
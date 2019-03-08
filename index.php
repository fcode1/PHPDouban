
<?php
session_start();
function showName(){
    if(isset($_SESSION['username'])){
        echo"<span>欢迎你：{$_SESSION['username']}</span>";
    }
}
function showExit(){
    if(isset($_SESSION['username'])){
        echo"<a href=".'exit.php'.">退出</a>";
    }
}
function showLog(){
    if(isset($_SESSION['value'])){
        $value=$_SESSION['value'];
        // echo"<script>alert('$value')</script>";

        echo"<img src='common/img/$value.jpg'>";
    }else{
        echo "<embed src='common/img/music.swf' width=".'300px;'." height=".'250px;'.">";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>豆瓣音乐</title>
    <link rel="stylesheet" href="common/css/doubStyle.css">
    <link rel="stylesheet" href="plug/slider/style/slider.css">
    <link rel="stylesheet" href="plug/tab/tab.css">
    <link rel="stylesheet" href="plug/input/input.css">
    <style>
        .banner img{
            margin-left:10px;
            width:270px;
            height:250px;
        }
    </style>
</head>

<body>
    <!-- 联系我们 -->
    <div class="call">
        <span>联系我们</span>
        <img src="common/img/code.jpg" alt="">
    </div>
    <!-- -------------------------------------------------------------------- -->
    <div class="global-nav">
        <div class="bd">
            <div class="top-nav-info">
                <a href="login.php">登录</a>
                <a href="login_admin.php">管理员</a>
            </div>
            <div class="top-nav-app">
                <a href="userInfo.php"><?=showName()?></a>
                <span>&nbsp;&nbsp;&nbsp;&nbsp;<?=showExit()?></span>
            </div>
            <div class="global-nav-items">
                <ul>
                    <li class="navs"><a>豆瓣</a></li>
                    <li class="navs"><a>读书</a></li>
                    <li class="navs"><a>电影</a></li>
                    <li class="navs"><a>音乐</a></li>
                    <li class="navs"><a>同城</a></li>
                    <li class="navs"><a>小组</a></li>
                    <li class="navs"><a>阅读</a></li>
                    <li class="navs"><a>FM</a></li>
                    <li class="navs"><a>时间</a></li>
                    <li class="navs"><a>豆品</a></li>
                    <li class="navs"><a>更多</a></li>
                    <li class="bg"></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="nav-wrap">
            <div class="nav-logo">
                <img src="common/img/dou.png" alt="">
            </div>
            <div class="nav-search">
                <div id="inputWrap"></div>
                <div class="search_suggest">
                    <ul class="search-list">
                    </ul>
                </div>
            </div>
        </div>
        <hr style="background-color: rgb(214, 216, 213);width:100%;height:1px;" />
        <div class="secondary-nav">
            <div class="nav-items">
                <ul>
                    <li><a>音乐人</a></li>
                    <li><a>潮潮豆瓣音乐周</a></li>
                    <li><a>金羊毛计划</a></li>
                    <li><a>专题</a></li>
                    <li><a>排行榜</a></li>
                    <li><a>音乐浏览</a></li>
                    <li><a>乐评</a></li>
                    <li><a>豆瓣FM</a></li>
                    <li><a>歌单</a></li>
                    <li><a>阿比鹿音乐奖</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="content">
            <div class="article">
                <div class="wrap">
                    <!--轮播插件位置-->
                    <div class="slider" id="swiper"></div>
                </div>
                <div class="popular-artists" id="tabWrapper">
                </div>
                <div class="editor-feature">
                    <div class="editor-header">
                        <h2>编辑推荐</h2>
                    </div>
                    <div class="slick-featuer">
                        <button class="slickActive slick-prev slick-arrow">&lt;</button>
                        <button class=" slick-next slick-arrow ">&gt;</button>
                        <div class="slick-list ">
                            <div class="slick-track ">
                                <div class="slick-content ">
                                    <a class="slick-photo "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                                <div class="slick-content ">
                                    <a class="slick-photo "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                                <div class="slick-content ">
                                    <a class="slick-photo "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                                <div class="slick-content ">
                                    <a class="slick-photo two "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                                <div class="slick-content ">
                                    <a class="slick-photo two "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                                <div class="slick-content ">
                                    <a class="slick-photo two "></a>
                                    <p>【歌曲】</p>
                                    <h3>绝对纯洁</h3>
                                    <h4>绝对纯洁</h4>
                                    <p>终于可以在网上听到“绝对纯洁”了。前"怪力 "乐队的文隽搬到上海后组建了新的四人组，同名曲的歌词真是一首好诗。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="new-albums" id="newWrapper">
                    <ul>
                        <h3>新碟榜</h3>
                        <li class="active">最热</li>
                        <li>华语</li>
                        <li>欧美</li>
                        <li>日韩</li>
                    </ul>
                    <div style="display:block;">
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new1.png" alt="">
                            <a href="">撞</a>
                            <p>火箭少女</p>
                        </section>
                    </div>
                    <div>
                        <section class="new-wrap">
                            <img src="common/img/new2.png" alt="">
                            <a href="">LOURA</a>
                            <p>娄艺潇</p>
                        </section>
                        <section class="new-wrap">
                            <img src="common/img/new2.png" alt="">
                            <a href="">LOURA</a>
                            <p>娄艺潇</p>
                        </section>

                    </div>
                    <div>3</div>
                    <div>4</div>
                </div>
            </div>
            <!-- ----------------------------------------------------------------------- -->
            <div class="aside ">
                <div class="banner ">
               <?=showLog()?>
                    <!-- <embed src="common/img/music.swf" width="300px;" height="250px;" type=""> -->
                    <!-- <img src="img/banner.png " alt=" "> -->

                </div>
                <div class="join ">
                    <div class="join-block ">
                        <h2>44827</h2>
                        <p>音乐人</p>
                    </div>
                    <div class="join-block ">
                        <h2>13654</h2>
                        <p>博客</p>
                    </div>
                    <div class="join-block ">
                        <h2>1122</h2>
                        <p>厂牌</p>
                    </div>
                    <div class="join-btn ">
                        <a style="color:#fff;" href="login.php">我要加入</a>
                    </div>
                </div>
                <div class="hot-singer ">
                    <div class="hot-header "><a>热门音乐人分类</a></div>
                    <div class="hot-header-more "><a>更多</a></div>
                    <div class="hot-table ">
                        <table>
                            <tbody>
                                <tr>
                                    <th><a>流行</a></th>
                                    <td>音乐</td>
                                </tr>
                                <tr>
                                    <th><a>流行</a></th>
                                    <td>音乐</td>
                                </tr>
                                <tr>
                                    <th><a>流行</a></th>
                                    <td>音乐</td>
                                </tr>
                                <tr>
                                    <th><a>流行</a></th>
                                    <td>音乐</td>
                                </tr>
                                <tr>
                                    <th><a>流行</a></th>
                                    <td>音乐</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="hotsong ">
                    <div class="hotsong-head ">
                        <span>本周单曲榜</span>
                        <a><img src="common/img/play.png " alt=" "></a>
                    </div>
                    <div class="hotsong-content ">
                        <ul class="h-head ">
                            <li>最热</li>|
                            <li>摇滚</li>|
                            <li>民谣</li>|
                            <li>流行</li>|
                            <li>电子</li>|
                            <li>说唱</li>|
                        </ul>
                        <ul class="h-content ">
                            <li>
                                <div><img src="common/img/week2.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>1</span>
                            </li>
                            <li>
                                <div><img src="common/img/week1.jpg" alt=" "></div>
                                <h3>夏夜</h3>
                                <p>里往年/1998 次播放</p>
                                <span>2</span>
                            </li>
                            <li>
                                <div><img src="common/img/week2.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>3</span>
                            </li>
                            <li>
                                <div><img src="common/img/week1.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>4</span>
                            </li>
                            <li>
                                <div><img src="common/img/week2.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>5</span>
                            </li>
                            <li>
                                <div><img src="common/img/week1.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>6</span>
                            </li>
                            <li>
                                <div><img src="common/img/week2.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>7</span></li>
                            <li>
                                <div><img src="common/img/week1.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>8</span></li>
                            <li>
                                <div><img src="common/img/week2.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>9</span></li>
                            <li>
                                <div><img src="common/img/week1.jpg" alt=" "></div>
                                <h3>危险游戏</h3>
                                <p>梁晓雪/1758 次播放</p>
                                <span>10</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        
    </div>
    <div class="footer">
        <span>Copyright © 2016－2018<a href="http://blog.fcode.xyz"> fcode.xyz</a> , all rights reserved fcode</span>
        <span class="footRight"><a href="http://blog.fcode.xyz">关于我们</a> · 在这里工作 · 联系我们 · 免责声明 · 帮助中心 · 手机音乐 ·</span>
    </div>
    <script src="common/js/jquery-3.3.1.js "></script>
    <script src="plug/slider/js/jquery-slider.js "></script>
    <script src="plug/tab/jquery-tab.js "></script>
    <script src="plug/input/jquery-input.js"></script>

    <script src="common/js/douban.js"></script>
    <script src="common/js/init.js"></script>
</body>

</html>
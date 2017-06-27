/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

    // Place your code here.
    //如果瀑布流区块是active的，则隐藏侧边栏
    $("ul.quicktabs-tabs li:first a").click(function(){
		$("#block-block-2,#block-block-5").css("display", "none");
    });
    $("ul.quicktabs-tabs li:not(:first) a").click(function(){
		$("#block-block-2,#block-block-5").css("display", "block");
    });

    //如果上传的瀑布流图片宽高比小于1:2且没有封面图的话，则提示上传封面
    $("#article-node-form #edit-submit").click(function(){
    	console.log($("#edit-field-waterfall-image img:first").width());
    });

    $(".user-login").click(function(){
      $("#gray").show();
      $("#popup").show();//查找ID为popup的DIV show()显示#gray
      $(".right-min .tabCon form").hide();
      $(".right-min .tabCon form").eq(0).show();
      $('.right-min ul li').eq(0).addClass('active').siblings().removeClass('active');
      tc_center();
    });

    $(".user-register").click(function(){
      $("#gray").show();
      $("#popup").show();//查找ID为popup的DIV show()显示#gray
      $(".right-min .tabCon form").hide();
      $(".right-min .tabCon form").eq(1).show();
      $('.right-min ul li').eq(1).addClass('active').siblings().removeClass('active');
      tc_center();
    });
    //点击关闭按钮
    $("a.guanbi").click(function(){
      $("#gray").hide();
      $("#popup").hide();//查找ID为popup的DIV hide()隐藏
    })

    //窗口水平居中
    $(window).resize(function(){
      tc_center();
    });

    function tc_center(){
      var _top=($(window).height()-$(".popup").height())/2;
      var _left=($(window).width()-$(".popup").width())/2;
      
      $(".popup").css({top:_top,left:_left});
    } 

    //登录注册切换
   
    $(".right-min .tabCon form").hide();

    $(".right-min .tabCon form").eq(0).show();
    $(".right-min ul li").click(function(){
        var num =$(".right-min ul li").index(this);
        $(".right-min .tabCon form").hide();
        $(".right-min .tabCon form").eq(num).show();
        $(this).addClass('active').siblings().removeClass('active');
    })

    //搜索结果页 切换展示
    
     $(".quicktabs-search li #quicktabs-pb").click(function(){  
       $(".drupal-search-page ol").addClass('waterfall-topic-list');
       $(".drupal-search-page ol").removeClass('fenlan-topic-list'); 
    })

     $(".quicktabs-search li #quicktabs-tw").click(function(){
       $(".drupal-search-page ol").addClass('fenlan-topic-list');
       $(".drupal-search-page ol").removeClass('waterfall-topic-list'); 
    })

    $(".quicktabs-search  li").eq(0).addClass('active');
    $(".quicktabs-search  li").click(function(){
        $(this).addClass('active').siblings().removeClass('active');
    })
  }
};


})(jQuery, Drupal, this, this.document);

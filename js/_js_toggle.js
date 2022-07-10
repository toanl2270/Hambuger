
jQuery(function () {
  jQuery(".l-header__sidebar__open").on("click", function () {        // js-btnクラスをクリックすると、
    jQuery(".l-sidebar,.l-sidebar__main_bg").toggleClass("l-sidebar_open"); // メニューとバーガーの線にtoggleクラスをつけ外しする
    jQuery('body').toggleClass('noneScroll')
    })
  });
 
  jQuery(function () {
    jQuery(".l-sidebar__close__btn").on("click", function () {        // js-btnクラスをクリックすると、
      jQuery(".l-sidebar,.l-sidebar__main_bg").removeClass("l-sidebar_open"); 
      jQuery('body').removeClass('noneScroll')
    })
  });

  jQuery(function(){
    jQuery(window).resize(function(e){
        var h = jQuery(this).height();
        var w = jQuery(this).width();
        jQuery(".l-sidebar,.l-sidebar__main_bg").removeClass("l-sidebar_open"); // メニューとバーガーの線にtoggleクラスをつけ外しする
        jQuery('body').removeClass('noneScroll')
    });
});

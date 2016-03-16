$(function(){
    $("#s-nav li:first-child").children().addClass("s-chosen");
    $("#s-nav a").click(function (e) {
        e.preventDefault(); //阻止a链接的跳转行为
        $(this).addClass("s-chosen").
                parent().siblings().children().removeClass("s-chosen");
        var id = $(this).attr("href");
        $(id).removeClass("hidden").siblings().addClass("hidden"); //显示当前选中的链接及关联的content
    });

    // $('#user').
    function hoverShow(id){
    	$(id).hover(function(){
    	$('.user-center').removeClass('hidden');
    },function(){
    	$('.user-center').addClass('hidden');
    });
    }
    hoverShow('#user');
    hoverShow('#enter');
//固定字数，超出使用。。。
{
var maxwidth=2;
var $solidwords=$(".solidwords");
if($solidwords.text().length>maxwidth)
{
    $solidwords.text($solidwords.text().substring(0,maxwidth));
    $solidwords.html($solidwords.html()+'…');
}
}
//导航栏加样式
{
    var path=location.pathname;
    var url=path.split('/')[path.split('/').length-1];
    $('.nav li a').each(function(){
        if ($(this).attr('href')==url) {
            $(this).parent().addClass('current').siblings().removeClass('current');
        };
    })
}
});
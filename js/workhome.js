
    <script type="text/javascript">
        (function($) {
              $.fn.myScroll = function(options) {
                //默认配置
                var defaults = {
                  speed: 40,
                  //滚动速度,值越大速度越慢
                 // rowHeight: 111 //每行的高度
                };
                var opts = $.extend({}, defaults, options),
                    intId = [];
                function marquee(obj, step) {
                  obj.find("ul").animate({
                    marginTop: '-=1'
                  }, 0, function() {
                    var s = Math.abs(parseInt($(this).css("margin-top")));
                    if (s >= step) {
                      $(this).find("li").slice(0, 1).appendTo($(this));
                      $(this).css("margin-top", 0);
                    }
                  });
                }

                this.each(function(i) {
                  var sh = opts["rowHeight"],
                      speed = opts["speed"],
                      _this = $(this);
                  intId[i] = setInterval(function() {
                    marquee(_this, sh);
                  }, speed);
                  _this.hover(function() {
                    clearInterval(intId[i]);
                  }, function() {
                    intId[i] = setInterval(function() {
                      marquee(_this, sh);
                    }, speed);
                  });
                });
              }
            })(jQuery);
               
               $(function(){
                 $("div.demo").myScroll({
                      speed:40,
                      rowHeight:30
                      });
                 });




        //滚动插件
        (function($){
        $.fn.extend({
                Scroll:function(opt,callback){
                        //参数初始化
                        if(!opt) var opt={};
                        var _this=this.eq(0).find("ul:first");
                        var        lineH=_this.find("li:first").height(), //获取行高
                                line=opt.line?parseInt(opt.line,10):parseInt(this.height()/lineH,10), //每次滚动的行数，默认为一屏，即父容器高度
                                speed=opt.speed?parseInt(opt.speed,10):500, //卷动速度，数值越大，速度越慢（毫秒）
                                timer=opt.timer?parseInt(opt.timer,10):3000; //滚动的时间间隔（毫秒）
                        if(line==0) line=1;
                        var upHeight=0-line*lineH;
                        //滚动函数
                        scrollUp=function(){
                                _this.animate({
                                        marginTop:upHeight
                                },speed,function(){
                                        for(i=1;i<=line;i++){
                                                _this.find("li:first").appendTo(_this);
                                        }
                                        _this.css({marginTop:0});
                                });
                        }
                        //鼠标事件绑定
                        _this.hover(function(){
                                clearInterval(timerID);
                        },function(){
                                timerID=setInterval("scrollUp()",timer);
                        }).mouseout();
                }        
        })
        })(jQuery);

        $(document).ready(function(){
                $("#scrollDiv").Scroll({line:3,speed:500,timer:3000});
        });
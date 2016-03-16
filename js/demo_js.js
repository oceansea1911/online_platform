var xmlHttp;

  function forum_reply(comment_id, course_id)
  { 
    console.log(comment_id);
  xmlHttp=GetXmlHttpObject();
  if (xmlHttp==null)
   {
   alert ("Browser does not support HTTP Request");
   return;
   }
  var url="forum_reply.php";
  url=url+"?comment_id="+comment_id+"&course_id="+course_id;

  var content = $("#content").val();
  console.log('dsddd');
  xmlHttp.onreadystatechange=stateChanged();
  xmlHttp.open("POST",url,true);
  xmlHttp.send(content);
  };

  function stateChanged() 
  { 
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   { 
   document.getElementById("s-part1").innerHTML=xmlHttp.responseText;
   } 
  };

  function GetXmlHttpObject()
  {
  var xmlHttp=null;
  try
   {
   // Firefox, Opera 8.0+, Safari
   xmlHttp=new XMLHttpRequest();
   }
  catch (e)
   {
   //Internet Explorer
   try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
   catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
   }
  return xmlHttp;
  };




                <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" 
               data-dismiss="modal" aria-hidden="true">
                  &times; </button>
                      <h4 class="modal-title" id="myModalLabel">
                             视频名称
                      </h4>
                    </div>
                    <div class="modal-body">
                      <video class='video-style' controls="controls" src="{$course_content[content].video_url}">
                        <p> 浏览器不支持该视频播放，请升级浏览器</p>
                      </video>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">关闭
                      </button>
                      <button type="button" class="btn btn-primary">保存</button>
                    </div> -->
                  </div>
                </div>
        </div> 

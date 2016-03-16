  <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px;margin-top: -10px">
            <dl>
              <dt>授课老师</dt>
              <dd>
                  <a href="#" class="figure"><img src="img/user.png">
                  </a>
                  <a href="#">{$teachers['name']}</a>
                  <p> {$teachers['position']}</p>
                  <br class="clear">
                  <p class="indent" style="margin-top: 20px;">{$teachers['teacher_info']}
                    <!-- W3CPlus创始人，目前就职于手淘。对CSS3和Sass等前端脚本语言有深入的认识和丰富的实践经验。CSS3、Sass和Drupal中国布道者，2014年出版《图解CSS3：核心技术与案例实战》。 -->
                  </p>
              </dd>
            </dl>
            <dl>
              <dt>课程须知</dt>
                <dd>
                <p class="indent">{$courses['info']}<!-- 对CSS有一定的了解，才可以更好的学习本课程。 --></p>
              </dd>
            </dl>
            <dl>
              <dt>老师告诉你能学到什么？</dt>
               <!--  <dd>Sass是什么？他有什么功能？</dd>
                <dd>Sass需要什么样的环境才能顺利运行</dd> -->
                <dd>{$courses['teacher_advise']}<!-- Sass语法格式和CSS有什么不一样？
                <dd>Sass要如何编译
                <dd>你要怎么调试Sass -->
                
            </dl>
        </div>
      </div>
    </div>




    
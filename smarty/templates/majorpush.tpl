 <div class="col-xs-6 col-sm-3 pull-right" style="padding: 10px; margin-top: -10px;">
            <dl>
              <dt>最新课程</dt>
             {foreach from=$courses_new_list item=courses_new }
              <dd>{$courses_new['name']}</dd>
             <!--  <dd>$courses_new['name']}</dd>
              <dd>{$courses_new['2']}</dd>
              <dd>{$courses_new['3']}</dd>
              <dd>javascript高级程序设计</dd>
              <dd>HTML5秘籍</dd> -->
              {/foreach} 
            </dl>
            <dl>
              <dt>最新实习</dt>
            {foreach from=$internships_new_list item=internships_new }
              <dd>{$internships_new['name']}</dd>
              <!-- <dd>{$interships_new['1']}</dd>
              <dd>{$interships_new['2']}</dd>
              <dd>{$interships_new['3']}</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd>
              <dd>百度前端实习</dd> -->
              {/foreach} 
            </dl>
        </div>
      </div>
    </div>


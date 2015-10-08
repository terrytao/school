<section>
    <h1 class="blue" data-id="#pages/dashboard"><i class="ace-icon fa fa-desktop grey"></i> Dashboard</h1>


    <div class="hr hr-double hr32"></div>


    <!-- #section:pages/dashboard -->
    <div class="help-content">
        <h3 class="info-title smaller" data-id="#pages/dashboard.infobox">Infobox</h3>
        <!-- #section:pages/dashboard.infobox -->
        <div class="info-section">
            <ul class="info-list list-unstyled">
                <li>
                    Little stat and info boxes which consist of <code>.infobox-icon</code> and
                    <code>.infobox-data</code>
                    and optional <code>.stat</code> arrows or <a href="#elements.badge"
                                                                 class="help-more"><code>.badges</code></a>
                    <br/>

                    <div class="well well-sm">
                        <div class="infobox infobox-green">
                            <div class="infobox-icon">
                                <i class="ace-icon fa fa-comments"></i>
                            </div>

                            <div class="infobox-data">
                                <span class="infobox-data-number">32</span>

                                <div class="infobox-content">comments</div>
                            </div>

                            <div class="stat stat-success">8%</div>
                        </div>
                    </div>
			
<pre data-language="html">
<div class="infobox infobox-green">
    <div class="infobox-icon">
        <i class="ace-icon fa fa-comments"></i>
    </div>

    <div class="infobox-data">
        <span class="infobox-data-number">32</span>

        <div class="infobox-content">comments</div>
    </div>

    <div class="stat stat-success">8%</div>
</div>
</pre>
                </li>

                <li>
                    Infobox colors are:
                    <ol>
                        <li><code>.infobox-purple</code></li>
                        <li><code>.infobox-purple2</code></li>
                        <li><code>.infobox-pink</code></li>
                        <li><code>.infobox-blue</code></li>
                        <li><code>.infobox-blue2</code></li>
                        <li><code>.infobox-blue3</code></li>
                        <li><code>.infobox-red</code></li>
                        <li><code>.infobox-brown</code></li>
                        <li><code>.infobox-wood</code></li>
                        <li><code>.infobox-light-brown</code></li>
                        <li><code>.infobox-orange</code></li>
                        <li><code>.infobox-orange2</code></li>
                        <li><code>.infobox-green</code></li>
                        <li><code>.infobox-green2</code></li>
                        <li><code>.infobox-grey</code></li>
                        <li><code>.infobox-black</code></li>
                    </ol>
<pre data-language="html">
<div class="infobox infobox-purple">
</div>
</pre>
                </li>

                <li>
                    <!-- #section:pages/dashboard.infobox.dark -->
                    Use <code>.infobox-dark</code> class for dark style:
<pre data-language="html">
<div class="infobox infobox-orange infobox-dark">
</div>
</pre>
                    <!-- /section:pages/dashboard.infobox.dark -->
                </li>

                <li>
                    Using <code>.infobox-small</code> class makes it smaller:
<pre data-language="html">
<div class="infobox infobox-orange infobox-small">
</div>
</pre>
                </li>

                <li>
                    <!-- #section:pages/dashboard.infobox.stat -->
                    You can use <code>.badge</code> or <code>.stat</code> elements inside infobox:
<pre data-language="html">
<div class="infobox infobox-orange2">
    ...
    <div class="badge badge-success">+32% <i class="ace-icon fa fa-arrow-up"></i></div>
</div>
</pre>
                    See <a href="#elements.badge" class="help-more">badge section</a> for more info about badegs
                    <div class="hr hr-6"></div>
                    <div class="space-4"></div>
<pre data-language="html">
<div class="infobox infobox-orange2">
    ...
    <div class="stat stat-important">4%</div>
</div>
</pre>
                    <code>.stat</code> can have <code>.stat-success</code> & <code>.stat-important</code> classes
                    <!-- /section:pages/dashboard.infobox.stat -->
                </li>


                <li>
                    <!-- #section:pages/dashboard.infobox.sparkline -->
                    When using <a href="#plugins/charts.sparkline" class="help-more">Sparkline plugin</a> wrap it inside
                    a <code>.infobox-chart</code>:
<pre data-language="html">
<div class="infobox infobox-orange2">
    <div class="infobox-chart">
        <span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
    </div>
    <div class="infobox-data">
        <span class="infobox-data-number">6,251</span>

        <div class="infobox-content">pageviews</div>
    </div>
</div>
</pre>
                    <!-- /section:pages/dashboard.infobox.sparkline -->
                </li>

                <li>
                    <!-- #section:pages/dashboard.infobox.easypiechart -->
                    When using <a href="#plugins/charts.easypiechart" class="help-more">Easy pie chart plugin</a> wrap
                    it inside a <code>.infobox-progress</code>:
<pre data-language="html">
<div class="infobox infobox-blue2">
    <div class="infobox-progress">
        <div class="easy-pie-chart percentage" data-percent="42" data-size="46">
            <span class="percent">42</span>%
        </div>
    </div>
    <div class="infobox-data">
        <span class="infobox-text">traffic used</span>

        <div class="infobox-content"><span class="bigger-110">~</span> 58GB remaining</div>
    </div>
</div>
</pre>
                    <!-- /section:pages/dashboard.infobox.easypiechart -->
                </li>


            </ul>
        </div>
        <!-- /section:pages/dashboard.infobox -->


        <h3 class="info-title smaller" data-id="#pages/dashboard.conversations">Conversation List</h3>
        <!-- #section:pages/dashboard.conversations -->
        <div class="info-section">
            <ul class="info-list list-unstyled">
                <li>
                    Conversations are inside a <code>.dialogs</code> element and each item is a
                    <code>.itemdiv.dialogdiv</code>:
<pre data-language="html">
<div class="dialogs">
    <div class="itemdiv dialogdiv">

    </div>
</div>
</pre>
                </li>

                <li>
                    Each item has several optional parts, such as <code>.body</code>
                    <code>.user</code> <code>.time</code> <code>.tools</code> etc:
<pre data-language="html">
  <div class="user">
      <img alt="User's Avatar" src="path/to/avatar"/>
  </div>

  <div class="body">
      <div class="time"><i class="ace-icon fa fa-clock-o"></i> <span class="blue">2 min</span></div>
      <div class="name">
          <a href="#">name</a>
      </div>
      <div class="text">message text</div>

      <div class="tools">
          <a href="#" class="btn btn-minier btn-info"><i class="icon-only ace-icon fa fa-share"></i></a>
      </div>
  </div>
</pre>
                </li>


                <li>
                    For more info please see
                    <br/>
                    <code data-open-file="html" class="open-file"><span class="brief-show">mustache/app/views/pages/partials/index/</span>conversations.mustache</code>
                </li>
            </ul>
        </div>
        <!-- /section:pages/dashboard.conversations -->


        <h3 class="info-title smaller" data-id="#pages/dashboard.tasks">Task List</h3>
        <!-- #section:pages/dashboard.tasks -->
        <div class="info-section">
            <ul class="info-list list-unstyled">
                <li>
                    Task list is an <code>.item-list</code> which contains several
                    items with different border colors:
<pre data-language="html">
<ul class="item-list">
    <li class="item-red"> ...</li>
    <li class="item-green"> ...</li>
</ul>
</pre>
                </li>

                <li>
                    Available colors are:
                    <ol>
                        <li><code>.item-orange</code></li>
                        <li><code>.item-orange2</code></li>
                        <li><code>.item-red</code></li>
                        <li><code>.item-red2</code></li>
                        <li><code>.item-green</code></li>
                        <li><code>.item-green2</code></li>
                        <li><code>.item-blue</code></li>
                        <li><code>.item-blue2</code></li>
                        <li><code>.item-blue3</code></li>
                        <li><code>.item-pink</code></li>
                        <li><code>.item-purple</code></li>
                        <li><code>.item-black</code></li>
                        <li><code>.item-grey</code></li>
                        <li><code>.item-brown</code></li>
                        <li><code>.item-default</code></li>
                    </ol>
                </li>

                <li>
                    For more info please see
                    <br/>
                    <code data-open-file="html" class="open-file"><span class="brief-show">mustache/app/views/pages/partials/index/</span>tasks.mustache</code>
                </li>

            </ul>
            <!-- /section:pages/dashboard.tasks -->
        </div>


        <h3 class="info-title smaller" data-id="#pages/dashboard.members">Member List</h3>
        <!-- #section:pages/dashboard.members -->
        <div class="info-section">
            <ul class="info-list list-unstyled">
                <li>
                    Member list is a <code>.clearfix</code> container with several
                    <code>.itemdiv.memberdiv</code> items:
<pre data-language="html">
<div class="clearfix">
    <div class="itemdiv memberdiv">
        ....
    </div>
</div>
</pre>
                </li>

                <li>
                    Each item has several parts such as <code>.user</code> <code>.body</code>, etc :
<pre data-language="html">
<div class="itemdiv memberdiv">
    <div class="user">
        <img src="path/to/avatar" alt="Avatar">
    </div>

    <div class="body">
        <div class="name"><a href="#">Name</a></div>
        <div class="time"><i class="ace-icon fa fa-clock-o"></i> <span class="green">20 min</span></div>
        <div>
            <!-- user info, such as status, a menu, etc -->
        </div>
    </div>
</div>
</pre>
                </li>

                <li>
                    For more info please see
                    <br/>
                    <code data-open-file="html" class="open-file"><span class="brief-show">mustache/app/views/pages/partials/index/</span>members.mustache</code>
                </li>

            </ul>
        </div>
        <!-- /section:pages/dashboard.members -->


        <h3 class="info-title smaller" data-id="#pages/dashboard.comments">Comment List</h3>
        <!-- #section:pages/dashboard.comments -->
        <div class="info-section">
            <ul class="info-list list-unstyled">
                <li>
                    Comments are inside <code>.comments</code> container with several
                    <code>.itemdiv.commentdiv</code> items:
<pre data-language="html">
<div class="comments">
    <div class="itemdiv commentdiv">
        ...
    </div>
</div>
</pre>
                </li>

                <li>
                    Each item has several parts such as <code>.user</code> <code>.body</code> <code>.text</code>, etc:
<pre data-language="html">
 <div class="itemdiv commentdiv">
     <div class="user">
         <img src="path/to/avatar" alt="Avatar">
     </div>

     <div class="body">
         <div class="name"><a href="#">Bob Doe</a></div>
         <div class="time"><i class="ace-icon fa fa-clock-o"></i> <span class="green">6 min</span></div>
         <div class="text">
             <i class="ace-icon fa fa-quote-left"></i>
             comment text
         </div>
     </div>

     <div class="tools">
         <!-- some buttons or dropdown -->
     </div>
 </div>
</pre>
                </li>

                <li>
                    For more info please see
                    <br/>
                    <code data-open-file="html" class="open-file"><span class="brief-show">mustache/app/views/pages/partials/index/</span>comments.mustache</code>
                </li>
            </ul>
        </div>
        <!-- /section:pages/dashboard.comments -->

    </div>
    <!-- /section:pages/dashboard -->
</section>
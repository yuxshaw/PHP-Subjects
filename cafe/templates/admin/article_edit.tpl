<{include file='./header.tpl' }>

    <!-- Start: Content -->
    <section id="content">
        <div id="topbar" class="affix">
            <ol class="breadcrumb">
                <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                <li class="active">修改资讯</li>
            </ol>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-md-10 col-lg-8 center-column">
                    <form action="#" method="post" class="cmxform">
                        <div class="panel">
                            <div class="panel-heading">
                                <div class="panel-title">编辑文章</div>
                                <div class="panel-btns pull-right margin-left">
                                    <a href="article_list.php"
                                        class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">分类</span>
                                            <select name="" id="standard-list1" class="form-control">
                                                <option>请选择</option>
                                                <option>科技</option>
                                                <option>文化</option>
                                                <option>生活</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">标题</span>
                                            <input type="text" name="title" value="再谈互联网给传统金融带来的颠覆"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group"><span class="input-group-addon">作者</span>
                                            <input type="text" name="author" value="admin" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
					<p></p>

                                    </script>
                                </div>
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <input type="submit" value="提交" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </section>
    <!-- End: Content -->
    </div>
    <!-- End: Main -->
    <link type="text/css" rel="stylesheet" href="../static/admin/umeditor/themes/default/_css/umeditor.css">
    <script src="../static/admin/umeditor/umeditor.config.js" type="text/javascript"></script>
    <script src="../static/admin/umeditor/editor_api.js" type="text/javascript"></script>
    <script src="../static/admin/umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
    <script type="text/javascript">
        var ue = UM.getEditor('myEditor', {
            autoClearinitialContent: true,
            wordCount: false,
            elementPathEnabled: false,
            initialFrameHeight: 300
        });
    </script>
    </body>

    </html>
<{include file='./header.tpl'}>
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
      </ol>
    </div>
    <div class="container">
		<div class="col-md-9">
			<div id="docs-content">
				<h2 class="page-header margin-top-none">个人信息</h2>
				<table class="table">
					<tr>
					<td colspan="2">您好，<{$admin_name}></td>
					</tr>
					<tr>
					<td width="100">最后登录时间:</td>
					<td><{$data['last_time']|date_format:'%Y-%m-%d %H:%M:%S'}></td>
					</tr>
					<tr>
					<td>最后登录IP:</td>
					<td><{$data['IP']}></td>
					</tr>
				</table>

				<h2 class="page-header margin-top-none">系统信息</h2>
				<table class="table">
				  <tr>
				    <td width="100">操作系统：</td>
				    <td>Windows</td>
				  </tr>
				  <tr>
				    <td>PHP 版本:</td>
				    <td>5.6.27</td>
				  </tr>
				  <tr>
				    <td>MySQL 版本:</td>
				    <td>5.1.33</td>
				  </tr>
				</table>
			</div>
		</div>
    </div> 
  </section>
  <!-- End: Content --> 
</div>
<!-- End: Main --></body>

</html>
<?php echo $this->fetch('head.htm'); ?>
<?php echo $this->fetch('nav.htm'); ?>

<div class="span10">
	  
		  <div class="page-header">
            <h3>新建用户</h3>
          </div>
		  
          <div class="row-fluid">
            <div class="span12">
	  
	  
	  
	  <form class="form-horizontal" method="post" action="?action=user&do=add">
	  
			<div class="control-group">
            <label for="input01" class="control-label">工&nbsp;&nbsp;&nbsp;号：</label>
            <div class="controls">
              <input type="text" id="input01" class="input-xlarge" name="username">
            </div>
          </div>

			
		<div class="control-group">
            <label for="input01" class="control-label">用户组：</label>
            <div class="controls">
              <select name="roleid">
				<option value ="2">普通用户</option>
				<option value="1">管理员</option>
			  </select>
            </div>
          </div>

          <div class="control-group">
              <label for="input01" class="control-label">部门：</label>
              <div class="controls">
                  <select name="division">
                      <option value ="1STD10">1STD10</option>
                      <option value="1STD20">1STD20</option>
                      <option value="1STD30">1STD30</option>
                      <option value="1STD50">1STD50</option>
                  </select>
              </div>
          </div>
          <div class="control-group">
            <label for="input01" class="control-label">密&nbsp;&nbsp;&nbsp;码：</label>
            <div class="controls">
              <input type="password" id="input02" class="input-xlarge" name="password">
            </div>
          </div>

		    <div class="control-group">
            <label for="input01" class="control-label">姓&nbsp;&nbsp;&nbsp;名：</label>
            <div class="controls">
              <input type="text" id="input03" class="input-xlarge" name="name">
            </div>
          </div>


		  <div class="control-group">
            <label for="input01" class="control-label">电&nbsp;&nbsp;&nbsp;话：</label>
            <div class="controls">
              <input type="text" id="input05" name="mobilephone" class="input-xlarge" >
            </div>
          </div>

          
          <div class="control-group">
            <label for="input01" class="control-label">邮&nbsp;&nbsp;&nbsp;箱：</label>
            <div class="controls">
              <input type="text" id="textarea"  class="input-xlarge" name="mailaddress"></textarea>
            </div>
          </div>
		  
			<div class="form-actions">
            <button class="btn btn-success" type="submit">保存</button>
			   <a class="btn" href="?action=user"><i class="icon-share"></i> 返回</a>		
          </div>   	
      </form>
		  
		  
	   

            </div>
          </div>
		  
		  
        </div>

		
<?php echo $this->fetch('foot.htm'); ?>
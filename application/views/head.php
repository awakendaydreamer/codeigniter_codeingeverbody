<!DOCTYPE html>
  <html>
  <head>
      <meta charset="utf-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="/static/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
    	body{
    		padding-top:60px;
    	}
    	.form_control{
    		padding-top:20px;
    	}
    </style>
    <link href="/static/lib/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
      	<?php
      	if($this->session->flashdata('message')){
      	?>
      	<script>
      		alert('<?=$this->session->flashdata('message')?>');
      	</script>
      	<?php
      	}
        ?>



  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">CPA</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/index.php/study">스터디</a></li>
          <li><a href="/index.php/talk">잡담</a></li>
          <li><a href="/index.php/topic">연습용</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right">
          <?php
          if($this->session->userdata('is_login')){
          ?>
            <li><a href="/index.php/auth/logout">로그아웃</a></li>
          <?php
          } else {
          ?>
            <li><a href="/index.php/auth/login">로그인</a></li>
            <li><a href="/index.php/auth/register">회원가입</a></li>
          <?php
          }
          ?>

            </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


      <?php
      if(false){
      //if($this->config->item('is_dev')) {
      ?>
      <div class="well span12">
        개발환경을 수정 중입니다.
      </div>
      <?php
      }
      ?>
            <div class="container" border=1px;>
          <div class="row-fluid" border=2px;>

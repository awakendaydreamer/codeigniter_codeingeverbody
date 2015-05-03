

        <form class="form-horizontal" action="<?=site_url('/auth/authentication?returnURL='.rawurlencode($returnURL))?>" method="post">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">아이디</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email" name="email" placeholder="이메일">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">비밀번호</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="password" name="password" placeholder="비밀번호">
            </div>
          </div>
            <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <input type="submit" class="btn btn-default"  value="로그인" />
            </div>
          </div>
        </form>

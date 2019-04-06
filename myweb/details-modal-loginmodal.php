  <!--Modal -->

  <div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">
      <!--Modal content -->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Login</h4>
        </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="username"><span class="glyphicon glyphicon-user">
                </span>username</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
              </div>

              <div class="form-group">
                <label for="Password"><span class="glyphicon glyphicon-lock">
                </span>Password</label>
                <input type="password" class="form-control" id="username" placeholder="Password">
              </div>

              <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
              </div>
              <button type="submit" class="btn btn-default btn-success btn-block">
                <span class="glyphicon glyphicon-off"></span>Login</button>
              </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-default btn-default pull-left"data-dismiss="modal"
            <span class="glyphicon glyphicon-remove"></span> Cancel</button>
            <p>Not a member? <a href="#">Sign up</a></p>
            <p>Forgot <a href="#">password?</a></p>
          </div>
      </div>
    </div>
  </div>

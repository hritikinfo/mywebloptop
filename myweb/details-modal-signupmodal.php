<!--Modal -->

<div class="modal fade" id="signupModal" role="dialog">
  <div class="modal-dialog">
    <!--Modal content -->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 style="color:red;"><span class="glyphicon glyphicon-user"></span>Sign up</h4>
      </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user">
              </span>Frist name</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your first name">
            </div>
            <div class="form-group">
              <label for="name"><span class="glyphicon glyphicon-user">
              </span>Last name</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your last name">
            </div>

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
            <div class="form-group">
              <label for="Password"><span class="glyphicon glyphicon-lock">
              </span>comfirm Password</label>
              <input type="password" class="form-control" id="username" placeholder="Password">
            </div>

            <div class="form-group">
              <label for="Email"><span class="glyphicon glyphicon-">
              </span>Email</label>
              <input type="text" class="form-control" id="username" placeholder="Enter your email">
            </div>
            <div class="form-group">
              <label for="Email"><span class="glyphicon glyphicon-">
              </span>Address</label><br>
            <textarea rows="3" cols="78" placeholder="enter your address"></textarea>
            </div>

            <div class="checkbox">
            <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block">
              <span class="glyphicon glyphicon-off"></span>Sign up</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left"data-dismiss="modal"
          <span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Already a memeber? <a href="#">Login</a></p>
        </div>
    </div>
  </div>
</div>

@include('blogsite.header')
    <div class="container">
        <div class="col-md-6">
            <form action="/crudin" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group row">
                  </div>
                  <div class="form-group">
                    <label >Email address</label>
                    <input type="email" class="form-control" id="inemail" name="inemail" placeholder="Enter email">
                    <label >Password</label>
                    <input type="password" class="form-control" id="inpass" name="inpass" placeholder="Password">
                  </div>

                  <button type="submit" class="btn btn-primary" value="Login">Masuk</button>

              </form>
        </div>
    </div>


@include('blogsite.footer')

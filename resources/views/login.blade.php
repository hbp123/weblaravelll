@include('blogsite.header')
    <div class="container">
        <div class="col-md-6">
            <form>
                <fieldset>
                  <div class="form-group row">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>

                  </fieldset>
                  <button type="submit" class="btn btn-primary">Masuk</button>
                </fieldset>
              </form>
        </div>
    </div>


@include('blogsite.footer')

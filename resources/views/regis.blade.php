@include('blogsite.header')
<div class="container">
    <div class="col-md-6">
        <form>
            <fieldset>
              <legend>Form Pendaftaran Pendonor</legend>

              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>

              <div class="form-group">
                <label for="exampleSelect1">Jenis kelamin</label>
                <select class="form-control" id="exampleSelect1">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleSelect2">Golongan darah </label>
                <select multiple="" class="form-control" id="exampleSelect2">
                  <option>AB+</option>
                  <option>AB-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>A+</option>
                  <option>A-</option>
                  <option>O+</option>
                  <option>O-</option>
                </select>
              </div>

              <div class="form-group">
                <label for="exampleTextarea">Alamat </label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
              </div>

              <div class="form-group">
                <label for="exampleInputFile">Upload foto, max 1 mb</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
              </div>

              <fieldset class="form-group">
                <legend>Radio buttons</legend>
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                    Option one is this and that—be sure to include why it's great
                  </label>
                </div>
                <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                  </label>
                </div>
                <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                    Option three is disabled
                  </label>
                </div>
              </fieldset>

              </fieldset>
              <button type="submit" class="btn btn-primary">Daftar</button>
            </fieldset>
          </form>
    </div>
</div>

@include('blogsite.footer')

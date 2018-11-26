@include('blogsite.header')
<div class="container">
    <div class="col-md-6">
        <form action="/regise" method="POST">
            {{ csrf_field() }}
              <legend>Form Pendaftaran Pendonor</legend>

                <label>Nama lengkap</label>
                <input type="text" class="form-control" id="renama" name="renama" placeholder="Nama lengkap">



                <label >Tanggal lahir</label>
                <input type="date" class="form-control" name="relahir" id="lahir" >



                <label >Email address</label>
                <input type="email" class="form-control" id="reemail" name="reemail"  placeholder="Enter email">


                <label >Jenis kelamin</label>
                <select class="form-control" id="rejekel" name="rejekel">
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>



                <label >Golongan darah </label>
                <select multiple="" class="form-control" id="regoldar" name="regoldar">
                  <option>AB</option>

                  <option>B</option>

                  <option>A</option>

                  <option>O</option>

                </select>



                <label >Alamat </label>
                <textarea class="form-control" id="realamat" name="realamat" rows="3"></textarea>



                <label >Upload foto, max 1 mb</label>
                <input type="file" class="form-control-file" id="rephoto" name="rephoto" aria-describedby="fileHelp">

                <button type="submit" class="btn btn-primary" value="Add" >Daftar</button>

          </form>

    </div>
</div>

@include('blogsite.footer')

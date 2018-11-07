@include('blogsite.header')

<div class="container">
    <div class="row">
            <legend>CRUD LARAVEL</legend>
            <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Nama </th>
                        <th scope="col">password</th>
                        <th scope="col">email</th>
                      </tr>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td>Column content</td>
                        <td>Column content</td>
                        <td>
                            <a href="{{ url('') }}" class="label label-primary">Read |</a>
                            <a href="{{ url('') }}" class="label label-primary">Update |</a>
                            <a href="{{ url('') }}" class="label label-primary">Delate </a>
                        </td>
                      </tr>

                    </tbody>
                  </table>
    </div>

</div>

@include('blogsite.footer')

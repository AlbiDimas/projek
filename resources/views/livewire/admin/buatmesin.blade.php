<div>

    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Gambar Mesin</th>
                        <th>Nama Mesin</th>
                        <th>Spefikasi</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($buat_mesin as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->pict}}</td>
                            <td>{{$item->nama}}</td>
                            <td>{{$item->spesifik}}</td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

</div>

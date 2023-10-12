@yield('content')
<table> <thead>
<tr>
    <th>id</th>
    <th>Nama Pemain</th>
    <th>No Punggung</th>
    <th>Posisi</th>
</tr>
</thead> <tbody> @foreach($data_pemain as $pemain) <tr>
<td>{{ $pemain->id_pemain }}</td>
<td>{{ $pemain->nama_pemain }}</td>
<td>{{ $pemain->penulis }}</td>
<td>{{ $pemain->posisi }}</td>
</tr>
@endforeach
</tbody>
</table>
@include('footer')
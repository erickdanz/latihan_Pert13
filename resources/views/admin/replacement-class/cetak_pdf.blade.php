<div class="table-responsive">
    <h1 class="" style="text-align : center">UNIVERSITAS PELITA HARAPAN</h1>

    <h2 class="" style="text-align : center">Pengajuan Replacement Class</h2>
    <br>

    <p>Hal : Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas</p>
    <br>
    
    <p>Kepada Yth.</p>
    <p>Kaprodi Sistem Informasi -Kampus Kota Medan-</p>
    <p>Fakultas Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan Campus</p>
    <br>

    <p>Dengan ini memberitahukan bahwa :</p>
    @foreach($replacementClass as $item)
    <p style="margin-left: 30px">Nama Dosen : {{ $item->nama_lengkap }}</p>
    <p style="margin-left: 30px">Mata Kuliah : {{ $item->mata_kuliah }}</p>
    <p style="margin-left: 30px">Prodi : Sistem Informasi -Kampus Kota Medan-</p>
    <p style="margin-left: 30px">Kelas : {{ $item->kelas }}</p>
    <p style="margin-left: 30px">Semester : Ganjil</p>
    <p style="margin-left: 30px">Tahun Akademik : 2022/2023</p>

    <p>Bermaksud untuk mengganti jadwal kelas</p>
    <p style="margin-left: 30px">Tanggal &nbsp;: {{ $item->jadwal_kuliah }}</p>
    <p style="margin-left: 30px">Waktu &nbsp;&nbsp;&nbsp;: {{ $item->jam_kuliah }}</p>

    <p>Menjadi kelas pada</p>
    <p style="margin-left: 30px">Tanggal &nbsp;: {{ $item->tanggal_replacement }}</p>
    <p style="margin-left: 30px">Waktu &nbsp;&nbsp;&nbsp;: {{ $item->jam_replacement }}</p>
    <p style="margin-left: 30px">Alasan &nbsp;&nbsp;: {{ $item->alasan }}</p>
    @endforeach
    <br>

    <p>Atas perhatian dan persetujuan Bapak / Ibu kami ucapkan terima kasih.</p>
    <p class="" style="text-align: center">True Knowledge, Faith in Christ, Godly Character</p>

        {{-- <tbody>
        @foreach($replacementClass as $item)
                <td>{{ $item->nama_lengkap }}</td>
                <td>{{ $item->mata_kuliah }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->jadwal_kuliah }}</td>
                <td>{{ $item->jam_kuliah }}</td>
                <td>{{ $item->tanggal_replacement }}</td>
                <td>{{ $item->jam_replacement }}</td>
                <td>{{ $item->alasan }}</td>
        @endforeach
        </tbody> --}}
    {{-- <div class="pagination-wrapper"> {!! $replacementClass->appends(['search' => Request::get('search')])->render() !!} </div> --}}
</div>

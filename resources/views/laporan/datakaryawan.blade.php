<?php
    use App\Models\datakaryawan;
?>


@section('content')
    
    <title>Laporan Daftar Karyawan</title>
    <style>
        row {
            margin: 100px;
            padding-left: 50px;
        }
    </style>

    <head>
        <h1 style="text-align: center;">UAS Business Application Programming</h1><br>
        
    </head>
    <body>
        <img src="{{ asset("template/dist/img/Logo_UPH.jpg") }}" alt="" style="margin: 0 0 0 40%; width:20%">
        <br>
        <br>
        <div style="text-align: center">
            <b style="font-size: 150%;">NIM: 03081200017<br>
            <b>Nama: Steven Sutantoh<br>
            <b>Kelas: 20SI2<br>
        </div>
        <br>
        <hr>

        <table class="table-dark">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nama</th>
                <th scope="col">Identification No</th>
                <th scope="col">Address</th>
                <th scope="col">Marriage Status</th>
                <th scope="col">Gender</th>
                <th scope="col">Department</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Level</th>
              </tr>
            </thead>
            <tbody>
                <?php
          $rows = DB::select('select name, identification_no, address, marriage_status, gender, department, jabatan, level from datakaryawan');
          foreach($rows as $row) {
            echo "<tr>";
            // echo "<td>".$no."</td>";
            echo "<td>".$row->name."</td>";
            echo "<td>".$row->identification_no."</td>";
            echo "<td>".$row->address."</td>";
            echo "<td>".$row->marriage_status."</td>";
            echo "<td>".$row->gender."</td>";
            echo "<td>".$row->department."</td>";
            echo "<td>".$row->jabatan."</td>";
            echo "<td>".$row->level."</td>";
            echo "<tr>";
            // $no+=1;
            }
                
              ?>
            </tbody>
          </table>
          <a href="/laporan/datakaryawan/pdf" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Cetak PDF</a>
    </body>
</html>

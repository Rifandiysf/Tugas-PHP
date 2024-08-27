<?php 

include 'Layout/header.php';
$students = [
    [
        'nama' => 'Satria',
        'kelas' => 'XI',
        'jurusan' => 'PPLG',
        'umur' => 17,
        'status' => 'Hadir'
    ],
    [
        'nama' => 'Rifandi',
        'kelas' => 'XI',
        'jurusan' => 'PPLG',
        'umur' => 17,
        'status' => 'Izin'
    ],
];

$number = 1;

?>



<div class="main-content">
        <div class="dashboard-breadcrumb mb-25">
            <h2>eCommerce Dashboard</h2>
            <div class="input-group dashboard-filter">
                <button class="btn btn-success"><i class="fa-solid fa-plus">Tambahkan Siswa</i></button>
            </div>
        </div>
            <div class="col-xxl-12">
                <div class="panel">
                    <div class="panel-header">
                        <h5>Absensi Siswa</h5>
                        <div id="tableSearch"></div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-dashed recent-order-table" id="myTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Umur</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($students as $student) : ?>
                                    <tr>
                                        <td><?= $number++ ?></td>
                                        <?php foreach ($student as $s => $row) : ?>
                                            <td><?= $row ?></td>
                                        <?php endforeach; ?>
                                        <td>
                                            <div class="btn-box">
                                                <button><i class="fa-light fa-eye"></i></button>
                                                <button><i class="fa-light fa-pen"></i></button>
                                                <button><i class="fa-light fa-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        <div class="table-bottom-control"></div>
                    </div>
                </div>
            </div>
        </div>

<?php include 'Layout/footer.php';?>
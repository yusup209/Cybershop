<?php
    if (isset($_POST['btnTambahWarna'])){
        $barang->TambahWarna($_POST['txtWarna']);
    }
?>
<title>Warna - Cybershop Administrator</title>
</head>
<body>

<!--modal dong -->
<div class="modal-dong">
    <div class="modal-inner">
        <h1 class="text-center">Tambah Warna</h1><br>

        <form action="" method="post" class="modal">
            <a href="#!" class="modal-close"><i class="fa fa-times"></i></a>
            <div class="input-group">
                <label for="">Warna</label>
                <input type="text" name="txtWarna" placeholder="Nama Warna" class="form-control">
            </div>
            <button type="submit" class="btn primary modal-close" name="btnTambahWarna"><i class="fa fa-plus"></i> Tambah</button>
        </form>
    </div>
</div>


<div class="container-fluid">
    <ol class="breadcrumb">
        <li><a href="#!"><i class="fa fa-home"></i> Home</a></li>
        <li><a href="#!"><i class="fa fa-eyedropper"></i> Warna</a></li>
    </ol>
    <h1 class="title">Warna barang</h1><br><br>

    <a href="#!" class="btn primary modal-show"><i class="fa fa-plus"></i> Tambah Warna</a><br>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Warna</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php
                    foreach ($barang->DapetWarna() as $key){
                    ?>
                        <tr>
                            <td><?=$key['warna_id'];?></td>
                            <td><?=$key['nama'];?></td>
                            <td>
                                <a href="?page=edit_data&id=<?=$key['warna_id'];?>&table=warna" class="btn primary"><i class="fa fa-pencil"></i></a>
                                <a href="process/HapusRecord.php?table=warna&id=<?=$key['warna_id'];?>" class="btn danger"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<script type="text/javascript">
    document.querySelector('.modal-show').onclick = function(){
        document.querySelector('.modal-dong').classList.add('show');
    }

    document.querySelector('.modal-close').onclick = function(){
        document.querySelector('.modal-dong').classList.remove('show');
    }

    document.querySelector('.n-warna').classList.add('active');
</script>
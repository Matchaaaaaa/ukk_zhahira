<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Perpustakaan Zro</li>
</ol>

<body style="background-image: url(10.jpg);" class="bg-info"></body>
<div class="card">
    <div class="card-body">
        <table class="table table-bordered">

            <tr>
                <td width="200">Nama</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['nama']; ?></td>
            </tr>

            <tr>
                <td width="100">Level User</td>
                <td width="1">:</td>
                <td><?php echo $_SESSION['user']['level']; ?></td>
            </tr>

            <tr>
                <td width="200">Tanggal Login</td>
                <td width="1">:</td>
                <td><?php echo date('d-m-Y'); ?></td>
            </tr>

        </table>
    </div>
</div>
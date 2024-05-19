<h1 class="h3 mb-3">Dashboard</h1>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Welcome </h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <!-- <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th></th>
                    </tr> -->
                    <tr>
                        <td width="200">Nama</td>
                        <td width="1">:</td>
                        <td>
                            <?php 
                             echo $_SESSION['user']['nama_petugas']; ?>
                        </td>
                        
                    </tr>
                    <tr>
                        <td width="200">Username</td>
                        <td width="1">:</td>
                        <td>
                            <?php echo $_SESSION['user']['username']; ?>
                        </td>
                        
                    </tr>
                    <tr>
                        <td width="200">Level User</td>
                        <td width="1">:</td>
                        <td>
                            <?php echo $_SESSION['user']['level']; ?>
                        </td>
                        
                        
                    </tr>
                    <tr>
                        <td width="200">Tanggal Login</td>
                        <td width="1">:</td>
                        <td>
                            <?php echo date('d-m-Y H:i:s'); ?>
                        </td>
                        
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
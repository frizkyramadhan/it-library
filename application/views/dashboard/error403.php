    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $subtitle ?></h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="error-page">
                <h2 class="headline text-warning"> 403</h2>

                <div class="error-content">
                    <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Unauthorized!</h3>

                    <p>
                        You do not have access to this page.<br>
                        Please <a href="<?= base_url('dashboard') ?>">return to dashboard</a>.
                    </p>

                </div>
                <!-- /.error-content -->
            </div>
            <!-- /.error-page -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
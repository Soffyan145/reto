<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Invoice</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('admin/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Data invoice</div>
            </div>
        </div>

        <?php echo $this->session->flashdata('pesan') ?>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode</th>
                    <th>pay</th>
                    <th>message</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($invoices as $invoice) : ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $invoice->kode ?></td>
                        <td><?php echo $invoice->pay ?></td>
                        <td><?php echo $invoice->message ?></td>
                        <td>
                            <a href="<?php echo base_url('admin/invoice/detail/') . $invoice->id ?>" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>
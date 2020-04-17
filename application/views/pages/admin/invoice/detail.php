<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Detail transaction</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="<?php echo base_url('a/dashboard') ?>">Dashboard</a></div>
                <div class="breadcrumb-item">Detail transaction</div>
            </div>
        </div>

        <h5>No. transaction : <?php echo $invoices->kode ?></h5>

        <table class="table table-hover  table striped table-borderd">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name menu</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Sub-total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $total = 0;
                foreach ($orders as $order) :
                    $subtotal = $order->qty * $order->price;
                    $total += $subtotal;
                ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $order->nama_menu ?></td>
                        <td><?php echo $order->qty ?></td>
                        <td><?php echo number_format($order->price, 0, ',', '.') ?></td>
                        <td><?php echo number_format($subtotal, 0, ',', '.') ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </section>
</div>
<head>
    <?php echo css('main');
    include 'application/views/assets/header/header.php';
    ?>
</head>
<body>
<?php
    echo form_open(base_url().'CartManagement/updateCart'); ?>
    <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
        <tr>
            <th>QTY</th>
            <th>Item Description</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($this->cart->contents() as $items){ ?>
            <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
            <tr>
                <td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                    <?php echo $items['name']; ?>
                    <?php if ($this->cart->has_options($items['rowid']) == TRUE){ ?>
                        <p>
                            <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value){ ?>
                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />
                            <?php } ?>
                        </p>
                    <?php } ?>
                </td>
            </tr>
            <?php $i++;
        } ?>
    </table>
    <p><?php echo form_submit('', 'Update your Cart'); ?></p>
</body>
<?php foreach ($result as $value)  { ?>

    <?php if ($value['receveur'] == $_SESSION['id']) { ?>
        <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send">
                <?php echo $value['message']; ?>
                <span class="msg_time_send"><?php $date = new DateTime($value['created_at']);
                    echo $date->format('Y-m-d H:i:s'); ?></span>
            </div>
            <div class="img_cont_msg">
                <i class="fas fa-user"></i>
            </div>
        </div>
    <?php } else  { ?>
        <div class="d-flex justify-content-start mb-4">
        <div class="img_cont_msg">
            <i class="fas fa-user"></i>
        </div>
        <div class="msg_cotainer">
            <?php echo $value['message']; ?>
            <span class="msg_time"><?php $date = new DateTime($value['created_at']);
            echo $date->format('Y-m-d H:i:s'); ?>
                </span>
        </div>
    </div>
    <?php } ?>

<?php } ?>

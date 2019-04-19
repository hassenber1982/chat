<ui class="contacts">
    <?php foreach ($result as $value)  { ?>
        <li>
            <div class="d-flex bd-highlight">
                <div class="img_cont">
                    <i class="fas fa-user"></i>
                    <span class="online_icon"></span>
                </div>
                <div class="user_info">
                    <span><?php echo $value['user']; ?></span>
                </div>
            </div>
        </li>
    <?php } ?>
</ui>
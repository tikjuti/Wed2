<div class="authorize-modalbox">
    <div class="modal-form">
        <form method="POST">
            <div class="form-general">
                <div class="form-general-div">
                    <div>
                        <span>Tên nhóm:</span>
                    </div>
                    <div>
                        <input type="text" name="name">
                    </div>
                </div>
            </div>
            <div class="form-authorize">
                <div class="authorize-header"><span>Chức năng:</span></div>
                <div class="authorize-content">

                    <?php
                    if (isset($_SESSION['arrPQ'])) {
                        $arrPQ = $_SESSION['arrPQ'];
                        foreach ($arrPQ as $key => $value) {
                            $tmp = preg_split("/\./", $key);

                    ?>
                            <div class="authorize-card">
                                <header><?php echo $tmp[0] ?></header>
                                <?php foreach ($value['HanhDong'] as $key2 => $value2) {
                                    $tmp2 = preg_split("/\./", $value2); ?>
                                    <div class="authorize-card-div">
                                        <div><label><?php echo $tmp2[0] ?></label></div>
                                        <div>
                                            <label class='switch'>
                                                <input class="authorize-content-check" data-MaCN="<?php echo $value['MaCN'] ?>" data-HD="<?php echo $tmp2[0] ?>" type='checkbox'>
                                                <span class='slider round'></span>
                                            </label>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                    <?php
                        }
                    } ?>
                </div>
            </div>
            <div class="form-button">
                <div>
                    <button class="btn-create-authorize">Thêm</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../../public/js/authorize.js"></script>
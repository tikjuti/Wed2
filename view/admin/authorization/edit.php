<div class="authorize-modalbox">
    <div class="modal-form">
        <form method="GET">
            <div class="form-general">
                <div class="form-general-div">
                    <div>
                        <span>Tên nhóm:</span>
                    </div>
                    <div>
                        <input type="hidden" name="ma" value="<?php echo $ma ?>">
                        <input type="text" name="name" value="<?php if ($title) echo $title ?>">
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
                                                <input class="authorize-content-check" name="cusadd" value="create" type='checkbox' <?php if ($tmp2[1]) echo 'checked="checked"' ?>>
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
                    <button>Sứa</button>
                </div>
            </div>
        </form>
    </div>
</div>
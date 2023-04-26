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
                    <div class="authorize-card">
                        <header>Nhân viên</header>
                        <div class="authorize-card-div">
                            <div><label>Thêm</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" name="cusadd" value="create" type='checkbox' <?php if ($arr1[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Sửa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr1[1]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Xóa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr1[2]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="authorize-card">
                        <header>Khách hàng</header>
                        <div class="authorize-card-div">
                            <div><label>Thêm</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" type='checkbox' <?php if ($arr2[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Sửa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr2[1]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Xóa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr2[2]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="authorize-card">
                        <header>Sản phẩm</header>
                        <div class="authorize-card-div">
                            <div><label>Thêm</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" type='checkbox' <?php if ($arr3[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Sửa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr3[1]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Xóa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr3[2]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="authorize-card">
                        <header>Hóa đơn</header>
                        <div class="authorize-card-div">
                            <div><label>Chi tiết</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" type='checkbox' <?php if ($arr4[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Xử lý</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr4[1]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="authorize-card">
                        <header>Thống kê</header>
                        <div class="authorize-card-div">
                            <div><label>Thống kê</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" type='checkbox' <?php if ($arr5[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="authorize-card">
                        <header>Phân quyền</header>
                        <div class="authorize-card-div">
                            <div><label>Thêm</label></div>
                            <div>
                                <label class='switch'>
                                    <input class="authorize-content-check" type='checkbox' <?php if ($arr6[0]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Sửa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr6[1]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                        <div class="authorize-card-div">
                            <div><label>Xóa</label></div>
                            <div>
                                <label class='switch'>
                                    <input type='checkbox' <?php if ($arr6[2]) echo 'checked="checked"' ?>>
                                    <span class='slider round'></span>
                                </label>
                            </div>
                        </div>
                    </div>
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
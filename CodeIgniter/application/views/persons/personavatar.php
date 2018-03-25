<!-- 编辑头像 -->
<div class="row" v-else-if="seen === 'personavatar'">
    <div class="col-md-8 col-md-offset-2">
        <div class="card card-user">
            <div class="image">
                <img src="/resource/imgs/background_img2.jpg">
            </div>
            <div class="content">
                <div class="author" data-toggle="modal" data-target="#myModal">
                    <a href="javascript:;">
                        <img class="avatar border-gray" src="<?php echo $avatar; ?>">
                    </a>
                </div>
                <p class="description text-center">1、点击头像,进入头像上传页面</p>
                <p class="description text-center">2、选择上传头像，文件要求（200X200）</p>
                <p class="description text-center">3、确定修改点击保存</p>
            </div>
        </div>
    </div>
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <?php echo form_open_multipart('/person/upload_avatar'); ?>
                <div class="modal-body">
                    <a class="upload_avatar" href="javascript:;">
                        + 选择文件<input type="file" name="userfile" size="20" onchange="upload(this.value)">
                    </a>
                    <p class="fileerror"></p>
                    <p class="filename"></p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" value="upload">确认修改并保存</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
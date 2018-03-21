<!-- 编辑个人信息 -->
<div class="row" v-if="seen === 'personedit'">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">编辑个人信息</h4>
            </div>
            <div class="content">
                <form id="personeditForm" action="" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>用户名（不可修改）</label>
                                <input type="text" class="form-control" placeholder="用户名"
                                       name="username" value="<?php echo $username; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">邮箱（不可修改）</label>
                                <input type="email" class="form-control" placeholder="邮箱"
                                       name="email" value="<?php echo $email; ?>" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>手机号码</label>
                                <input type="text" class="form-control" placeholder="手机号码"
                                       name="tel" value="<?php echo $tel; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>QQ</label>
                                <input type="text" class="form-control" placeholder="QQ账号"
                                       name="qq" value="<?php echo $qq; ?>">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>城市</label>
                                <input type="text" class="form-control" placeholder="城市"
                                       name="city" value="<?php echo $city; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>通信地址</label>
                                <input type="text" class="form-control" placeholder="通信地址"
                                       name="address" value="<?php echo $address; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>座右铭</label>
                                <textarea rows="5" class="form-control" placeholder="你的座右铭"
                                          name="profile"><?php echo $profile; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <button id="personedit" type="button" class="btn btn-info btn-fill pull-right">
                        修改成功并保存
                    </button>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
</div>

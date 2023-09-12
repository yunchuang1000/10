<!DOCTYPE">

    <head>
        <title>VIP开通</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://css.letvcdn.com/lc04_yinyue/201612/19/20/00/bootstrap.min.css">
        <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
        <link rel="icon" href="../favicon.ico">
        <style>
            .btn-index {
                color: purple;
                text-decoration: none;
                color: #ffffff;
                background-color: #2196f3;
                padding: 10px;
                border-radius: 5px
            }

            .btn-index:hover {
                color: #fff;
                text-decoration: none;
            }
        </style>
        <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <?php date_default_timezone_set('PRC'); //设置中国时区  
        ?>
        <div class="container" style="padding-top:30px;">
            <div class="col-xs-12 col-sm-10 col-lg-8 center-block" style="float: none;">

                <div style="margin-bottom:20px"><a class="btn-index" href="/">返回首页</a></div>
                <div class="panel panel-primary">
                    <div class="panel-body">
                        <form name="alipayment" action="epayapi.php" method="post" target="_blank">
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
                                <input size="30" name="bh" value="<?php echo date("YmdHis"); ?>" class="form-control" placeholder="订单编号" disabled />
                                <input type="hidden" name="WIDout_trade_no" value="<?php echo date("YmdHis") ?>">

                            </div>
                            <br />
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-shopping-cart"></span></span>
                                <input size="30" name="mz" value="一元尊贵VIP" class="form-control" placeholder="商品名称" disabled />
                                <input type="hidden" name="WIDsubject" value="一元尊贵VIP">
                            </div>
                            <br />
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-yen"></span></span>
                                <input size="30" name="je" value="<?php echo $_GET['fee']; ?>" class="form-control" placeholder="付款金额" disabled />
                                <input type="hidden" name="WIDtotal_fee" value="<?php echo $_GET['fee']; ?>">
                            </div>
                            <br />
                            <center>
                                <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                    <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="alipay" class="btn btn-primary">支付宝支付</button>
                                    </div>
                                    <!-- <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="qqpay" class="btn btn-success">QQ支付</button>
                                    </div> -->
                                    <div class="btn-group" role="group">
                                        <button type="radio" name="type" value="wxpay" class="btn btn-info">微信支付</button>
                                    </div>
                                </div>
                            </center>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
        <h6 style="text-align: center;color: #ff2929;">支付成功后返回首页</h6>
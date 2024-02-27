<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>毅聯建設</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("head.php")?>
    <link rel="stylesheet" href="css/Contact.css">
</head>

<body>
    <?php include("header.php")?>
    <section class="wrapper">
        <div class="Banner">
            <div class="InnerImg" style="background-image:url('./images/img/Contact/pic01.jpg');">
                <div class="BannerTxt">
                    <h4>聯絡我們</h4>
                    <p>CONTACT US</p>
                </div>
            </div>
        </div>
        <div class="FormArea">
            <div class="Info">
                <div class="InfoTitle">
                    <h4>毅聯建設股份有限公司</h4>
                </div>
                <div class="content">
                    <p>毅聯建設股份有限公司</p>
                    <p>地址：台北市大同區涼州街2號之12</p>
                    <p>
                        <span>F：2553-1873</span><span>統編：53564127</span>
                    </p>
                </div>
            </div>
            <div class="Form">
                <form action="" id="form1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <div class="dataarea">
                                    <p>姓名</p>
                                    <input type="text" name="" placeholder="請輸入姓名">
                                </div>
                                <div class="dataarea">
                                    <p>連絡電話</p>
                                    <input type="text" name="" placeholder="請輸入電話">
                                </div>
                                <div class="dataarea">
                                    <p>電子郵件</p>
                                    <input type="text" name="" placeholder="請輸入電子郵件">
                                </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <div class="dataarea">
                                    <p>服務內容</p>
                                    <select name="" id="">
                                        <option value="" selected="selected">請選擇</option>
                                        <option value="建案洽詢">建案洽詢</option>
                                        <option value="合作邀約">合作邀約</option>
                                        <option value="意見分享">意見分享</option>
                                        <option value="其他">其他</option>
                                    </select>
                                </div>
                                <div class="dataarea">
                                    <p>意見描述</p>
                                    <textarea name="" id="" cols="20" rows="10" style="height:111px;"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="dataarea SBtn">
                                    <input type="submit" value="確認送出">
                                    <input type="reset" value="重新填寫">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>
    <?php include("footer.php")?>
    <?php include("script.php")?>
</body>

</html>
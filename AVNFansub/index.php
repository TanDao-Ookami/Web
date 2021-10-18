<!DOCTYPE html>
<html>
<head>
    <title>AVNFansub - Take you to Your Dream</title>
    <link rel="stylesheet" type="text/css" href="../AVNFansub/css/style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <div id="menu_top">
        <ul>
            <li><a href="../AVNFansub/index.php" title="HOME" class="active">HOME</a></li>
            <li><a href="../AVNFansub_About_Us/aboutus.php" title="ABOUT US">ABOUT US</a></li>
            <li><a href="../AVNFansub_ListAnime/listanime.php" title="DANH SÁCH ANIME">DANH SÁCH ANIME</a></li>
            <li><a href="../AVNFansub_ChatBox/chatbox.php" title="CHATBOX">CHATBOX</a></li>
            <li><a href="../AVNFansub_BaoLinkHong/baolinkhong.php" title="BÁO LINK HỎNG">BÁO LINK HỎNG</a></li>
            <li><a href="../AVNFansub_HuongDan/huongdan.php" title="HƯỚNG DẪN">HƯỚNG DẪN</a></li>
        </ul>
    </div>
    <div id="banner"><a href="../AVNFansub/index.php"><img src="./images/banner.png" style="border-radius: 10px;"></a></div>
    <div id="main">
        <div id="Thôngbáo"><h1>Thông báo</h1>
            <div id="imageThôngbáo"></div>
            <div id="contentthongbao">
                <h2>Trang Facebook mới của A4VFansub</h2>
                <i class="fas fa-calendar-alt"><a href="#" title="HOME"> 10/9/2020</a></i>
                <i class="fas fa-user-alt"><a href="#" title="HOME"> Duy Tấn</a></i>
                <i class="fas fa-folder-open"><a href="#" title="HOME"> Thông báo</a></i>
                <p>
                <?php
            $conn = mysqli_connect("localhost","root","","avnfansub");
            $sql = "select vncontent from thongbao where id='contentthongbao'";
            $result = mysqli_query($conn,$sql);
            if ($row = mysqli_fetch_array($result)) {
                # code...
                $index = $row[0];
                echo "<span>{$index}<span>";
            } else {
                # code...
                echo "Lỗi dữ liệu";
            }
            
            mysqli_close($conn);
            ?>
                </p>
            </div>
        </div>
        <div id="AVNFansubonFB"><h1>AVNFansub on FB</h1>
            <div id="facebook">
                <div id="AvatarFB"></div>
                <div id="Name"><a href="https://www.facebook.com/a4vfamily/">A4VFamily</a></div>
            </div>
        </div>
        <div id="ListFilm"><h1>Danh Sách Phim</h1>
            <div id="Completed"><a href="#">Completed (81)</a></div>
            <div id="Ongoing"><a href="#">Ongoing (6)</a></div>
        </div>
        <div id="Mớipháthành"><h1>Mới phát hành</h1>
            <div class="box">
                <div class="container-1">
                        <input type="search" id="search" placeholder="Tìm kiếm (ví dụ: One Piece 01)" />
                </div>
            </div>
            <ul>
                <li>
                    <div id="film1">
                        <div id="imgfilm1"></div>
                        <div id="contentfilm1">
                            <h2><a href="#">Vivy: Flurite Eyes's Song - 10</a></h2>
                            <p>Nội dung: Cùng một cô gái AI (Trí tuệ nhân tạo), học lịch sử âm nhạc ở thì tương lai để bảo vệ hòa bình thế giới. Lịch chiếu: CN hàng tuần từ 04/04/201</p>
                            <button id="button" name="button" type="button">Tập 10</button>
                            <button id="button0" name="button" type="button">Spring 2021</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="film2">
                        <div id="imgfilm2"></div>
                        <div id="contentfilm2">
                            <h2><a href="#">Vivy: Flurite Eyes's Song - 9</a></h2>
                            <p>Nội dung: Cùng một cô gái AI (Trí tuệ nhân tạo), học lịch sử âm nhạc ở thì tương lai để bảo vệ hòa bình thế giới. Lịch chiếu: CN hàng tuần từ 04/04/201</p>
                            <button id="button" name="button" type="button">Tập 9</button>
                            <button id="button0" name="button" type="button">Spring 2021</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="film3">
                        <div id="imgfilm3"></div>
                        <div id="contentfilm3">
                            <h2><a href="#">Super Cub - 07</a></h2>
                            <p>“Tôi từng nghĩ mình không có gì cả” Oguma là một nữ sinh trung học ở thành phố Hokuto, tỉnh Yamanashi. Cô không có cha mẹ, không có bạn bè, cũng không có sở thích. Cứ nghĩ cuộc sống của Oguma cứ trôi qua một cách vô nghĩa như thế,…</p>
                            <button id="button" name="button" type="button">Tập 7</button>
                            <button id="button0" name="button" type="button">Spring 2021</button>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="film4">
                        <div id="imgfilm4"></div>
                        <div id="contentfilm4">
                            <h2><a href="#">Osamake - 06</a></h2>
                            <p>Nội dung:  Người bạn thời thơ ấu, Shida Kuroha, dường như đang thích tôi. Cậu ấy sống ở nhà kế bên, tính cách hòa đồng, năng động và luôn tỏ ra quân tâm như một người chị vậy. Tuy nhiên, tôi đã có người trong mộng của mình rồi. Đó…</p>
                            <button id="button" name="button" type="button">Tập 6</button>
                            <button id="button0" name="button" type="button">Spring 2021</button>
                        </div>
                    </div>
                </li>
            </ul>
            <button id="buttonload" name="button" type="button">Tải Thêm</button>
        </div>
        <div id="OngoingProject"><h1>On going Project</h1>
            <ul>
                <li>
                    <div id="film1">
                        <div id="imgfilm1"></div>
                        <div id="contentfilm1">
                            <h3><a href="#">Shaman King (2021)</a></h3>
                            <h4>Đăng ngày 02/04/2021 bởi Duy Tấn</h4>
                            <p>Pháp sư là những cá nhân phi thường có thể giao tiếp với hồn ma, tinh linh và thần, những thực thể mà người bình thường không thể nhìn thấy. Cứ 500 năm một lần, sẽ có một Đại hội pháp sư mà tại đó, các pháp sư sẽ tranh…</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="film2">
                        <div id="imgfilm2"></div>
                        <div id="contentfilm2">
                            <h3><a href="#">Higehiro</a></h3>
                            <h4>Đăng ngày 02/04/2021 bởi Duy Tấn</h4>
                            <p>Nội dung:  Yoshida là một nhân viên văn phòng 26 tuổi, vừa bị crush suốt 5 năm trời từ chối. Trên đường mượn rượu giải sầu về, anh nhìn thấy một nữ sinh trung học đang ngồi bên xó đường. – “Sao em lại ngồi đây?” – “Nè… Em cho…</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div id="film3">
                        <div id="imgfilm3"></div>
                        <div id="contentfilm3">
                            <h3><a href="#">Super Cub</a></h3>
                            <h4>Đăng ngày 02/04/2021 bởi Duy Tấn</h4>
                            <p>“Tôi từng nghĩ mình không có gì cả” Oguma là một nữ sinh trung học ở thành phố Hokuto, tỉnh Yamanashi. Cô không có cha mẹ, không có bạn bè, cũng không có sở thích. Cứ nghĩ cuộc sống của Oguma cứ trôi qua một cách vô nghĩa như thế,…</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div id="Commentgầnđây"><h1>Comment gần đây</h1></div>
    </div>
    <div id="footer">Powered by AVNFansub</div>
</body>
</html>
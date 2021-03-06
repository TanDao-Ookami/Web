<!DOCTYPE html>
<html>
<head>
	<title>Danh Sách Anime - AVNFansub</title>
	<link rel="stylesheet" type="text/css" href="../AVNFansub_ListAnime/css/style.css">
</head>
<body>
	<div id="menu_top">
        <ul>
            <li><a href="../AVNFansub/index.php" title="HOME">HOME</a></li>
            <li><a href="../AVNFansub_About_Us/aboutus.php" title="ABOUT US">ABOUT US</a></li>
            <li><a href="../AVNFansub_ListAnime/listanime.php" title="DANH SÁCH ANIME" class="active">DANH SÁCH ANIME</a></li>
            <li><a href="../AVNFansub_ChatBox/chatbox.php" title="CHATBOX">CHATBOX</a></li>
            <li><a href="../AVNFansub_BaoLinkHong/baolinkhong.php" title="BÁO LINK HỎNG">BÁO LINK HỎNG</a></li>
            <li><a href="../AVNFansub_HuongDan/huongdan.php" title="HƯỚNG DẪN">HƯỚNG DẪN</a></li>
        </ul>
    </div>
    <div id="banner"><a href="../AVNFansub/index.php"><img src="./images/banner-2.png" style="border-radius: 10px;"></a></div>
    <div id="main"> <h2>Danh sách Anime</h2>
        <div id="search">
            <div id="alphabet">
                <ul>
                    <li><a href="#">#</a></li>
                    <li><a href="#">A</a></li>
                    <li><a href="#">B</a></li>
                    <li><a href="#">C</a></li>
                    <li><a href="#">D</a></li>
                    <li><a href="#">E</a></li>
                    <li><a href="#">F</a></li>
                    <li><a href="#">G</a></li>
                    <li><a href="#">H</a></li>
                    <li><a href="#">I</a></li>
                    <li><a href="#">J</a></li>
                    <li><a href="#">K</a></li>
                    <li><a href="#">L</a></li>
                    <li><a href="#">M</a></li>
                    <li><a href="#">N</a></li>
                    <li><a href="#">O</a></li>
                    <li><a href="#">P</a></li>
                    <li><a href="#">Q</a></li>
                    <li><a href="#">R</a></li>
                    <li><a href="#">S</a></li>
                    <li><a href="#">T</a></li>
                    <li><a href="#">U</a></li>
                    <li><a href="#">V</a></li>
                    <li><a href="#">W</a></li>
                    <li><a href="#">X</a></li>
                    <li><a href="#">Y</a></li>
                    <li><a href="#">Z</a></li>
                </ul>
            </div>
            <div id="keyword">
                <form method="post" action="#" style="margin: 10px; color: gray; font-weight: bold;">
                    Từ khóa:<br>
                    <input type="Name" name="text" 
                    style="width: 800px; height: 35px; margin: 0px; border-width: 2px; border-radius: 5px;">
                    <input type="Submit" value="Tìm kiếm" 
                    style="width: 130px;
                    height: 40px;
                    background-color: green;
                    color: white;
                    font-weight: bold;
                    border-radius: 5px;
                    margin: 0px;">
                    <input type="reset" value="Xóa"
                    style="width: 130px;
                    height: 40px;
                    background-color: red;
                    color: white;
                    font-weight: bold;
                    border-radius: 5px;
                    margin: 20px 10px;">
                </form>
            </div>
            <div id="option"><h1>Tùy chọn tìm kiếm</h1>
                <ul>
                    <li>Chuyên mục phim<br>
                        <label for="chuyenmucphim"></label>
                          <select id="chuyenmucphim" name="chuyenmucphim" style="margin: 10px;">
                            <option value="all">Tất cả Chuyên mục phim</option>
                            <option value="before">Before 2018</option>
                            <option value="fall">Fall 2018</option>
                            <option value="fall">Fall 2019</option>
                            <option value="fall">Fall 2020</option>
                            <option value="spring">Spring 2019</option>
                            <option value="spring">Spring 2020</option>
                            <option value="spring">Spring 2021</option>
                            <option value="summer">Summer 2019</option>
                            <option value="summer">Summer 2020</option>
                            <option value="winter">Winter 2018</option>
                            <option value="winter">Winter 2020</option>
                          </select>
                    </li>
                    <li>Thẻ phim<br>
                        <label for="thephim"></label>
                          <select id="thephim" name="thephim" style="margin: 10px;">
                            <option value="all">Tất cả Thẻ phim</option>
                            <option value="action">Action</option>
                            <option value="comedy">Comedy</option>
                            <option value="drama">Drama</option>
                            <option value="ecchi">Ecchi</option>
                            <option value="fatasy">Fantasy</option>
                            <option value="game">Game</option>
                            <option value="harem">Harem</option>
                            <option value="horror">Horror</option>
                            <option value="parody">Parody</option>
                            <option value="romance">Romance</option>
                            <option value="sport">Sport</option>
                          </select>
                    </li>
                    <li>Năm phát hành<br>
                        <label for="namphathanh"></label>
                          <select id="namphathanh" name="namphathanh" style="margin: 10px;">
                            <option value="all">Tất cả Năm phát hành</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                          </select>
                    </li>
                    <li>Thể loại<br>
                        <label for="theloai"></label>
                          <select id="theloai" name="theloai" style="margin: 10px;">
                            <option value="all">Tất cả Thể loại</option>
                            <option value="movie">Movie</option>
                            <option value="tv_series">TV Series</option>
                          </select>
                    </li>
                    <li>Trạng thái<br>
                        <label for="trangthai"></label>
                          <select id="trangthai" name="trangthai" style="margin: 10px;">
                            <option value="all">Tất cả Trạng thái</option>
                            <option value="completed">Completed</option>
                            <option value="drop">Drop</option>
                            <option value="on_going">On Going</option>
                          </select>
                    </li>
                    <li>Sắp xếp <br>
                        <label for="sapxep"></label>
                          <select id="sapxep" name="sapxep" style="margin: 10px;">
                            <option value="macdinh">Sắp xếp mặc định</option>
                            <option value="a-z">Sắp xếp theo tiêu đề: A đến Z</option>
                            <option value="z-a">Sắp xếp theo tiêu đề: Z đến A</option>
                            <option value="old-new">Sắp xếp theo ngày: cũ đến mới</option>
                            <option value="new-old">Sắp xếp theo ngày: mới đến cũ</option>
                          </select>
                    </li>
                </ul>
            </div>
        </div>
        <div id="anime">

            <div id="film1">
                <div id="img">
                    <div id="img1"></div>
                </div>
                <div id="content1"><h2><a href="#">Vivy: Fluorite Eye's Song</a></h2>
                    <p>Nội dung: Cùng một cô gái AI (Trí tuệ nhân tạo), học lịch sử âm nhạc ở thì tương lai để bảo vệ hòa bình thế giới. Lịch chiếu: CN hàng tuần từ 04/04/201</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film2">
                <div id="img">
                    <div id="img2"></div>
                </div>
                <div id="content2"><h2><a href="#">Hetalia: Axis Power</a></h2>
                    <p>Hetalia: Axis Powers (ヘタリア Hetaria Akushisu Pawāzu. Tác giả bộ truyện là Hidekaz Himaruya (日丸屋秀和 Himaruya Hidekazu. Nó còn được viết tắt là Hetalia hay APH. Nội dung manga xoay quanh những sự kiện chính trị và lịch sử, đặc biệt là của thời kỳ Chiến tranh thế giới thứ nhất và Chiến tranh thế giới thứ hai, trong đó mỗi quốc gia được đại diện bởi một nhân vật khác nhau. Từ Hetalia là sự kết hợp giữa Hetare (へタレ, tiếng Nhật nghĩa là vô dụng) và Italia (イタリア nước Ý). </p>
                    <button id="button" name="button" type="button">Completed</button>
                    <button id="button0" name="button" type="button">BEFORE 2018</button>
                </div>
            </div>
            <div id="film3">
                <div id="img">
                    <div id="img3"></div>
                </div>
                <div id="content3"><h2><a href="#">Osamake</a></h2>
                    <p>Nội dung:  Người bạn thời thơ ấu, Shida Kuroha, dường như đang thích tôi. Cậu ấy sống ở nhà kế bên, tính cách hòa đồng, năng động và luôn tỏ ra quân tâm như một người chị vậy. Tuy nhiên, tôi đã có người trong mộng của mình rồi. Đó là Kachi Shirokusa, một tiểu thuyết gia từng đoạt giải, một hoa khôi vô cùng xinh đẹp học cùng trường. Nghĩ một cách bình thường thì đúng là lá ngọc cành vàng, mâm cao khó với. Nhưng một hôm, trên đường về nhà, cô ấy đã nói chuyện với tôi, lại còn cười với tôi nữa chứ. Phải chăng tôi vẫn có cơ hội? Vừa nghĩ như thế thì tôi hay tin Shirokusa đã có…</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film4">
                <div id="img">
                    <div id="img4"></div>
                </div>
                <div id="content4"><h2><a href="#">Higehiro</a></h2>
                    <p>Nội dung:  Yoshida là một nhân viên văn phòng 26 tuổi, vừa bị crush suốt 5 năm trời từ chối. Trên đường mượn rượu giải sầu về, anh nhìn thấy một nữ sinh trung học đang ngồi bên xó đường. – “Sao em lại ngồi đây?” – “Nè… Em cho anh xơi đó. Cho em ở nhà anh được không? Lịch chiếu: 22:00 thứ 2 hàng tuần (từ 05/04)</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film5">
                <div id="img">
                    <div id="img5"></div>
                </div>
                <div id="content5"><h2><a href="#">Super Cub</a></h2>
                    <p>“Tôi từng nghĩ mình không có gì cả” Oguma là một nữ sinh trung học ở thành phố Hokuto, tỉnh Yamanashi. Cô không có cha mẹ, không có bạn bè, cũng không có sở thích. Cứ nghĩ cuộc sống của Oguma cứ trôi qua một cách vô nghĩa như thế, nhưng rồi một ngày nọ, cô đã mua một chiếc Super Cub có lịch sử vô cùng đáng ngờ mà mình tình cờ nhìn thấy. Kể từ đó, cuộc sống của cô bắt đầu thay đổi từng chút một. Lịch chiếu: 22:30 thứ 4 hàng tuần (từ 07/04)</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film6">
                <div id="img">
                    <div id="img6"></div>
                </div>
                <div id="content6"><h2><a href="#">Hetalia World Stars</a></h2>
                    <p>Để giải quyết những vấn đề chung của toàn thế giới, “Hội nghị thế giới” với sự tham gia của rất nhiều đất nước đã được tổ chức. Trong bối cảnh đó, Ý lại đến muộn như thường lệ… Và thế là câu chuyện hài của chúng ta lại được tiếp tục với những thành viên quen thuộc.</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film7">
                <div id="img">
                    <div id="img7"></div>
                </div>
                <div id="content7"><h2><a href="#">Shaman King (2021)</a></h2>
                    <p>Pháp sư là những cá nhân phi thường có thể giao tiếp với hồn ma, tinh linh và thần, những thực thể mà người bình thường không thể nhìn thấy. Cứ 500 năm một lần, sẽ có một Đại hội pháp sư mà tại đó, các pháp sư sẽ tranh đấu với nhau để dành danh hiệu Vua pháp sư. Người đạt được danh hiệu này sẽ có quyền điều khiển Tinh linh vĩ đại để cơ cấu lại thế giới. Manta là một học sinh cấp 3 ở Tokyo. Một đêm nọ, cậu tình cờ gặp Asakura Yo trong nghĩa trang và biết được bí mật về các Pháp sư. Thế rồi các pháp sư khác cứ lần lượt xuất hiện.</p>
                    <button id="button" name="button" type="button">Ongoing</button>
                    <button id="button0" name="button" type="button">SPRING 2021</button>
                </div>
            </div>
            <div id="film8">
                <div id="img">
                    <div id="img8"></div>
                </div>
                <div id="content8"><h2><a href="#">Yakusoku no Neverland 2nd Season</a></h2>
                    <p>Emma, Norman và Ray là những đứa trẻ sáng dạ nhất tại cô nhi viện Grace Field House. Dưới sự chăm sóc của người phụ nữ chúng gọi là “Mẹ”, những đứa trẻ này được tận hưởng một cuộc sống vui vẻ. Đồ ăn ngon, quần áo sạch và được học tập – những đứa trẻ mồ côi liệu có thể đòi hỏi gì hơn? Và khi đến tuổi, những đứa trẻ này sẽ được các bậc cha mẹ nhận nuôi. Ít nhất thì theo lời “Mẹ” là vậy. Thế nhưng đến một ngày, Emma và Norman đã phát hiện ra một sự thật đen tối về thế giới bên ngoài. Đằng sau bức màn cô nhi viện là một sự thật khủng khiếp mà…</p>
                    <button id="button" name="button" type="button">Complete</button>
                    <button id="button0" name="button" type="button">WINTER 2020</button>
                </div>
            </div>
            <div id="film9">
                <div id="img">
                    <div id="img9"></div>
                </div>
                <div id="content9"><h2><a href="#">Kamisama ni Natta Hi</a></h2>
                    <p>Vào kỳ nghỉ hè cuối cùng của năm cấp 3, Narukami Youta đang bận rộn với kỳ thi vào đại học thì một cô bé loli đột nhiên xuất hiện và tự xưng là vị thần toàn năng. Cô nói với Youta rằng thế giới sẽ kết thúc sau 30 ngày nữa, khiến Youta vô cùng bối rối. Thế nhưng sau khi chiến thắng quyền năng của cô bé, Youta bắt đầu tin là thật. Và rồi kỳ nghỉ hè cuối cùng trước ngày tận thế của hai người họ bắt đầu. [Link Folder Google Drive]</p>
                    <button id="button" name="button" type="button">Complete</button>
                    <button id="button0" name="button" type="button">FALL 2020</button>
                </div>
            </div>
            <div id="film10">
                <div id="img">
                    <div id="img10"></div>
                </div>
                <div id="content10"><h2><a href="#">Strike Witches: Road to Berlin</a></h2>
                    <p>Năm 1939, một lực lượng bí ẩn bỗng nhiên xuất hiện trên trái đất. Mọi người gọi chúng là Neuroi. Chẳng mấy chóc, chúng đã đánh chiếm được gần như toàn bộ châu Âu. Để chống lại Neuroi, con người đã đã phát triển một loại vũ khí mới chỉ có thể được sử dụng bởi Witch – các cô gái sở hữu ma lực, được gọi là Striker Unit. Kể từ đó, các Witch từ khắp nơi trên thế giới đã quy tụ để sử dụng các striker unit này chóng lại Neuroi. Một trong số đó là một phi đội liên hợp ưu tú của quân đồng minh mang số hiệu 501. Sau khi tiêu diệt mối họa từ ổ Neuroi ở Venezia,…</p>
                    <button id="button" name="button" type="button">Complete</button>
                    <button id="button0" name="button" type="button">FALL 2020</button>
                </div>
            </div>
            <button id="buttonload" name="button" type="button">Tải Thêm</button>

        </div>
    </div>
    <div id="footer">Powered by AVNFansub</div>
</body>
</html>

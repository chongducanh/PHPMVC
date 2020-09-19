-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Sep 19, 2020 at 04:39 PM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `Games`
--

CREATE TABLE IF NOT EXISTS `Games` (
  `GameID` int(11) NOT NULL AUTO_INCREMENT,
  `GameName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GamePrice` int(11) NOT NULL,
  `GameProducer` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GameCatagory` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `GameQuantity` int(11) NOT NULL,
  `GameDescription` varchar(10000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GameImage` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`GameID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Games`
--

INSERT INTO `Games` (`GameID`, `GameName`, `GamePrice`, `GameProducer`, `GameCatagory`, `GameQuantity`, `GameDescription`, `GameImage`) VALUES
(1, 'Captain Tsubasa Rise Of New Champions cho PS4 - EU', 1350000, 'Tamsoft', 'Đá bóng, thể thao', 100, 'Captain Tsubasa Rise of New Champions là tựa game Captain Tsubasa đầu tiên sau 10 năm dài xuất hiện trên máy console, mang lại nhiều điều thú vị cho các fan. Game sở hữu đồ họa 3D đẹp mắt, hình ảnh gần với manga, anime, vô cùng rực rỡ. Đi kèm là lối chơi dễ nắm bắt nhưng có chiều sâu, và tất nhiên là tha hồ cho bạn thi triển các tuyệt kỹ ảo diệu không khác gì truyện.\r\nVới ý tưởng \"ai cũng có thể thưởng thức các màn trình diễn thần thánh của Captain Tsubasa\", tựa game Captain Tsubasa Rise of New Champions sử dụng hệ thống gameplay mà bạn có thể tấn công và phòng thủ thông qua những pha đi bóng siêu việt với cách điều khiển đơn giản. Bạn có thể thi triển các kỹ năng đặc biệt của mỗi nhân vật bằng \"spirit gauge\" (thanh tinh thần), cũng như tận hưởng các \"super move\" (siêu tuyệt chiêu) đẹp mắt.\r\nNgoài ra, tựa game Captain Tsubasa Rise of New Champions còn có một chế độ với tên gọi \"Episode New Hero\". Trong đó, bạn có thể xây dựng tình bạn với các nhân vật mình yêu thích, học kỹ năng mới, và trải nghiệm nhưng câu chuyện kịch tính. Nói ngắn gọn, đây chính là phần chơi theo cốt truyện với nhân vật do người chơi tự tạo.', 'https://product.hstatic.net/1000154920/product/captain_tsubasa_rise_of_new_champions_ps4_a68bbe64ce1249c1af558ef5a9ffa3c5_master.png'),
(2, 'Doraemon Story Of Seasons cho PS4 - Asia', 1050000, 'BROWNIES', 'Strategy, Management, Business / Tycoon', 100, 'Cuối cùng thì Bandai Namco, Marvelous, cùng Brownies đã chính thức đưa Doraemon Story of Seasons lên hệ máy PlayStation 4. Đây là sự kết hợp độc đáo giữa thương hiệu chú mèo máy Doraemon cùng dòng game Story of Seasons (Harvest Moon chính hiệu) mà bạn tuyệt đối không nên bỏ qua.\r\nDoraemon Story of Seasons có các nhân vật quen thuộc từ Doraemon. Người chơi sẽ cùng làm việc với họ và xây dựng lên trang trại, thị trấn của mình. Tất nhiên game không thể thiếu các yếu tố đặc trưng của series Story of Seasons như trồng trọt, chăm sóc gia súc, trò chuyện với dân làng,... Điểm mới lạ là bạn sẽ được dùng thêm cả các bảo bối của Doraemon.\r\nBên cạnh đó, Bandai Namco Entertainment cũng đã chính thức xác nhận trong Doraemon Story of Seasons sẽ không có hệ thống kết hôn và tiến triển tình cảm lãng mạn giữa các nhân vật. Âu đây cũng là sự phát triển hợp lý khi xét trên độ tuổi của các nhân vật trong game. Hãng cho biết loại bỏ tính năng này vì trò chơi đi theo phong cách “lifestyle” (cuộc sống đời thường), nhóm phát triển cảm thấy \"chế độ kết hôn\" sẽ làm phá hỏng sự thích thú của game.', 'https://product.hstatic.net/1000154920/product/doraemon_story_of_seasons_ps4_d378d4e4023f4186a720ae958d825ff3_master.png'),
(3, 'Gunvolt Chronicles Luminous Avenger IX cho PS4 - Asia', 1090000, 'Inti Creates', 'Action, Platformer, 2D', 100, 'Trong phần game mới này, bối cảnh sẽ diễn ra ở chung vũ trụ của Azure Striker Gunvolt (năm 2014) và Azure Striker Gunvolt 2 ( năm 2016). Trò chơi tiếp tục sử dụng phong cách đồ họa pixel 2D đẹp mắt, lối đánh tốc độ cao, và sở hữu những thiết kế nhân vật siêu đẹp. Bạn sẽ gặp lại nhân vật phản người hùng (anti-hero) rất được yêu thích Copen. Và lần này anh là nhân vật chính.\r\nGunvolt Chronicles: Luminous Avenger iX hứa hẹn sẽ phù hợp hơn với nhiều trình độ khác nhau của người chơi. Bạn có thể chọn tính năng \"Prevasion\", hoàn toàn không gây sát thương, \"Anthem\" hồi sinh người chơi với trạng thái tăng sức mạnh, và còn những khả năng khác để giúp người mới chơi. Còn với game thủ kỳ cựu, hãy thử việc kiếm điểm \"Kudos\" bằng cách tung được đòn liên hoàn và né sát thương, tạo độ hưng phấn và thử thách các mỗi màn chơi.\r\nRobot đồng hành mới của bạn cũng đã được giới thiệu. Đó là Lola với những ca khúc mạnh mẽ, hỗ trợ bạn vô cùng đắc lực. Hình và âm của game đều được nâng cấp hơn lên so với các phần trước.', 'https://product.hstatic.net/1000154920/product/gunvolt_chronicles_luminous_avenger_ix_9e29170fb838474b9cb1a2c413e00061_master.png'),
(4, 'One Piece Pirate Warriors 4 cho PS4 - EU', 790000, 'Omega Force', 'Action, Beat-\'Em-Up, 3D', 100, 'One Piece: Pirate Warriors 4 là video game phiêu lưu hành động được phát triển bởi Omega Force và được Bandai Namco Entertainment phát hành cho PC, PlayStation 4, Xbox One và Nintendo Switch. Đây là phần thứ tư trong loạt trò chơi điện tử Pirate Warriors, dựa trên nhượng quyền thương mại của bộ truyện tranh nổi tiếng One Piece.\r\nGame có lối chơi kiểu \"một mình cân cả thế giới\" giống với dòng Dynasty Warrior (hay còn biết đến bằng cái tên Tam Quốc ở Việt Nam). Lối chơi của nó cũng không khác nhiều so với người anh em của mình khi thường đưa người chơi vào vai các nhân vật của thế giới One Piece, tả xung hữu đột giữa hàng đàn kẻ địch bằng hệ thống chiêu thức đẹp mắt.', 'https://product.hstatic.net/1000154920/product/one_piece_pirate_warriors_4_2743985f7c5d4c4e86e8a03bff4dc6aa_master.png'),
(5, 'My Hero One\'s Justice 2 cho PS4 - EU', 1350000, 'Bandai Namco Games', 'Action, Fighting, 3D', 100, 'Cuộc chiến vì công lý vẫn tiếp diễn, nhưng lần này, cuộc chiến trở nên lớn hơn, ác liệt hơn trong My Hero One’s Justice 2. Dựa trên bộ anime đình đám, tất cả các nhân vật được yêu thích sẽ trở lại trong đấu trường 3D này, chiến đấu với các anh hùng và nhân vật phản diện cuối cùng.\r\nĐón xem sau khi kết thúc My Hero One’s Justice và xem điều gì xảy ra với Deku và lớp học tại UA. Dàn nhân vật trong My Hero One’s Justice đã trở lại và giờ đây họ đã tham gia cùng với các nhân vật mới được thêm vào trong bộ truyện. Với 40 nhân vật có thể lựa chọn, xây dựng team trong mơ với các nhân vật chín hoặc nhân vật phản diện yêu thích. Chiến đấu để xây dựng \"Plus Ultra\" và sử dụng các chiêu thức combo đặc biệt!\r\nCác tính năng chính:\r\n\r\nKhám phá các chiêu thức combo đặc biệt với tất cả các nhân vật yêu thích.\r\nXây dựng đội ngũ trong mơ với 40 nhân vật có thể lựa chọn.\r\nDựa trên bộ anime đình đám có các nhân vật yêu thích như Deku, All Might, Shigaraki, và nhiều nhân vật khác.\r\nThưởng thức những cảnh tượng đáng nhớ từ anime.', 'https://product.hstatic.net/1000154920/product/my_hero_one_s_justice_2_0f6b1200fade4d659e00a9b89e131c25_master.png'),
(6, 'The Legend Of Heroes Trails Of Cold Steel III cho PS4 - EU', 1090000, 'Falcom', 'Role-Playing, Japanese-Style', 100, 'Là sản phẩm “hậu duệ” trực tiếp của hai tựa game Trails of Cold Steel trước, The Legend of Heroes: Trails of Cold Steel III trở lại với nhân vật chính Rean Schwarzer, nay đã là một giảng viên quân sự, cùng những người bạn của anh từ các phần game trước.\r\nLấy bối cảnh 1 năm rưỡi sau Trails of Cold Steel II, phần III sẽ đi sâu vào những bí ẩn liên quan tới việc Rean chào đời, cũng như khám phá những điều mà các nhân vật khác đã làm trong quãng thời gian 1 năm rưỡi đó.', 'https://product.hstatic.net/1000154920/product/the_legend_of_heroes_trails_of_cold_steel_iii_c3975ebfef3f40189f6d72eef6ce4c24_master.png'),
(7, 'Final Fantasy VII Remake cho PS4 - Asia', 1390000, 'Square Enix', 'Japanese-Style, Role-Playing, Action RPG', 0, 'Final Fantasy từ lâu đã là dòng game sở hữu chất lượng đồ họa đỉnh cao. Mỗi phần mới đều tìm cách đẩy giới hạn này ra xa hơn, mang lại những trường đoạn đẹp mắt, mãn nhãn cho người chơi. Final Fantasy VII Remake không nằm ngoài điều đó. Tận dụng công nghệ hiện đại, trò chơi được khoác lên mình lớp áo mới lung linh.\r\nNếu như ở bản gốc, Final Fantasy VII sử dụng kiểu chọn lệnh (command) theo lượt trong các trận đấu, thì ở Final Fantasy VII Remake, yếu tố hiện đại đã được thêm vào. Điều này là cần thiết để giúp game bắt kịp với các xu thế hiện đại, giúp người chơi trải nghiệm tốt hơn, thoải mái hơn, tránh sự nhàm chán do các tiêu chuẩn cũ đã lỗi thời. Hệ thống gameplay chiến đấu mới ở Final Fantasy VII Remake là sự pha trộn giữa nhập vai truyền thống và chất hành động mới mẻ.\r\nVới tài lực và nhân lực đồ sộ của Square Enix hậu thuẫn, nhưng Final Fantasy VII Remake vẫn phải bị chia làm từng part riêng để phát hành vì lượng nội dung quá lớn. Đặc biệt là khi mọi thứ xưa kia đều được làm lại ở dạng 3D. Vì lẽ đó đây chỉ mới là phần đầu tiên trong toàn bộ cốt truyện, nhưng bạn có thể yên tâm là độ dài game không thua kém bất kỳ game nhập vai lớn nào.', 'https://product.hstatic.net/1000154920/product/final_fantasy_vii_remake_standard_b3a8d41b81c34728a2f7d99ab70d1e57_master.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

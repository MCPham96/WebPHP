<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([]) or <>
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================

	// incHeader.php
	$Translation['membership management'] = "Quản lý thành viên";
	$Translation['password mismatch'] = "Mật khẩu không phù hợp";
	$Translation['error'] = "Lỗi";
	$Translation['invalid email'] = "Địa chỉ email không hợp lệ";
	$Translation['sending mails'] = "Gửi mail có thể mất một thời gian. Xin đừng đóng trang này cho đến khi bạn thấy thông báo 'Xong'.";
	$Translation['complete step 4'] = "Vui lòng điền bước 4 bằng cách chọn thành viên mà bạn muốn chuyển hồ sơ để.";
	$Translation['info'] = "Thông Tin";
	$Translation['sure move member'] = 'Bạn có chắc chắn bạn muốn di chuyển thành viên \'<MEMBER>\' và dữ liệu của mình từ nhóm \'<OLDGROUP>\' đến nhóm \'<NEWGROUP>\'?';
	$Translation['sure move data of member'] = 'Bạn có chắc chắn bạn muốn di chuyển thành viên \'<OLDMEMBER>\' từ nhóm \'<OLDGROUP>\' đến thành viên \'<NEWMEMBER>\' từ nhóm \'<NEWGROUP>\'?';
	$Translation['sure move all members'] = 'Bạn có chắc chắn bạn muốn di chuyển tất cả các thành viên và dữ liệu từ nhóm \'<OLDGROUP>\' đến nhóm \'<NEWGROUP>\'?';
	$Translation['sure move data of all members'] = 'Bạn có chắc chắn bạn muốn di chuyển tất cả các thành viên và dữ liệu từ nhóm \'<OLDGROUP>\' đến thành viên \'<MEMBER>\' đến nhóm \'<NEWGROUP>\'?';
	$Translation['toggle navigation'] = "Hướng Chuyển Đổi";
	$Translation['admin area'] = "NamIT Admin";
	$Translation['groups'] = "Các Nhóm";
	$Translation['view groups'] = "Xem Nhóm";
	$Translation['add group'] = "Thêm Nhóm Mới";
	$Translation['edit anonymous permissions'] = "Sửa Quyền Anonymous";
	$Translation['members'] = "Các Thành Viên";
	$Translation['view members'] = "Xem Các Thành Viên";
	$Translation['add member'] = "Thêm Thành Viên Mới";
	$Translation["view members' records"] = "Xem Hồ Sơ Của Thành Viên";  
	$Translation["utilities"] = "Tiện Ích"; 
	$Translation["admin settings"] = "Cài Đặt Quản Trị"; 
	$Translation["rebuild thumbnails"] = "Tạo Ảnh Thu Nhỏ"; 
	$Translation['rebuild fields'] = "Rebuild fields";
	$Translation['import CSV'] = "Nhập Dữ Liệu CSV";
	$Translation['batch transfer'] = "Batch Transfer Wizard";
	$Translation['mail all users'] = "Gửi Cho Toàn Bộ User";
	$Translation['AppGini forum'] = "Cộng Đồng Diễn Đàn";
	$Translation["user's area"] = 'Tài Khoản';
	$Translation["sign out"] = "Đăng Xuất";
	$Translation["attention"] = "Chú Ý!";
	$Translation['security risk admin'] = 'Bạn đang sử dụng tên người dùng và mật khẩu quản trị mặc định. Đây là một nguy cơ bảo mật lớn. Vui lòng thay đổi ít nhất là mật khẩu quản trị từ <a href="pageSettings.php">"Cài Đặt Quản Trị"</a> trang <em>ngay</em>.';
	$Translation['security risk'] = 'Bạn đang sử dụng tên người dùng và mật khẩu quản trị mặc định. Đây là một nguy cơ bảo mật lớn. Vui lòng thay đổi ít nhất là mật khẩu quản trị từ <a href="pageSettings.php">Cài Đặt Quản Trị</a> trang <em>ngay</em>.' ;
	$Translation['plugins'] = 'Plugins';

	//pageAssignOwners.php
	$Translation["assigned table records to group"] = "Giao<NUMBER> hồ sơ của bảng '<TABLE>' đến nhóm '<GROUP>'";
	$Translation["assigned table records to group and member"] = "Giao <NUMBER> hồ sơ của bảng '<TABLE>' đến nhóm '<GROUP>' , thành viên '<MEMBERID>'";
	$Translation['data ownership assign'] = "Gán sở hữu đối với dữ liệu mà không có chủ sở hữu";
	$Translation['records ownership done'] = "Tất cả các bản ghi trong tất cả các bảng có chủ sở hữu bây giờ. <br>Quay Lại <a href='pageHome.php'>Trang Quản Trị</a>.";
	$Translation['select group'] = "Chọn Nhóm";
	$Translation['data ownership'] = "Đôi khi, bạn có thể có bảng với các dữ liệu được nhập vào trước khi triển khai hệ thống quản lý thành viên AppGini này, hoặc nhập sử dụng các ứng dụng khác không biết gì về hệ thống sở hữu AppGini. Những thông tin này hiện không có chủ sở hữu. Trang này cho phép bạn gán các nhóm chủ sở hữu và các thành viên chủ sở hữu để dữ liệu này.";
	$Translation["table"] = "Bảng";
	$Translation["records with no owners"] = "Hồ sơ không có chủ sở hữu";
	$Translation["new owner group"] = "Nhóm chủ sở hữu mới";
	$Translation["new owner member"] = "Thành viên chủ sở hữu mới*";	
	$Translation["cancel"] = "Hủy Bỏ";
	$Translation["assign new owners"] = "Gán ông chủ mới";
	$Translation["please wait"] = "Xin vui lòng chờ ...";	
	$Translation["if no owner member assigned"] = '* Nếu bạn không thể chỉ định thành viên chủ sở hữu ở đây, bạn vẫn có thể sử dụng <a href="pageTransferOwnership.php">Batch Transfer Wizard</a> sau đó làm như vậy.';
	
	//pageDeleteGroup.php
	$Translation["can not delete group remove members"] = 'Không thể xóa nhóm này. Hãy loại bỏ thành viên đầu tiên.';
	$Translation["can not delete group transfer records"] = 'Không thể xóa nhóm này. Vui lòng chuyển hồ sơ dữ liệu của nó vào nhóm khác đầu tiên ..';
	
	//pageEditGroup.php
	$Translation["group exists error"] = "Lỗi: Tên nhóm đã tồn tại. Bạn phải chọn một tên nhóm duy nhất.";
	$Translation["group not found error"] = "Lỗi: Không tìm thấy nhóm!";								 	
	$Translation["edit group"] = "Chỉnh sửa nhóm '<GROUPNAME>'";
	$Translation["add new group"] = "Thêm Nhóm mới";
	$Translation["anonymous group attention"] = "Chú ý! Đây là nhóm nặc danh.";
	$Translation["show tool tips"] = "Hiển thị mẹo công cụ như di chuyển chuột lên tùy chọn";
	$Translation["group name"] = "Tên nhóm";
	$Translation["readonly group name"] = "Tên của nhóm nặc danh là chỉ đọc ở đây.";
	$Translation["anonymous group name"] = "Nếu bạn đặt tên cho nhóm '<ANONYMOUSGROUP>', nó sẽ được coi là nhóm vô danh <br>xác định các điều khoản của khách truy cập của khách mà không đăng nhập vào hệ thống.";
	$Translation["description"] = "Sự miêu tả";
	$Translation["allow visitors sign up"] = 'Cho phép người thăm để đăng ký?';
	$Translation["admin add users"] = "Số Chỉ quản trị viên có thể thêm người dùng.";
	$Translation["admin approve users"] = "Vâng, và các quản trị viên phải chấp thuận cho họ.";
	$Translation["automatically approve users"] = "Vâng, và tự động phê duyệt.";
	$Translation["group table permissions"] = "Quyền bảng cho nhóm này";
	$Translation["no"] = "Không";
	$Translation["owner"] = "Chủ nhân";
	$Translation["group"] = "Nhóm";
	$Translation["all"] = "Tất cả";
	$Translation["insert"] = "Chèn";
	$Translation["view"] = "Xem";
	$Translation["edit"] = "Chỉnh sửa";
	$Translation["delete"] = "Xóa";
	$Translation["save changes"] = "Lưu thay đổi";
	
	//pageEditMember.php
	$Translation["username error"] = "Lỗi: Tên đăng nhập đã tồn tại hoặc không hợp lệ. Hãy chắc chắn rằng bạn cung cấp tên người dùng chứa 4-20 ký tự hợp lệ.";
	$Translation["member not found"] = "Lỗi: Thành viên không tìm thấy!";
	$Translation["user has special permissions"] = "Thành viên này có quyền truy cập đặc biệt mà ghi đè cho phép nhóm của mình.";
	$Translation["user has group permissions"] = 'Thành viên này thừa hưởng những <a href="pageEditGroup.php?groupID=<GROUPID>">quyền của nhóm này</a>.';
	$Translation["set user special permissions"] = 'Thiết lập quyền đặc biệt cho người dùng này';
	$Translation["sure continue"] = "Nếu bạn thực hiện bất kỳ thay đổi nào trong diễn đàn này và không lưu lại được nêu ra, họ sẽ bị mất nếu bạn tiếp tục. Bạn có chắc muốn tiếp tục không?";
	$Translation["edit member"] = "Chỉnh sửa thành viên <MEMBERID>" ;
	$Translation["add new member"] = "Thêm thành viên mới";
	$Translation["anonymous guest member"] = "Chú ý! Đây là vô danh (khách) thành viên.";
	$Translation["admin member"] = 'Chú ý! Đây là thành viên quản trị. Bạn không thể thay đổi tên người dùng, mật khẩu hoặc email của thành viên này ở đây, nhưng bạn có thể làm như vậy trong <a href="pageSettings.php">thiết lập quản trị</a> page.';
	$Translation["member username"] = "Tên truy cập thành viên";
	$Translation["check availability"] = "Sẵn sàng kiểm tra";
	$Translation["read only username"] = "Tên người dùng của thành viên khách là chỉ đọc.";
	$Translation["password"] = "Mật khẩu";
	$Translation["change password"] = "Gõ mật khẩu duy nhất nếu bạn muốn thay đổi thành viên này <br>mật khẩu. Nếu không, để trống trường này.";
	$Translation["confirm password"] = "Xác nhận mật khẩu";
	$Translation["email"] = "Email";
	$Translation["approved"] = "Đồng Ý?";
	$Translation["banned"] = "Bị Cấm?";
	$Translation["comments"] = "Bình luận";
	$Translation["back to members"] = "Trở về thành viên";
	$Translation["member added"] = "Thành viên <USERNAME> được thêm thành công";
	
	//pageEditMemberPermissions.php
	$Translation["member permissions saved"] = "Quyền thành viên đã được lưu thành công.";
	$Translation["member permissions reset"] = "Quyền thành viên đã được đặt lại giống như nhóm của mình.";
	$Translation["user table permissions"] = "Quyền bảng cho người dùng <a href='pageEditMember.php?memberID=<MEMBER>' title='Xem chi tiết thành viên'><MEMBERID></a> của nhóm <a href='pageEditGroup.php?groupID=<GROUPID>'  title='Xem chi tiết nhóm và điều khoản'><GROUP></a>";
	$Translation["no member permissions"] = 'Thành viên này hiện không có bất kỳ điều khoản đặc biệt. Danh sách này cho thấy các điều khoản của nhóm mình.';
	$Translation["reset member permissions"] = "Thiết lập lại quyền thành viên";
	$Translation["remove special permissions"] = 'Điều này sẽ loại bỏ tất cả các quyền đặc biệt của thành viên này và ông sẽ có quyền giống như nhóm của mình. Bạn có chắc chắn muốn làm điều đó?';
	
	//pageEditOwnership.php
	$Translation["invalid table"] = "Bảng không hợp lệ.";
	$Translation["invalid primary key"] = "Giá trị khóa chính không hợp lệ";
	$Translation["record not found"] = "Ghi lại không tìm thấy ... nếu nó được nhập khẩu từ bên ngoài, hãy thử gán một chủ sở hữu từ khu vực admin.";
	$Translation["invalid username"] = "Tên sử dụng không hợp lệ";
	$Translation["record not found error"] = "Lỗi: Ghi lại không tìm thấy!";
	$Translation["edit Record Ownership"] = "Sửa Ownership Ghi";
	$Translation["owner group"] = "Nhóm chủ sở hữu";
	$Translation["view all records by group"] = "Xem tất cả hồ sơ theo nhóm này";
	$Translation["owner member"] = "Thành viên chủ sở hữu";
	$Translation["view all records by member"] = "Xem tất cả hồ sơ của thành viên này";
	$Translation["switch record ownership"] = "Nếu bạn muốn chuyển quyền sở hữu của hồ sơ này cho một thành viên của một nhóm khác, bạn phải thay đổi nhóm chủ sở hữu và lưu các thay đổi đầu tiên.";
	$Translation["record created on"] = "Ghi lại tạo ra trên";
	$Translation["record modified on"] = "Ghi modified on";
	$Translation["view all records of table"] = "Xem tất cả hồ sơ của bảng này";
	$Translation["record data"] = "Ghi dữ liệu";
	$Translation["print"] = "In";
	$Translation["could not retrieve field list"] = "Không thể lấy danh sách lĩnh vực từ '<TABLENAME>'";
	$Translation["field name"] = "Tên trường";
	$Translation["value"] = "Giá trị";
	
	//pageHome.php
	$Translation["visitor sign up"] = '<a href="../membership_signup.php" target="_blank">Khách hàng Đăng Ký</a> Bị vô hiệu hóa bởi vì không có nhóm, nơi du khách có thể đăng ký hiện. Để kích hoạt tính năng truy cập đăng ký, thiết lập ít nhất một nhóm để cho phép khách truy cập đăng ký.';
	$Translation["table data without owner"] = 'Bạn có dữ liệu trong một hoặc nhiều bảng mà không có chủ sở hữu. Để chỉ định một nhóm chủ sở hữu đối với dữ liệu này, <a href="pageAssignOwners.php">bấm vào đây</a>.';
	$Translation["membership management homepage"] = "Trang quản lý thành viên";
	$Translation["newest updates"] = "Cập nhật mới nhất";
	$Translation["view record details"] = "Xem chi tiết hồ sơ";
	$Translation["newest entries"] = "Mục nhập mới nhất";
	$Translation["available add-ons"] = "Tiện ích bổ sung có sẵn";
	$Translation["more info"] = "Thêm thông tin";
	$Translation["close"] = "Đóng";
	$Translation["view add-ons"] = "Xem tất cả tiện ích bổ sung";
	$Translation["top members"] = "Thành viên hàng đầu";
	$Translation["edit member details"] = "Chỉnh sửa chi tiết thành viên";
	$Translation["view member records"] = "Xem hồ sơ dữ liệu của thành viên";
	$Translation["records"] = "Hồ sơ";
	$Translation["members stats"] = "Thống kê thành viên";
	$Translation["total groups"] = "Tổng số nhóm";
	$Translation["active members"] = "Thành viên tích cực";
	$Translation["view active members"] = "Xem thành viên đang hoạt động";
	$Translation["members awaiting approval"] = "Thành viên đang chờ phê duyệt";
	$Translation["view members awaiting approval"] = "Xem thành viên đang chờ phê duyệt";
	$Translation["banned members"] = "Thành viên bị cấm";
	$Translation["view banned members"] = "Xem thành viên bị cấm";
	$Translation["total members"] = "Tổng số thành viên";
	$Translation["view all members"] = "Xem tất cả thành viên";
	$Translation["BigProf tweets"]  = "Bài viết của BigProf Software";
	$Translation["follow BigProf"] = "Follow @bigprof";
	$Translation["loading bigprof feed"] = "Loading @bigprof feed ...";
	$Translation["remove feed"] = "Xóa nguồn cấp dữ liệu này";
	
	//pageMail.php
	$Translation["can not send mail"] = "Bạn không thể gửi email hiện. Địa chỉ Email của người gửi cấu hình không hợp lệ. Xin vui lòng <a href='pageSettings.php'>xửa lại địa chỉ Email</a> và sau đỏ thử lại";
	$Translation["all groups"] = "Tất cả các nhóm";
	$Translation["no recipient"] = "Không thể tìm thấy người nhận. Hãy chắc chắn rằng bạn cung cấp một nhận hợp lệ.";
	$Translation["invalid subject line"] = "dòng tiêu đề không hợp lệ.";
	$Translation["no recipient found"] = "Không thể tìm thấy bất kỳ người nhận nào. Vui lòng đảm bảo rằng bạn cung cấp cho người nhận hợp lệ.";
	$Translation["mail queue not saved"] = "Không thể lưu hàng đợi thư. Vui lòng đảm bảo thư mục '<CURRDIR>' có thể ghi (chmod 755 or chmod 777).";
	$Translation["send mail"]  = "Gửi thư bằng thư đến một thành viên / nhóm";
	$Translation["send mail to all members"] = "Bạn đang gửi email cho tất cả thành viên. Điều này có thể mất rất nhiều thời gian và ảnh hưởng đến hiệu suất máy chủ của bạn. Nếu bạn có một số lượng lớn các thành viên, chúng tôi khuyên bạn không nên gửi email cho tất cả các thành viên cùng một lúc";
	$Translation["from"] = "Từ";
	$Translation["change setting"] = "Thay đổi cài đặt này";
	$Translation["to"] = "Đến";
	$Translation["subject"] = "Bắt Buộc";
	$Translation["message"] = "Tin nhắn";
	$Translation["send message"] = "Gửi tin nhắn";
	
	//pagePrintRecord.php
	$Translation["record details"] = "Quản lý thành viên - Ghi chi tiết";
	$Translation['table name'] = "Table: <TABLENAME>";
	
	//pageRebuildFields.php
	$Translation['create or update table'] = "Một nỗ lực để <ACTION> the field <i><FIELD></i> in <i><TABLE></i> bảng đã được thực hiện bằng cách thực hiện truy vấn này: <pre><QUERY></pre> Kết quả được hiển thị bên dưới.";

	$Translation['view or rebuild fields'] = "Xem / xây dựng lại trường";
	$Translation['show deviations only'] = "Chỉ hiển thị độ lệch";
	$Translation['show all fields'] = "Hiển thị tất cả các trường";
	$Translation['compare tables page'] = "Trang này so sánh cấu trúc và lược đồ bảng và trường như được thiết kế trong AppGini với cấu trúc cơ sở dữ liệu thực tế và cho phép bạn sửa bất kỳ sai lệch nào.";
	$Translation['field'] = "Độ rộng";
	$Translation['AppGini definition'] = "Định nghĩa AppGini";
	$Translation['database definition'] = "Định nghĩa hiện tại trong cơ sở dữ liệu";
	$Translation['table name title'] = "<TABLENAME> bảng";
	$Translation['does not exist'] = "Không tồn tại!";
	$Translation['create field'] = "Tạo trường bằng cách chạy truy vấn ADD COLUMN.";
	$Translation['create it'] = "Tạo ra nó";
	$Translation['fix field'] = "Khắc phục trường bằng cách chạy truy vấn ALTER COLUMN để định nghĩa của nó trở thành giống như trong AppGin";
	$Translation['fix it'] = "Sửa";
	$Translation['field update warning'] = "NGUY HIỂM !! Trong một số trường hợp, điều này có thể dẫn đến mất dữ liệu, cắt xén hoặc tham nhũng. Đôi khi có thể là một ý tưởng tốt hơn để cập nhật trường trong AppGini để khớp với trường đó trong cơ sở dữ liệu. Bạn vẫn muốn tiếp tục?";
	$Translation['no deviations found'] = "Không tìm thấy sai lệch nào. Tất cả các trường OK!";
	$Translation['error fields'] = "Tìm thấy <CREATENUM> các trường không tồn tại cần được tạo. <br> Tìm thấy <UPDATENUM> các trường có thể cần được cập nhật.";
	
	//pageRebuildThumbnails.php
	$Translation['rebuild thumbnails'] = "Tạo lại hình thu nhỏ";
	$Translation['thumbnails utility'] = "Sử dụng tiện ích này nếu bạn có một hoặc nhiều trường hình ảnh trong bảng không có hình thu nhỏ hoặc có hình thu nhỏ có kích thước không chính xác.";
	$Translation['rebuild thumbnails of table'] = "Tạo lại hình thu nhỏ của bảng";
	$Translation['rebuild'] = "Tạo lại";
	$Translation['rebuild thumbnails of table_name'] = "Tạo lại hình thu nhỏ của bảng <i> <TABLENAME> </ i> '...";
	$Translation['do not close page message'] = "Không đóng trang này cho đến khi bạn thấy thông báo xác nhận rằng tất cả hình thu nhỏ đã được tạo.";	
	$Translation['rebuild thumbnails status'] = "Trạng thái: vẫn đang tạo lại hình thu nhỏ, vui lòng chờ ...";
	$Translation['building field thumbnails'] =  "Tạo hình thu nhỏ cho trường '<i> <FIELD> </ i>' ...";
	$Translation['done'] = "Kết thúc";
	$Translation['finished status'] = "Tình trạng: Hoàn tất. Bạn có thể đóng trang này ngay bây giờ.";
	
	//pageSender.php
	$Translation['invalid mail queue'] = "Hàng đợi thư không hợp lệ.";
	$Translation['sending message failed'] = " - Gửi tin nhắn tới '<EMAIL>': Không thành công.";
	$Translation['sending message ok'] = " - Gửi tin nhắn đến '<EMAIL>': Ok.";
	$Translation['done!'] = "Done!";
	$Translation['close page'] = "Bạn có thể đóng trang này ngay bây giờ hoặc duyệt đến một số trang khác.";
	$Translation['mail log'] = "Nhật ký thư:";
	
	//pageSettings.php
	$Translation['invalid security token'] = 'Mã thông báo bảo mật không hợp lệ! Vui lòng <a href="pageSettings.php"> tải lại trang </a> và thử lại.';
	$Translation['unique admin username error'] = "Tên người dùng quản trị viên mới đã được một thành viên khác thực hiện. Vui lòng đảm bảo tên người dùng quản trị mới là duy nhất.";	
	$Translation['unique anonymous username error'] = 'Tên người dùng ẩn danh mới đã được một thành viên khác thực hiện. Hãy đảm bảo tên người dùng được cung cấp là duy nhất.';
	$Translation['unique anonymous group name error'] = 'Tên nhóm ẩn danh mới đã được một nhóm khác sử dụng. Vui lòng đảm bảo rằng tên nhóm được cung cấp là duy nhất.';
	$Translation['admin password mismatch'] = 'Mật khẩu quản trị viên và Xác nhận mật khẩu không khớp.';
	$Translation['invalid sender email'] = '"Email người gửi" không hợp lệ.';
	$Translation['errors occurred'] = "Các lỗi sau đây xảy ra:";
	$Translation['go back'] = 'Vui lòng <a href="pageSettings.php" onclick="history.go(-1); return false;"> quay lại </a> để sửa (các) lỗi ở trên và thử lại.';
	$Translation['record updated automatically'] = "Bản ghi được cập nhật tự động vào <DATE>";
	$Translation['admin settings saved'] = "Đã lưu thành công cài đặt quản trị. <br> Quay lại <a href=\"pageSettings.php\"> Cài đặt quản trị </a>.";
	$Translation['admin settings not saved'] = "Cài đặt quản trị KHÔNG được lưu thành công. Lý do không thành công: <ERROR> <br> Quay lại <a href=\"pageSettings.php\" onclick=\"history.go(-1); return false;\"> Cài đặt quản trị </a>.";
	$Translation['show tool tips'] = 'Hiển thị các mẹo của công cụ khi di chuyển chuột qua các tùy chọn';
	$Translation['admin username'] = "Tên người dùng quản trị";
	$Translation['admin password'] = "mật khẩu quản trị";
	$Translation['change admin password'] = "Chỉ nhập mật khẩu nếu bạn muốn thay đổi mật khẩu quản trị viên.";
	$Translation['sender email'] = "Email người gửi";
	$Translation['sender name and email'] = "Tên người gửi và email được sử dụng trong trường 'Tới' khi gửi";
	$Translation['email messages'] = "Gửi cho các nhóm hoặc thành viên.";
	$Translation['admin notifications'] = "Thông báo quản trị";
	$Translation['no email notifications'] = "Không có thông báo email cho quản trị viên.";
	$Translation['member waiting approval'] = "Chỉ thông báo cho quản trị viên khi một thành viên mới đang chờ phê duyệt.";
	$Translation['new sign-ups'] = "Thông báo cho quản trị viên về tất cả các lần đăng ký mới.";
	$Translation['sender name'] = "Tên người gửi";
	$Translation['members custom field 1'] = "Trường tùy chỉnh thành viên 1";
	$Translation['members custom field 2'] = "Trường tùy chỉnh thành viên 2";
	$Translation['members custom field 3'] = "Trường tùy chỉnh thành viên 3";
	$Translation['members custom field 4'] = "Trường tùy chỉnh thành viên 4";
	$Translation['member approval email subject'] = "Phê duyệt thành viên <br> chủ đề email";
	$Translation['member approval email subject control'] = "Khi quản trị viên phê duyệt một thành viên, thành viên được thông báo bằng email <br> mà anh ấy được chấp thuận. Bạn có thể kiểm soát chủ đề của email phê duyệt <br> trong hộp này và nội dung trong hộp bên dưới";
	$Translation['member approval email message'] = "Phê duyệt thành viên <br> tin nhắn email";
	$Translation['MySQL date'] = "Ngày định dạng chuỗi định dạng MySQL";
	$Translation['MySQL reference'] = 'Vui lòng tham khảo trước <a href="http://namittn.blogspot.com/" target="_blank">tham chiếu MySQL</a> cho các định dạng có thể.';
	$Translation['PHP short date'] = "Ngày ngắn PHP<br> chuỗi định dạng";
	$Translation['PHP manual'] = 'Vui lòng tham khảo trước <a href="http://namittn.blogspot.com/" target="_blank">hướng dẫn sử dụng PHP</a> cho các định dạng có thể.'; 
	$Translation['PHP long date'] = "PHP dài ngày <br> định dạng chuỗi";
	$Translation['groups per page'] = "Nhóm trên mỗi trang";
	$Translation['members per page'] = "Số thành viên trên mỗi trang";
	$Translation['records per page'] = "Tài liệu từng trang";
	$Translation['default sign-up mode'] = "Chế độ đăng ký mặc định <br> cho nhóm mới";
	$Translation['no sign-up allowed'] = "Không cho phép đăng ký. Chỉ quản trị viên mới có thể thêm thành viên.";
	$Translation['admin approve members'] = "Đăng ký được phép nhưng quản trị viên phải phê duyệt thành viên.";
	$Translation['automatically approve members'] = "Đăng ký được phép và tự động phê duyệt thành viên.";
	$Translation['anonymous group'] = "Tên của nhóm <br> ẩn danh";
	$Translation['anonymous user name'] = "Tên của người dùng ẩn danh <br>";
	$Translation['hide twitter feed'] = "Ẩn nguồn cấp dữ liệu Twitter trong trang chủ quản trị?";
	$Translation['twitter feed'] = "Nguồn cấp dữ liệu Twitter của chúng tôi giúp bạn thông báo về tin tức mới nhất, tài nguyên hữu ích, bản phát hành mới và nhiều mẹo hữu ích khác của chúng tôi.";
	
	//pageTransferOwnership.php
	$Translation['invalid source member'] = "Đã chọn thành viên nguồn không hợp lệ.";
	$Translation['invalid destination member'] = "Đã chọn thành viên đích không hợp lệ.";
	$Translation['moving member'] = "Di chuyển thành viên '<MEMBERID>' và dữ liệu của anh ấy từ nhóm '<SOURCEGROUP>' sang nhóm '<DESTINATIONGROUP>' ...";
	$Translation['data records transferred'] = "Thành viên '<MEMBERID>' hiện thuộc nhóm '<NEWGROUP>'. Đã chuyển các bản ghi dữ liệu: <DATARECORDS>.";
	$Translation['moving data'] = "Di chuyển dữ liệu của thành viên '<SOURCEMEMBER>' từ nhóm '<SOURCEGROUP>' thành thành viên '<DESTINATIONMEMBER>' từ nhóm '<DESTINATIONGROUP>' ...";
	$Translation['member records status'] = "Thành viên '<SOURCEMEMBER>' của nhóm '<SOURCEGROUP>' có <DATABEFORE> bản ghi dữ liệu. <TRANSFERSTATUS> thành thành viên '<DESTINATIONMEMBER>' của nhóm '<DESTINATIONGROUP>'.";
	$Translation['moving all group members'] = "Di chuyển tất cả thành viên và dữ liệu của nhóm '<SOURCEGROUP>' thành nhóm '<DESTINATIONGROUP>' ...";
	$Translation['failed transferring group members'] = "Lỗi hệ thống. Không có thành viên nào được chuyển từ nhóm '<SOURCEGROUP>' sang '<DESTINATIONGROUP>'.";
	$Translation['group members transferred'] = "Tất cả thành viên của nhóm '<SOURCEGROUP>' hiện thuộc về '<DESTINATIONGROUP>'. ";
	$Translation['failed transfer data records'] = "Tuy nhiên, các bản ghi dữ liệu không chuyển được.";
	$Translation['data records were transferred'] = "<DATABEFORE> bản ghi dữ liệu đã được chuyển.";
	$Translation['moving group data to member'] = "Di chuyển dữ liệu của tất cả các thành viên của nhóm '<SOURCEGROUP>' thành thành viên '<DESTINATIONMEMBER>' từ nhóm '<DESTINATIONGROUP>' ...";
	$Translation['moving group data to member status'] = "<NUMBER> bản ghi đã được chuyển từ nhóm '<SOURCEGROUP>' thành thành viên '<DESTINATIONMEMBER>' của nhóm '<DESTINATIONGROUP>'";
	$Translation['status'] = "TRẠNG THÁI:";
	$Translation['batch transfer link'] = 'Để lặp lại cùng một lần chuyển hàng loạt, bạn có thể <a href= "pageTransferOwnership.php?sourceGroupID=<SOURCEGROUP>&amp;sourceMemberID=<SOURCEMEMBER>&amp;destinationGroupID=<DESTINATIONGROUP>&amp;destinationMemberID=<DESTINATIONMEMBER>&amp;moveMembers=<MOVEMEMBERS>">bookmark or copy this link</a>.';
	$Translation['ownership batch transfer'] = "Chuyển quyền sở hữu hàng loạt";
	$Translation['step 1'] = "BƯỚC 1:";
	$Translation['batch transfer wizard'] = "Trình hướng dẫn chuyển hàng loạt cho phép bạn chuyển các bản ghi dữ liệu của một hoặc tất cả thành viên của một nhóm (<i> nhóm nguồn </ i>) đến thành viên của một nhóm khác (<i> thành viên đích </ i> của < i> nhóm đích </ i>)";
	$Translation['source group'] = "Nhóm nguồn";
	$Translation['update'] = "Cập nhật";
	$Translation['next step'] = "Bước tiếp theo";
	$Translation['group statistics'] = "Nhóm này có các thành viên <MEMBERS> và <RECORDS> bản ghi dữ liệu.";
	$Translation['step 2'] = "BƯỚC 2:";
	$Translation['source member message'] = "Thành viên nguồn có thể là một thành viên hoặc tất cả thành viên của nhóm nguồn.";
	$Translation['source member'] = "Thành viên nguồn";
	$Translation['all group members'] = "Tất cả thành viên của '<GROUPNAME>'";
	$Translation['member statistics'] = "Thành viên này có <RECORDS> hồ sơ dữ liệu.";
	$Translation['step 3'] = "BƯỚC 3:";
	$Translation['destination group message'] = "Nhóm đích có thể giống hoặc khác với nhóm nguồn. Chỉ những nhóm có thành viên mới được liệt kê dưới đây.";
	$Translation['destination group'] = "Nhóm đích";
	$Translation['step 4'] = "BƯỚC 4:";
	$Translation['destination member message'] = "Thành viên đích sẽ là chủ sở hữu mới của các bản ghi dữ liệu của thành viên nguồn.";
	$Translation['destination member'] = "Thành viên điểm đến";
	$Translation['begin transfer'] = "Bắt đầu chuyển";	
	$Translation['move records'] = "Bạn có thể di chuyển các bản ghi từ (các) thành viên nguồn tới một thành viên trong nhóm đích, hoặc di chuyển (các) thành viên nguồn, cùng với các bản ghi dữ liệu của chúng đến nhóm đích.";
	$Translation['move data records to member'] = "Di chuyển hồ sơ dữ liệu cho thành viên này:";
	$Translation['move source member to group'] = "Di chuyển (các) thành viên nguồn và tất cả các bản ghi dữ liệu của người đó vào nhóm '<GROUPNAME>'.";
	
	//pageUploadCSV.php
	$Translation['file not found error'] = "Lỗi: Không tìm thấy tệp '<FILENAME>'.";
	$Translation['preview and confirm CSV data'] = "Xem trước dữ liệu CSV rồi xác nhận để nhập dữ liệu ...";
	$Translation['display csv file rows'] = "Hiển thị 10 hàng đầu tiên của tệp CSV ...";
	$Translation['change CSV settings'] = 'Thay đổi cài đặt CSV';
	$Translation['import CSV data'] = 'Xác nhận và nhập dữ liệu CSV & gt;';
	$Translation['apply CSV settings'] = 'Áp dụng cài đặt CSV';
	$Translation['importing CSV data'] = 'Đang nhập dữ liệu CSV ...';
	$Translation['start at estimated record'] = "Bắt đầu từ bản ghi <RECORDNUMBER> trong tổng số <RECORDS> tổng số bản ghi ước tính ...";
	$Translation['table backed up'] = "Bảng '<TABLE>' được sao lưu thành '<TABLENAME>'.";
	$Translation['table backup not done'] = "Bảng '<TABLE>' trống, do đó không sao lưu được thực hiện.";
	$Translation['importing batch'] = 'Nhập lô <BATCH> của <BATCHNUM>: ';
	$Translation['ok'] = 'Ok';
	$Translation['records inserted or updated successfully'] = "<RECORDS> bản ghi được chèn / cập nhật sau <SECONDS> giây.";
	$Translation['mission accomplished'] = "Nhiệm vụ đã hoàn thành!";
	$Translation['assign a records owner'] = "Chỉ định chủ sở hữu cho các bản ghi đã nhập & gt;";
	$Translation['please wait and do not close'] = "Vui lòng đợi và không đóng trang này ...";
	$Translation['hide advanced options'] = "Ẩn các tùy chọn nâng cao";
	$Translation['show advanced options'] = "Hiển thị tùy chọn nâng cao";
	$Translation['import CSV to database'] = "Nhập tệp CSV vào cơ sở dữ liệu";
	$Translation['import CSV to database page'] = "Trang này cho phép bạn tải lên tệp CSV (ví dụ: tệp được tạo từ MS Excel) và nhập tệp đó vào một trong các bảng của cơ sở dữ liệu. Điều này làm cho việc lưu trữ dữ liệu từ các nguồn khác trở nên dễ dàng như vậy bằng cách nhập thủ công mọi bản ghi.";
	$Translation['populate table from CSV'] = "Đây là bảng mà bạn muốn điền dữ liệu từ tệp CSV.";
	$Translation['CSV file'] = "Tệp CSV";
	$Translation['preview CSV data'] = "Xem trước dữ liệu CSV & gt;";
	$Translation['no table name provided'] = "Không có tên bảng nào được cung cấp.";
	$Translation['can not open CSV'] = "Không thể mở tệp csv '<FILENAME>'.";
	$Translation['empty CSV file'] = "Tệp csv '<FILENAME>' trống.";		
	$Translation['no CSV file data'] = "Tệp csv '<FILENAME>' không có dữ liệu để đọc." ;
	$Translation['field separator'] = "Trình tách trường";
	$Translation['default comma'] = "Giá trị mặc định là dấu phẩy (,)";
	$Translation['field delimiter'] = "Dấu phân tách trường";
	$Translation['default double-quote'] = 'Giá trị mặc định là dấu ngoặc kép (")';
	$Translation['maximum characters per line'] = "Số ký tự tối đa trên mỗi dòng";
	$Translation['trouble importing CSV'] = "Nếu bạn gặp sự cố khi nhập tệp CSV, hãy thử tăng giá trị này.";
	$Translation['ignore lines number'] = "Số dòng để bỏ qua";
	$Translation['skip lines number'] = "Thay đổi giá trị này nếu bạn muốn bỏ qua một số dòng cụ thể trong tệp CSV.";
	$Translation['first line field names'] = "Dòng đầu tiên của tệp chứa tên trường";
	$Translation['field names must match'] = "Tên trường phải <b> chính xác </ b> khớp với tên trường trong cơ sở dữ liệu.";
	$Translation['update table records'] = "Cập nhật bản ghi bảng nếu giá trị khóa chính của chúng khớp với các giá trị trong tệp CSV.";
	$Translation['ignore CSV table records'] = "Nếu không được chọn, các bản ghi trong tệp CSV có cùng giá trị khóa chính như các giá trị trong bảng <b> sẽ bị bỏ qua </ b>";
	$Translation['back up the table'] = "Sao lưu bảng trước khi nhập dữ liệu CSV vào đó.";
	
	//pageViewGroups.php
	$Translation['no matching results found'] = "Không tìm thấy kết quả phù hợp.";
	$Translation['search groups'] = "Tìm kiếm nhóm";
	$Translation['find'] = "Tìm kiếm";
	$Translation['reset'] = "Làm mới";
	$Translation['members count'] = "Số lượng thành viên";
	$Translation['Edit group'] = "Chỉnh sửa nhóm";
	$Translation['confirm delete group'] = "Bạn có chắc chắn muốn xóa hoàn toàn nhóm này không?";
	$Translation['delete group'] = "Xóa nhóm";
	$Translation['view group records'] = "Xem hồ sơ nhóm";
	$Translation['view group members'] = "Xem thành viên nhóm";
	$Translation['send message to group'] = "Gửi tin nhắn cho nhóm";
	$Translation['previous'] = "Trước";
	$Translation['displaying groups'] = "Hiển thị các nhóm <GROUPNUM1> đến <GROUPNUM2> trong số <GROUPS>";
	$Translation['next'] = "Kế tiếp";
	$Translation['key'] = "Chìa khóa:";	
	$Translation['edit group details'] = "Chỉnh sửa chi tiết nhóm và quyền.";
	$Translation['add member to group'] = "Thêm thành viên mới vào nhóm.";
	$Translation['view data records'] = "Xem tất cả các bản ghi dữ liệu được nhập bởi các thành viên của nhóm.";
	$Translation['list group members'] = "Liệt kê tất cả các thành viên của một nhóm.";
	$Translation['send email to all members'] = "Gửi một email cho tất cả các thành viên của một nhóm.";
	
	//pageViewMembers.php
	$Translation['search members'] = "Tìm kiếm thành viên <SEARCH> trong <HTMLSELECT>";
	$Translation['all fields'] = "Tất cả các trường";
	$Translation['any'] = "Bất kì";
	$Translation['waiting approval'] = "Đang chờ phê duyệt";
	$Translation['active'] = "Hoạt động";
	$Translation['Banned'] = "Bị cấm";
	$Translation['username'] = "Tên người dùng";
	$Translation['sign up date'] = "Ngày đăng ký";
	$Translation['Status'] = "Trạng thái";
	$Translation['Edit member'] = "Chỉnh sửa thành viên";	
	$Translation['sure delete user'] = "Bạn có chắc chắn muốn xóa người dùng \ '<USERNAME> \' không?";
	$Translation['delete member'] = "Xóa thành viên";
	$Translation["approve this member"] = "Phê duyệt thành viên này";
	$Translation["unban this member"] = "Bỏ cấm thành viên này";
	$Translation["ban this member"] = "Cấm thành viên này";
	$Translation["View member records"] = "Xem hồ sơ của thành viên";
	$Translation["send message to member"] = "Gửi tin nhắn cho thành viên";
	$Translation['displaying members'] = "Hiển thị thành viên <MEMBERNUM1> đến <MEMBERNUM2> trong số <MEMBERS>";
	$Translation['activate member'] = "Kích hoạt thành viên mới / bị cấm.";
	$Translation['ban member'] = "Cấm (tạm ngừng) thành viên.";
	$Translation['view entered member records'] = "Xem tất cả hồ sơ dữ liệu được nhập bởi thành viên.";
	$Translation['send email to member'] = "Gửi một email cho thành viên.";
	
	//pageViewRecords.php
	$Translation['data records'] = "Hồ sơ dữ liệu";
	$Translation['show records'] = "Hiển thị hồ sơ từ";
	$Translation['all tables'] = "Tất cả các bảng";
	$Translation['sort records'] = "Sắp xếp hồ sơ theo";
	$Translation['date created'] = "Ngày tạo";
	$Translation['date modified'] = "Ngày sửa đổi";
	$Translation['newer first'] = "Mới hơn trước";
	$Translation['older first'] = "Cũ hơn trước";
	$Translation['created'] = "Tạo";
	$Translation['modified'] = "Đã sửa đổi";
	$Translation['data'] = "Dữ liệu";
	$Translation['change record ownership'] = "Thay đổi quyền sở hữu bản ghi này";
	$Translation['sure delete record'] = "Bạn có chắc chắn muốn xóa bản ghi này không?";
	$Translation['delete record'] = "Xóa bản ghi này";
	$Translation['displaying records'] = "Hiển thị bản ghi <RECORDNUM1> tới <RECORDNUM2> trong tổng số <RECORDS>";

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Chế độ chế độ bị sẵn sàng! Bạn có thể tắt nó từ trang chủ admin.';
	$Translation['maintenance mode message'] = 'Lỗi chế độ thông báo';
	$Translation['maintenance mode'] = 'Chế độ bảo trì';
	$Translation['OFF'] = 'OFF';
	$Translation['ON'] = 'ON';
	$Translation['enable maintenance mode?'] = 'Bạn có chắc chắn muốn bật chế độ bảo trì không? Chỉ người dùng quản trị mới có thể truy cập trang web ở chế độ này!';
	$Translation['disable maintenance mode?'] = 'Bạn có chắc chắn muốn tắt chế độ bảo trì không? Tất cả người dùng sẽ có thể truy cập trang web!';
	
	/* Added in AppGini 5.60 */
	$Translation['csv file upload error'] = 'Đã xảy ra lỗi trong khi xử lý tệp CSV được yêu cầu.';
	$Translation['back and retry'] = 'Quay lại và thử lại';
	$Translation['upload or choose csv file'] = 'Tải lên tệp CSV hoặc mở tệp hiện có';
	$Translation['choose csv upload'] = 'Chọn tệp CSV để tải lên';
	$Translation['no file chosen yet'] = 'Chưa có tệp nào được chọn';
	$Translation['start upload'] = 'Bắt đầu tải lên';
	$Translation['select a table'] = 'Chọn một bảng';
	$Translation['error reading csv data'] = 'Đã xảy ra lỗi khi đọc dữ liệu CSV. Thử đặt lại / điều chỉnh cài đặt CSV.';
	$Translation['belongs to'] = 'Thuộc về';
	$Translation['skip column'] = 'Bỏ qua cột này';
	$Translation['connection failed retrying'] = 'Kết nối thất bại. Đang thử lại sau <SECONDS> giây ...';
	$Translation['connection failed timeout'] = 'Kết nối quá hạn. Thử lại sau.';
	$Translation['sure delete csv'] = 'Bạn có chắc chắn muốn xóa tệp CSV [CSVFILE] khỏi máy chủ không?';
	$Translation['invalid csv file selected'] = 'Đã chọn tệp không hợp lệ. Phải là tệp CSV.';
	$Translation['couldnt delete csv file'] = 'Không thể xóa tệp CSV này.';
	$Translation['error backing up table'] = 'Lỗi: Không thể sao lưu bảng <TABLE>.';
	$Translation['no columns selected'] = 'Vui lòng chọn ít nhất một cột để nhập và đảm bảo mỗi cột được chọn thuộc về một trường UNIQUE.';
	$Translation['csrf token expired or invalid'] = 'Rất tiếc! Đã xảy ra sự cố với trang này. Vui lòng quay lại và thử lại.';
	$Translation['back to groups'] = 'Quay lại nhóm';
	$Translation['member updated'] = "Thành viên <USERNAME> được cập nhật thành công";
	$Translation['fix errors before submitting'] = 'Vui lòng sửa các lỗi được đánh dấu trước khi gửi trang!';

	/* Added in AppGini 5.62 */
	$Translation['mail_function'] = 'Phương thức gửi email';
	$Translation['smtp_server'] = 'Máy chủ SMTP';
	$Translation['smtp_encryption'] = 'Mã hóa SMTP';
	$Translation['smtp_port'] = 'Cổng SMTP';
	$Translation['smtp_port_hint'] = 'Các giá trị điển hình là 25 (đối với SMTP không mã hóa), 465 (được sử dụng trong nhiều trường hợp với mã hóa SSL) hoặc 587 (điển hình với mã hóa TLS)';
	$Translation['smtp_user'] = 'Tên người dùng SMTP';
	$Translation['smtp_pass'] = 'Mật khẩu SMTP';
	$Translation['configure mail settings'] = 'Định cấu hình cài đặt thư';
	$Translation['display debugging info'] = 'Hiển thị thông tin gỡ lỗi';
	$Translation['debugging info hint'] = 'Thông tin gỡ lỗi rất hữu ích nếu bạn gặp sự cố khi gửi email thông qua máy chủ SMTP được định cấu hình';

	/* Added in AppGini 5.70 */
	$Translation['create backup file'] = 'Tạo tệp sao lưu';
	$Translation['database backups'] = 'Sao lưu cơ sở dữ liệu';
	$Translation['no backups found'] = 'Không tìm thấy bản sao lưu nào. Bạn có thể tạo bản sao lưu mới bằng cách nhấp vào nút "Tạo tệp sao lưu".';
	$Translation['available backups'] = 'Bản sao lưu có sẵn';
	$Translation['restore backup'] = 'Khôi phục';
	$Translation['delete backup'] = 'Xóa';
	$Translation['backup restored'] = 'Đã khôi phục sao lưu thành công.';
	$Translation['backup deleted'] = 'Đã xóa sao lưu thành công.';
	$Translation['restore error'] = 'Đã xảy ra lỗi trong khi khôi phục sao lưu.';
	$Translation['backup delete error'] = 'Đã xảy ra lỗi khi xóa bản sao lưu.';
	$Translation['confirm delete backup'] = 'Bạn có chắc chắn muốn xóa tệp sao lưu này không?';
	$Translation['confirm restore'] = 'Khôi phục cơ sở dữ liệu của bạn từ một tệp sao lưu sẽ OVERWRITE tất cả dữ liệu hiện có VÀ người dùng / mật khẩu, hoàn nguyên tất cả trạng thái khi sao lưu được thực hiện. \ N \ nTrong quá trình khôi phục, chế độ bảo trì sẽ được kích hoạt để ngăn người dùng sửa đổi cơ sở dữ liệu và sẽ bị tắt sau khi quá trình khôi phục hoàn tất. \ n \ nBạn có chắc chắn muốn tiếp tục không';
	$Translation['confirm backup'] = 'Trong quá trình sao lưu, chế độ bảo trì sẽ được kích hoạt để ngăn người dùng sửa đổi cơ sở dữ liệu và sẽ bị tắt sau khi sao lưu xong. \ N \ nBạn có chắc chắn muốn tiếp tục không?';
	$Translation['cant create backup folder'] = 'Lỗi: Không thể tạo hoặc ghi vào thư mục quản trị / sao lưu. Vui lòng kiểm tra quyền và quyền sở hữu thư mục của bạn hoặc liên hệ với quản trị viên máy chủ của bạn để được trợ giúp.';
	$Translation['fix all'] = 'Sửa tất cả các lỗi';
	$Translation['backup before fix'] = 'Bạn nên tạo bản sao lưu cơ sở dữ liệu trước khi cố thực hiện bất kỳ sửa lỗi nào ở đây.';
	$Translation['about backups'] = 'Sao lưu được thực hiện bằng cách sử dụng công cụ dòng lệnh mysqldump. Nếu không có bản sao lưu nào được tạo, có thể do máy chủ web không được phép chạy mysqldump.';

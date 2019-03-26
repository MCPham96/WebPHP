<?php

	// IMPORTANT:
	// ==========
	// When translating, only translate the strings that are
	// TO THE RIGHT OF the equal sign (=).
	//
	// Do NOT translate the strings between square brackets ([])
	//
	// Also, leave the text between < and > untranslated.
	//
	// =====================================================
	// PLEASE NOTE:
	// ============
	// When a new version of AppGini is released, new strings
	// might be added to the "defaultLang.php" file. To translate
	// them, simply copy them to this file ("language.php") and 
	// translate them here. Do NOT translate them directly in 
	// the "defaultLang.php" file.
	// =====================================================
		


	// datalist.php
	$Translation['quick search'] = "Tìm kiếm nhanh";
	$Translation['records x to y of z'] = "Bản ghi <FirstRecord> đến <LastRecord> của <RecordCount>";
	$Translation['filters'] = "Bộ lọc";
	$Translation['filter'] = "Bộ lọc";
	$Translation['filtered field'] = "Trường được lọc";
	$Translation['comparison operator'] = "Toán tử so sánh";
	$Translation['comparison value'] = "Giá trị so sánh";
	$Translation['and'] = "Và";
	$Translation['or'] = "Hoặc";
	$Translation['equal to'] = "Tương đương với";
	$Translation['not equal to'] = "Không bằng";
	$Translation['greater than'] = "Lớn hơn";
	$Translation['greater than or equal to'] = "Lớn hơn hoặc Bằng";
	$Translation['less than'] = "Ít hơn";
	$Translation['less than or equal to'] = "Ít hơn hoặc Bằng";
	$Translation['like'] = "Like";
	$Translation['not like'] = "Disklike";
	$Translation['is empty'] = "Trống";
	$Translation['is not empty'] = "Không có sản phẩm nào";
	$Translation['apply filters'] = "Áp dụng các bộ lọc";
	$Translation['save filters'] = "Lưu và Áp dụng bộ lọc";
	$Translation['saved filters title'] = "Mã HTML cho các bộ lọc được áp dụng";
	$Translation['saved filters instructions'] = "Sao chép mã bên dưới và dán mã vào tệp HTML để lưu bộ lọc bạn vừa xác định để bạn có thể quay lại vào bất kỳ lúc nào trong tương lai mà không phải xác định lại bộ lọc đó. Bạn có thể lưu mã HTML này trên máy tính của mình hoặc trên bất kỳ máy chủ nào và truy cập chế độ xem bảng được lọc trước qua nó.";
	$Translation['hide code'] = "Ẩn mã này";
	$Translation['printer friendly view'] = "Chế độ xem thân thiện với máy in";
	$Translation['save as csv'] = "Tải xuống dưới dạng tệp csv (giá trị được phân tách bằng dấu phẩy)";
	$Translation['edit filters'] = "Chỉnh sửa bộ lọc";
	$Translation['clear filters'] = "Xóa bộ lọc";
	$Translation['order by'] = 'Đặt bởi';
	$Translation['go to page'] = 'Đi đến trang:';
	$Translation['none'] = 'Không có ai đặt';
	$Translation['Select all records'] = 'Chọn tất cả bản ghi';
	$Translation['With selected records'] = 'Các bản ghi đã chọn';
	$Translation['Print Preview Detail View'] = 'Xem chi tiết trước khi in';
	$Translation['Print Preview Table View'] = 'Xem bảng trước khi in';
	$Translation['Print'] = 'In';
	$Translation['Cancel Printing'] = 'Hủy In';
	$Translation['Cancel Selection'] = 'Hủy lựa chọn';
	$Translation['Maximum records allowed to enable this feature is'] = 'Hồ sơ tối đa được phép bật tính năng này là';
	$Translation['No matches found!'] = 'Lọc kết quả tìm thấy!';
	$Translation['Start typing to get suggestions'] = 'Bắt đầu nhập để nhận đề xuất.';

	// _dml.php
	$Translation['are you sure?'] = 'Bạn có chắc chắn muốn xóa bản ghi này không?';
	$Translation['add new record'] = 'Thêm bản ghi mới';
	$Translation['update record'] = 'Cập nhật bản ghi';
	$Translation['delete record'] = 'Xóa bản ghi';
	$Translation['deselect record'] = 'Bỏ chọn bản ghi';
	$Translation["couldn't delete"] = 'Không thể xóa bản ghi do sự hiện diện của <RelatedRecords> (các) bản ghi có liên quan trong bảng [<TableName>]';
	$Translation['confirm delete'] = 'Hồ sơ này có <RelatedRecords> hồ sơ liên quan (s) trong bảng [<TableName>]. Bạn vẫn muốn xóa nó? <Xóa> & nbsp; <Hủy>';
	$Translation['yes'] = 'Đồng Ý';
	$Translation['no'] = 'Không';
	$Translation['pkfield empty'] = ' Trường này là trường khóa chính và không được để trống.';
	$Translation['upload image'] = 'Tải lên tệp mới ';
	$Translation['select image'] = 'Chọn hình ảnh ';
	$Translation['remove image'] = 'Xóa tệp';
	$Translation['month names'] = 'Tháng 1, Tháng 2, Tháng 3, Tháng 4, Tháng 5, Tháng 6, Tháng 7, Tháng 9, Tháng 10, Tháng 11, Tháng 12';
	$Translation['field not null'] = 'Bạn không thể để trống trường này.';
	$Translation['*'] = '*';
	$Translation['today'] = 'Hôm nay';
	$Translation['Hold CTRL key to select multiple items from the above list.'] = 'Giữ phím CTRL để chọn nhiều mục từ danh sách ở trên.';
	$Translation['Save New'] = 'Lưu mới';
	$Translation['Save As Copy'] = 'Lưu dưới dạng bản sao';
	$Translation['Deselect'] = 'Hủy bỏ';
	$Translation['Add New'] = 'Thêm mới';
	$Translation['Delete'] = 'Xóa';
	$Translation['Cancel'] = 'Hủy bỏ';
	$Translation['Print Preview'] = 'Xem thử bản in';
	$Translation['Save Changes'] = 'Lưu thay đổi';
	$Translation['CSV'] = 'Lưu CSV';
	$Translation['Reset Filters'] = 'Hiển thị tất cả';
	$Translation['Find It'] = 'Tìm kiếm';
	$Translation['Previous'] = 'Trước';
	$Translation['Next'] = 'Kế tiếp';
	$Translation['Back'] = 'Trở lại';

	// lib.php
	$Translation['select a table'] = "Danh Mục ...";
	$Translation['homepage'] = "Trang Chủ";
	$Translation['error:'] = "Lỗi:";
	$Translation['sql error:'] = "Lỗi SQL:";
	$Translation['query:'] = "Truy vấn:";
	$Translation['< back'] = "Trở lại";
	$Translation["if you haven't set up"] = "Nếu bạn chưa thiết lập cơ sở dữ liệu, bạn có thể làm như vậy bằng cách nhấp vào <a href='setup.php'> tại đây </a>.";
	$Translation['file too large']="Lỗi: Tệp bạn đã tải lên vượt quá kích thước tối đa cho phép của <MaxSize> KB";
	$Translation['invalid file type']="Lỗi: Loại tệp này không được phép. Chỉ có thể tải lên các tệp <FileTypes>";

	// setup.php
	$Translation['goto start page'] = "Quay lại trang bắt đầu";
	$Translation['no db connection'] = "Không thể thiết lập kết nối cơ sở dữ liệu.";
	$Translation['no db name'] = "Không thể truy cập cơ sở dữ liệu có tên '<DBName>' trên máy chủ này.";
	$Translation['provide connection data'] = "Vui lòng cung cấp dữ liệu sau để kết nối với cơ sở dữ liệu:";
	$Translation['mysql server'] = "Máy chủ MySQL (máy chủ)";
	$Translation['mysql username'] = "Tên người dùng MySQL";
	$Translation['mysql password'] = "Mật khẩu MySQL";
	$Translation['mysql db'] = "Tên cơ sở dữ liệu";
	$Translation['connect'] = "Kết nối";
	$Translation['couldnt save config'] = "Không thể lưu dữ liệu kết nối vào 'config.php'. <br /> Hãy đảm bảo rằng thư mục: <br /> '".dirname(__FILE__)."'<br /> có thể ghi được (chmod 775 hoặc chmod 777).";
	$Translation['setup performed'] = "Thiết lập đã được thực hiện trên";
	$Translation['delete md5'] = "Nếu bạn muốn buộc thiết lập chạy lại, trước tiên bạn nên xóa tệp 'setup.md5' khỏi thư mục này.";
	$Translation['table exists'] = "Bảng <b> <TableName> </ b> tồn tại, chứa các bản ghi <NumRecords>";
	$Translation['failed'] = "Thất bại";
	$Translation['ok'] = "Ok";
	$Translation['mysql said'] = "MySQL nói:";
	$Translation['table uptodate'] = "Bảng được cập nhật.";
	$Translation['couldnt count'] = "Không thể đếm các bản ghi của bảng <b> <TableName> </ b>";
	$Translation['creating table'] = "Đang tạo bảng <b> <TableName> </ b> ... ";

	// separateDVTV.php
	$Translation['please wait'] = "Vui lòng chờ";

	// _view.php
	$Translation['tableAccessDenied']="Lấy làm tiếc! Bạn không được phép truy cập bảng này. Vui lòng liên hệ với quản trị viên.";

	// incCommon.php
	$Translation['not signed in']="Bạn chưa đăng nhập";
	$Translation['sign in']="Đăng nhập";
	$Translation['signed as']="Đăng ký với tư cách là: ";
	$Translation['sign out']="Đăng Xuất";
	$Translation['admin setup needed']="Thiết lập quản trị không được thực hiện. Vui lòng đăng nhập vào <a href=admin/> bảng điều khiển quản trị </a> để thực hiện thiết lập.";
	$Translation['db setup needed']="Thiết lập chương trình chưa được thực hiện. Vui lòng đăng nhập vào <a href=setup.php> trang thiết lập </a> trước tiên";
	$Translation['new record saved']="Bản ghi mới đã được lưu thành công.";
	$Translation['record updated']="Các thay đổi đã được lưu thành công.";

	// index.php
	$Translation['admin area']="Khu vực quản trị";
	$Translation['login failed']="Nỗ lực đăng nhập trước của bạn không thành công. Thử lại.";
	$Translation['sign in here']="Đăng nhập tại đây";
	$Translation['remember me']="Lưu Thông Tin";
	$Translation['username']="Tên đăng nhập";
	$Translation['password']="Mật khẩu";
	$Translation['go to signup']="Bạn không có tên người dùng? <br /> & nbsp; <a href=membership_signup.php> Đăng ký tại đây </a>";
	$Translation['forgot password']="Quên mật khẩu? <a href=membership_passwordReset.php> Nhấp vào đây </a>";
	$Translation['browse as guest']="<a href=index.php> Tiếp tục duyệt với tư cách khách </a>";
	$Translation['no table access']="Bạn không có đủ quyền để truy cập bất kỳ trang nào tại đây. Vui lòng đăng nhập trước.";
	$Translation['signup']="Tạo tài khoản";

	// checkMemberID.php
	$Translation['user already exists']="Tên người dùng '<MemberID>' đã tồn tại. Hãy thử một tên người dùng khác.";
	$Translation['user available']="Tên người dùng '<MemberID>' có sẵn và bạn có thể lấy nó.";
	$Translation['empty user']="Vui lòng nhập tên người dùng vào hộp trước rồi nhấp vào 'Kiểm tra tính khả dụng'.";

	// membership_thankyou.php
	$Translation['thanks']="Cảm ơn bạn đã đăng ký!";
	$Translation['sign in no approval']="Nếu bạn đã chọn nhóm không yêu cầu phê duyệt quản trị viên, bạn có thể đăng nhập ngay bây giờ <a href=index.php?signIn=1> tại đây </a>.";
	$Translation['sign in wait approval']="Nếu bạn đã chọn một nhóm yêu cầu phê duyệt quản trị viên, vui lòng chờ một email xác nhận sự chấp thuận của bạn.";

	// membership_signup.php
	$Translation['username empty']="Bạn phải cung cấp tên người dùng. Vui lòng quay lại và nhập tên người dùng";
	$Translation['password invalid']="Bạn phải cung cấp mật khẩu gồm 4 ký tự trở lên, không có dấu cách. Vui lòng quay lại và nhập mật khẩu hợp lệ";
	$Translation['password no match']="Mật khẩu không khớp. Vui lòng quay lại và sửa lại mật khẩu";
	$Translation['username exists']="Tên này đã có người dùng. Vui lòng quay lại và chọn tên người dùng khác.";
	$Translation['email invalid']="Địa chỉ email không hợp lệ. Vui lòng quay lại và sửa địa chỉ email của bạn.";
	$Translation['group invalid']="Nhóm không hợp lệ. Vui lòng quay lại và sửa nhóm lựa chọn.";
	$Translation['sign up here']="Đăng ký tại đây!";
	$Translation['registered? sign in']="Đã đăng ký? <a href=index.php?signIn=1> Đăng nhập tại đây </a>.";
	$Translation['sign up disabled']="Lấy làm tiếc! Đăng ký tạm thời bị vô hiệu hóa bởi quản trị viên. Thử lại sau.";
	$Translation['check availability']="Kiểm tra xem tên người dùng này có khả dụng không";
	$Translation['confirm password']="Xác nhận mật khẩu";
	$Translation['email']="Địa chỉ Email";
	$Translation['group']="Nhóm";
	$Translation['groups *']="Nếu bạn chọn đăng ký một nhóm được đánh dấu sao (*), bạn sẽ không thể đăng nhập cho đến khi quản trị viên phê duyệt bạn. Bạn sẽ nhận được email khi bạn được chấp thuận.";
	$Translation['sign up']="Tạo Tài Khoản";

	// membership_passwordReset.php
	$Translation['password reset']="Trang Đặt lại Mật khẩu";
	$Translation['password reset details']="Nhập tên người dùng hoặc địa chỉ email của bạn dưới đây. Sau đó, chúng tôi sẽ gửi một liên kết đặc biệt tới email của bạn. Sau khi bạn nhấp vào liên kết đó, bạn sẽ được yêu cầu nhập mật khẩu mới.";
	$Translation['password reset subject']="Hướng dẫn đặt lại mật khẩu";
	$Translation['password reset message']="Kính gửi thành viên, \ n Nếu bạn đã yêu cầu đặt lại / thay đổi mật khẩu, vui lòng nhấp vào liên kết này: \ n <ResetLink> \ n \ n Nếu bạn không yêu cầu đặt lại mật khẩu / thay đổi, vui lòng bỏ qua thông báo này. \ n \ n Kính trọng.";
	$Translation['password reset ready']="Một email có hướng dẫn đặt lại mật khẩu đã được gửi đến địa chỉ email đã đăng ký của bạn. Vui lòng làm theo hướng dẫn trong thông báo email đó. <br /> <br /> Nếu bạn không nhận được email này trong vòng 5 phút, hãy thử đặt lại mật khẩu của bạn một lần nữa và đảm bảo bạn nhập đúng tên người dùng hoặc địa chỉ email.";
	$Translation['password reset invalid']="Sai username hoặc password. <a href=membership_passwordReset.php> Hãy thử lại </a> hoặc truy cập <a href=index.php> quay lại trang chủ </a>.";
	$Translation['password change']="Trang thay đổi Mật khẩu";
	$Translation['new password']="Mật khẩu mới";
	$Translation['password reset done']="Mật khẩu của bạn đã được thay đổi thành công. Bạn có thể <a href=index.php?signOut=1> đăng nhập bằng mật khẩu mới tại đây </a>.";

    $Translation['Loading ...']='Loading ...';
    $Translation['No records found']='Không tìm thấy dữ liệu';
    $Translation['You can add children records after saving the main record first']='Bạn có thể thêm bản ghi con sau khi lưu bản ghi chính trước';

    $Translation['ascending'] = 'Tăng dần';
    $Translation['descending'] = 'Giảm dần';
    $Translation['then by'] = 'Sau đó bởi';

	// membership_profile
	$Translation['Legend'] = 'Huyền thoại';
	$Translation['Table'] = 'Bảng';
	$Translation['Edit'] = 'Sửa';
	$Translation['View'] = 'Lượt xem';
	$Translation['Only your own records'] = 'Chỉ bản ghi của riêng bạn';
	$Translation['All records owned by your group'] = 'Tất cả hồ sơ thuộc sở hữu của nhóm của bạn';
	$Translation['All records'] = 'Tất cả hồ sơ';
	$Translation['Not allowed'] = 'Không cho phép';
	$Translation['Your info'] = 'Thông tin của bạn';
	$Translation['Hello user'] = 'Xin chào %s!';
	$Translation['Your access permissions'] = 'Quyền truy cập của bạn';
	$Translation['Update profile'] = 'Cập nhật hồ sơ';
	$Translation['Update password'] = 'Cập nhật mật khẩu';
	$Translation['Change your password'] = 'Chỉnh sửa mật khẩu của bạn';
	$Translation['Old password'] = 'Mật khẩu cũ';
	$Translation['Password strength: weak'] = 'Độ mạnh của mật khẩu: Yếu';
	$Translation['Password strength: good'] = 'Độ mạnh của mật khẩu: Bình Thường';
	$Translation['Password strength: strong'] = 'Độ mạnh của mật khẩu: Mạnh';
	$Translation['Wrong password'] = 'Sai mật khẩu';
	$Translation['Your profile was updated successfully'] = 'Hồ sơ của bạn đã được cập nhật thành công';
	$Translation['Your password was changed successfully'] = 'Mật khẩu của bạn đã được thay đổi thành công';
	$Translation['Your IP address'] = 'Địa chỉ IP của bạn';
	
	/* Added in AppGini 4.90 */
	$Translation['Records to display'] = 'Hồ sơ để hiển thị';
	
	/* Added in AppGini 5.10 */
	$Translation['Setup Data'] = 'Thiết lập dữ liệu';
	$Translation['Database Information'] = 'Thông tin cơ sở dữ liệu';
	$Translation['Admin Information'] = 'Thông tin quản trị';
	$Translation['setup intro 1'] = 'Có vẻ như không phải là tệp cấu hình. Điều này là cần thiết để ứng dụng hoạt động. <br> <br> Trang thiết lập này sẽ giúp bạn tạo tệp đó. Nhưng trong một số cấu hình máy chủ, điều này có thể không hoạt động. Trong trường hợp đó, bạn có thể cần điều chỉnh quyền truy cập thư mục hoặc tạo tệp cấu hình theo cách thủ công.';
	$Translation['setup intro 2'] = 'Chào mừng bạn đến với ứng dụng AppGini mới! Trước khi bắt đầu, chúng tôi cần một số thông tin về cơ sở dữ liệu của bạn. Bạn sẽ cần phải biết những điều sau đây trước khi tiếp tục: <ol> <li> Máy chủ cơ sở dữ liệu (máy chủ) </ li> <li> Tên cơ sở dữ liệu </ li> <li> Tên người dùng cơ sở dữ liệu </ li> <li> Mật khẩu cơ sở dữ liệu </ li> </ ol> Các mục trên có thể được cung cấp cho bạn bởi nhà cung cấp dịch vụ lưu trữ web của bạn. Nếu bạn không có thông tin này, bạn sẽ cần liên hệ với họ hoặc tham khảo tài liệu dịch vụ của họ trước khi bạn có thể tiếp tục tại đây. Nếu bạn đã sẵn sàng, hãy bắt đầu!';
	$Translation['setup finished'] = '<b> Thành công! </ b> <br> <br> Ứng dụng AppGini của bạn đã được cài đặt. Dưới đây là một số đề xuất để bắt đầu sử dụng:';
	$Translation['setup next 1'] = 'Bắt đầu sử dụng ứng dụng của bạn để thêm dữ liệu hoặc làm việc với dữ liệu hiện có, nếu có.';
	$Translation['setup next 2'] = 'Nhập dữ liệu hiện có vào ứng dụng của bạn từ tệp CSV.';
	$Translation['setup next 3'] = 'Truy cập trang chủ quản trị nơi bạn có thể thay đổi nhiều cài đặt ứng dụng khác.';
	$Translation['db_name help'] = 'Tên cơ sở dữ liệu bạn muốn chạy ứng dụng AppGini của mình.';
	$Translation['db_server help'] = '<i> localhost </ i> hoạt động trên hầu hết các máy chủ. Nếu không, bạn sẽ có thể nhận thông tin này từ nhà cung cấp dịch vụ lưu trữ web của mình.';
	$Translation['db_username help'] = 'Tên người dùng MySQL của bạn';
	$Translation['db_password help'] = 'Mật khẩu MySQL của bạn';
	$Translation['username help'] = 'Chỉ định tên người dùng quản trị bạn muốn sử dụng để truy cập khu vực quản trị viên. Phải có bốn ký tự trở lên.';
	$Translation['password help'] = 'Chỉ định mật khẩu mạnh để truy cập khu vực quản trị viên.';
	$Translation['email help'] = 'Nhập địa chỉ email mà bạn muốn gửi thông báo quản trị.';
	$Translation['Continue'] = 'Tiếp tục ...';
	$Translation['Lets go'] = 'Đi nào!';
	$Translation['Submit'] = 'Gửi đi';
	$Translation['Hide'] = 'Ẩn trợ giúp';
	$Translation['Database info is correct'] = '& # 10003; Thông tin cơ sở dữ liệu là chính xác!';
	$Translation['Database connection error'] = '& # 10007; Lỗi kết nối cơ sở dữ liệu!';
	$Translation['The following errors occured'] = 'Các lỗi sau đây xảy ra';
	$Translation['failed to create config instructions'] = 'Điều này có thể là do quyền truy cập thư mục được đặt để ngăn việc tạo tệp bằng máy chủ web của bạn. Đừng lo lắng! Bạn vẫn có thể tạo tệp cấu hình theo cách thủ công. <br> <br> Chỉ cần dán mã sau vào trình chỉnh sửa văn bản và lưu tệp dưới dạng "config.php", sau đó tải tệp bằng cách sử dụng FTP hoặc bất kỳ phương pháp nào khác vào thư mục% s trên máy chủ của bạn.';
	$Translation['Only show records having filterer'] = 'Chỉ hiển thị các bản ghi trong đó % s là% s';
	
	/* Added in AppGini 5.20 */
	$Translation['You don\'t have enough permissions to delete this record'] = 'Bạn không có đủ quyền để xóa bản ghi này';
	$Translation['Couldn\'t delete this record'] = 'Không thể xóa bản ghi này';
	$Translation['The record has been deleted successfully'] = 'Bản ghi đã được xóa thành công';
	$Translation['Couldn\'t save changes to the record'] = 'Không thể lưu các thay đổi đối với bản ghi';
	$Translation['Couldn\'t save the new record'] = 'Không thể lưu bản ghi mới';
	
	/* Added in AppGini 5.30 */
	$Translation['More'] = 'Mở rộng';
	$Translation['Confirm deleting multiple records'] = 'Xác nhận xóa nhiều bản ghi';
	$Translation['<n> records will be deleted. Are you sure you want to do this?'] = '<n> bản ghi sẽ bị xóa. Bạn có chắc chắn muốn làm điều này?';
	$Translation['Yes, delete them!'] = 'Đồng ý, xóa chúng!';
	$Translation['No, keep them.'] = 'Không, giữ lại';
	$Translation['Deleting record <i> of <n>'] = 'Đang xóa bản ghi <i> của <n>';
	$Translation['Delete progress'] = 'Xóa tiến độ';
	$Translation['Show/hide details'] = 'Hiển thị / ẩn chi tiết';
	$Translation['Connection error'] = 'Lôi kêt nôi';
	$Translation['Add more actions'] = 'Thêm hành động khác';
	$Translation['Update progress'] = 'Cập nhật tiến độ';
	$Translation['Change owner'] = 'Thay đổi chủ sở hữu';
	$Translation['Updating record <i> of <n>'] = 'Cập nhật bản ghi <i> của <n>';
	$Translation['Change owner of <n> selected records to'] = 'Thay đổi chủ sở hữu của <n> bản ghi đã chọn thành';

	/* Added in AppGini 5.40 */
	$Translation['username invalid'] = 'Tên người dùng <MemberID> đã tồn tại hoặc không hợp lệ. Đảm bảo bạn cung cấp tên người dùng chứa 4 đến 20 ký tự hợp lệ.';
	$Translation['permalink'] = 'Liên kết';
	$Translation['invalid provider'] = 'Nhà cung cấp không hợp lệ!';
	$Translation['invalid url'] = 'URL không hợp lệ!';
	$Translation['cant retrieve coordinates from url'] = 'Không thể truy lục tọa độ từ URL!';

	/* Added in AppGini 5.51 */
	$Translation['maintenance mode admin notification'] = 'Chế độ bảo trì đã được bật! Bạn có thể tắt nó từ trang chủ quản trị.';
	$Translation['unique field error'] = 'Giá trị này đã tồn tại hoặc không hợp lệ. Vui lòng đảm bảo chỉ định giá trị hợp lệ duy nhất.';

	/* Added in AppGini 5.60 */
	$Translation['show all user records from table'] = 'Hiển thị tất cả hồ sơ của người dùng này từ bảng "<tablename>"';
	$Translation['show all group records from table'] = 'Hiển thị tất cả hồ sơ của nhóm này từ bảng "<tablename>"';
	$Translation['email this user'] = 'Gửi email cho người dùng này';
	$Translation['email this group'] = 'Gửi email cho nhóm này';
	$Translation['owner'] = 'Chủ nhân';
	$Translation['created'] = 'Tạo';
	$Translation['last modified'] = 'Sửa đổi lần cuối';
	$Translation['record has no owner'] = 'Hồ sơ này không có chủ sở hữu được chỉ định. Bạn có thể chỉ định một chủ sở hữu từ khu vực quản trị.';
	$Translation['admin-only info'] = 'Thông tin trên được hiển thị vì bạn hiện đăng nhập với tư cách quản trị viên cấp cao. Những người dùng khác sẽ không thấy điều này.';
	$Translation['discard changes confirm'] = 'Hủy thay đổi đối với hồ sơ này?';

	/* Added in AppGini 5.70 */
	$Translation['hide/show columns'] = 'Ẩn / Hiện cột';
	$Translation['next column'] = 'Cột tiếp theo';
	$Translation['previous column'] = 'Cột trước';
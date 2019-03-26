<div class="col-md-12 col-sm-12 col-xs-12">

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span class="fa fa-bell"> <strong>Đặt Chỗ Ngày Hôm Nay</strong></span>
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID No.</th>
                                                <th>Họ và Tên</th>
                                                <th>Số Điện Thoại</th>
                                                <th>Xe Buýt</th>
                                                <th>Ghế</th>
                                                <th>Ngày</th>
                                                <th>Giờ Khởi Hành</th>
                                                <th>Số Tiền</th>
                                                <th>Ngày Đặt Chỗ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php duetoday("bookings");?>
                                        </tbody>
                                    </table>
                                    <a href="http://localhost/busbooking/bookings_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=8&FilterOperator%5B1%5D=like&FilterValue%5B1%5D=<?php $today=date('m%/d%/Y'); echo $today;?>" class="btn btn-info btn-block fa fa-list"> Xem Tất Cả Ngày Hôm Nay ...</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
@extends('template.master')

@section('title', 'Viết CV')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Mẫu CV Thanh Lịch</h2>
                <ol>
                    <li><a href="/">Trang chủ</a></li>
                    <li>Mẫu CV Thanh Lịch</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!--======= Blog Section ======= -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-10 col-xlg-9 col-md-7 mx-auto">
                    <div class="card">
                        <div class="row">
                            <!-- Column -->
                            <div class="col-lg-4 col-xlg-3 col-md-5">
                                <div class="card-body profile-card">
                                    <div class="text-center">
                                        <div id="profile-upload">
                                            <div class="hvr-profile-img rounded-circle">
                                                <input type="file" name="logo" id="getval" class="upload w180"
                                                    title="Dimensions 180 X 180" id="imag" />
                                            </div>
                                            <i class="bi bi-camera"></i>
                                        </div>
                                        <h4 class="editable card-title mt-2" contenteditable data-placeholder="Vũ Minh Đức">
                                        </h4>
                                    </div>
                                    <div class="row text-left justify-content-center">
                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-person-vcard-fill"></i> Thông tin cá nhân </h5>

                                        <div class="col-7">
                                            <div class="form-group d-flex">
                                                <i class="bi bi-calendar-event"></i>
                                                <div class="editable" contenteditable data-placeholder="23/01/1995"></div>
                                            </div>
                                        </div>

                                        <div class="col-5 d-flex align-items-center">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio1" value="option1" />
                                                <label class="form-check-label" for="inlineRadio1">Nam</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                                    id="inlineRadio2" value="option2" />
                                                <label class="form-check-label" for="inlineRadio2">Nữ</label>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mt-3">
                                                <div class="form-group d-flex">
                                                    <i class="bi bi-envelope"></i>
                                                    <div class="editable" contenteditable
                                                        data-placeholder="vuduc23195@gmail.com"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mt-3">
                                                <div class="form-group d-flex">
                                                    <i class="bi bi-telephone-inbound"></i>
                                                    <div class="editable" contenteditable data-placeholder="091 921 6886">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mt-3">
                                                <div class="form-group d-flex">
                                                    <i class="bi bi-geo-alt"></i>
                                                    <div class="editable" contenteditable
                                                        data-placeholder="Địa chỉ, Quận A, Tp. Hà Nội"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-bar-chart-line-fill"></i> Mục tiêu sự nghiệp</h5>

                                        <div class="col-12">
                                            <div class="editable" contenteditable
                                                data-placeholder="Áp dụng những kinh nghiệm của một nhân viên chuyên nghiệp. Từ đó giúp Công ty tăng doanh số">
                                            </div>
                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-aspect-ratio-fill"></i> Kỹ năng </h5>

                                        <div class="col-5">
                                            <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                                                <option selected>Chọn kỹ năng</option>
                                                <option value="1">Tin học văn phòng</option>
                                                <option value="2">Ngoại ngữ</option>
                                                <option value="3">Tư vấn</option>
                                                <option value="3">Y tế Dược</option>
                                            </select>
                                        </div>
                                        <div class="col-7">
                                            <div class="editable" contenteditable data-placeholder="Nhập kỹ năng"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Column -->
                            <div class="col-lg-8 col-xlg-9 col-md-7">
                                <div class="card-body profile-card">
                                    <form>

                                        <h5 class="position-relative font-medium vietcv-title"><i
                                                class="bi bi-mortarboard-fill"></i> Học vấn</h5>

                                        <div class="col-12" id="wrapper_render">
                                            <div id="render_container">
                                                <div id="render-block" class="form-group">
                                                    <div class="block-one d-flex">
                                                        <i class="bi bi-mortarboard"></i>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Từng học tại"></div>
                                                        <span style="padding:0 4px">//</span>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Bắt đầu - Kết thúc"></div>
                                                    </div>
                                                    <div class="block-two">
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Ngành học / Môn học"></div>
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Mô tả quá trình học tập hoặc thành tích của bạn">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action_wrapper">
                                                <button class="btn btn-outline-success" id="btn-add-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-plus-circle"></i>
                                                    <!-- <span>Thêm mục</span> -->
                                                </button>
                                                <button class="btn btn-danger" id="btn-delete-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-x-lg"></i>
                                                    <!-- <span>Xoa muc</span> -->
                                                </button>
                                            </div>
                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-bar-chart-steps"></i> Kinh nghiệm</h5>

                                        <div class="col-12" id="wrapper_render">
                                            <div id="render_container">
                                                <div id="render-block" class="form-group">
                                                    <div class="block-one d-flex">
                                                        <i class="bi bi-briefcase"></i>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Tên công ty"></div>
                                                        <span style="padding:0 10px">//</span>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Bắt đầu - Kết thúc"></div>
                                                    </div>
                                                    <div class="block-two">
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Vị trí công việc"></div>
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Mô tả hoạt động"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action_wrapper">
                                                <button class="btn btn-outline-success" id="btn-add-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-plus-circle"></i>
                                                    <!-- <span>Thêm mục</span> -->
                                                </button>
                                                <button class="btn btn-danger" id="btn-delete-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-x-lg"></i>
                                                    <!-- <span>Xoa muc</span> -->
                                                </button>
                                            </div>
                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-pin-map-fill"></i> Hoạt động</h5>

                                        <div class="col-12" id="wrapper_render">
                                            <div id="render_container">
                                                <div id="render-block" class="form-group">
                                                    <div class="block-one d-flex">
                                                        <i class="bi bi-people"></i>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Vị trí công việc"></div>
                                                        <span style="padding:0 10px">//</span>
                                                        <div class="editable" contenteditable
                                                            data-placeholder="Bắt đầu - Kết thúc"></div>
                                                    </div>
                                                    <div class="block-two">
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Tên tổ chức"></div>
                                                        <div class="editable  mt-2" contenteditable
                                                            data-placeholder="Mô tả hoạt động"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="action_wrapper">
                                                <button class="btn btn-outline-success" id="btn-add-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-plus-circle"></i>
                                                    <!-- <span>Thêm mục</span> -->
                                                </button>
                                                <button class="btn btn-danger" id="btn-delete-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-x-lg"></i>
                                                    <!-- <span>Xoa muc</span> -->
                                                </button>
                                            </div>
                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title"><i
                                                class="bi bi-flag-fill"></i> Chứng chỉ</h5>

                                        <div class="col-12" id="wrapper_render">
                                            <div id="render_container">
                                                <div id="render-block" class="form-group d-flex ">
                                                    <i class="bi bi-briefcase"></i>
                                                    <div class="editable" contenteditable data-placeholder="Thời gian">
                                                    </div>
                                                    <span style="padding:0 10px">//</span>
                                                    <div class="editable" contenteditable
                                                        data-placeholder="Tên chứng chỉ"></div>
                                                </div>

                                            </div>
                                            <div class="action_wrapper">
                                                <button class="btn btn-outline-success" id="btn-add-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-plus-circle"></i>
                                                    <!-- <span>Thêm mục</span> -->
                                                </button>
                                                <button class="btn btn-danger" id="btn-delete-block"
                                                    style="display: none;" type="button">
                                                    <i class="bi bi-x-lg"></i>
                                                    <!-- <span>Xoa muc</span> -->
                                                </button>
                                            </div>

                                        </div>

                                        <h5 class="position-relative font-medium mt-4 vietcv-title">
                                            <i class="bi bi-patch-check-fill"></i>
                                            Tại sao bạn muốn làm việc tại nhà máy cơ điện thái hưng
                                            <i class="bi bi-question-circle" style="font-size:10px"
                                                data-bs-toggle="tooltip" data-bs-placement="right"
                                                title="Thưa ông/bà [Tên], Thông qua …, tôi được biết Quý Công ty đang cần tuyển vị trí [Tên vị trí công việc] Tôi mong muốn được thử sức mình trong môi trường làm việc hết sức năng động của Quý Công ty. Với trình độ và kinh nghiệm hiện có, tôi tự tin có thể đảm nhiệm tốt vai trò này tại công ty [Tên công ty]. Như đã đề cập trong hồ sơ đính kèm, tôi có nhiều kinh nghiệm làm việc với các công ty … ở vị trí …. Vị trí này đã cho tôi…. [bạn viết ra những kinh nghiệm nổi trội phù hợp với vị trí ứng tuyển] với thành tích [bạn nêu thành tích tốt nhất bạn có được]. Ngoài ra, tôi còn có kinh nghiệm về … trong suốt thời gian làm việc với công ty …. – chuyên kinh doanh các mặt hàng … Là một trong nhiều sinh viên tốt nghiệp hàng đầu của trường Đại Học …, tôi hoàn toàn tự tin với vốn kiến thức về lĩnh vực … của mình. Thêm vào đó, tôi có một năm kinh nghiệm làm việc cho một công ty kinh doanh … ở vị trí … sau khi tốt nghiệp. Tôi tin rằng đó là những nền tảng quý báu có thể giúp tôi hiểu rõ và đáp ứng tốt nhu cầu khách hàng của Quý Công ty. Cám ơn ông/bà đã dành thời gian quý báu để xem xét thư xin việc này. Tôi rất mong ông/bà có thể sắp xếp một cuộc phỏng vấn trực tiếp gần đây nhất để tôi có thể trình bày rõ hơn về bản thân cũng như tìm hiểu thêm các yêu cầu chi tiết cho vị trí [Tên vị trí công việc] của [Tên công ty]."></i>
                                        </h5>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <div class="editable" contenteditable
                                                    data-placeholder="Viết giới thiệu ngắn gọn về bản thân (điểm mạnh, điểm yếu) và nêu rõ mong muốn, lý do làm việc tại công ty này. Đây là cách gây ấn tượng với nhà tuyển dụng nếu bạn có chưa có kinh nghiệm làm việc (hoặc CV không tốt).">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <p class="mt-1">Tôi xin cam đoan tất cả những thông tin trên đây là đúng
                                                </p>
                                                <p>
                                                    Nếu tôi cung cấp bất kỳ thông tin sai lệch nào, Công ty có quyền
                                                    chấm dứt
                                                    Hơp đồng Lao động với tôi ngay lập tức mà không cần thông báo
                                                    hay bồi
                                                    thường.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <p><i class="bi bi-pencil-square"></i> Người khai thông tin ( Ký, ghi rõ họ
                                                    tên )</p>
                                                <div class="editable " contenteditable
                                                    data-placeholder="Kí tên: Nguyễn Văn A"></div>
                                            </div>
                                        </div>

                                        <div class="form-group mt-2">
                                            <div class="col-sm-12 d-flex">
                                                <button class="btn btn-success mx-auto mx-md-0 text-white">
                                                    <i class="bi bi-send-check"></i>
                                                    Gửi thông tin
                                                </button>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-outline-success ms-3"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="bi bi-journal-plus"></i>
                                                    Bổ sung thông tin
                                                </button>
                                                <button type="button" class="btn btn-outline-secondary ms-3"
                                                    data-bs-toggle="modal" data-bs-target="#uploadtailieu">
                                                    <i class="bi bi-cloud-upload"></i>
                                                    Đính kém tài liệu
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- End Inner Page -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin bổ sung</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5 class="font-medium vietcv-title"><i class="bi bi-postcard-fill"></i> Thông tin cá nhân<sup>( Bổ
                            Sung )</sup>
                    </h5>
                    <hr />
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div class="editable" contenteditable
                                    data-placeholder="Nơi ĐKHK thường trú (bao gồm: Số nhà, Phường/Xã, Quận/Huyện, Tỉnh/Thành Phố )">
                                </div>
                            </div>
                        </div>

                        <div class="col-5">
                            <div class="mt-3">
                                <div class="form-group">
                                    <div class="editable" contenteditable data-placeholder="Số CMND / CCCD"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-7">
                            <div class="mt-3">
                                <div class="form-group d-flex">
                                    <div class="editable" contenteditable data-placeholder="Ngày cấp"></div>
                                    <span style="padding:0 10px">//</span>
                                    <div class="editable" contenteditable data-placeholder="Nơi cấp"></div>
                                    <span style="padding:0 10px">//</span>
                                    <div class="editable" contenteditable data-placeholder="Nơi sinh"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mt-3">
                                <div class="form-group">
                                    <div class="editable" contenteditable data-placeholder="Chiều Cao"></div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="form-group">
                                    <div class="editable" contenteditable data-placeholder="Cân nặng (kg)"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mt-3">
                                <div class="editable" contenteditable
                                    data-placeholder="Tình trạng hiện tại (Độc thân/Đã kết hôn)"></div>
                            </div>
                            <div class="mt-3">
                                <div class="form-group">
                                    <div class="editable" contenteditable data-placeholder="Tình trạng sức khỏe"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mt-3">
                                <div class="form-group d-flex">
                                    <div class="editable" contenteditable data-placeholder="Trình độ"></div>
                                    <span style="padding:0 10px">//</span>
                                    <div class="editable" contenteditable data-placeholder="Chuyên ngành"></div>
                                    <span style="padding:0 10px">//</span>
                                    <div class="editable" contenteditable data-placeholder="Bằng lái xe ô tô"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h5 class="font-medium mt-4 vietcv-title"><i class="bi bi-person-lines-fill"></i> Thông tin gia đình
                    </h5>
                    <hr />
                    <div class="col-md-12">
                        <div class="wrapper_render">
                            <div class="form-group">
                                <div class="editable" contenteditable
                                    data-placeholder="Bao gồm (Họ và tên - Mối quan hệ - Ngày sinh) - Nghề nghiệp - Nơi công tác - Số điện thoại">
                                </div>
                            </div>
                            <div id="render-block"></div>
                            <button class="btn btn-outline-success btn-add-block" id="hidden-div" type="button">
                                <i class="bi bi-plus-circle"></i>
                                <span>Thêm mục</span>
                            </button>
                        </div>
                    </div>


                    <h5 class="font-medium mt-4 vietcv-title"><i class="bi bi-calendar2-week-fill"></i> Quá trình đào tạo
                        ( kể cả các khóa
                        học ngắn hạn )</h5>
                    <hr />
                    <div class="form-group">
                        <div class="col-12">
                            <div class="form-group d-flex">
                                <i class="bi bi-briefcase"></i>
                                <div class="editable" contenteditable data-placeholder="Từng học tại"></div>
                                <span style="padding:0 4px">//</span>
                                <div class="editable" contenteditable data-placeholder="Bắt đầu - Kết thúc"></div>
                            </div>
                            <div class="form-group">
                                <div class="editable  mt-2" contenteditable data-placeholder="Ngành học / Môn học"></div>
                                <div class="editable  mt-2" contenteditable
                                    data-placeholder="Mô tả quá trình học tập hoặc thành tích của bạn"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="uploadtailieu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tải thêm tài liệu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="file" multiple
                                    onchange="javascript:updateList()">
                                <label class="custom-file-label" for="file">
                                    <i class="bi bi-cloud-upload"></i> Upload Files</label>
                            </div>
                            <ul id="fileList" class="file-list"></ul>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng lại</button>
                    <button type="button" class="btn btn-success">Lưu lại</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        document.getElementById('getval').addEventListener('change', readURL, true);

        function readURL() {
            var file = document.getElementById('getval').files[0];
            var reader = new FileReader();
            reader.onloadend = function() {
                document.getElementById('profile-upload').style.backgroundImage = 'url(' + reader.result + ')';
            };
            if (file) {
                reader.readAsDataURL(file);
            } else {}
        }
    </script>

    <script type="text/javascript">
        // ADD NEW BLOCK
        const blockWrapper = document.querySelectorAll("#wrapper_render");
        var renderWrapper = document.getElementById("render_container");
        var reRenderBlock = document.getElementById("render-block");
        const btnAddNewBlock = document.getElementById("btn-add-block");
        var btnDeleteBlock = document.getElementById("btn-delete-block");

        blockWrapper.forEach(div => {
            div.addEventListener('mouseover', (e) => {
                btnAddNewBlock.style.display = 'block';
            });
            div.addEventListener('mouseout', (e) => {
                btnAddNewBlock.style.display = 'none';
            });
        });



        btnAddNewBlock.onclick = function() {
            renderWrapper.appendChild(reRenderBlock.cloneNode(true));
        }
    </script>

    <script>
        updateList = function() {
            var input = document.getElementById('file');
            var output = document.getElementById('fileList');
            var children = "";
            for (var i = 0; i < input.files.length; ++i) {
                children += '<li>' + input.files.item(i).name +
                    '<span class="remove-list" onclick="return this.parentNode.remove()">X</span>' + '</li>'
            }
            output.innerHTML = children;
        }
    </script>


@endsection

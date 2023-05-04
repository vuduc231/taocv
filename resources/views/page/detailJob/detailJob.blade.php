@extends('template.master')

@section('title', 'Chi tiết việc làm')
@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>R & D Team Leader For Self-Study Programs</h2>
                <ol>
                    <li><a href="/">Trang chủ</a></li>
                    <li>R & D Team Leader For Self-Study Programs</li>
                </ol>
            </div>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section class="inner-page">
        <div class="container" data-aos="fade-up">
            <div class="bg-white p-3 rounded shadow-sm mb-4">
                <div class="box_information d-flex justify-content-between align-items-center">
                    <div class="box_image">
                        <img
                            src="https://cdn.topcv.vn/80/company_logos/5h3k4RJxJKeccgPflonFIf8LgHvrPLTM_1675216726____a3bd1d29f32726ac02d54a19e8707f6d.png" />
                    </div>
                    <div class="box_info-job">
                        <h3 class="box_info-title">R & D Team Leader For Self-Study Programs</h3>
                        <div class="box_info-company">VUIHOC.VN</div>
                        <div class="box_info-deadline">
                            <i class="bi bi-alarm"></i>
                            Hạn nộp hồ sơ: 28/02/2023
                        </div>
                    </div>
                    <div class="box_action">
                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-send-check pe-2"></i>Ứng tuyển ngay</button>
                        <span class="p-1"></span>
                        <a href="mau-cv" class="btn btn-outline-success w-100"><i class="bi bi-plus-circle pe-2"></i> Tạo
                            CV</a>
                    </div>
                </div>
            </div>

            <div class="bg-white box_detail-job p-3 rounded shadow-sm mb-4">
                <div class="box_information">
                    <h3 class="border-start border-success border-5 px-2">Chi tiết tin tuyển dụng</h3>
                    <div class="row">
                        <div class="col-md-9">
                            <div class="box_detail-info">
                                <p class="box_detail-title">Thông tin chung</p>
                                <div class="box_detail">
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/1.svg" alt="">
                                        <div>
                                            <strong>Mức lương </strong> <br>
                                            <span>
                                                Trên 10 triệu
                                            </span>
                                        </div>
                                    </div>
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/5.svg" alt="" />
                                        <div>
                                            <strong>Số lượng tuyển </strong> <br />
                                            <span>3 người</span>
                                        </div>
                                    </div>
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/2.svg" alt="" />
                                        <div>
                                            <strong>Hình thức làm việc </strong> <br />
                                            <span>Toàn thời gian</span>
                                        </div>
                                    </div>
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/6.svg" alt="" />
                                        <div>
                                            <strong>Cấp bậc </strong> <br />
                                            <span>Nhân viên</span>
                                        </div>
                                    </div>
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/3.svg" alt="" />
                                        <div>
                                            <strong>Giới tính </strong> <br />
                                            <span>Không yêu cầu</span>
                                        </div>
                                    </div>
                                    <div class="box_detail-items">
                                        <img src="https://www.topcv.vn/v4/image/job-detail/icon/7.svg" alt="" />
                                        <div>
                                            <strong>Kinh nghiệm </strong> <br />
                                            <span>Dưới 1 năm</span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="box_address-info">
                                <p class="box_address-title">Địa điểm làm việc</p>
                                <div>- Hà Nội: số 2 N4 40 Xuân La, Bắc Từ Liêm</div>
                            </div>

                            <div class="box_job-data">
                                <h3>Mô tả công việc</h3>
                                <div class="box_job-tab">
                                    <p>- Lập kế hoạch, triển khai kế hoạch kinh doanh theo target và định hướng công ty</p>
                                    <p>- Giám sát, quản lý theo kế hoạch đã duyệt và chịu trách nhiệm về doanh số</p>
                                    <p>- Tư vấn, hỗ trợ khách hàng</p>
                                    <p>- Báo cáo số liệu cho quản lý</p>
                                </div>
                                <h3>Yêu cầu ứng viên</h3>
                                <div class="box_job-tab">
                                    <p>- Có kinh nghiệm về Sale</p>
                                    <p>- Sức khỏe tốt</p>
                                    <p>- Có khả năng thích nghi tốt và làm việc teamwork</p>
                                    <p>- Kĩ năng quản lý, lập kế hoạch, thành thạo làm báo cáo</p>
                                </div>

                                <h3>Quyền lợi</h3>
                                <div class="box_job-tab">
                                    <p>- Đầy đủ chế độ</p>
                                    <p>- Lương trên 10 Triệu ( Nhiều hỗ trợ phụ cấp, deal lương theo năng lực nếu có khả
                                        năng hơn )</p>
                                    <p>- Được tham gia đầy đủ BHXH, BHYT và một số quyền lợi theo quy định của Công ty</p>
                                    <p>- Được nghỉ các ngày lễ tết theo quy định của nhà nước.</p>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-3">
                            <a href="#"><img class="rounded w-100"
                                    src="https://static.topcv.vn/manual/cv-tim-viec-topcv.png"></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Inner Page -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ứng tuyển <b class="text-success">R & D Team Leader For
                            Self-Study Programs</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <label>Chọn CV online:
                                <span class="italic text-primary" style="font-style: italic;font-size:12px"><i
                                        class="bi bi-hand-thumbs-up-fill"></i> Khuyên dùng</span></label>
                            <a href="mau-cv" class="btn btn-success d-block mt-3"><i class="bi bi-plus-lg"></i> Chọn CV
                                ngay</a>

                            <div class="text-danger" style="margin-top: 10px; font-style: italic;font-size:12px">
                                (Sau khi tạo mới CV, tải lại trang này để có thể ứng tuyển nhanh)
                            </div>
                            <div>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="drop_box-wrapper">
                                <label>Tải CV từ máy tính</label>
                                <div class="drop_box">
                                    <header>
                                        <h4>Chọn file tải lên</h4>
                                    </header>
                                    <p>Hỗ trợ file dạng: PDF, TEXT, DOC , DOCX</p>
                                    <input type="file" name="dropbox_upload-img" hidden accept=".doc,.docx,.pdf"
                                        id="fileID" style="display:none;">
                                    <button class="btn btn-outline-success"><i class="bi bi-cloud-upload"></i> Chọn
                                        file</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="mt-3 fw-bold" style="font-size:14px">Thư giới thiệu: </label>
                            <textarea style="font-size:12px" rows="4" class="form-control ps-0 form-control-line"
                                placeholder="Viết giới thiệu ngắn gọn về bản thân (điểm mạnh, điểm yếu) và nêu rõ mong muốn, lý do làm việc tại công ty này. Đây là cách gây ấn tượng với nhà tuyển dụng nếu bạn có chưa có kinh nghiệm làm việc (hoặc CV không tốt)."></textarea>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Đóng lại</button>
                    <button type="button" class="btn btn-success">Nộp CV</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const dropArea = document.querySelector(".drop_box"),
            button = dropArea.querySelector("button"),
            dragText = dropArea.querySelector("header"),
            input = dropArea.querySelector("input");

        let file;
        var filename;

        button.onclick = () => {
            input.click();
        };

        input.addEventListener("change", function(e) {
            var fileName = e.target.files[0].name;
            let filedata = `
    <form action="" method="post">
    <div class="form">
    <div class="dropbox_close-upload"><h4>${fileName}</h4> <i class="bi bi-x-square-fill"></i></div>
    <input type="email" placeholder="Vui lòng nhập Email">
    <button class="btn btn-outline-success"><i class="bi bi-cloud-upload"></i> Tải lên</button>
    </div>
    </form>`;
            dropArea.innerHTML = filedata;
        });
    </script>
@endsection

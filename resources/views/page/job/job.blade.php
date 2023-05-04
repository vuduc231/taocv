@extends('template.master')

@section('title', 'Tìm việc làm')
@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2>Tìm việc làm</h2>
            <ol>
                <li><a href="/">Trang chủ</a></li>
                <li>Tìm việc làm</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Breadcrumbs -->

<!-- ======= Blog Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="hero-animated" class="d-flex align-items-center py-4">
          <div class="container bg-primary rounded-top overflow-hidden pt-4 pe-4 ps-4 text-white d-flex flex-column justify-content-center align-items-center position-relative">
            <div class="row">
              <div class="col-lg-9">
                <h4>Việc làm Senior</h4>
                <p>Nâng tầm sự nghiệp với các cơ hội việc làm Senior tại các công ty hàng đầu. Thu nhập xứng tầm, đãi ngộ hấp dẫn, trải nghiệm đáng giá, khám phá ngay!</p>
                <div class="d-flex align-items-center">
                  <label href="#" class="badge bg-light font-bold text-primary p-2 rounded-pill me-3">
                    <i class="bi bi-check-lg d-inline-block bg-primary text-white rounded-circle"></i>
                    Tài chính
                  </label>
                  <label href="#" class="badge bg-light font-bold text-primary p-2 rounded-pill me-3">
                    <i class="bi bi-check-lg d-inline-block bg-primary text-white rounded-circle"></i>
                    Kinh doanh
                  </label>
                  <label href="#" class="badge bg-light font-bold text-primary p-2 rounded-pill me-3">
                    <i class="bi bi-check-lg d-inline-block bg-primary text-white rounded-circle"></i>
                    Marketing
                  </label>
                  <label href="#" class="badge bg-light font-bold text-primary p-2 rounded-pill me-3">
                    <i class="bi bi-check-lg d-inline-block bg-primary text-white rounded-circle"></i>
                    Nhân sự
                  </label>
                </div>
              </div>
              <div class="col-lg-3">
                <img src="https://www.topcv.vn/v4/image/senior/background.png" class="img-fluid animated">
              </div>
            </div>
          </div>
        </div>
        <div class="text-left pb-5">
            <h6>Tìm kiếm</h6>
            <form>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control">
                                <option>-- Tất cả ngành nghề --</option>
                                <option>Kinh doanh bán hàng</option>
                                <option>Giáo dục, Đào tạo</option>
                                <option>CNTT</option>
                                <option>Marketing, Truyền thông, Quảng cáo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control">
                                <option>-- Tất cả lĩnh vực --</option>
                                <option>IT / Phần mềm</option>
                                <option>Kế toán</option>
                                <option>Luật</option>
                                <option>Bảo hiểm</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <select class="form-control">
                                <option>-- Tất cả địa điểm --</option>
                                <option>Hà Nội</option>
                                <option>HCM</option>
                            </select>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="row">
            <div class="col-lg-9 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->

                    <div class="col-lg-12">
                        <div class="card flex-row flex-wrap pt-2 text-dark shadow-sm mb-4 bg-body rounded">
                            <div class="card-header border-0">
                                <img
                                    src="https://cdn.topcv.vn/150/company_logos/FXvqfQ9zMG2ggHjGs21b6NdyWqRJNNIP_1665048925____53a88ee3aa169d5bd7e3aa6a1f1bd704.jpg"
                                    alt=""
                                />
                            </div>
                            <div class="card-block px-2">
                                <a href="chi-tiet-viec-lam"><h4 class="card-title text-dark" data-bs-toggle="tooltip" title="R & D Team Leader For Self-Study Programs">R & D Team Leader For Self-Study Programs</h4></a>
                                <a href="#"><p class="card-text d-inline-block text-dark" data-bs-toggle="tooltip" title="VUIHOC.VN">VUIHOC.VN</p></a>
                            </div>
                            <div class="card-body w-100">
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                                AutoCAD
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Tin học văn phòng
                              </label>
                              <label style="font-size:0.8rem;" class="bg-light font-bold text-primary p-2 rounded-pill me-3">
                              Phân tích công việc
                              </label>
                            </div>
                            <div
                                class="card-footer w-100 text-muted d-flex justify-content-between align-items-center"
                            >
                                <div class="card-footer-label w-50 text-muted d-flex justify-content-between">
                                    <div><i class="bi bi-stopwatch-fill color-primary pe-1"></i>3 phút trước</div>
                                    <div><i class="bi bi-coin  color-primary pe-1"></i>15 triệu</div>
                                    <div data-bs-toggle="tooltip" title="Hai Bà Trưng, Hà Nội"><i class="bi bi-geo-fill  color-primary pe-1"></i>Hà Nội</div>
                                </div>
                                <div class="card-footer-deadline d-flex justify-content-end w-50">
                                    <div>Còn <b>30</b> ngày để ứng tuyển</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end items -->
                    
                    <nav class="d-flex justify-content-center align-items-center pt-4">
                      <ul class="pagination">
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                          </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                          <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                </div>
                
            </div>
            <div class="col-lg-3 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar_image">
                    <a href="#"><img class="rounded w-100" src="https://static.topcv.vn/manual/cv-tim-viec-topcv.png" /></a>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection
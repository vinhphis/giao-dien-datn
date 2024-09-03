<!-- chi tiết thẻ -->
<div
    class="modal fade"
    id="detailCardModal"
    tabindex="-1"
    aria-labelledby="detailCardModalLabel"
    aria-hidden="true"
>

    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content border-0 rounded-3">

            <div
                class="modal-header p-3"
                style="
                      height: 150px;
                      object-fit: cover;
                      background-image: url('assets/images/small/img-7.jpg');
                    "
                id="detailCardModalLabel"
            >
                <div></div>
                <button
                    type="button"
                    class="btn-close bg-white"
                    style="margin: -100px -5px 0px 0px"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                ></button>
            </div>
            <div class="modal-body">
                <form action="#">
                    <div class="row">
                        <div class="col-8 p-2">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Input Border Style -->
                                    <div>
                                        <section class="d-flex mb-2">
                                            <i class="ri-artboard-line fs-22"></i>
                                            <input
                                                type="text"
                                                class="form-control border-0 ms-1 fs-18 fw-medium bg-transparent"
                                                id="borderInput"
                                                placeholder="Enter your name"
                                            />
                                        </section>
                                        <span class="ms-5">trong danh sách ...</span>
                                    </div>
                                </div>
                                <div class="col-12 d-flex mt-3">
                                    <div class="ps-4">
                                        <strong>Thành viên</strong>
                                        <section class="d-flex">
                                            <!-- thêm thành viên & chia sẻ link bảng -->
                                            <div
                                                class="d-flex justify-content-center align-items-center cursor-pointer me-2"
                                            >
                                                <div class="col-auto ms-sm-auto">
                                                    <div class="avatar-group" id="newMembar">
                                                        <a
                                                            href="javascript: void(0);"
                                                            class="avatar-group-item"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-placement="top"
                                                            title="Nancy"
                                                        >
                                                            <img
                                                                src="assets/images/users/avatar-5.jpg"
                                                                alt=""
                                                                class="rounded-circle avatar-xs"
                                                            />
                                                        </a>
                                                        <a
                                                            href="javascript: void(0);"
                                                            class="avatar-group-item"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-placement="top"
                                                            title="Frank"
                                                        >
                                                            <img
                                                                src="assets/images/users/avatar-3.jpg"
                                                                alt=""
                                                                class="rounded-circle avatar-xs"
                                                            />
                                                        </a>
                                                        <a
                                                            href="javascript: void(0);"
                                                            class="avatar-group-item"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-placement="top"
                                                            title="Tonya"
                                                        >
                                                            <img
                                                                src="assets/images/users/avatar-10.jpg"
                                                                alt=""
                                                                class="rounded-circle avatar-xs"
                                                            />
                                                        </a>
                                                        <a
                                                            href="javascript: void(0);"
                                                            class="avatar-group-item"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-placement="top"
                                                            title="Thomas"
                                                        >
                                                            <img
                                                                src="assets/images/users/avatar-8.jpg"
                                                                alt=""
                                                                class="rounded-circle avatar-xs"
                                                            />
                                                        </a>
                                                        <a
                                                            href="javascript: void(0);"
                                                            class="avatar-group-item"
                                                            data-bs-toggle="tooltip"
                                                            data-bs-trigger="hover"
                                                            data-bs-placement="top"
                                                            title="Herbert"
                                                        >
                                                            <img
                                                                src="assets/images/users/avatar-2.jpg"
                                                                alt=""
                                                                class="rounded-circle avatar-xs"
                                                            />
                                                        </a>

                                                        <button
                                                            type="button"
                                                            class="border-0 bg-transparent"
                                                            data-bs-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false"
                                                        >
                                                            <div class="avatar-xs">
                                                                <div class="avatar-title rounded-circle">
                                                                    +
                                                                </div>
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>
                                    <div class="ps-4">
                                        <strong>Thông báo</strong>
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded p-3 text-white cursor-pointer"
                                            style="height: 30px; background-color: darkgray"
                                        >
                                            <i class="ri-eye-line fs-22"></i>
                                            <p class="ms-2 mt-3 fs-10">Theo dõi</p>
                                            <div>
                                                <i
                                                    class="ri-check-line fs-22 bg-light ms-2 rounded"
                                                    style="color: black"
                                                ></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-4">
                                        <strong>Ngày hết hạn</strong>
                                        <div
                                            class="d-flex align-items-center justify-content-between rounded p-3 text-white cursor-pointer"
                                            style="height: 30px; background-color: darkgray"
                                        >
                                            <input
                                                type="checkbox"
                                                name=""
                                                class="form-check-input"
                                                checked
                                            />
                                            <p class="ms-2 mt-3 fs-10">20:00 28 thg 8</p>

                                            <span class="badge bg-success ms-2">Hoàn tất</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- mô tả -->
                            <div class="row mt-3">
                                <section class="d-flex">
                                    <i class="ri-menu-2-line fs-22"></i>
                                    <p class="fs-18 ms-2 mt-1">Mô tả</p>
                                </section>
                                <div class="ps-4">
                              <textarea
                                  name=""
                                  cols="25"
                                  rows="5"
                                  class="form-control bg-light"
                                  placeholder="Thêm mô tả chi tiết"
                              ></textarea>
                                </div>
                            </div>
                            <!-- tệp -->
                            <div class="row mt-3">
                                <section class="d-flex">
                                    <i class="ri-link-m fs-22"></i>
                                    <p class="fs-18 ms-2 mt-1">Tệp đính kèm</p>
                                </section>
                                <div class="ps-4">
                                    <strong>Thẻ tên dự án</strong>
                                    <div
                                        class="d-flex flex-wrap row mt-2"
                                        style="align-items: start"
                                    >
                                        <!-- start card -->
                                        <div class="col-6">
                                            <div class="card card-height-100">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column h-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted"></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-1 align-items-center">
                                                                    <i class="ri-more-fill fs-20"></i>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-2 rounded bg-info-subtle p-2">
                                                            <div class="flex-grow-1">
                                                                <h5>Tên thẻ</h5>
                                                                <div class="d-flex">
                                              <span class="badge bg-success me-1"
                                              >giao diện</span
                                              >
                                                                    <span class="badge bg-danger">code khó</span>
                                                                </div>
                                                                <div class="mt-3 d-flex justify-content-between">
                                                                    <div class="avatar-group">
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="avatar-group-item border-0"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Darline Williams"
                                                                        >
                                                                            <div class="avatar-xxs">
                                                                                <img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid"
                                                                                />
                                                                            </div>
                                                                        </a>

                                                                    </div>
                                                                    <ul class="link-inline mb-0">
                                                                        <!-- theo dõi -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i class="ri-eye-line align-bottom"></i>
                                                                                04</a
                                                                            >
                                                                        </li>
                                                                        <!-- bình luận -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-question-answer-line align-bottom"
                                                                                ></i>
                                                                                19</a
                                                                            >
                                                                        </li>
                                                                        <!-- tệp đính kèm -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-attachment-2 align-bottom"
                                                                                ></i>
                                                                                02</a
                                                                            >
                                                                        </li>
                                                                        <!-- checklist -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-checkbox-line align-bottom"
                                                                                ></i>
                                                                                2/4</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                                <div
                                                    class="card-footer bg-transparent border-top-dashed py-2"
                                                >
                                                    <div class="flex-grow-1">Tên bảng : Tên list</div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- start card -->
                                        <div class="col-6">
                                            <div class="card card-height-100">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column h-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-4"></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-1 align-items-center">
                                                                    menu
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-2 rounded bg-info-subtle p-2">
                                                            <div class="flex-grow-1">
                                                                <h5>Tên thẻ</h5>
                                                                <div class="d-flex">
                                              <span class="badge bg-success me-1"
                                              >giao diện</span
                                              >
                                                                    <span class="badge bg-danger">code khó</span>
                                                                </div>
                                                                <div class="mt-3 d-flex justify-content-between">
                                                                    <div class="avatar-group">
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Darline Williams"
                                                                        >
                                                                            <div class="avatar-xxs">
                                                                                <img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid"
                                                                                />
                                                                            </div>
                                                                        </a>
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Add Members"
                                                                        >
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary"
                                                                                >
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <ul class="link-inline mb-0">
                                                                        <!-- theo dõi -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i class="ri-eye-line align-bottom"></i>
                                                                                04</a
                                                                            >
                                                                        </li>
                                                                        <!-- bình luận -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-question-answer-line align-bottom"
                                                                                ></i>
                                                                                19</a
                                                                            >
                                                                        </li>
                                                                        <!-- tệp đính kèm -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-attachment-2 align-bottom"
                                                                                ></i>
                                                                                02</a
                                                                            >
                                                                        </li>
                                                                        <!-- checklist -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-checkbox-line align-bottom"
                                                                                ></i>
                                                                                2/4</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                                <div
                                                    class="card-footer bg-transparent border-top-dashed py-2"
                                                >
                                                    <div class="flex-grow-1">Tên bảng : Tên list</div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                        <!-- start card -->
                                        <div class="col-6">
                                            <div class="card card-height-100">
                                                <div class="card-body">
                                                    <div class="d-flex flex-column h-100">
                                                        <div class="d-flex">
                                                            <div class="flex-grow-1">
                                                                <p class="text-muted mb-4"></p>
                                                            </div>
                                                            <div class="flex-shrink-0">
                                                                <div class="d-flex gap-1 align-items-center">
                                                                    menu
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="d-flex mb-2 rounded bg-info-subtle p-2">
                                                            <div class="flex-grow-1">
                                                                <h5>Tên thẻ</h5>
                                                                <div class="d-flex">
                                              <span class="badge bg-success me-1"
                                              >giao diện</span
                                              >
                                                                    <span class="badge bg-danger">code khó</span>
                                                                </div>
                                                                <div class="mt-3 d-flex justify-content-between">
                                                                    <div class="avatar-group">
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Darline Williams"
                                                                        >
                                                                            <div class="avatar-xxs">
                                                                                <img
                                                                                    src="assets/images/users/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="rounded-circle img-fluid"
                                                                                />
                                                                            </div>
                                                                        </a>
                                                                        <a
                                                                            href="javascript: void(0);"
                                                                            class="avatar-group-item"
                                                                            data-bs-toggle="tooltip"
                                                                            data-bs-trigger="hover"
                                                                            data-bs-placement="top"
                                                                            title="Add Members"
                                                                        >
                                                                            <div class="avatar-xxs">
                                                                                <div
                                                                                    class="avatar-title fs-16 rounded-circle bg-light border-dashed border text-primary"
                                                                                >
                                                                                    +
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <ul class="link-inline mb-0">
                                                                        <!-- theo dõi -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i class="ri-eye-line align-bottom"></i>
                                                                                04</a
                                                                            >
                                                                        </li>
                                                                        <!-- bình luận -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-question-answer-line align-bottom"
                                                                                ></i>
                                                                                19</a
                                                                            >
                                                                        </li>
                                                                        <!-- tệp đính kèm -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-attachment-2 align-bottom"
                                                                                ></i>
                                                                                02</a
                                                                            >
                                                                        </li>
                                                                        <!-- checklist -->
                                                                        <li class="list-inline-item">
                                                                            <a
                                                                                href="javascript:void(0)"
                                                                                class="text-muted"
                                                                            ><i
                                                                                    class="ri-checkbox-line align-bottom"
                                                                                ></i>
                                                                                2/4</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end card body -->
                                                <div
                                                    class="card-footer bg-transparent border-top-dashed py-2"
                                                >
                                                    <div class="flex-grow-1">Tên bảng : Tên list</div>
                                                </div>
                                                <!-- end card footer -->
                                            </div>
                                            <!-- end card -->
                                        </div>
                                    </div>
                                    <div class="ps-4">
                                        <strong>Tệp</strong>
                                    </div>
                                </div>
                            </div>
                            <!-- việc cần làm -->
                            <div class="row mt-3">
                                <section class="d-flex justify-content-between">
                                    <section class="d-flex">
                                        <i class="ri-checkbox-line fs-22"></i>
                                        <p class="fs-18 ms-2 mt-1">Việc cần làm</p>
                                    </section>
                                    <button class="btn btn-outline-dark" style="height: 35px">
                                        Xóa
                                    </button>
                                </section>
                                <div class="ps-4">
                                    <div
                                        class="progress animated-progress bg-light-subtle"
                                        style="height: 20px"
                                    >
                                        <div
                                            class="progress-bar bg-success"
                                            role="progressbar"
                                            style="width: 50%"
                                            aria-valuenow="50"
                                            aria-valuemin="0"
                                            aria-valuemax="100"
                                        >
                                            50%
                                        </div>
                                    </div>
                                    <div class="table-responsive table-hover table-card">
                                        <table class="table table-nowrap mt-4">
                                            <tbody>
                                            <tr class="cursor-pointer">
                                                <td class="col-1">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                            id="cardtableCheck01"
                                                        />
                                                    </div>
                                                </td>
                                                <td>
                                                    <p>checklist1</p>
                                                </td>
                                                <td class="text-end">
                                                    <i class="ri-time-line fs-20 ms-2"></i>
                                                    <i class="ri-user-add-line fs-20 ms-2"></i>
                                                    <i class="ri-more-fill fs-20 ms-2"></i>
                                                </td>
                                            </tr>
                                            <tr class="cursor-pointer addOrUpdate-checklist d-none">
                                                <td class="col-1">
                                                    <div class="form-check">
                                                        <input
                                                            class="form-check-input"
                                                            type="checkbox"
                                                            value=""
                                                        />
                                                    </div>
                                                </td>
                                                <td colspan="2">
                                                    <form
                                                        action=""
                                                        class="w-100 "
                                                        aria-labelledby=""
                                                    >
                                                        <input
                                                            type="text"
                                                            name=""
                                                            class="form-control checklistItem"
                                                            placeholder="Thêm mục"
                                                        />
                                                        <div class="d-flex mt-3 justify-content-between">
                                                            <div>
                                                                <button class="btn btn-primary">Thêm
                                                                </button>
                                                                <button
                                                                    class="btn btn-outline-dark disable-checklist"
                                                                >
                                                                    Hủy
                                                                </button>
                                                            </div>
                                                            <div>
                                                                <i class="ri-time-line fs-20 ms-2"></i>
                                                                <span>Chỉ định</span>
                                                                <i class="ri-user-add-line fs-20 ms-2"></i>
                                                                <span>Ngày hết hạn</span>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <button class="btn btn-outline-dark ms-3 display-checklist" type="button">
                                        Thêm mục
                                    </button>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <section class="d-flex">
                                    <i class="ri-line-chart-line fs-22"></i>
                                    <p class="fs-18 ms-2 mt-1">Hoạt động</p>
                                </section>
                                <div class="ps-4">
                              <textarea
                                  name=""
                                  cols="25"
                                  rows="5"
                                  class="form-control bg-light"
                                  placeholder="Viết bình luận..."
                              ></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <h5 class="mt-3 mb-3"><strong>Thêm vào thẻ</strong></h5>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-user"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Thành viên
                                    </p>
<!--dropdown thành viên-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">Thành viên</h5>
                                            <div class="mb-2">
                                                <input
                                                    type="search"
                                                    class="form-control"
                                                    placeholder="Tìm kiếm tên thành viên"
                                                />
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for=""
                                                >Thành viên của thẻ</label
                                                >
                                                <div class="mt-2 mb-2">
                                                    <a
                                                        href="javascript: void(0);"
                                                        class="avatar-group-item"
                                                        data-bs-trigger="hover"
                                                        data-bs-placement="top"
                                                        title="Nancy"
                                                    >
                                                        <img
                                                            src="assets/images/users/avatar-5.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-xs"
                                                        /></a>
                                                    <span>Name Member</span>
                                                </div>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for=""
                                                >Thành viên của bảng</label
                                                >
                                                <div class="mt-2 mb-2">
                                                    <a
                                                        href="javascript: void(0);"
                                                        class="avatar-group-item"
                                                        data-bs-trigger="hover"
                                                        data-bs-placement="top"
                                                        title="Nancy"
                                                    >
                                                        <img
                                                            src="assets/images/users/avatar-2.jpg"
                                                            alt=""
                                                            class="rounded-circle avatar-xs"
                                                        /></a>
                                                    <span>Name Member</span>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-tag"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Nhãn
                                    </p>
<!--dropdown nhãn-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">Nhãn</h5>
                                            <div class="mb-2">
                                                <input
                                                    type="search"
                                                    class="form-control"
                                                    placeholder="Tìm nhãn"
                                                />
                                            </div>
                                            <div class="mb-2">
                                                <label
                                                    for="primary_tags"
                                                    class="d-flex align-items-center"
                                                >
                                                    <input type="checkbox" name="" id="primary_tags"/>
                                                    <span class="bg bg-primary mx-2 rounded p-3 col-11">
                                      </span>
                                                </label>
                                                <br/>
                                                <label
                                                    for="danger_tags"
                                                    class="d-flex align-items-center"
                                                >
                                                    <input type="checkbox" name="" id="danger_tags"/>
                                                    <span class="bg bg-danger mx-2 rounded p-3 col-11">
                                      </span>
                                                </label>
                                                <br/>
                                                <label
                                                    for="success_tags"
                                                    class="d-flex align-items-center"
                                                >
                                                    <input type="checkbox" name="" id="success_tags"/>
                                                    <span class="bg bg-success mx-2 rounded p-3 col-11">
                                      </span>
                                                </label>
                                            </div>
                                            <button type="button" class="btn btn-light waves-effect">
                                                Tạo nhãn mới
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-check-square"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Việc cần làm
                                    </p>
<!--                                    dropdown việc cần làm-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">
                                                Thêm danh sách công việc
                                            </h5>
                                            <div class="mb-2">
                                                <label class="form-label" for="">Tiêu đề</label>
                                                <input
                                                    type="text"
                                                    class="form-control"
                                                    placeholder="Việc cần làm"
                                                />
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="">Sao chép từ mục</label>
                                                <select name="" class="form-control">
                                                    <option value="1">AAAA</option>
                                                    <option value="2">BBBB</option>
                                                    <option value="3">CCCC</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-clock"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Ngày
                                    </p>
<!--                                    dropdown ngày-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">Ngày</h5>
                                            <div class="mb-2">
                                                <label class="form-label" for="">Ngày bắt đầu</label>
                                                <input type="date" class="form-control"/>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for="">Ngày kết thúc</label>
                                                <input type="date" class="form-control"/>
                                            </div>
                                            <div class="mb-2">
                                                <label class="form-label" for=""
                                                >Thiết lập nhắc hẹn</label
                                                >
                                                <select name="" class="form-control">
                                                    <option value="1">Trước 1 giờ</option>
                                                    <option value="2">Trước 1 ngày</option>
                                                    <option value="3">Trươc 10 phút</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-primary waves-effect">
                                                Lưu
                                            </button>
                                            <button type="button" class="btn btn-light waves-effect">
                                                Gỡ bỏ
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-paperclip"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Đính kèm
                                    </p>
<!--                                    dropdown tệp điính kèm-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">
                                                Tệp đính kèm
                                            </h5>
                                            <div class="mb-2">
                                                <label class="form-label" for="">Thêm tệp đính
                                                    kèm</label>
                                                <input type="file" class="form-control"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-map-marker"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Vị trí
                                    </p>
<!--                                    dropdown vị trí-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">Thêm vị trí</h5>
                                            <div class="mb-2">
                                                <input
                                                    type="search"
                                                    class="form-control"
                                                    placeholder="Tìm kiếm vị trí"
                                                />
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-credit-card"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Ảnh bìa
                                    </p>
                                    <!--                                    dropdown ảnh bìa-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">Ảnh bìa</h5>
                                            <div class="mb-2">
                                                <label for="">Tải ảnh lên</label>
                                                <input type="file" class="form-control"/>
                                            </div>
                                            <div class="mb-2">
                                                <label for="">Tải ảnh lên</label>
                                                <input type="file" class="form-control"/>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <h5 class="mt-3 mb-3"><strong>Thao tác</strong></h5>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style="height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-arrow-circle-right"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Di chuyển
                                    </p>
                                    <!--                                    dropdown di chuyển-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">
                                                Di chuyển thẻ
                                            </h5>
                                            <h5>Chọn đích đến</h5>
                                            <div class="mb-2">
                                                <label for="">Bảng thông tin </label>
                                                <select
                                                    class="form-select mb-3"
                                                    aria-label="Default select example"
                                                >
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="">Danh sách</label>
                                                <select
                                                    class="form-select mb-3"
                                                    aria-label="Default select example"
                                                >
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-primary waves-effect">
                                                Di chuyển
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-copy"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Sao chép
                                    </p>
                                    <!--                                    dropdown sao chép-->
                                    <div class="dropdown-menu dropdown-menu-md p-4">
                                        <form>
                                            <h5 class="mb-3" style="text-align: center">
                                                Sao chép thẻ
                                            </h5>
                                            <div class="mb-2">
                                                <label for="">Tên </label>
                                                <input type="text" name="" class="form-control"/>
                                            </div>
                                            <h5>Sao chép đến</h5>
                                            <div class="mb-2">
                                                <label for="">Bảng thông tin </label>
                                                <select
                                                    class="form-select mb-3"
                                                    aria-label="Default select example"
                                                >
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-2">
                                                <label for="">Danh sách</label>
                                                <select
                                                    class="form-select mb-3"
                                                    aria-label="Default select example"
                                                >
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <button type="button" class="btn btn-primary waves-effect">
                                                Di chuyển
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-chalkboard"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Tạo mẫu
                                    </p>
                                    <div></div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las la-window-restore"></i>
                                    <p
                                        class="ms-2 mt-3 fs-15"
                                        data-bs-toggle="dropdown"
                                        aria-haspopup="true"
                                        aria-expanded="false"
                                    >
                                        Lưu trữ
                                    </p>
                                    <div></div>
                                </div>
                            </div>
                            <div class="d-flex mt-3 mb-3 cursor-pointer">
                                <div
                                    class="d-flex align-items-center justify-content-flex-start rounded p-3 text-white w-100"
                                    style=" height: 30px; background-color: darkgray"
                                >
                                    <i class="las ri-share-line"></i>
                                    <p class="ms-2 mt-3 fs-15">Chia sẻ</p>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



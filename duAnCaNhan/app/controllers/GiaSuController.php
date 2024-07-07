<?php
namespace App\Controllers;

use App\Models\GiaSu;

class GiaSuController extends BaseController
{
    public $giaSu;
    public function __construct()
    {
        $this->giaSu = new GiaSu();

    }
    private function uploadImage($img)
    {
        $targetDir = __DIR__ . "/../../public/img/";
        $targetFile = $targetDir . basename($img['name']);
        if (move_uploaded_file($img['tmp_name'], $targetFile)) {
            return $targetFile;
        } else {
            return false;
        }
    }

    public function trangChu()
    {
        return $this->render('trangchu.welcome');
    }
    public function lienHe()
    {
        return $this->render('trangchu.lienhe');
    }
    public function gioiThieu()
    {
        return $this->render('trangchu.gioithieu');
    }
    public function dichVu()
    {
        return $this->render('trangchu.dichvu');
    }
    public function dangKyThueGiaSu()
    {
        return $this->render('phuhuynh.dangkythuegiasu');
    }
    public function postParents()
    {
        if (isset($_POST['gui'])) {
            $error = [];

            if (empty($_POST['sex_parents'])) {
                $error[] = "Bạn chưa chọn giới tính";
            }

            if (empty($_POST['name'])) {
                $error[] = "Bạn chưa nhập học và tên";
            }

            if (empty($_POST['phone'])) {
                $error[] = "Bạn chưa nhập số điện thoại";
            }

            if (empty($_POST['address'])) {
                $error[] = "Bạn chưa nhập address";
            }
            if (empty($_POST['take_note'])) {
                $_POST['take_note'] = NULL;
            }

            if (count($error) >= 1) {
                redirect('errors', $error, '/dangkythuegiasu');
            } else {
                $this->giaSu->addParents(NULL, $_POST['name'], $_POST['sex_parents'], $_POST['phone'], $_POST['address'], $_POST['take_note']);
                return $this->render('phuhuynh.dangkythuegiasuthanhcong');
            }
        }
    }

    public function cachThucNhanLop()
    {
        return $this->render('giasu.cachthucnhanlop');
    }
    public function tongQuan()
    {
        return $this->render('giasu.tongQuan');
    }
    public function chinhSachHocThu()
    {
        return $this->render('giasu.chinhsachhocthu');
    }

    public function danhSachLopMoi()
    {
        $courses = $this->giaSu->getListCourses();
        return $this->render('giasu.danhsachlopmoi', compact('courses'));
    }

    public function chinhSachHoanPhi()
    {
        return $this->render('giasu.chinhsachhoanphi');
    }
    public function chiTietLop($id)
    {
        $courses = $this->giaSu->chiTietCourses($id);
        return $this->render('giasu.chitietlop', compact('courses'));
    }

    public function dangKyNhanLop($id)
    {
        $courses = $this->giaSu->chiTietCourses($id);
        return $this->render('giasu.dangkynhanlop', compact('courses'));
    }
    public function loadDuLieu()
    {
        if (isset($_POST['course_code'])) {
            $course_code = $_POST['course_code'];

            $course = $this->giaSu->chiTietCoursesTheoCode($course_code);

            $this->dangKyNhanLop($course->id);
        }
    }
    public function postNoteNhanLop()
    {
        // Lấy dữ liệu từ POST request
        $course_id = isset($_POST['course_id']) ? $_POST['course_id'] : null;
        $teacher_id = isset($_POST['teacher_id']) ? $_POST['teacher_id'] : null;

        // Kiểm tra xem course_id và teacher_id có tồn tại không
        if (!$course_id || !$teacher_id) {
            // Xử lý lỗi nếu thiếu dữ liệu
            echo "Thiếu thông tin đăng ký lớp!";
            return;
        }
        $course_code = $this->giaSu->getCourseCode($course_id);
        $status_ct = 0;

        $this->giaSu->addNoteNhanLop(Null, $course_id, $teacher_id, $course_code, $status_ct);

        $courses = $this->giaSu->chiTietCourses($course_id);
        return $this->render('giasu.notenhanlopthanhcong', compact('courses'));
    }
    public function hopDongMau()
    {
        return $this->render('giasu.hopdongmau');
    }
    public function taoNoteNhanLop()
    {
        return $this->render('giasu.taonotenhanlop');
    }

    public function hoSoThongTin()
    {
        return $this->render('giasu.quanlytaikhoan.hosothongtin');
    }

    public function doiMatKhau()
    {
        return $this->render('giasu.quanlytaikhoan.doimatkhau');
    }
    public function quanLyNoteNhanLop()
    {
        $course_teacher = $this->giaSu->getNoteNhanLop($_SESSION['teacher']->id);

        return $this->render('giasu.quanlytaikhoan.quanlynotenhanlop', compact('course_teacher'));
    }
    // public function quanLyTaiKhoan() {
    //     return $this->render('giasu.quanlytaikhoan.quanlytaikhoan');
    // }

    public function quanLyTaiKhoan()
    {
        $id = $_SESSION['user']->id;

        $teacher = $this->giaSu->getTeacherById($id);
        $hoSoThongTinDayDu = $this->kiemTraHoSoThongTinDayDu($teacher);

        $teacher_term = $this->giaSu->getTeacherTerm($teacher->id);
        $dongYDieuKhoan = $this->kiemTraDongYDieuKhoan($teacher_term);

        $handle_teacher = $this->giaSu->getHandleTeacher($teacher->id);
        $xuLyTinhHuong = $this->kiemTraXuLyTinhHuong($handle_teacher);

        return $this->render('giasu.quanlytaikhoan.quanlytaikhoan', compact('hoSoThongTinDayDu', 'dongYDieuKhoan', 'xuLyTinhHuong'));
    }

    public function kiemTraHoSoThongTinDayDu($teacher)
    {

        if (!empty($teacher->profile_picture) && !empty($teacher->phone_number) && !empty($teacher->sex) && !empty($teacher->year_of_birth) && !empty($teacher->school) && !empty($teacher->major) && !empty($teacher->verify_education)) {
            return true;
        }
        return false;
    }
    public function kiemTraDongYDieuKhoan($teacher_term)
    {
        if (count($teacher_term) == 4) {
            return true;
        } else {
            return false;
        }
    }
    public function kiemTraXuLyTinhHuong($hand_teacher)
    {
        if (count($hand_teacher) == 1) {
            return true;
        } else {
            return false;
        }
    }
    
    public function xuLyTinhHuong() {
        $id = $_SESSION['user']->id; 
        $teacher = $this->giaSu->getTeacherById($id);
        $handle_teacher = $this->giaSu->getHandleTeacher($teacher->id);
        $xuLyTinhHuong = $this->kiemTraXuLyTinhHuong($handle_teacher);
        return $this->render('giasu.quanlytaikhoan.xulytinhhuong', compact('xuLyTinhHuong'));
    }
    public function postXuLyTinhHuong()
    {
        if (isset($_POST['gui'])) {

            $teacher_id = $_SESSION['teacher']->id;
            $hand_teacher = $this->giaSu->addHandleTeacher($teacher_id, 1);

            if ($hand_teacher) {
                $_SESSION['success'] = "Xác nhận xử lý tình huống thành công";
                redirect('success', "Xác nhận xử lý tình huống thành công", '/xulytinhhuong');
            } else {
                $error[] = "Có lỗi xảy ra, vui lòng thử lại";
                redirect('errors', $error, '/xulytinhhuong');
            }
        } 
    }
    public function dongYDieuKhoan()
    {
        $id = $_SESSION['user']->id;
        $teacher = $this->giaSu->getTeacherById($id);
        $teacher_term = $this->giaSu->getTeacherTerm($teacher->id);
        $dongYDieuKhoan = $this->kiemTraDongYDieuKhoan($teacher_term);
        return $this->render('giasu.quanlytaikhoan.dongydieukhoan', compact('dongYDieuKhoan'));
    }

    public function postDongYDieuKhoan()
    {
        if (isset($_POST['gui'])) {
            if (!isset($_POST['option1']) || !isset($_POST['option2']) || !isset($_POST['option3']) || !isset($_POST['option4'])) {
                $error[] = "Bạn phải đồng ý với tất cả các điều khoản.";
                redirect('errors', $error, '/dongydieukhoan');
            } else {
                // Lấy id của giáo viên từ session hoặc bất kỳ cơ chế xác định người dùng hiện tại
                $teacher_id = $_SESSION['teacher']->id;

                // Thực hiện lưu vào cơ sở dữ liệu
                $check1 = $this->giaSu->addTeacherTerm($teacher_id, 1); // Điều khoản 1
                $check2 = $this->giaSu->addTeacherTerm($teacher_id, 2); // Điều khoản 2
                $check3 = $this->giaSu->addTeacherTerm($teacher_id, 3); // Điều khoản 3
                $check4 = $this->giaSu->addTeacherTerm($teacher_id, 4); // Điều khoản 4

                if ($check1 && $check2 && $check3 && $check4) {
                    $_SESSION['success'] = "Cập nhật đồng ý điều khoản thành công";
                    redirect('success', "Cập nhật đồng ý điều khoản thành công", '/dongydieukhoan');
                } else {
                    $error[] = "Có lỗi xảy ra, vui lòng thử lại";
                    redirect('errors', $error, '/dongydieukhoan');
                }
            }

        } elseif (isset($_POST['huy'])) {
            redirect('/quanlytaikhoan'); // Điều hướng về trang khác nếu hủy bỏ
        }
    }
    public function lopDaNhan()
    {
        $course_teacher = $this->giaSu->getNoteNhanLop($_SESSION['teacher']->id);
        return $this->render('giasu.quanlytaikhoan.lopdanhan', compact('course_teacher'));
    }

    public function dangKy()
    {
        return $this->render('dangky');
    }
    public function dangNhap()
    {
        return $this->render('dangnhap');
    }

    public function postUser()
    {
        if (isset($_POST['gui'])) {
            $error = [];

            if (empty($_POST['name'])) {
                $error[] = "Bạn chưa nhập tên";
            }

            if (empty($_POST['email'])) {
                $error[] = "Bạn chưa nhập email";
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "Email không hợp lệ";
            }

            if (empty($_POST['password'])) {
                $error[] = "Bạn chưa nhập mật khẩu";
            } elseif (strlen($_POST['password']) < 8) {
                $error[] = "Mật khẩu phải có ít nhất 8 ký tự";
            }

            if ($_POST['confirm_password'] != $_POST['password']) {
                $error[] = "Mật khẩu xác nhận không khớp";
            }
            $_POST['role'] = 0;


            if (count($error) >= 1) {
                redirect('errors', $error, '/dangky');
            } else {
                $user_id = $this->giaSu->addUser(NULL, $_POST['name'], $_POST['email'], $_POST['password'], $_POST['role']);

                if ($user_id) {
                    $check_teacher = $this->giaSu->addTeacher(NULL, $user_id);

                    if ($check_teacher) {
                        redirect('success', "Thêm thành công", '/dangky');
                    } else {
                        redirect('errors', "Lỗi khi thêm giáo viên", '/dangky');
                    }
                } else {
                    redirect('errors', "Lỗi khi thêm người dùng", '/dangky');
                }
            }
        }
    }

    public function postUserDangNhap()
    {
        if (isset($_POST['gui'])) {
            $error = [];

            // Validate email
            if (empty($_POST['email'])) {
                $error[] = "Bạn chưa nhập email";
            } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $error[] = "Email không hợp lệ";
            }

            // Validate password
            if (empty($_POST['password'])) {
                $error[] = "Bạn chưa nhập mật khẩu";
            } elseif (strlen($_POST['password']) < 8) {
                $error[] = "Mật khẩu phải có ít nhất 8 ký tự";
            }

            if (count($error) >= 1) {
                redirect('errors', $error, '/dangnhap');
            } else {
                $email = $_POST['email'];
                $password = $_POST['password'];

                $user = $this->giaSu->getUserByEmailAndPassword($email, $password);

                if ($user) {
                    session_start();
                    $_SESSION['user'] = $user;

                    $teacher = $this->giaSu->getTeacherById($_SESSION['user']->id);
                    $_SESSION['teacher'] = $teacher;

                    if ($user->role == 0) {
                        redirect('success', "Đăng nhập thành công", '/quanlytaikhoan');
                    } else {
                        redirect('success', "Đăng nhập thành công", '/admin');
                    }
                } else {
                    $error[] = "Email hoặc mật khẩu không đúng";
                    redirect('errors', $error, '/dangnhap');
                }
            }
        }
    }

    public function dangXuat()
    {
        unset($_SESSION['user']);
        return $this->render('giasu.tongQuan');
    }

    public function postHoSoThongTin()
    {
        if (isset($_POST['gui'])) {
            $error = [];

            if (empty($_POST['phone'])) {
                $error[] = "Bạn chưa nhập số điện thoại";
            }

            if (empty($_POST['sex'])) {
                $error[] = "Bạn chưa nhập giới tính";
            }

            if (empty($_POST['year_of_birth'])) {
                $error[] = "Bạn chưa nhập năm sinh";
            }

            if (empty($_POST['school'])) {
                $error[] = "Bạn chưa nhập trường";
            }


            if (empty($_POST['major'])) {
                $error[] = "Bạn chưa nhập chuyên ngành";
            }

            if (empty($_POST['verify_education'])) {
                $error[] = "Bạn chưa nhập xác minh giáo dục";
            }

            if (empty($_FILES['profile_picture']['name']) && empty($_SESSION['teacher']->profile_picture)) {
                $error[] = 'Bạn phải nhập ảnh đại diện';
            }

            if ($_POST['verify_education'] == 'Xác minh bằng cách upload ảnh' && empty($_FILES['img_graduation']['name']) && empty($_SESSION['teacher']->img_graduation)) {
                $error[] = 'Bạn phải nhập ảnh tốt nghiệp';
            }

            if (count($error) >= 1) {
                redirect('errors', $error, '/hosothongtin');
            } else {
                $id = $_SESSION['user']->id;

                $sex = $_POST['sex'];
                $phone = $_POST['phone'];
                $school = $_POST['school'];
                $year_of_birth = $_POST['year_of_birth'];
                $major = $_POST['major'];
                $verify_education = $_POST['verify_education'];

                $img_profile = $this->uploadImage($_FILES['profile_picture']);

                if ($verify_education == 'Xác minh bằng cách upload ảnh') {
                    $img_graduation = $this->uploadImage($_FILES['img_graduation']);
                } else {
                    $img_graduation = '';
                }
                $teacher = $this->giaSu->getTeacherById($id);

                if ($teacher) {
                    $check = $this->giaSu->updateProfile($id, $img_profile, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation);
                    if ($check) {
                        $_SESSION['success'] = "Cập nhật hồ sơ thành công";
                    } else {
                        $error[] = "Có lỗi xảy ra, vui lòng thử lại";
                        redirect('errors', $error, '/hosothongtin');
                    }
                } else {
                    $check = $this->giaSu->updateProfile($id, $img_profile, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation);
                    if ($check) {
                        $_SESSION['success'] = "Cập nhật hồ sơ thành công";
                    } else {
                        $error[] = "Có lỗi xảy ra, vui lòng thử lại";
                        redirect('errors', $error, '/hosothongtin');
                    }
                }

                $_SESSION['teacher'] = $this->giaSu->getTeacherById($id);
                redirect('success', "Cập nhật hồ sơ thành công", '/hosothongtin');
            }
        }
    }

    //admin
    public function admin()
    {
        return $this->render('admin.welcome');
    }
    public function adminQuanLyParents()
    {
        $parents = $this->giaSu->getParents();

        return $this->render('admin.quanlyphuhuynh.list', compact('parents'));
    }
    public function adminQuanLyTeacher()
    {
        $teachers = $this->giaSu->getTeachers();

        return $this->render('admin.quanlyteacher.list', compact('teachers'));
    }

    public function adminQuanLyNoteNhanLop()
    {
        $notenhanlop = $this->giaSu->listNoteNhanLop();

        return $this->render('admin.quanlynotenhanlop.list', compact('notenhanlop'));
    }
    public function adminQuanLyCourse()
    {
        $courses = $this->giaSu->getCourses();

        return $this->render('admin.quanlycourse.list', compact('courses'));
    }


    public function adminPostCourse()
    {
        $parents = $this->giaSu->getParents();
        return $this->render('admin.quanlycourse.add', compact('parents'));
    }

    public function adminUpPostCourse()
    {
        if (isset($_POST['gui'])) {
            $error = [];

            if (empty($_POST['code'])) {
                $error[] = "Bạn chưa nhập mã lớp";
            }

            if (empty($_POST['subject'])) {
                $error[] = "Bạn chưa chọn môn học";
            }

            if (empty($_POST['class'])) {
                $error[] = "Bạn chưa chọn lớp";
            }

            if (empty($_POST['address'])) {
                $error[] = "Bạn chưa nhập địa chỉ";
            }

            if (empty($_POST['district'])) {
                $error[] = "Bạn chưa chọn khu vực";
            }

            if (empty($_POST['sex_student'])) {
                $error[] = "Bạn chưa chọn giới tính học sinh";
            }

            if (empty($_POST['des_student'])) {
                $error[] = "Bạn chưa nhập mô tả học sinh";
            }

            if (empty($_POST['add_information'])) {
                $_POST['add_information'] = "";
            }

            if (empty($_POST['fee'])) {
                $error[] = "Bạn chưa nhập học phí";
            }

            if (empty($_POST['sessions_week'])) {
                $error[] = "Bạn chưa nhập số buổi/tuần";
            }

            if (empty($_POST['time_learn'])) {
                $error[] = "Bạn chưa nhập thời gian học";
            }

            if (empty($_POST['request'])) {
                $error[] = "Bạn chưa nhập yêu cầu";
            }

            if (empty($_POST['parents_id'])) {
                $error[] = "Bạn chưa chọn phụ huynh học sinh";
            }

            $status = "open";

            if (count($error) >= 1) {
                redirect('errors', $error, '/adminpostcourse');
            } else {
                $this->giaSu->addCourse(NULL, $_POST['code'], $_POST['subject'], $_POST['class'], $_POST['address'], $_POST['district'], $_POST['sex_student'], $_POST['des_student'], $_POST['add_information'], $_POST['fee'], $_POST['sessions_week'], $_POST['time_learn'], $status, $_POST['request'], $_POST['parents_id']);
                redirect('success', "Thêm lớp thành công", '/adminquanlycourse');
            }
        }


    }
    public function adminUpdateCourse($id)
    {
        $teachers = $this->giaSu->getTeachers_Note($id);
        $course = $this->giaSu->getOneCourse($id);
        $parents = $this->giaSu->getOneParents($course->parents_id);

        return $this->render('admin.quanlycourse.update', compact('teachers', 'course', 'parents'));
    }

    public function adminUpUpdateCourse($id)
    {
        if (isset($_POST['gui'])) {
            $error = [];

            if (empty($_POST['code'])) {
                $error[] = "Bạn chưa nhập mã lớp";
            }

            if (empty($_POST['subject'])) {
                $error[] = "Bạn chưa chọn môn học";
            }

            if (empty($_POST['class'])) {
                $error[] = "Bạn chưa chọn lớp";
            }

            if (empty($_POST['address'])) {
                $error[] = "Bạn chưa nhập địa chỉ";
            }

            if (empty($_POST['district'])) {
                $error[] = "Bạn chưa chọn khu vực";
            }

            if (empty($_POST['sex_student'])) {
                $error[] = "Bạn chưa chọn giới tính học sinh";
            }

            if (empty($_POST['des_student'])) {
                $error[] = "Bạn chưa nhập mô tả học sinh";
            }

            if (empty($_POST['add_information'])) {
                $_POST['add_information'] = "";
            }

            if (empty($_POST['fee'])) {
                $error[] = "Bạn chưa nhập học phí";
            }

            if (empty($_POST['sessions_week'])) {
                $error[] = "Bạn chưa nhập số buổi/tuần";
            }

            if (empty($_POST['time_learn'])) {
                $error[] = "Bạn chưa nhập thời gian học";
            }

            if (empty($_POST['request'])) {
                $error[] = "Bạn chưa nhập yêu cầu";
            }

            if (empty($_POST['parents_id'])) {
                $error[] = "Bạn chưa chọn phụ huynh học sinh";
            }

            if (empty($_POST['teacher_id'])) {
                $_POST['teacher_id'] = null;
            } else {
                $status = "close";
            }

            if (count($error) >= 1) {
                redirect('errors', $error, '/adminupdatecourse' . '/' . $id);
            } else {
                $this->giaSu->updateCourse($id, $_POST['code'], $_POST['subject'], $_POST['class'], $_POST['address'], $_POST['district'], $_POST['sex_student'], $_POST['des_student'], $_POST['add_information'], $_POST['fee'], $_POST['sessions_week'], $_POST['time_learn'], $status, $_POST['request'], $_POST['teacher_id'], $_POST['parents_id']);

                if (!empty($_POST['teacher_id'])) {
                    $status_ct = 1;
                    $this->giaSu->updateNoteNhanLop($id, $_POST['teacher_id'], $status_ct);
                }
                redirect('success', "Cập nhật lớp thành công", '/adminquanlycourse');
            }
        }
    }

}
?>
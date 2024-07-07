<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
$router->get('/',[App\Controllers\GiaSuController::class, 'trangChu']);

$router->get('lienhe', [App\Controllers\GiaSuController::class, 'lienHe']);
$router->get('gioithieu', [App\Controllers\GiaSuController::class, 'gioiThieu']);
$router->get('dichvu', [App\Controllers\GiaSuController::class, 'dichVu']);

$router->get('tongquan', [App\Controllers\GiaSuController::class, 'tongQuan']);
$router->get('hopdongmau', [App\Controllers\GiaSuController::class, 'hopDongMau']);
$router->get('danhsachlopmoi', [App\Controllers\GiaSuController::class, 'danhSachLopMoi']);
$router->get('requestcourses', [App\Controllers\GiaSuController::class, 'requestCourses']);


$router->get('taonotenhanlop', [App\Controllers\GiaSuController::class, 'taoNoteNhanLop']);
$router->post('loaddulieu', [App\Controllers\GiaSuController::class, 'loadDuLieu']);

$router->get('chitietlop/{id}', [App\Controllers\GiaSuController::class, 'chiTietLop']);
$router->get('dangkynhanlop/{id}', [App\Controllers\GiaSuController::class, 'dangKyNhanLop']);
$router->post('postnotenhanlop', [App\Controllers\GiaSuController::class, 'postNoteNhanLop']);

$router->get('chinhsachhoanphi', [App\Controllers\GiaSuController::class, 'chinhSachHoanPhi']);
$router->get('cachthucnhanlop', [App\Controllers\GiaSuController::class, 'cachThucNhanLop']);

$router->get('chinhsachhocthu', [App\Controllers\GiaSuController::class, 'chinhSachHocThu']);
$router->get('doimatkhau', [App\Controllers\GiaSuController::class, 'doiMatKhau']);

$router->get('dongydieukhoan', [App\Controllers\GiaSuController::class, 'dongYDieuKhoan']);
$router->post('postdongydieukhoan', [App\Controllers\GiaSuController::class, 'postDongYDieuKhoan']);

$router->get('hosothongtin', [App\Controllers\GiaSuController::class, 'hoSoThongTin']);
$router->post('post-ho-so-thong-tin', [App\Controllers\GiaSuController::class, 'postHoSoThongTin']);


$router->get('quanlynotenhanlop', [App\Controllers\GiaSuController::class, 'quanLyNoteNhanLop']);
$router->get('quanlytaikhoan', [App\Controllers\GiaSuController::class, 'quanLyTaiKhoan']);
$router->get('xulytinhhuong', [App\Controllers\GiaSuController::class, 'xuLyTinhHuong']);
$router->post('postxulytinhhuong', [App\Controllers\GiaSuController::class, 'postXuLyTinhHuong']);


$router->get('lopdanhan', [App\Controllers\GiaSuController::class, 'lopDaNhan']);

$router->get('dangky', [App\Controllers\GiaSuController::class, 'dangKy']);
$router->post('post-user', [App\Controllers\GiaSuController::class, 'postUser']);

$router->get('dangnhap', [App\Controllers\GiaSuController::class, 'dangNhap']);
$router->post('post-user-dang-nhap', [App\Controllers\GiaSuController::class, 'postUserDangNhap']);

$router->get('dangxuat', [App\Controllers\GiaSuController::class, 'dangXuat']);

$router->get('dangkythuegiasu', [App\Controllers\GiaSuController::class, 'dangKyThueGiaSu']);
$router->post('postparents', [App\Controllers\GiaSuController::class, 'postParents']);

$router->get('admin', [App\Controllers\GiaSuController::class, 'admin']);
$router->get('adminquanlyparents', [App\Controllers\GiaSuController::class, 'adminQuanLyParents']);

$router->get('adminquanlynotenhanlop', [App\Controllers\GiaSuController::class, 'adminQuanLyNoteNhanLop']);

$router->get('adminquanlyteachers', [App\Controllers\GiaSuController::class, 'adminQuanLyTeacher']);

$router->get('adminquanlycourse', [App\Controllers\GiaSuController::class, 'adminQuanLyCourse']);

$router->get('adminpostcourse', [App\Controllers\GiaSuController::class, 'adminPostCourse']);
$router->post('adminuppostcourse', [App\Controllers\GiaSuController::class, 'adminUpPostCourse']);

$router->get('adminupdatecourse/{id}', [App\Controllers\GiaSuController::class, 'adminUpdateCourse']);
$router->post('adminupupdatecourse/{id}', [App\Controllers\GiaSuController::class, 'adminUpUpdateCourse']);



# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


// Hàm để hiển thị Blade view
function view($viewPath) {
    // Đường dẫn tuyệt đối đến thư mục chứa views
    $viewsPath = __DIR__ . '/app/view/';

    // Tên tệp Blade
    $bladeFile = $viewsPath . $viewPath . '.blade.php';

    // Kiểm tra xem tệp Blade có tồn tại hay không
    if (file_exists($bladeFile)) {
        // Bắt đầu bắt đầu bộ nhớ đệm đầu ra
        ob_start();
        // Include tệp Blade
        include $bladeFile;
        // Trả về nội dung từ bộ nhớ đệm đầu ra và xóa bộ nhớ đệm
        return ob_get_clean();
    } else {
        // Nếu tệp Blade không tồn tại, trả về thông báo lỗi
        return 'Không tìm thấy view: ' . $viewPath;
    }
}



?>
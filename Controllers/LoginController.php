<?php
//model : đường dẫn đến login để đăng nhập
require_once("Models/login.php");
class LoginController
{
    var $login_model;
     // __construct : tự động gọi đối tượng được tạo
    public function __construct()
    {
        $this->login_model = new Login();
    }

    // khi lấy đc dữ liệu từ csdl thì nó sẽ trỏ đến view để hiển thị giao diện người dùng
    function login()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
        // trỏ đến view.php
        require_once('Views/index.php');
    }

    // Lấy dữ liệu từ form đăng nhập, kiểm tra mã hóa md5
    function login_action()
    {
        $taikhoan = $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        // strpos : kiểm tra ký tự đặc biệt
        if (strpos($taikhoan, "'") != false) {
            $taikhoan = str_replace("'", "\'", $taikhoan);
        }
        $data = array(
            'taikhoan' => $taikhoan,
            'matkhau' => $matkhau,
        );
        $this->login_model->login_action($data);
    }
    /////////////////////////////////////
    // hàm chức năng đăng ký
    function dangky()
    {
        $check1 = 0;
        $check2 = 0;
        $data_check = $this->login_model->check_account();
        foreach ($data_check as $value) {
            if ($value['Email'] == $_POST['Email'] || $value['TaiKhoan'] == $_POST['TaiKhoan']) {
                $check1 = 1;
            }
        }

        if ($_POST['MatKhau'] != $_POST['check_password']) {
            $check2 = 1;
        }

        $data = array(
            'Ho' =>    $_POST['Ho'],
            'Ten'  =>   $_POST['Ten'],
            'GioiTinh' => "",
            'SDT' => $_POST['SĐT'],
            'Email' =>    $_POST['Email'],
            'DiaChi'  =>   "",
            'TaiKhoan' => $_POST['TaiKhoan'],
            'MatKhau' => md5($_POST['MatKhau']),
            'MaQuyen' =>  '1',
            'TrangThai'  =>  '1',
        );
        foreach ($data as $key => $value) {
            if (strpos($value, "'") != false) {
                $value = str_replace("'", "\'", $value);
                $data[$key] = $value;
            }
        }

        $this->login_model->dangky_action($data, $check1, $check2);
    }
    function dangxuat()
    {
        $this->login_model->logout();
    }
    function account()
    {
        $data_danhmuc = $this->login_model->danhmuc();

        $data_chitietDM = array();

        for ($i = 1; $i <= count($data_danhmuc); $i++) {
            $data_chitietDM[$i] = $this->login_model->chitietdanhmuc($i);
        }
        $data = $this->login_model->account();

        require_once('Views/index.php');
    }
    function update()
    {

        if (isset($_POST['Ho'])) {
            $data = array(
                'Ho' =>    $_POST['Ho'],
                'Ten'  =>   $_POST['Ten'],
                'GioiTinh' => $_POST['GioiTinh'],
                'SDT' => $_POST['SĐT'],
                'Email' =>    $_POST['Email'],
                'DiaChi'  =>   $_POST['DiaChi'],
            );
            foreach ($data as $key => $value) {
                if (strpos($value, "'") != false) {
                    $value = str_replace("'", "\'", $value);
                    $data[$key] = $value;
                }
            }
            $this->login_model->update_account($data);
        } else {
            if ($_POST['MatKhauMoi'] == $_POST['MatKhauXN']) {
                if (md5($_POST['MatKhau']) == $_SESSION['login']['MatKhau']) {
                    $data = array(
                        'MatKhau' => md5($_POST['MatKhauMoi']),
                    );
                    $this->login_model->update_account($data);
                } else {
                    setcookie('doimk', 'Mật khẩu không đúng', time() + 2);
                }
            } else {
                setcookie('doimk', 'Mật khẩu mới không trùng nhau', time() + 2);
            }
        }
        header('location: ?act=taikhoan&xuli=account#doitk');
    }
}

<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');
class Home extends CI_Controller
{
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model(['Madmin']);
        $this->load->database();
        $this->load->helper(['url', 'func_helper']);
        $this->load->library(['pagination311', 'session']);
    }
    public function home()
    {
        $time = time();
        $data['canonical'] = base_url();
        $data['blog'] = $this->Madmin->get_limit("type = 0 AND time_post <= $time", 'blogs', 0, 20);
        $data['blog_new'] = $this->Madmin->get_limit("type = 0 AND time_post <= $time", 'blogs', 0, 5);
        $data['meta_title'] = 'Sic88 - Links Nhà Cái Mở Cổng Đăng Ký Chính Thức';
        $data['meta_des'] = 'Sic88 là nhà cái mới tại Việt Nam nhưng đã gây ấn tượng mạnh mẽ với người chơi từ chất lượng game đến công nghệ hiện đại. Xem chi tiết ngay!';
        $data['content'] = 'home';
        $data['list_js'] = [
            'slick.min.js',
            'home.js',
        ];
        $data['list_css'] = [
            'slick.css',
            'slick-theme.css',
            'home.css'
        ];
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function chuyenmuc($alias)
    {
        $time = time();
        $alias = trim($alias);
        $data['canonical'] = base_url() . $alias . '/';
        $chuyenmuc = $this->Madmin->get_by(['alias' => $alias], 'category');
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE blogs.alias = '$alias' ");
        if ($chuyenmuc != null) { //chuyenmuc
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/');
            }
            $page = $this->uri->segment(3);
            if ($page < 1 || $page == '') {
                $page = 1;
            }
            $limit = 18;
            $start = $limit * ($page - 1);
            $count_or['chuyenmuc'] = $chuyenmuc['id'];
            if ($chuyenmuc['parent'] == 0) {
                $count_or['cate_parent'] = $chuyenmuc['id'];
            }
            $count = $this->Madmin->num_rows_or("type = 0 AND time_post <= $time", $count_or, 'blogs');
            pagination('/' . $chuyenmuc['alias'], $count, $limit);
            $chuyenmuc_parent = $this->Madmin->get_by(['id' => $chuyenmuc['parent']], 'category');
            $title_page = $chuyenmuc['name'];
            if ($chuyenmuc_parent != null) {
                $title_page = $chuyenmuc_parent['name'] . ' - ' . $chuyenmuc['name'];
            }
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
            $data['blog'] = $this->Madmin->get_limit_or("type = 0 AND time_post <= $time", $count_or, 'blogs', $start, $limit);
            $data['title_page'] = $title_page;
            $data['content_cate'] = $chuyenmuc['content'];
            $data['chuyenmuc'] = $chuyenmuc['id'];
            $data['meta_title'] = $chuyenmuc['meta_title'];
            $data['meta_des'] = $chuyenmuc['meta_des'];
            $data['meta_key'] = $chuyenmuc['name'];
            $data['content'] = 'chuyenmuc_blog';
            $data['list_js'] = [
                'chuyenmuc_blog.js',
            ];
            $data['list_css'] = [
                'chuyenmuc_blog.css',
            ];
        } else if ($blog != null) { // blog
            if ($_SERVER['REQUEST_URI'] != '/' . $alias . '/') {
                redirect('/' . $alias . '/');
            }
            if (!admin() && $blog['time_post'] > $time) {
                redirect('/');
            }
            $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE chuyenmuc = {$blog['chuyenmuc']} AND type = 0 AND time_post <= $time AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 3");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE  id != {$blog['id']} AND type = 0 AND time_post <= $time  ORDER BY id DESC LIMIT 5");
            $cate = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$blog['chuyenmuc']} ");
            $title_page = $cate['name'];
            $cate_alias = $cate['alias'];
            if ($cate['parent'] > 0) {
                $cate_parent = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$cate['parent']} ");
                $title_page = $cate_parent['name'] . ' - ' . $cate['name'];
            }
            $data['breadcrumb'] = $title_page;
            $data['cate_alias'] = $cate_alias;
            $data['blog'] = $blog;
            $data['content'] = 'detail_blog';
            $data['list_js'] = [
                'detail_blog.js',
            ];
            $data['list_css'] = [
                'detail_blog.css',
            ];
            $data['meta_title'] = $blog['meta_title'];
            $data['meta_des'] = $blog['meta_des'];
            $data['meta_key'] = $blog['meta_key'];
            $data['meta_img'] = $blog['image'];
        } else {
            redirect('/');
        }
        $data['index'] = 1;
        $this->load->view('index', $data);
    }
    public function detail_blog($alias)
    {
        $time = time();
        $blog = $this->Madmin->query_sql_row("SELECT blogs.*,category.name as name_cate,category.alias as alias_cate,category.image as img_cate FROM blogs INNER JOIN category ON category.id = blogs.chuyenmuc WHERE blogs.alias = '$alias' ");
        if ($blog != null) {
            if (!admin() && $blog['time_post'] > $time) {
                redirect('/');
            }
            $data['blog_same'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE type = 0 AND time_post <= $time AND chuyenmuc = {$blog['chuyenmuc']} AND id != {$blog['id']}  ORDER BY updated_at DESC LIMIT 3");
            $data['blog_new'] = $this->Madmin->query_sql("SELECT * FROM blogs WHERE type = 0 AND time_post <= $time AND  id != {$blog['id']}  ORDER BY id DESC LIMIT 6");
            $cate = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$blog['chuyenmuc']} ");
            $title_page = $cate['name'];
            if ($cate['parent'] > 0) {
                $cate_parent = $this->Madmin->query_sql_row("SELECT *  FROM category  WHERE id = {$cate['parent']} ");
                $title_page = $cate_parent['name'] . ' - ' . $cate['name'];
            }
            $data['breadcrumb'] = $title_page;
            $data['blog'] = $blog;
            $data['content'] = 'detail_blog';
            $data['list_js'] = [
                'detail_blog.js',
            ];
            $data['list_css'] = [
                'detail_blog.css',
            ];
            $data['meta_title'] = $blog['meta_title'];
            $data['meta_des'] = $blog['meta_des'];
            $data['meta_key'] = $blog['meta_key'];
            $data['meta_img'] = $blog['image'];
            $this->load->view('index', $data);
        } else {
            redirect('/');
        }
    }
    public function import_file()
    {
        $data['content'] = 'get_blog';
        $this->load->view('index', $data);
    }
    public function test()
    {
        $url_post = $this->input->post('url_blog');
        error_reporting(0);
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL =>  $url_post,
            CURLOPT_USERAGENT => 'XuanThuLab test cURL Request',
            CURLOPT_SSL_VERIFYPEER => false,
        ));
        $alias = str_replace('https://fic88.info/', '', $url_post);
        $resp = curl_exec($curl);
        $data['data_content'] = $resp;
        $data['alias_url'] = str_replace('/', '', $alias);
        $data['content'] = 'get_content';
        $this->load->view('index', $data);
    }
    public function add_blog()
    {
        $data['title'] = $this->input->post('h1');
        $data['alias'] = $alias =  $this->input->post('alias');
        $data['meta_title'] = $this->input->post('title');
        $data['meta_des']     = $this->input->post('des');
        $data['updated_at'] = strtotime($this->input->post('date'));
        $data['created_at'] = strtotime($this->input->post('date'));
        $content = $this->input->post('content');
        $img = $this->input->post('img');
        $list_img = explode(',', $this->input->post('list_img'));
        $url_cate = $this->input->post('url_cate');
        $url_cate_new = str_replace('https://fic88.info/', '', $this->input->post('url_cate'));
        $alias_cate = str_replace('/', '', $url_cate_new);
        $text_cate = $this->input->post('text_cate');
        $url_cate_child = str_replace($url_cate, '', $this->input->post('url_cate_child'));
        $alias_cate_child = str_replace('/', '', $url_cate_child);
        $text_cate_child = $this->input->post('text_cate_child');
        $where_blog = [
            'alias' =>  $alias
        ];
        $blog = $this->Madmin->get_by($where_blog, 'blogs');
        if ($blog == null) {
            $where_cate = [
                'alias' => $alias_cate,
                'parent' => 0
            ];
            $cate = $this->Madmin->get_by($where_cate, 'category');
            if ($cate != null) {
                $id_cate = $cate['id'];
            } else {
                $data_insert_cate = [
                    'name' => $text_cate,
                    'alias' => $alias_cate,
                    'meta_title' => $text_cate
                ];
                $id_cate = $this->Madmin->insert($data_insert_cate, 'category');
            }
            if ($alias_cate_child != '') {
                $where_cate_child = [
                    'alias' => $alias_cate_child,
                    'parent' => $id_cate
                ];
                $cate_child = $this->Madmin->get_by($where_cate_child, 'category');
                if ($cate_child != null) {
                    $id_cate_child = $cate_child['id'];
                } else {
                    $data_insert_cate_child = [
                        'name' => $text_cate_child,
                        'alias' => $alias_cate_child,
                        'parent' => $id_cate,
                        'meta_title' => $text_cate_child
                    ];
                    $id_cate_child = $this->Madmin->insert($data_insert_cate_child, 'category');
                }
            } else {
                $id_cate_child =  $id_cate;
                $id_cate = 0;
            }
            foreach ($list_img as $val) {
                if ($val != '') {
                    $this_val = explode('/', $val);
                    $name_img =  array_pop($this_val);
                    $new_name = 'assets/img_blog/images/' . $name_img;
                    copy($val, $new_name);
                    $content = str_replace($val, '/' . $new_name, $content);
                }
            }
            $data['content'] = $content;
            $data['chuyenmuc'] = $id_cate_child;
            $data['cate_parent'] = $id_cate;
            copy($img, 'upload/blog/' . $alias . '.jpg');
            $data['image']     =  'upload/blog/' . $alias . '.jpg';

            $insert_blog = $this->Madmin->insert($data, 'blogs');
            $response = [
                'status' => 1,
            ];
        } else {
            $response = [
                'status' => 0,
            ];
        }
        echo json_encode($response);
    }
    public function file_excel()
    {
        error_reporting(0);
        require_once(APPPATH . 'libraries/PHPExcel.php');
        if (isset($_FILES["url_blog"]["name"])) {
            $path = $_FILES["url_blog"]["tmp_name"];
            $object = PHPExcel_IOFactory::load($path);
            foreach ($object->getWorksheetIterator() as $worksheet) {
                $highestRow = $worksheet->getHighestRow();
                for ($row = 2; $row <= $highestRow; $row++) {
                    $url_old = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
                    $url = str_replace('https://fic88.info/', '', $url_old);
                    $url = str_replace('/', '', $url);
                    $where_blog = [
                        'alias' =>  $url
                    ];
                    $blog = $this->Madmin->get_by($where_blog, 'blogs');
                    if ($blog == null) {
                        echo $url_old . '<br>';
                        // die;
                    }
                }
                //var_dump($re_cv);die();
            }
        }
    }
    public function check_image()
    {
        $blog = $this->Madmin->query_sql("SELECT id,image,alias FROM blogs");
        foreach ($blog as $val) {
            if (!@is_array(getimagesize(base_url() . $val['image']))) {
                echo $val['id'] . '-' . $val['image'] . '  https://fic88.info/' . $val['alias'] . '/<br>';
            }
        }
    }
    public function replace_blog()
    {
        $blog = $this->Madmin->query_sql("SELECT alias,title,sapo,content,meta_title,meta_key,meta_des FROM blogs ");
        foreach ($blog as $val) {
            $blog_update = str_replace('fic88.info', 'sic88.org', $val);
            $blog_update = str_replace('fic88', 'sic88', $blog_update);
            $blog_update = str_replace('Fic88', 'Sic88', $blog_update);
            $blog_update = str_replace('Anda', 'andarsss', $blog_update);
            $insert = $this->Madmin->update(['alias' => $val['alias']], $blog_update, 'blogs');
            var_dump($insert);
        }
        // var_dump($blogs);
    }
}

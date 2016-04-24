<?php
require_once "BaseController.php";

/**
 * Created by PhpStorm.
 * User: hongzhiyuan
 * Date: 2016/4/23
 * Time: 0:45
 */
class My extends CI_Controller {
    public function _filter() {
        return array(
            '_loginFilter' => array('messagelist'),
            '_adminFilter' => array(
                'getschoollist', 'getcollegelist', 'getgradelist',
                'addnewschool', 'addnewcollege', 'addnewgrade',
            ),
            '_postFilter' => array(
                'addnewschool', 'addnewcollege', 'addnewgrade',
            ),
        );
    }

    public function _loginFilter() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0) {
            redirect('/user/login');
        }
    }

    public function _adminFilter() {
        $user = $this->session->user;
        if (!isset($user) || $user['id'] <= 0 || $user['is_admin'] <= 0) {
            redirect('/my/emptyResponse');
        }
    }

    public function _postFilter() {
        if (($_SERVER['REQUEST_METHOD'] === 'POST')
            && (preg_match('/^application\/json/', $_SERVER['CONTENT_TYPE']) > 0)) {
            $str = file_get_contents('php://input');
            $_POST = json_decode($str, true);
        }
    }

    public function emptyResponse() {
        echo json_encode(array('errno' => -1, 'msg' => 'you have no permission'));
    }

    public function baseInfo() {
        $result = array(
            'errno' => 0,
            'data' => array(),
        );
        $result['data']['school_list'] = $this->school_model->getSchoolList();
        $result['data']['college_list'] = $this->college_model->getMergedCollegeList();
        $result['data']['grade_list'] = $this->grade_model->getMergedGradeList();
        echo json_encode($result);
    }

    public function messageList() {
        $result = array(
            'errno' => 0,
            'data' => array(),
            'user' => array(),
        );
        $user = $this->session->user;
        $userInfo = $this->user_model->getUserById($user['id']);
        $result['user'] = $userInfo;
        $result['data'] = $this->message_model->getAllMessage($userInfo->id);
        echo json_encode($result);
    }

    public function readMessage() {
        $result = array(
            'errno' => 0,
        );
        $id = intval($_GET['id']);
        $user = $this->session->user;
        if (!isset($user) || $id <= 0) {
            $result['errno'] = -1;
        } else {
            $this->message_model->updateMessageStatus($id, 1);
            $result['errno'] = 0;
        }
        echo json_encode($result);
    }

    public function getSchoolList() {
        $schoolList = $this->school_model->getSchoolList();
        echo json_encode(array('errno' => 0, 'data' => $schoolList));
    }

    public function getCollegeList() {
        $id = intval($_GET['schoolId']);
        if ($id <= 0) {
            echo json_encode(array('errno' => 0, 'data' => array()));
        } else {
            $collegeList = $this->college_model->getCollegeListBySchool($id);
            echo json_encode(array('errno' => 0, 'data' => $collegeList));
        }
    }

    public function getGradeList() {
        $id = intval($_GET['collegeId']);
        if ($id <= 0) {
            echo json_encode(array('errno' => 0, 'data' => array()));
        } else {
            $gradeList = $this->grade_model->getGradeListByCollege($id);
            echo json_encode(array('errno' => 0, 'data' => $gradeList));
        }
    }

    public function addNewSchool() {
        $schoolName = $_POST['name'];
        if (!empty($schoolName)) {
            $school = $this->school_model->getSchoolByName($schoolName);
            if (isset($school)) {
                echo json_encode(array('errno' => -1, 'msg' => '已存在相同学校'));
            } else {
                $data = array(
                    'name' => $schoolName,
                    'created' => date('Y-m-d H:i:s'),
                );
                $addResult = $this->school_model->addNewSchool($data);
                if ($addResult == true) {
                    echo json_encode(array('errno' => 0, 'msg' => ''));
                } else {
                    echo json_encode(array('errno' => -1, 'msg' => '添加学校失败'));
                }
            }
        } else {
            echo json_encode(array('errno' => -1, 'msg' => '校名不能为空'));
        }
    }

    /**
     *
     */
    public function addNewCollege() {
        $schoolId = intval($_POST['school_id']);
        $collegeName = $_POST['college_name'];
        $school = $this->school_model->getSchoolById($schoolId);
        $college = $this->college_model->getCollegeByName($schoolId, $collegeName);

        if (!isset($school)) {
            echo json_encode(array('errno' => -1, 'msg' => '该学校不存在'));
        } else {
            if (isset($college) || empty($collegeName)) {
                echo json_encode(array('errno' => -1, 'msg' => '该学院已存在'));
            } else {
                $data = array(
                    'name' => $collegeName,
                    'school_id' => $schoolId,
                    'created' => date('Y-m-d H:i:s'),
                );
                $this->college_model->addNewCollege($data);
                echo json_encode(array('errno' => 0, 'msg' => ''));
            }
        }
    }

    public function addNewGrade() {
        $schoolId = intval($_POST['school_id']);
        $collegeId = intval($_POST['college_id']);
        $gradeName = $_POST['name'];
        $college = $this->college_model->getCollegeById($collegeId);
        $grade = $this->grade_model->getGradeByName($collegeId, $gradeName);

        if (!isset($college)) {
            echo json_encode(array('errno' => -1, 'msg' => '该学院不存在'));
        } else {
            if (isset($grade) || empty($gradeName)) {
                echo json_encode(array('errno' => -1, 'msg' => '该班级已存在'));
            } else {
                $data = array(
                    'name' => $gradeName,
                    'school_id' => $schoolId,
                    'college_id' => $collegeId,
                    'created' => date('Y-m-d H:i:s'),
                );
                $this->grade_model->addNewGrade($data);
                echo json_encode(array('errno' => 0, 'msg' => ''));
            }
        }
    }
}
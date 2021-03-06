/**
 * Created by hongzhiyuan on 2016/4/24.
 */
schoolNetModule.controller('AdminController', ['$scope', '$http', function ($scope, $http) {
    $scope.currentPage = 'school';

    $scope.switchPage = function(page) {
        $scope.currentPage = page;
        if (page != 'user') {
            $scope.initSchoolData();
            $scope.schoolName = '';
            $scope.collegeName = '';
            $scope.gradeName = '';
            $scope.currentSchool = null;
            $scope.currentCollege = null;
        } else {
            $scope.initUserData();
        }
    };

    var schoolList = [];
    var collegeList = [];
    var gradeList = [];

    $scope.schoolList = [];
    $scope.collegeList = [];
    $scope.gradeList = [];

    // for school page
    $scope.schoolName = '';
    $scope.collegeName = '';
    $scope.gradeName = '';

    // for college page
    $scope.currentSchool = null;

    // for grade page
    $scope.currentCollege = null;

    $scope.initSchoolData = function() {
        $http.get(baseUrl + 'my/getSchoolList').success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                $scope.schoolList = res.data;
            } else {
                $scope.schoolList = [];
            }
            $scope.collegeList = [];
            $scope.gradeList = [];
        });
    };

    $scope.initUserData = function() {
        $http.get(baseUrl + 'my/getUserList').success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                $scope.userList = res.data;
            } else {
                $scope.userList = [];
            }
        });
    };

    $scope.updateUserStatus = function(userId, action, status) {
        status = parseInt(status, 10);
        status = status === 0 ? 0 : 1;
        action = action === 'admin' ? 'admin' : 'valid';
        var data = {
            id: userId,
            action: action,
            status: status
        };
        $http.post(baseUrl + 'my/updateUserStatus', data).success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                $scope.initUserData();
            } else {
                alert(res.msg);
            }
        });
    };

    var initCollegeList = function() {
        if ($scope.currentSchool != null && $scope.currentSchool != '') {
            $http.get(baseUrl + 'my/getCollegeList/schoolId/' + $scope.currentSchool.id).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    $scope.collegeList = res.data;
                } else {
                    $scope.collegeList = [];
                }
                $scope.gradeList = [];
            });
        }
    };

    var initGradeList = function() {
        if ($scope.currentCollege != null && $scope.currentCollege != '') {
            $http.get(baseUrl + 'my/getGradeList/collegeId/' + $scope.currentCollege.id).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    $scope.gradeList = res.data;
                } else {
                    $scope.gradeList = [];
                }
            });
        }
    };

    $scope.schoolChange = function() {
        initCollegeList();
    };

    $scope.collegeChange = function() {
        initGradeList();
    };

    $scope.addNewSchool = function() {
        if ($scope.schoolName != '') {
            var data = {
                name: $scope.schoolName
            };
            $http.post(baseUrl + 'my/addNewSchool', data).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    $scope.switchPage('school');
                    $scope.schoolName = '';
                } else {
                    alert(res.msg);
                }
            });
        }
    };

    $scope.addNewCollege = function() {
        if ($scope.currentSchool != null) {
            var school = $scope.currentSchool;
            var data = {
                school_id: $scope.currentSchool.id,
                college_name: $scope.collegeName
            };
            console.log(data);
            $http.post(baseUrl + 'my/addNewCollege', data).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    initCollegeList();
                    $scope.collegeName = '';
                } else {
                    alert(res.msg);
                }
            });
        }
    };

    $scope.addNewGrade = function() {
        if ($scope.currentSchool != null && $scope.currentCollege != null) {
            var data = {
                school_id: $scope.currentCollege.school_id,
                college_id: $scope.currentCollege.id,
                name: $scope.gradeName
            };
            console.log(data);
            $http.post(baseUrl + 'my/addNewGrade', data).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    initGradeList();
                    $scope.gradeName = '';
                } else {
                    alert(res.msg);
                }
            });
        }
    };

    $scope.init = function() {
        $scope.switchPage('school');
    };
}]);
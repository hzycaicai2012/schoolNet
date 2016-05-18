/**
 * Created by hongzhiyuan on 2016/4/24.
 */
schoolNetModule.controller('SearchController', ['$scope', '$http', function ($scope, $http) {
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

    var initCurrentSchool = function() {
        $scope.currentSchool = {
            id: -1,
            name: '不限'
        };
    };

    var initCurrentCollege = function() {
        $scope.currentCollege = {
            id: -1,
            name: '不限'
        };
    };

    var initCurrentGrade = function() {
        $scope.currentGrade = {
            id: -1,
            name: '不限'
        };
    };

    $scope.schoolList = [];
    $scope.collegeList = [];
    $scope.gradeList = [];

    $scope.userName = '';

    $scope.initSchoolData = function() {
        $http.get(baseUrl + 'my/getSchoolList').success(function (res) {
            console.log(res);
            initCurrentSchool();
            var schoolList = [];
            schoolList.push($scope.currentSchool);
            if (parseInt(res.errno, 10) === 0) {
                angular.forEach(res.data, function(item) {
                    schoolList.push(item);
                });
            } else {
                schoolList = [];
            }
            $scope.schoolList = schoolList;
            initCurrentCollege();
            initCurrentGrade();
            $scope.collegeList = [];
            $scope.gradeList = [];
        });
    };

    $scope.initUserData = function() {
        $http.get(baseUrl + 'my/getUserList?school_id=' + $scope.currentSchool.id + '&college_id=' + $scope.currentCollege.id + '&grade_id=' + $scope.currentGrade.id).success(function (res) {
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
                initCurrentCollege();
                $scope.collegeList.push($scope.currentCollege);
                if (parseInt(res.errno, 10) === 0) {
                    $scope.collegeList = res.data;
                } else {
                    $scope.collegeList = [];
                }
                initCurrentGrade();
                $scope.gradeList = [];
            });
        }
    };

    var initGradeList = function() {
        if ($scope.currentCollege != null && $scope.currentCollege != '') {
            $http.get(baseUrl + 'my/getGradeList/collegeId/' + $scope.currentCollege.id).success(function (res) {
                console.log(res);
                initCurrentGrade();
                $scope.gradeList.push($scope.currentGrade);
                if (parseInt(res.errno, 10) === 0) {
                    $scope.gradeList = res.data;
                } else {
                    $scope.gradeList = [];
                }
                $scope.gradeList.push({
                    id: -1,
                    name: '不限'
                });
            });
        }
    };

    $scope.schoolChange = function() {
        initCollegeList();
    };

    $scope.collegeChange = function() {
        initGradeList();
    };

    $scope.init = function() {
        $scope.initSchoolData();
        $scope.userName = '';
    };

    $scope.searchUser = function() {
        if ($scope.userName !== '') {

        }
    }
}]);
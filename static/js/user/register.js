/**
 * Created by hongzhiyuan on 2016/4/22.
 */
schoolNetModule.controller('RegisterController', ['$scope', '$http', function ($scope, $http) {
    $scope.user = {
        name: '',
        nick: '',
        email: '',
        phone: '',
        password: '',
        confirm_password: '',
        school: '',
        college: '',
        grade: ''
    };

    var schoolList = [];
    var collegeList = [];
    var gradeList = [];

    $scope.errorTips = {
        name: false,
        nick: false,
        email: false,
        phone: false,
        password: false,
        confirm_password: false,
        school: false,
        college: false,
        grade: false
    };

    $scope.nameError = false;
    $scope.passwordError = false;

    var validate = function() {
        var submitAble = true;
        for (var prop in $scope.user) {
            if ($scope.user.hasOwnProperty(prop)) {
                if ($scope.user[prop] == '' || $scope.user[prop] == null) {
                    $scope.errorTips[prop] = true;
                    submitAble = false;
                } else {
                    $scope.errorTips[prop] = false;
                }
            }
        }
        if (submitAble) {
            if ($scope.user.password !== $scope.user.confirm_password) {
                $scope.errorTips.password = true;
                $scope.errorTips.confirm_password = true;
                alert('两次输入的密码不一致~');
                submitAble = false;
            } else {
                $scope.errorTips.password = false;
                $scope.errorTips.confirm_password = false;
            }
        }
        return submitAble;
    };

    $scope.init = function() {
        $http.get(baseUrl + 'user/baseInfo').success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                $scope.schoolList = schoolList = res.data.school_list;
                collegeList = res.data.college_list;
                gradeList = res.data.grade_list;
                $scope.collegeList = [];
                $scope.gradeList = [];
            }
        });
    };

    $scope.schoolChange = function(school) {
        if (school != null && school !== '') {
            $scope.collegeList = [];
            $scope.user.college = '';
            $scope.user.grade = '';
            if (collegeList[parseInt(school.id, 10)] != null) {
                $scope.collegeList = collegeList[parseInt(school.id, 10)];
            }
        }
    };

    $scope.collegeChange = function(college) {
        if (college != null && college !== '') {
            $scope.gradeList = [];
            $scope.user.grade = '';
            var collegeData = gradeList[parseInt(college.school_id, 10)];
            if (collegeData != null && collegeData[parseInt(college.id, 10)] != null) {
                $scope.gradeList = collegeData[parseInt(college.id, 10)];
            }
        }
    };

    $scope.register = function() {
        var va = validate();
        console.log($scope.user);
        if (va === true) {
            console.log($scope.user);
            $http.post(baseUrl + 'auth/register', $scope.user).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    location.href = (baseUrl + 'user/login');
                } else {
                    alert(res.msg);
                }
            });
        }
    }
}]);
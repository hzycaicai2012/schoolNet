/**
 * Created by hongzhiyuan on 2016/4/20.
 */
schoolNetModule.controller('LoginController', ['$scope', '$http', function ($scope, $http) {
    $scope.user = {
        name: '',
        password: ''
    };

    $scope.nameError = false;
    $scope.passwordError = false;

    var validate = function() {
        if ($scope.user.name == null || $scope.user.name === '') {
            $scope.nameError = true;
            return false;
        } else {
            $scope.nameError = false;
        }
        if ($scope.user.password == null || $scope.user.password === '') {
            $scope.passwordError = true;
            return false;
        } else {
            $scope.passwordError = false;
        }
        return true;
    };

    $scope.login = function() {
        var va = validate();
        if (va === true) {
            $http.post(baseUrl + 'auth/login', $scope.user).success(function (res) {
                console.log(res);
            });
        }
    }
}]);
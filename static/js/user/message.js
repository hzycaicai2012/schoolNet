/**
 * Created by hongzhiyuan on 2016/4/24.
 */
schoolNetModule.controller('MessageController', ['$scope', '$http', function ($scope, $http) {
    $scope.userInfo = {};

    $scope.init = function(id) {
        $http.get(baseUrl + 'my/messageList').success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                angular.forEach(res.data, function(item) {
                    item.show_status = 0;
                    item.status_name = item.status == 0 ? '未读': '已读';
                });
                $scope.messageList = res.data;
                $scope.userInfo = res.user;
            } else {
                $scope.messageList = [];
            }
        });
    };

    $scope.showMessage = function(message) {
        if (message.status == 0) {
            $http.get(baseUrl + 'my/readMessage/id/' + message.id).success(function(res) {
                if (parseInt(res.errno, 10) == 0) {
                    message.status = 1;
                    message.status_name = '已读';
                }
            });
        }
        var status = message.show_status == 0 ? 1 : 0;
        message.show_status = status;
    };
}]);
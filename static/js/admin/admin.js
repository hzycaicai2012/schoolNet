/**
 * Created by hongzhiyuan on 2016/4/24.
 */
schoolNetModule.controller('AdminController', ['$scope', '$http', function ($scope, $http) {
    $scope.currentPage = 'school';

    $scope.switchPage = function(page) {
        if (page == 'school') {
            $scope.initSchoolData();
        } else if (page == 'college') {
            $scope.initCollegeData();
        } else if (page == 'grade') {
            $scope.initGradeData();
        }
        $scope.currentPage = page;
    };

    $scope.schoolList = [];
    $scope.collegeList = [];
    $scope.gradeList = [];

    // for school page
    $scope.schoolName = '';

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
                alert(res.msg);
            }
        });
    };

    $scope.initCollegeData = function() {

    };

    $scope.initGradeData = function() {

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

    $scope.replyComment = function(id, name, userComment) {
        userComment.content = ('回复 ' + name + '：');
        userComment.user_id = id;
    };

    var articleTypeMap = [
        '公开', '校内公开', '院内公开', '班内公开', '好友公开'
    ];

    var wrapArticle = function(article) {
        var type = parseInt(article.article.type, 10);
        if (type < 1 || type > 3) {
            type = 4;
        }
        article.article.type_name = articleTypeMap[type];
        article.userComment = {
            content: '',
            user_id : -1
        };
        return article;
    };

    $scope.init = function() {
        $scope.switchPage('school');
    };

    $scope.submitMessage = function() {
        if ($scope.publishArticle.content == null || $scope.publishArticle.content === '') {
            alert('请填写内容');
        } else {
            $http.post(baseUrl + 'article/addArticle', $scope.publishArticle).success(function (res) {
                console.log(res);
                if (parseInt(res.errno, 10) === 0) {
                    location.href = (baseUrl + 'home/index/type/' + $scope.publishArticle.type);
                } else {
                    alert(res.msg);
                }
            });
        }
    };

    var initArticleItem = function(id) {
        $http.get(baseUrl + 'article/getArticleItem/id/' + id).success(function(res) {
            if (parseInt(res.errno, 10) === 0) {
                var data = res.data;
                var articleList = [];
                angular.forEach($scope.articleList, function(item) {
                    if (parseInt(item.article.id, 10) === parseInt(data.article.id, 10)) {
                        articleList.push(wrapArticle(data));
                    } else {
                        articleList.push(item);
                    }
                });
                $scope.articleList = articleList;
            }
        });
    };

    $scope.submitResponse = function(article) {
        if (article.userComment != null || article.userComment !== '') {
            var data = {
                id: article.article.id,
                content: article.userComment.content,
                reply_user: article.userComment.user_id
            };
            $http.post(baseUrl + 'article/addComment', data).success(function (res) {
                if (parseInt(res.errno, 10) === 0) {
                    initArticleItem(data.id);
                } else {
                    alert(res.msg);
                }
            });
        }
    };

    $scope.changeArticleType = function(type) {
        type = parseInt(type, 10);
        if (type > 3 || type < 1) {
            return;
        }
        if ($scope.publishArticle.type === type) {
            $scope.publishArticle.type = 4;
        } else {
            $scope.publishArticle.type = type;
        }
    }
}]);
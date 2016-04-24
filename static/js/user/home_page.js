/**
 * Created by hongzhiyuan on 2016/4/23.
 */
schoolNetModule.controller('HomePageController', ['$scope', '$http', function ($scope, $http) {
    $scope.publishArticle = {
        type: 4,
        content: ''
    };

    $scope.userInfo = {};

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

    $scope.init = function(id) {
        id = parseInt(id, 10);
        $http.get(baseUrl + 'article/getUserArticles/id/' + id).success(function (res) {
            console.log(res);
            if (parseInt(res.errno, 10) === 0) {
                var articleList = [];
                angular.forEach(res.data, function(item) {
                    articleList.push(wrapArticle(item));
                });
                $scope.articleList = articleList;
                $scope.userInfo = res.user;
            } else {
                $scope.articleList = [];
            }
        });
    };

    $scope.replyComment = function(id, name, userComment) {
        userComment.content = ('回复 ' + name + '：');
        userComment.user_id = id;
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
        if (article.userComment != null || article.userComment.content !== '') {
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
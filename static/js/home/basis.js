/**
 * Created by hongzhiyuan on 2016/4/20.
 */
angular.module('ie7support', []).config(function ($sceProvider) {
    $sceProvider.enabled(false);
});
var schoolNetModule = angular.module('SchoolNet', []);
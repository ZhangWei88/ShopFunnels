ShopFunnelsApp.service('DashboardService', ['$q', '$http',
    function($q, $http) {
        this.rootUrl = rootUrl;

        this.verifyStore = function (shopname) {
            var deferred = $q.defer();

            $http({
                url: this.rootUrl + 'api/verify-store?shopname=' + shopname,
                method: 'GET'
            }).then(function (response) {
                deferred.resolve(response.data);
            }, function (error) {
                deferred.reject(error.data);
            });

            return deferred.promise;
        };
    }
]);
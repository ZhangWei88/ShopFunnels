'use strict';

ShopFunnelsApp.controller('FunnelFormSettingsModalController', ['$scope', '$controller', 'data', '$uibModalInstance', 'ModalService', 'DashboardService',
    function($scope, $controller, data, $uibModalInstance, ModalService, DashboardService) {

        angular.extend(this, $controller('BaseController', {$scope: $scope}));

        $scope.data = {
            funnelForm: data.funnelForm,
            static: data.static
        };

        $scope.manageProducts = function () {
            var modal = ModalService.openGenericModal({
                size: 'lg',
                templateUrl: rootUrl + 'src/Front/Angular/views/modalTemplates/manageProductsModalTemplate.html',
                controller: 'ManageProductsModalController',
                data: {
                    formId: $scope.data.funnelForm.id,
                    products: $scope.data.funnelForm.products,
                    static: $scope.data.static
                }
            });

            modal.result.then(function (response) {
            });
        };

        $scope.deleteFunnelForm = function () {
            var modal = ModalService.openConfirmModal('Confirm Delete', 'Do you want to delete this form?', 'Confirm', 'Cancel', 'sm');

            modal.result.then(function (response) {
                if (response) {
                    DashboardService.deleteForm($scope.data.funnelForm.id).then(function (response) {
                        toastr.success('Funnel Form Delete Success');
                        $uibModalInstance.close();
                    });
                }
            });
        };

        $scope.submit = function (form) {
            $scope.state.submitted = true;

            $("form").valid();

            if (!form.$invalid) {
                DashboardService.updateForm($scope.data.funnelForm).then(function (response) {
                    toastr.success('Funnel Form Update Success');
                    $uibModalInstance.close();
                });
            }
        };

        $scope.close = function() {
            $uibModalInstance.dismiss();
        };
    }
]);

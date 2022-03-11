import Swal from 'sweetalert2'
export default {
    data() {
        return {
            requestForm: {
                error: false,
                loading: false,
                validations: []
            },
            CURRENT_USER: CURRENT_USER,
            BASE_URL: BASE_URL,
            validation_message: "",
            disabledButtons: false,
            SWALSuccess: false,
        };
    },
    methods: {
        async saveForm(url, method, redirect = null, data = {}) {
            let fun_response = null;
            this.showLoading();
            let resp = await Swal.fire({
                title: "هل انت متأكد",
                showDenyButton: true,
                showCancelButton: false,
                confirmButtonText: "حفظ",
                denyButtonText: "لا"
            }).then(result => {
                if (result.isConfirmed) {
                    this.disabledButtons = true;
                    this.requestForm.validations = [];
                    this.requestForm.loading = true;
                    // this.showLoading();
                    return axios({method: method, url: url, data})
                        .then(response => {
                            this.hideLoading();
                            this.notify_success(response.data.message);
                            if (redirect != null) {
                                setTimeout(() => {
                                    window.location.href = BASE_URL + redirect;
                                }, 2000);
                            }

                            this.requestForm.validations = [];
                            this.disabledButtons = false;
                            this.requestForm.loading = false;
                            this.whenFormSuccess(response);
                            document.body.scrollTop = 0; // For Chrome, Safari and Opera
                            document.documentElement.scrollTop = 0; // For IE and Firefox

                            return fun_response = response;
                        })
                        .catch(error => {
                            this.handleError(error);
                        });
                }
            });
            return resp;
        },
        handleError(error) {
            this.hideLoading();
            this.disabledButtons = false;
            this.requestForm.loading = false;
            if (error.response.data.errors) {
                this.requestForm.validations = error.response.data.errors;
                this.notify_error(__('Please enter the data correctly'), 3000);
            } else if (error.response.data.message_error) {
                this.notify_error(error.response.data.message_error, 4000);
            } else if (error.response.data.error_message) {
                this.requestForm.validations = [];
                this.validation_message = error.response.data.error_message;
                this.notify_error(error.response.data.error_message, 4000);
            }
        },
        whenFormSuccess(response = null) {

        },
        showLoading() {
            $("#loading-div").show();
        },
        hideLoading() {
            $("#loading-div").hide();
        },
        notify_error(message, duration = 3000) {
            this.$message({
                showClose: true,
                duration: duration,
                message: message,
                type: "error"
            });
        },
        notify_success(message) {
            // this.$message({
            //   showClose: true,
            //   duration: duration,
            //   message: message,
            //   type: "success"
            // });

            Swal.fire(message, "", "success");
        },
        tableComponentSerialColumn(obj) {
            var data = obj.data;
            var from = obj.from;
            var per_page = obj.per_page;
            return _.map(data, function (d) {
                d.tc_series = from;
                ++from;
                return d;
            });
        },
    },

    computed: {}
};

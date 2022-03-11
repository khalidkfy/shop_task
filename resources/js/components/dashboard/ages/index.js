import Swal from 'sweetalert2'
Vue.component('ages-index', {
  data() {
    return {

    }
  },
  methods: {
    async fetchData({ page, sort }) {
      const response = await axios.get("/dashboard/ages/data", {
        params: {
          page,
          sort,
        }
      });
      let _data = this.tableComponentSerialColumn(response.data.ages);
      return {
        data: _data,
        pagination: {
          currentPage: response.data.ages.current_page,
          totalPages: response.data.ages.last_page
        }
      };
    },
    deleteAge(id) {
      Swal.fire({
        title: "هل انت متأكد",
        text: "لا يمكنك التراجع",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "نعم, احذف",
        cancelButtonText: "إلغاء"
      }).then(result => {
        if (result.isConfirmed) {
          axios.delete(`/dashboard/ages/${id}/delete`).then(response => {

            if (response.data.created_main) {
              Swal.fire("You Cant Delete", "", "error");
            }

            if (response.data.message) {
              Swal.fire(response.data.message, "", "success");
              this.$refs.table.refresh();
            }
          });
        }
      });
    },
  },
  mounted() {
  }
})
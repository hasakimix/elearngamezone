// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#users_list_table').DataTable({
      columnDefs: [{
          targets: [4,5,6,7], /* column index */
          orderable: false, /* true or false */
      }],
      lengthMenu: [[50, 100, 200, -1], [50, 100, 200, "All"]],
      pageLength: 50,
      initComplete: function () {

      }
  });
});

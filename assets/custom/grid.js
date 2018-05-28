$(function() {
  var base_url=window.location.origin;
  $.ajax({
    type: "GET",
    url: "getAllBioskop/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "auto",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAllBioskop/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "addBioskop/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "updateBioskop/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "deleteBioskop/",
            data: item
          });
        }
      },
      fields: [
      {
          name: "idStudio",
          title: "id bioskop",
          type: "text",
          width: 150
        },
        {
          name: "namaStudio",
          title: "Nama studio",
          type: "text",
          width: 150
        },
        {
          name: "jumlahKursi",
          title: "Jumlah kursi",
          type: "text",
          width: 50
        },
        
        { type: "control" }
      ]
    });
  });
});

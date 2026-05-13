@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <button class="btn btn-primary" id="btn-add-data">Tambah Produk</button>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <table id="table-product" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Jenis</th>
                                <th>Stok</th>
                                <th>Deskripsi</th>
                                <th>Photo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
    @include('admin.product.modal-product')
    @include('admin.product.modal-view-photo')
@endsection
@section('js_after')
    <script>
        $(document).ready(function() {
            let table = $("#table-product").DataTable({
                responsive: true,
                responsive: !0,
                autoWidth: false,
                serverSide: true,
                ajax: {
                    url: "/dataTablesProduct",
                },
                columns: [{
                        data: null,
                        orderable: false,
                        render: function(data, type, row, meta) {
                            var pageInfo = $("#table-product").DataTable().page.info();
                            var index = meta.row + pageInfo.start + 1;
                            return index;
                        },
                    },
                    {
                        data: "judul",
                    },
                    {
                        data: "jenis",
                    },
                    {
                        data: "stok",
                    },
                    {
                        data: "deskripsi",
                    },
                    {
                        data: null,
                        render: (data) => {
                            return `<button class="badge bg-success" id="view-photo" data-photo="/storage/${data.photo}">Lihat</button>`
                        }
                    },
                    {
                        data: "action",
                        orderable: true,
                        searchable: true,
                    },
                ],
                columnDefs: [{
                        targets: [5, 6], // index kolom atau sel yang ingin diatur
                        className: "text-center", // kelas CSS untuk memposisikan isi ke tengah
                    },
                    {
                        searchable: false,
                        orderable: false,
                        targets: 0, // Kolom nomor, dimulai dari 0
                    },
                ],
            });

            $("#btn-add-data").on("click", function() {
                $("#modal-title-product").html("Tambah Produk Baru")
                $("#modal-product .modal-footer").html(`
                    <button class="btn btn-primary" id="btn-save">Tambah</button>
                `)
                $("#modal-product").modal("show")
            })

            $("#btn-close").on("click", function() {
                reset()
            })

            $("#table-product").on("click", "#view-photo", function() {
                let photo = $(this).data('photo')
                $("#render-photo").attr('src', photo)
                $("#modal-photo").modal("show")
            })

            $("#modal-product").on("click", "#btn-save", function() {
                let button = $(this)
                $(button).attr("disabled", "true");
                let photo = document.querySelector("input[name='photo']")

                let formData = new FormData();
                if (photo.value != '') {
                    formData.append('photo', photo.files[0]);
                }

                // Mendapatkan data inputan lainnya dari hasil serialize
                let serializedData = $("form[id='form-product']")
                    .serialize(); // Ganti #form dengan ID formulir Anda
                let otherData = serializedData.split("&");

                otherData.forEach(function(item) {
                    let keyValue = item.split("=");
                    formData.append(
                        keyValue[0],
                        decodeURIComponent(keyValue[1].replace(/\+/g, " "))
                    );
                });

                $.ajax({
                    data: formData,
                    url: "/admin/product",
                    type: "POST",
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $(button).removeAttr("disabled");
                        table.ajax.reload()
                        reset()
                        Swal.fire("Success!", response.success, "success");
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 400) {
                            $(button).removeAttr("disabled");
                            let errors = xhr.responseJSON.errors
                            displayErrors(errors)
                        }
                    }
                });
            })

            // AMBIL DATA PRODUK
            $("#table-product").on("click", ".edit-button", function() {
                let uuid = $(this).data('uuid')
                $.ajax({
                    url: "/admin/product/" + uuid + "/edit",
                    type: "GET",
                    dataType: 'json',
                    success: function(response) {
                        let data = response.data
                        $("#judul").val(data.judul)
                        $("#jenis").val(data.jenis)
                        $("#stok").val(data.stok)
                        $("#deskripsi").val(data.deskripsi)
                        $("#modal-title-product").html("Ubah Produk")
                        $("#modal-product .modal-footer").html(`
                    <button class="btn btn-primary" id="btn-update" data-uuid="${uuid}">Ubah</button>
                `)
                        $("#modal-product").modal("show")
                    }
                });
            })

            // UPDATE
            $("#modal-product").on("click", "#btn-update", function() {
                let uuid = $(this).data('uuid')
                let button = $(this)
                $(button).attr("disabled", "true");
                let photo = document.querySelector("input[name='photo']")

                let formData = new FormData();
                if (photo.value != '') {
                    formData.append('photo', photo.files[0]);
                }
                formData.append('_method', "PUT");

                // Mendapatkan data inputan lainnya dari hasil serialize
                let serializedData = $("form[id='form-product']")
                    .serialize(); // Ganti #form dengan ID formulir Anda
                let otherData = serializedData.split("&");

                otherData.forEach(function(item) {
                    let keyValue = item.split("=");
                    formData.append(
                        keyValue[0],
                        decodeURIComponent(keyValue[1].replace(/\+/g, " "))
                    );
                });

                $.ajax({
                    data: formData,
                    url: "/admin/product/" + uuid,
                    type: "POST",
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        $(button).removeAttr("disabled");
                        table.ajax.reload()
                        reset()
                        Swal.fire("Success!", response.success, "success");
                    },
                    error: function(xhr, status, error) {
                        if (xhr.status == 400) {
                            $(button).removeAttr("disabled");
                            let errors = xhr.responseJSON.errors
                            displayErrors(errors)
                        }
                    }
                });
            })

            //HAPUS DATA
            $("#table-product").on("click", ".delete-button", function() {
                let uuid = $(this).attr("data-uuid");
                let token = $(this).attr("data-token");
                Swal.fire({
                    title: "Apakah Kamu Yakin?",
                    text: "Kamu akan menghapus data product!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Hapus!",
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            data: {
                                _method: "DELETE",
                                _token: token,
                            },
                            url: "/admin/product/" + uuid,
                            type: "POST",
                            dataType: "json",
                            success: function(response) {
                                table.ajax.reload();
                                Swal.fire("Deleted!", response.success, "success");
                            },
                        });
                    }
                });
            });

            //KOSONGKAN SEMUA INPUTAN
            function reset() {
                let form = $("form[id='form-product']").serializeArray();
                form.map((a) => {
                    $(`#${a.name}`).val("");
                })
                $("#modal-title-product").html("")
                $("#modal-product .modal-footer").html("")
                $("#modal-product").modal("hide")
            }

            //Hendler Error
            function displayErrors(errors) {
                // menghapus class 'is-invalid' dan pesan error sebelumnya
                $("input.form-control").removeClass("is-invalid");
                $("select.form-control").removeClass("is-invalid");
                $("div.invalid-feedback").remove();

                // menampilkan pesan error baru
                $.each(errors, function(field, messages) {
                    let inputElement = $("input[name=" + field + "]");
                    let selectElement = $("select[name=" + field + "]");
                    let textAreaElement = $("textarea[name=" + field + "]");
                    let feedbackElement = $(
                        '<div class="invalid-feedback ml-2"></div>'
                    );

                    $("#btn-close").on("click", function() {
                        inputElement.each(function() {
                            $(this).removeClass("is-invalid");
                        });
                        textAreaElement.each(function() {
                            $(this).removeClass("is-invalid");
                        });
                        selectElement.each(function() {
                            $(this).removeClass("is-invalid");
                        });
                    });

                    $.each(messages, function(index, message) {
                        feedbackElement.append(
                            $('<p class="p-0 m-0" style="font-style=:italic">' + message +
                                "</p>")
                        );
                    });

                    if (inputElement.length > 0) {
                        inputElement.addClass("is-invalid");
                        inputElement.after(feedbackElement);
                    }

                    if (selectElement.length > 0) {
                        selectElement.addClass("is-invalid");
                        selectElement.after(feedbackElement);
                    }
                    if (textAreaElement.length > 0) {
                        textAreaElement.addClass("is-invalid");
                        textAreaElement.after(feedbackElement);
                    }
                    inputElement.each(function() {
                        if (inputElement.attr("type") == "text" || inputElement.attr("type") ==
                            "number") {
                            inputElement.on("click", function() {
                                $(this).removeClass("is-invalid");
                            });
                            inputElement.on("change", function() {
                                $(this).removeClass("is-invalid");
                            });
                        } else if (inputElement.attr("type") == "date") {
                            inputElement.on("change", function() {
                                $(this).removeClass("is-invalid");
                            });
                        } else if (inputElement.attr("type") == "password") {
                            inputElement.on("click", function() {
                                $(this).removeClass("is-invalid");
                            });
                        } else if (inputElement.attr("type") == "email") {
                            inputElement.on("click", function() {
                                $(this).removeClass("is-invalid");
                            });
                        }
                    });
                    textAreaElement.each(function() {
                        textAreaElement.on("click", function() {
                            $(this).removeClass("is-invalid");
                        });
                    });
                    selectElement.each(function() {
                        selectElement.on("click", function() {
                            $(this).removeClass("is-invalid");
                        });
                    });
                });
            }
        });
    </script>
@endsection

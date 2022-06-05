setDelete = function (id) {
    bootbox.confirm({
        message: "ยืนยันลบ?",
        buttons: {
            confirm: {
                label: 'ตกลง',
                className: 'btn-success'
            },
            cancel: {
                label: 'ยกเลิก',
                className: 'btn-danger'
            }
        },
        callback: function (result) {
            if (result) {
                event.preventDefault();
                let _token = $('meta[name="csrf-token"]').attr('content');
    
                $.ajax({
                    url: "/delete",
                    type: "POST",
                    data: {
                        id: id,
                        status: status,
                        _token: _token
                    },
                    success: function(resp) {
                        if (resp.success) {
                            mwz_noti('success', resp.msg);
                            setReloadDataTable();
                        } else {
                            mwz_noti('error', resp.msg);
                            setReloadDataTable();
                        }
                    },
                });
            }
        }
    });
    }
    
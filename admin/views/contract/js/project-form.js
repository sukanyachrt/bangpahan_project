$('#project-form').validate({
    rules: {
        Project_code: {
            required: true,

        },
        Name_Project: {
            required: true,

        },
        Date: {
            required: true,
        },
        Address: {
            required: true,
            maxlength: 60
        },
       
    },
    messages: {
        Project_code: {
            required: "โปรดกรอกรหัสโครงการ ",

        },
        Name_Project: {
            required: "โปรดกรอกชื่อโครงการ ",
        },
        Date: {
            required: "โปรดกรอกวัน/เดือน/ปี ",
        },
        Address: {
            required: "โปรดกรอกที่อยู่โครงการ ",
        },
        
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
        error.addClass('invalid-feedback');
        element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
        $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    },

    unhighlight: function (element, errorClass, validClass) {
        $(element).removeClass('is-invalid');
    },

});

$(function() {
    $.validator.addMethod('daterange', function(value, element) {
        if (this.optional(element)) {
            return true;
        }
    
        var startDate = Date.parse('1990-01-01'),
            endDate = Date.parse('2018-12-31'),
            enteredDate = Date.parse(value);
    
        if (isNan(enteredDate)) {
            return false;
        }
    
        return ((startDate <= enteredDate) && (enteredDate <= endDate));
    });
    $.validator.addMethod("textArea", function(value, element, arg){
        if($('#big').val().length <= 50) return false;
        else return true;
    });

    $("#form1").validate({
        rules: {
            nama: "required",
            telp : {
                required : true,
                digits : true,
                rangelength : [6,8]
            },
            pend : {
                required : true,
            },
            email:{
                required : true,
                email : true
            },
            pass : "required",
            conpass : {
                required : true,
                equalto : "#passid"
            },
            peng : {
                textArea : true
            },
            date : {
                required : true,
                daterange : true
            }
        },
        messages : {
            nama : "<br><i style='color : red;'>Masukkan nama lengkap</i>",
            telp : {
                required :"<br><i style='color : red;'>Masukkan no.telp</i>",
                digits : "<br><i style='color : red;'>Hanya gunakan angka</i>",
                rangelength : "<br><i style='color : red;'>Gunakan 6-8 digit angka</i>"
            },
            email : {
                required : "<br><i style='color : red;'>Masukkan email</i>",
                email : "<br><i style='color : red;'>Masukkan email valid</i>"
            },
            pend : {
                required : "<br><i style='color : red;'>Pilih pendidikan terakhir</i>"
            },
            peng:{
                textArea : "<br><i style='color : red;'>Isi pengalaman min. 50 huruf</i>"
            },
            pass : "<br><i style='color : red;'>Masukkan password</i>",
            conpass : {
                required : "<br><i style='color : red;'>Masukkan confirmation pass</i>",
                equalto : "<br><i style='color : red;'>Harus sama dengan password</i>"
            },
            date: {
                required : "<br><i style='color : red;'>Masukkan tanggal antara tahun 1990-2018</i>",
                daterange : "<br><i style='color : red;'>Masukkan tanggal antara tahun 1990-2018</i>"
            }
        }

    });
});
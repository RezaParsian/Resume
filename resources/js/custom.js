$(document).click(function (){
    $("a").on("click",function () {
        if ($(this).attr("href") == "#"){
            swal.fire({
                toast: true,
                icon: 'info',
                title: '<label class="text-white">لینک موردنظر در دسترس نمی‌باشد.</label>',
                animation: true,
                background: '#FF4081',
                position: 'bottom-left',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
            $(".swal2-icon-content").addClass("text-white");
            $(".swal2-icon").addClass("border-white");
        }
    })
})

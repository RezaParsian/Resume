$(document).ready(function (){
    $("a").on("click",function (e) {
        const href=$(this).attr("href");
        if (href.includes("#")){
            e.preventDefault();
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

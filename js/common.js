function MobileTopbar__init() {
    $('.mobile-top-bar__btn-toggle-side-bar').click(function() {
        const $this = $(this);
        const $sideBar = $(".mobile-side-bar");
        if($this.hasClass('active')) {
            $this.removeClass('active');
            $sideBar.removeClass('active');
        } else {
            $this.addClass('active');
            $sideBar.addClass('active');
        }
    });
}

MobileTopbar__init();

jQuery(document).ready(($) => {
    $(() => {
        $('.dropdown').hover(
            () => {
                $('.dropdown-menu', this).stop( true, true ).fadeIn('fast');
                $(this).toggleClass("open");
                $('b', this).toggleClass("caret caret-up")
            },
            () => {
                $('.dropdown-menu', this).stop( true, true ).fadeOut('fast');
                $(this).toggleClass("open");
                $('b', this).toggleClass("caret caret-up")
            }
        )
    })
})
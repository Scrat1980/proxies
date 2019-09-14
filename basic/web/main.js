$( document ).ready(function () {
    $('body').focusout(function (e) {
        Proxy.update(e);
    });
});

Proxy = {
    update: function (e) {
        var proxyId = $(e.target).parents('tr').data('key');
        var role = $(e.target).data('role');
        var value = $(e.target).val();

        $.ajax({
            method: 'POST',
            url: '/index.php?r=proxy%2Fsave&proxyId=' + proxyId
                + '&role=' + role
                + '&value=' + value
        });
    }
};

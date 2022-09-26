$(document).ready(function () {
  $('form').submit(function () {
    var t = $(this).attr('id'),
      e = $('#' + t)
    return (
      $.ajax({
        type: 'POST',
        url: 'send.php',
        data: e.serialize(),
        beforeSend: function () {
          $(e).html('<p style="text-align:center">Отправка...</p>')
        },
        success: function (t) {
          $(e).html('<p style="text-align:center">' + t + '</p>')
        },
        error: function (t, n, r) {
          $(e).html(r)
        },
      }),
      !1
    )
  })
})

window.$zopim ||
  (function (d, s) {
    var z = ($zopim = function (c) {
        z._.push(c);
      }),
      $ = (z.s = d.createElement(s)),
      e = d.getElementsByTagName(s)[0];
    z.set = function (o) {
      z.set._.push(o);
    };
    z._ = [];
    z.set._ = [];
    $.async = true;
    $.setAttribute("charset", "utf-8");
    $.src = "https://v2.zopim.com/?6da4305e-ec20-4d26-87a7-f52f10e35132";
    z.t = +new Date();
    $.type = "text/javascript";
    e.parentNode.insertBefore($, e);
  })(document, "script");

$(".livechat, .live_chatt, .chatt, .chat, #flashing").click(function () {
  $zopim.livechat.window.toggle();
  qp("track", "GenerateLead");
  return false;
});
if (window.innerWidth > 768) {
  $(window).on("load", function () {
    // show chat if there are unread messages and user is on desktop
    $zopim.livechat.window.toggle();
    $zopim.livechat.window.show();
  });
}
// zE(function () {
//   zE.activate();
// });
zE(function () {
  $zopim(function () {
    $zopim.livechat.setOnUnreadMsgs(unread);
    function unread(number) {
      if (number >= 1) {
        // show chat if there are unread messages and user is on desktop
        $zopim.livechat.window.toggle();
        $zopim.livechat.window.show();
      }
    }
  });
});

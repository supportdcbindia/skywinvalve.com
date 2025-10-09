// /assets/js/about.js
(function () {
  "use strict";

  var quote = "More than two decades ago, we founded Skywin Valve with a singular vision: to deliver world-class products in the instrumentation and control sectors, with an initial focus on precision in pressure and flow parameters.";
  var speed = 20;

  function start() {
    var typeEl = document.getElementById("svType");
    if (!typeEl) return;

    var i = 0;
    function type() {
      typeEl.textContent = quote.slice(0, i++);
      if (i <= quote.length) {
        window.requestAnimationFrame(function () {
          setTimeout(type, speed);
        });
      }
    }

    var sec = document.querySelector(".sv-director");
    if (!("IntersectionObserver" in window) || !sec) {
      // Fallback: run immediately if IO not supported
      type();
      var card = document.querySelector(".sv-card");
      if (card) card.classList.add("sv-in");
      var portrait = document.querySelector(".sv-portrait");
      if (portrait) portrait.classList.add("sv-in");
      return;
    }

    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (!e.isIntersecting) return;
        var card = document.querySelector(".sv-card");
        if (card) card.classList.add("sv-in");
        var portrait = document.querySelector(".sv-portrait");
        if (portrait) portrait.classList.add("sv-in");
        type();
        io.disconnect();
      });
    }, { threshold: 0.25 });

    io.observe(sec);
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", start);
  } else {
    start();
  }
})();

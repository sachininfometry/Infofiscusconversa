(function () {
  'use strict';

  var root = document.querySelector('.infometry-conversa-product');
  if (!root) {
    return;
  }

  var tabButtons = Array.prototype.slice.call(root.querySelectorAll('[data-icp-shot]'));
  var panels = Array.prototype.slice.call(root.querySelectorAll('[data-icp-shot-panel]'));

  function activateShot(name) {
    tabButtons.forEach(function (button) {
      button.classList.toggle('is-active', button.getAttribute('data-icp-shot') === name);
    });

    panels.forEach(function (panel) {
      panel.classList.toggle('is-active', panel.getAttribute('data-icp-shot-panel') === name);
    });
  }

  tabButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      activateShot(button.getAttribute('data-icp-shot'));
    });
  });

  var chartPaths = {
    finance: 'M10 112 L56 88 L102 96 L148 58 L194 68 L250 26 L300 44 L344 18',
    sales: 'M10 118 L58 108 L104 74 L150 86 L198 48 L250 54 L300 32 L344 38',
    operations: 'M10 84 L58 72 L104 78 L150 54 L198 48 L250 34 L300 36 L344 24',
    marketing: 'M10 120 L58 82 L104 94 L150 60 L198 72 L250 44 L300 52 L344 20',
    hr: 'M10 104 L58 92 L104 96 L150 76 L198 64 L250 58 L300 42 L344 32'
  };

  function chartSvg(name) {
    var path = chartPaths[name] || chartPaths.finance;
    var area = path + ' L344 134 L10 134 Z';
    var points = path.match(/\d+\s+\d+/g) || [];
    return [
      '<svg viewBox="0 0 360 150" aria-hidden="true" focusable="false">',
      '<path class="icp-chart-area" d="' + area + '"></path>',
      '<path class="icp-chart-line" d="' + path + '"></path>',
      '<g class="icp-chart-points">',
      points.map(function (point) {
        var xy = point.split(/\s+/);
        return '<circle cx="' + xy[0] + '" cy="' + xy[1] + '" r="4"></circle>';
      }).join(''),
      '</g>',
      '</svg>'
    ].join('');
  }

  root.querySelectorAll('.icp-chart-card-line[data-chart]').forEach(function (chart) {
    chart.innerHTML = chartSvg(chart.getAttribute('data-chart'));
  });

  root.querySelectorAll('[data-icp-use-cases]').forEach(function (wrap) {
    var buttons = Array.prototype.slice.call(wrap.querySelectorAll('[data-icp-use-tab]'));
    var usePanels = Array.prototype.slice.call(wrap.querySelectorAll('[data-icp-use-panel]'));

    function activateUseCase(name) {
      buttons.forEach(function (button) {
        var active = button.getAttribute('data-icp-use-tab') === name;
        button.classList.toggle('is-active', active);
        button.setAttribute('aria-selected', active ? 'true' : 'false');
      });

      usePanels.forEach(function (panel) {
        panel.classList.toggle('is-active', panel.getAttribute('data-icp-use-panel') === name);
      });
    }

    buttons.forEach(function (button) {
      button.addEventListener('click', function () {
        activateUseCase(button.getAttribute('data-icp-use-tab'));
      });
    });
  });

  function animateCounter(el) {
    if (el.dataset.icpCountDone === 'true') {
      return;
    }
    el.dataset.icpCountDone = 'true';

    var target = parseFloat(el.getAttribute('data-icp-count') || '0');
    var suffix = el.getAttribute('data-icp-suffix') || '';
    var prefix = el.getAttribute('data-icp-prefix') || '';
    var decimals = String(target).indexOf('.') > -1 ? 1 : 0;
    var startTime = null;
    var duration = 1150;

    function frame(time) {
      if (!startTime) {
        startTime = time;
      }
      var progress = Math.min((time - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var value = target * eased;
      el.textContent = prefix + value.toFixed(decimals) + suffix;
      if (progress < 1) {
        window.requestAnimationFrame(frame);
      } else {
        el.textContent = prefix + target.toFixed(decimals) + suffix;
      }
    }

    window.requestAnimationFrame(frame);
  }

  var counters = Array.prototype.slice.call(root.querySelectorAll('[data-icp-count]'));
  if ('IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          counterObserver.unobserve(entry.target);
        }
      });
    }, { threshold: 0.35 });

    counters.forEach(function (counter) {
      counterObserver.observe(counter);
    });
  } else {
    counters.forEach(animateCounter);
  }
}());

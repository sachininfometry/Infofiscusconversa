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

  var demoForm = root.querySelector('#icp-demo-request-form');
  var demoDateInput = root.querySelector('[data-icp-demo-date]');
  var demoCalendar = root.querySelector('[data-icp-demo-calendar]');
  var monthLabel = root.querySelector('[data-icp-calendar-label]');
  var daysGrid = root.querySelector('[data-icp-calendar-days]');
  var selectedDateText = root.querySelector('[data-icp-selected-date]');
  var monthNames = [
    'January', 'February', 'March', 'April', 'May', 'June',
    'July', 'August', 'September', 'October', 'November', 'December'
  ];

  function padDatePart(value) {
    return String(value).padStart(2, '0');
  }

  function toDateValue(date) {
    return date.getFullYear() + '-' + padDatePart(date.getMonth() + 1) + '-' + padDatePart(date.getDate());
  }

  function formatDemoDate(date) {
    return monthNames[date.getMonth()] + ' ' + date.getDate() + ', ' + date.getFullYear();
  }

  function focusDemoForm() {
    if (!demoForm) {
      return;
    }

    demoForm.scrollIntoView({ behavior: 'smooth', block: 'center' });

    var firstField = demoForm.querySelector('input:not([type="hidden"]), button');
    if (firstField) {
      window.setTimeout(function () {
        firstField.focus({ preventScroll: true });
      }, 350);
    }
  }

  if (demoCalendar && monthLabel && daysGrid) {
    var today = new Date();
    today.setHours(0, 0, 0, 0);
    var shownMonth = new Date(today.getFullYear(), today.getMonth(), 1);
    var selectedDemoDate = new Date(today.getTime());

    function syncDemoDate(date) {
      selectedDemoDate = new Date(date.getFullYear(), date.getMonth(), date.getDate());

      if (demoDateInput) {
        demoDateInput.value = toDateValue(selectedDemoDate);
      }

      if (selectedDateText) {
        selectedDateText.textContent = 'Selected: ' + formatDemoDate(selectedDemoDate);
      }
    }

    function renderDemoCalendar() {
      var year = shownMonth.getFullYear();
      var month = shownMonth.getMonth();
      var firstDayIndex = new Date(year, month, 1).getDay();
      var daysInMonth = new Date(year, month + 1, 0).getDate();

      monthLabel.textContent = monthNames[month] + ' ' + year;
      daysGrid.innerHTML = '';

      for (var blank = 0; blank < firstDayIndex; blank += 1) {
        var spacer = document.createElement('span');
        spacer.setAttribute('aria-hidden', 'true');
        daysGrid.appendChild(spacer);
      }

      for (var day = 1; day <= daysInMonth; day += 1) {
        var date = new Date(year, month, day);
        var button = document.createElement('button');
        var dateValue = toDateValue(date);

        button.type = 'button';
        button.textContent = String(day);
        button.setAttribute('aria-label', 'Schedule demo on ' + formatDemoDate(date));
        button.setAttribute('aria-pressed', toDateValue(selectedDemoDate) === dateValue ? 'true' : 'false');
        button.dataset.demoDate = dateValue;

        if (toDateValue(today) === dateValue) {
          button.classList.add('is-today');
        }

        if (toDateValue(selectedDemoDate) === dateValue) {
          button.classList.add('is-selected');
        }

        button.addEventListener('click', function () {
          var parts = this.dataset.demoDate.split('-').map(Number);
          syncDemoDate(new Date(parts[0], parts[1] - 1, parts[2]));
          renderDemoCalendar();
          focusDemoForm();
        });

        daysGrid.appendChild(button);
      }
    }

    syncDemoDate(selectedDemoDate);
    renderDemoCalendar();

    var previousMonth = root.querySelector('[data-icp-calendar-prev]');
    var nextMonth = root.querySelector('[data-icp-calendar-next]');

    if (previousMonth) {
      previousMonth.addEventListener('click', function () {
        shownMonth = new Date(shownMonth.getFullYear(), shownMonth.getMonth() - 1, 1);
        renderDemoCalendar();
      });
    }

    if (nextMonth) {
      nextMonth.addEventListener('click', function () {
        shownMonth = new Date(shownMonth.getFullYear(), shownMonth.getMonth() + 1, 1);
        renderDemoCalendar();
      });
    }
  }

  root.querySelectorAll('[data-icp-demo-trigger]').forEach(function (button) {
    button.addEventListener('click', focusDemoForm);
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

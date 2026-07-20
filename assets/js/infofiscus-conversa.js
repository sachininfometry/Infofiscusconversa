(function () {
  'use strict';

  var root = document.querySelector('.infometry-conversa-product');
  if (!root) {
    return;
  }

  var demoHeading = root.querySelector('.icp-demo-form-section .icp-section-heading');
  if (demoHeading) {
    var demoTitle = demoHeading.querySelector('h2');
    var demoCopy = demoHeading.querySelectorAll('p');
    if (demoTitle) demoTitle.textContent = 'Experience INFOFISCUS Conversa.';
    if (demoCopy[0]) demoCopy[0].innerHTML = '<strong>Turn every business question into a confident decision.</strong>';
    if (demoCopy[1]) demoCopy[1].textContent = 'Book a personalized demo and see governed conversational analytics working with your enterprise data.';
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

  function chartSvg(name) {
    if (name === 'sales') {
      return '<svg class="icp-chart-bars" viewBox="0 0 360 150" aria-hidden="true"><g class="icp-chart-grid"><path d="M16 34H346M16 72H346M16 110H346"/></g><g class="icp-bar-set"><rect x="32" y="88" width="30" height="46" rx="6"/><rect x="82" y="65" width="30" height="69" rx="6"/><rect x="132" y="77" width="30" height="57" rx="6"/><rect x="182" y="43" width="30" height="91" rx="6"/><rect x="232" y="54" width="30" height="80" rx="6"/><rect x="282" y="24" width="30" height="110" rx="6"/></g><path class="icp-chart-target" d="M22 70H330"/><g class="icp-chart-labels"><text x="37" y="146">JAN</text><text x="87" y="146">FEB</text><text x="137" y="146">MAR</text><text x="187" y="146">APR</text><text x="237" y="146">MAY</text><text x="287" y="146">JUN</text></g></svg>';
    }

    if (name === 'operations') {
      return '<svg class="icp-chart-mixed" viewBox="0 0 360 150" aria-hidden="true"><g class="icp-chart-grid"><path d="M16 34H346M16 72H346M16 110H346"/></g><g class="icp-bar-set icp-bar-set-cyan"><rect x="30" y="78" width="34" height="56" rx="5"/><rect x="82" y="58" width="34" height="76" rx="5"/><rect x="134" y="68" width="34" height="66" rx="5"/><rect x="186" y="39" width="34" height="95" rx="5"/><rect x="238" y="48" width="34" height="86" rx="5"/><rect x="290" y="28" width="34" height="106" rx="5"/></g><path class="icp-chart-line icp-chart-line-gold" d="M47 91 L99 80 L151 88 L203 58 L255 65 L307 42"/><g class="icp-chart-points icp-chart-points-gold"><circle cx="47" cy="91" r="4"/><circle cx="99" cy="80" r="4"/><circle cx="151" cy="88" r="4"/><circle cx="203" cy="58" r="4"/><circle cx="255" cy="65" r="4"/><circle cx="307" cy="42" r="4"/></g></svg>';
    }

    if (name === 'marketing') {
      return '<svg class="icp-chart-grouped" viewBox="0 0 360 150" aria-hidden="true"><g class="icp-chart-grid"><path d="M16 34H346M16 72H346M16 110H346"/></g><g class="icp-group-bars"><g><rect x="35" y="76" width="18" height="58" rx="5"/><rect class="alt" x="55" y="48" width="18" height="86" rx="5"/></g><g><rect x="105" y="64" width="18" height="70" rx="5"/><rect class="alt" x="125" y="35" width="18" height="99" rx="5"/></g><g><rect x="175" y="83" width="18" height="51" rx="5"/><rect class="alt" x="195" y="54" width="18" height="80" rx="5"/></g><g><rect x="245" y="52" width="18" height="82" rx="5"/><rect class="alt" x="265" y="20" width="18" height="114" rx="5"/></g></g><g class="icp-chart-labels"><text x="35" y="146">SOCIAL</text><text x="105" y="146">EMAIL</text><text x="175" y="146">SEARCH</text><text x="245" y="146">EVENTS</text></g></svg>';
    }

    if (name === 'hr') {
      return '<svg class="icp-chart-radial" viewBox="0 0 360 150" aria-hidden="true"><g transform="translate(95 75) rotate(-90)"><circle class="icp-ring-base" r="51"/><circle class="icp-ring-value" r="51"/></g><text class="icp-ring-number" x="95" y="72">91.8%</text><text class="icp-ring-caption" x="95" y="91">RETENTION</text><g class="icp-radial-stats"><rect x="182" y="28" width="150" height="38" rx="10"/><rect x="182" y="82" width="150" height="38" rx="10"/><text x="198" y="45">ENGAGEMENT</text><text class="value" x="310" y="51">84%</text><text x="198" y="99">TIME TO FILL</text><text class="value" x="295" y="105">-22%</text></g></svg>';
    }

    var path = 'M10 112 L56 88 L102 96 L148 58 L194 68 L250 26 L300 44 L344 18';
    var area = path + ' L344 134 L10 134 Z';
    var points = path.match(/\d+\s+\d+/g) || [];
    return '<svg viewBox="0 0 360 150" aria-hidden="true"><path class="icp-chart-area" d="' + area + '"></path><path class="icp-chart-line" d="' + path + '"></path><g class="icp-chart-points">' + points.map(function (point) { var xy = point.split(/\s+/); return '<circle cx="' + xy[0] + '" cy="' + xy[1] + '" r="4"></circle>'; }).join('') + '</g></svg>';
  }

  root.querySelectorAll('.icp-chart-card-line[data-chart]').forEach(function (chart) {
    chart.innerHTML = chartSvg(chart.getAttribute('data-chart'));
  });

  root.querySelectorAll('.icp-comparison-table-wrap').forEach(function (wrap) {
    var table = wrap.querySelector('.icp-comparison-table');
    if (!table || wrap.querySelector('.icp-comparison-board')) {
      return;
    }

    wrap.classList.add('icp-comparison-simple');
    return;

    var preferredCapabilities = [
      'Natural Language Query',
      'Automated Insights',
      'Root Cause Analysis',
      'Predictive Analytics',
      'Semantic Layer',
      'SQL Transparency',
      'Multi Data Sources',
      'Unstructured Data',
      'Narrative Summaries',
      'Governance',
      'Custom UI'
    ];
    var allRows = Array.prototype.slice.call(table.querySelectorAll('tbody tr'));
    var rows = preferredCapabilities.map(function (capability) {
      return allRows.find(function (row) {
        return row.querySelector('th') && row.querySelector('th').textContent.trim() === capability;
      });
    }).filter(Boolean);
    var providerNames = ['Conversa', 'Tableau', 'Power BI', 'Modern AI'];
    var board = document.createElement('div');
    board.className = 'icp-comparison-board';
    board.innerHTML = '<div class="icp-comparison-board-head"><div class="icp-comparison-board-intro"><span>QUICK COMPARISON</span><strong>Compare essential analytics capabilities.</strong><small><i class="yes"></i>Yes <i class="partial"></i>Some <i class="no"></i>No</small></div><div class="icp-comparison-providers">' + providerNames.map(function (name, index) {
      return '<div class="icp-provider-chip' + (index === 0 ? ' is-conversa' : '') + '"><i>' + (index === 0 ? 'RECOMMENDED' : 'PLATFORM') + '</i><b>' + name + '</b></div>';
    }).join('') + '</div></div><div class="icp-capability-scroll"><div class="icp-capability-matrix"></div></div>';

    var matrix = board.querySelector('.icp-capability-matrix');
    rows.forEach(function (row, rowIndex) {
      var cells = Array.prototype.slice.call(row.querySelectorAll('td'));
      var card = document.createElement('article');
      card.className = 'icp-capability-row-card';
      card.innerHTML = '<div class="icp-capability-title"><span>0' + (rowIndex + 1) + '</span><strong>' + row.querySelector('th').textContent.trim() + '</strong></div><div class="icp-capability-values">' + cells.map(function (cell, index) {
        var status = cell.querySelector('.icp-status');
        var state = status ? status.textContent.trim() : '';
        var stateClass = status && status.classList.contains('icp-status-yes') ? 'is-yes' : status && status.classList.contains('icp-status-no') ? 'is-no' : 'is-partial';
        return '<div class="icp-mini-status ' + stateClass + (index === 0 ? ' is-conversa' : '') + '"><small>' + providerNames[index] + '</small><b><i></i>' + state + '</b></div>';
      }).join('') + '</div>';
      matrix.appendChild(card);
    });

    table.classList.add('icp-comparison-source-table');
    wrap.appendChild(board);
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
        var panelActive = panel.getAttribute('data-icp-use-panel') === name;
        panel.classList.toggle('is-active', panelActive);

        if (panelActive) {
          panel.querySelectorAll('.icp-chart-line, .icp-chart-points circle, .icp-bar-set rect, .icp-group-bars rect, .icp-ring-value').forEach(function (part) {
            part.style.animation = 'none';
            void part.getBoundingClientRect();
            part.style.animation = '';
          });
        }
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
  var demoDateDisplayInput = root.querySelector('[data-icp-demo-date-display]');
  var demoTimeInput = root.querySelector('[data-icp-demo-time]');
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
        demoDateInput.value = toDateValue(selectedDemoDate) + (demoTimeInput && demoTimeInput.value ? 'T' + demoTimeInput.value : '');
      }

      if (demoDateDisplayInput) {
        demoDateDisplayInput.value = formatDemoDate(selectedDemoDate);
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

    if (demoTimeInput) {
      demoTimeInput.value = demoTimeInput.value || '10:00';
      demoTimeInput.addEventListener('change', function () {
        syncDemoDate(selectedDemoDate);
      });
      syncDemoDate(selectedDemoDate);
    }

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

    if (demoForm && demoDateInput) {
      demoForm.addEventListener('submit', function () {
        if (!demoDateInput.value) {
          syncDemoDate(selectedDemoDate);
        }
      });
    }
  }

  root.querySelectorAll('[data-icp-demo-trigger]').forEach(function (button) {
    button.addEventListener('click', focusDemoForm);
  });

  function animateCounter(el) {
    if (el.icpCounterFrame) {
      window.cancelAnimationFrame(el.icpCounterFrame);
    }

    var target = parseFloat(el.getAttribute('data-icp-count') || '0');
    var suffix = el.getAttribute('data-icp-suffix') || '';
    var prefix = el.getAttribute('data-icp-prefix') || '';
    var decimals = String(target).indexOf('.') > -1 ? 1 : 0;
    var startTime = null;
    var duration = 1150;
    el.textContent = prefix + (0).toFixed(decimals) + suffix;

    function frame(time) {
      if (!startTime) {
        startTime = time;
      }
      var progress = Math.min((time - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var value = target * eased;
      el.textContent = prefix + value.toFixed(decimals) + suffix;
      if (progress < 1) {
        el.icpCounterFrame = window.requestAnimationFrame(frame);
      } else {
        el.textContent = prefix + target.toFixed(decimals) + suffix;
        el.icpCounterFrame = null;
      }
    }

    el.icpCounterFrame = window.requestAnimationFrame(frame);
  }

  root.querySelectorAll('[data-icp-hero-slider]').forEach(function (slider) {
    var slides = Array.prototype.slice.call(slider.querySelectorAll('.icp-hero-slide'));
    var dots = Array.prototype.slice.call(slider.querySelectorAll('.icp-hero-slider-dots span'));
    var activeSlide = 0;
    if (slides.length < 2) {
      return;
    }
    window.setInterval(function () {
      slides[activeSlide].classList.remove('is-active');
      if (dots[activeSlide]) {
        dots[activeSlide].classList.remove('is-active');
      }
      activeSlide = (activeSlide + 1) % slides.length;
      slides[activeSlide].classList.add('is-active');
      if (dots[activeSlide]) {
        dots[activeSlide].classList.add('is-active');
      }
    }, 4200);
  });

  var counters = Array.prototype.slice.call(root.querySelectorAll('[data-icp-count]'));
  if ('IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
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

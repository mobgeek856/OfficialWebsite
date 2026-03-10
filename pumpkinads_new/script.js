(function () {
  'use strict';

  // Our RTB Partners: 每 5 秒重新随机挑几个做流光（非固定）
  function applyPartnerSheen() {
    var partnerNodes = Array.prototype.slice.call(
      document.querySelectorAll('.partners .partner-logo')
    );
    partnerNodes.forEach(function (el) { el.classList.remove('partner-logo-sheen'); });
    if (partnerNodes.length > 0) {
      var partnerPick = Math.max(2, Math.min(4, Math.floor(partnerNodes.length / 3))) || 2;
      var usedIdx = {};
      for (var i = 0; i < partnerPick; i++) {
        var idx = Math.floor(Math.random() * partnerNodes.length);
        if (usedIdx[idx]) { i--; continue; }
        usedIdx[idx] = true;
        partnerNodes[idx].classList.add('partner-logo-sheen');
      }
    }
  }

  // Dynamic highlight effects for specific parts
  function initDynamicHighlights() {
    applyPartnerSheen();
    setInterval(applyPartnerSheen, 5000);

    // Maximize the value... 底部标签：闪光效果（随机几个）
    var tagNodes = Array.prototype.slice.call(
      document.querySelectorAll('.format-tags span')
    );
    if (tagNodes.length > 0) {
      var tagPick = Math.max(3, Math.min(6, Math.floor(tagNodes.length / 2))) || 3;
      var usedTagIdx = {};
      for (var j = 0; j < tagPick; j++) {
        var tIdx = Math.floor(Math.random() * tagNodes.length);
        if (usedTagIdx[tIdx]) { j--; continue; }
        usedTagIdx[tIdx] = true;
        tagNodes[tIdx].classList.add('format-tag-flash');
      }
    }

    // All "Monetize Your Traffic" buttons: glow & flicker
    var trafficButtons = Array.prototype.slice.call(
      document.querySelectorAll('a.btn, button.btn')
    );
    trafficButtons.forEach(function (btn) {
      var text = (btn.textContent || '').toLowerCase();
      if (text.indexOf('monetize your traffic') !== -1) {
        btn.classList.add('btn-traffic-glow');
      }
    });
  }

  // Smooth scroll for anchor links (same page)
  function scrollToId(id) {
    var el = document.getElementById(id);
    if (el) {
      el.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }

  // Init dynamic effects after DOM is ready
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDynamicHighlights);
  } else {
    initDynamicHighlights();
  }

  document.addEventListener('click', function (e) {
    var a = e.target.closest('a[href^="#"]');
    if (a && a.getAttribute('href') !== '#') {
      var id = a.getAttribute('href').slice(1);
      if (id && document.getElementById(id)) {
        e.preventDefault();
        scrollToId(id);
      }
    }

    // Blog: coming soon prompt
    var blogLink = e.target.closest('a[href="blog.html"]');
    if (blogLink) {
      e.preventDefault();
      window.alert('Coming soon. Please stay tuned.');
    }

    // Buttons with data-scroll
    var btn = e.target.closest('[data-scroll]');
    if (btn) {
      var targetId = btn.getAttribute('data-scroll');
      if (targetId) {
        e.preventDefault();
        scrollToId(targetId);
      }
    }
  });

  // Mobile menu toggle
  var menuBtn = document.getElementById('menu-btn');
  var navMobile = document.getElementById('nav-mobile');
  if (menuBtn && navMobile) {
    menuBtn.addEventListener('click', function () {
      menuBtn.classList.toggle('open');
      navMobile.classList.toggle('open');
      document.body.style.overflow = navMobile.classList.contains('open') ? 'hidden' : '';
    });
    // Close mobile menu when clicking a link
    navMobile.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        menuBtn.classList.remove('open');
        navMobile.classList.remove('open');
        document.body.style.overflow = '';
      });
    });
  }

  // Scroll to hash on load (e.g. index.html#contact)
  if (window.location.hash) {
    window.addEventListener('load', function () {
      var id = window.location.hash.slice(1);
      if (document.getElementById(id)) {
        setTimeout(function () { scrollToId(id); }, 100);
      }
    });
  }

  // HTML5 Games grid: load from gamelist.json
  var gamesGrid = document.getElementById('html5-games-grid');
  if (gamesGrid) {
    fetch('gamelist.json')
      .then(function (r) { return r.json(); })
      .then(function (list) {
        if (!list || !list.length) {
          gamesGrid.innerHTML = '<div class="games-grid-placeholder"><p>No games loaded.</p></div>';
          return;
        }
        gamesGrid.innerHTML = '';
        var displayList = list.length > 12 ? list.slice(0, 12) : list;
        var iconBase = 'assest/games_icon/';
        displayList.forEach(function (game) {
          var title = game.title || 'Game';
          var iconSrc = iconBase + encodeURIComponent(title) + '.png';
          var intro = game.Introduction || game.intro || '';
          var detailUrl = 'game-detail.html?id=' + (game.id || '');
          var card = document.createElement('a');
          card.className = 'game-card';
          card.href = detailUrl;
          card.innerHTML =
            '<img class="game-card-img game-card-icon" src="' + iconSrc + '" alt="' + title + '" loading="lazy">' +
            '<div class="game-card-img-placeholder" style="display:none; width:100%; aspect-ratio:1; background:rgba(255,255,255,0.08);"></div>' +
            '<div class="game-card-content">' +
              '<h4 class="game-card-title">' + title + '</h4>' +
              '<p class="game-card-intro">' + intro + '</p>' +
            '</div>';
          var placeholder = card.querySelector('.game-card-img-placeholder');
          var iconImg = card.querySelector('.game-card-icon');
          if (iconImg && placeholder) {
            iconImg.addEventListener('error', function () {
              iconImg.style.display = 'none';
              placeholder.style.display = 'block';
            });
          }
          gamesGrid.appendChild(card);
        });
      })
      .catch(function () {
        if (gamesGrid) {
          gamesGrid.innerHTML = '<div class="games-grid-placeholder"><p>Games list could not be loaded.</p></div>';
        }
      });
  }
})();

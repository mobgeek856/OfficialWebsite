const i18n = {
  en: {category:"Category",tags:"Tags",play:"Play Now",detail:"Detail",description:"Description",instructions:"How to play",notfound:"Game not found", Adventure:"Adventure", Action:"Action", Puzzle:"Puzzle", Sports:"Sports", Shooting:"Shooting", Girls:"Girls", Strategy:"Strategy", ALL:"ALL"},
  zh: {category:"分类",tags:"标签",play:"立即试玩",detail:"详情",description:"简介",instructions:"玩法说明",notfound:"游戏不存在", Adventure:"冒险", Action:"动作", Puzzle:"益智", Sports:"体育", Shooting:"射击", Girls:"女生", Strategy:"策略", ALL:"全部"},
  fr: {category:"Catégorie",tags:"Étiquettes",play:"Jouer",detail:"Détails",description:"Description",instructions:"Comment jouer",notfound:"Jeu introuvable", Adventure:"Aventure", Action:"Action", Puzzle:"Puzzle", Sports:"Sport", Shooting:"Tir", Girls:"Filles", Strategy:"Stratégie", ALL:"TOUS"},
  es: {category:"Categoría",tags:"Etiquetas",play:"Jugar Ahora",detail:"Detalle",description:"Descripción",instructions:"Cómo jugar",notfound:"Juego no encontrado", Adventure:"Aventura", Action:"Acción", Puzzle:"Rompecabezas", Sports:"Deportes", Shooting:"Disparos", Girls:"Chicas", Strategy:"Estrategia", ALL:"TODO"}
};
let lang = localStorage.getItem('lang') || 'en';
document.getElementById('lang-switch').value = lang;
document.getElementById('lang-switch').onchange = function(){
  lang = this.value;
  localStorage.setItem('lang', lang);
  location.reload();
}

const PAGE_SIZE = 20;
let games = [];
let filteredGames = [];
let currentPage = 0;
let loading = false;
let allLoaded = false;
let filterType = null;
let filterValue = "ALL";

function renderNextPage() {
  if (loading || allLoaded) return;
  loading = true;
  const sentinel = document.getElementById('lazy-sentinel');
  if (sentinel) sentinel.innerHTML = '<div class="loading-more">Loading...</div>';

  setTimeout(() => {
    const start = currentPage * PAGE_SIZE;
    const end = start + PAGE_SIZE;
    const list = filteredGames.slice(start, end);
    let html = '';
    list.forEach(g => {
      html += `
        <div class="game-card is-clickable" data-url="detail.html?id=${g.id}" tabindex="0" role="link" aria-label="${g.title ? (g.title[lang] || g.title['en']) : ''}" style="cursor:pointer">
          <img src="${g.thumb}" class="game-cover" alt="${g.title ? (g.title[lang] || g.title['en']) : ''}" />
          <h3>${g.title ? (g.title[lang] || g.title['en']) : ''}</h3>
          <p><b>${i18n[lang].category}：</b>${i18n[lang][g.category ? (g.category[lang] || g.category['en']) : ''] || (g.category ? (g.category[lang] || g.category['en']) : '')}</p>
          <p><b>${i18n[lang].tags}：</b>${((g.tags && (g.tags[lang] || g.tags['en'])) || '').split(',').map(t=>i18n[lang][t.trim()]||t.trim()).join(', ')}</p>
          <div class="card-btn-bottom">
            <a href="detail.html?id=${g.id}" class="detail-btn">${i18n[lang].detail}</a>
          </div>
        </div>
      `;
    });
    document.getElementById('game-list').insertAdjacentHTML('beforeend', html);
    currentPage++;
    loading = false;
    if (end >= filteredGames.length) {
      allLoaded = true;
      if (sentinel) sentinel.innerHTML = '<div class="loading-more">All games loaded</div>';
    } else {
      if (sentinel) sentinel.innerHTML = '';
    }
  }, 400);
}

function doSearch() {
  const kw = (document.getElementById('game-search-input').value || '').trim().toLowerCase();
  currentPage = 0;
  allLoaded = false;
  if (!kw) {
    filteredGames = games;
  } else {
    filteredGames = games.filter(g =>
      ((g.title && ((g.title[lang] || g.title['en']) || '').toLowerCase().includes(kw)) ||
      (g.description && ((g.description[lang] || g.description['en']) || '').toLowerCase().includes(kw)) ||
      (g.tags && ((g.tags[lang] || g.tags['en']) || '').toLowerCase().includes(kw)))
    );
  }
  document.getElementById('game-list').innerHTML = '';
  const gameList = document.getElementById('game-list');
  if (gameList) gameList.className = 'game-matrix';
  gameList.innerHTML = '';
  renderNextPage();
  if (filteredGames.length === 0) {
    document.getElementById('game-list').innerHTML = '<div class="no-result-tip">No games found.</div>';
  }
}

function setupLazyLoad() {
  const sentinel = document.createElement('div');
  sentinel.id = 'lazy-sentinel';
  document.getElementById('game-list').after(sentinel);
  let observer = new IntersectionObserver(entries => {
    if (entries[0].isIntersecting) renderNextPage();
  });
  observer.observe(sentinel);
}

function applyFilter(type, value) {
  filterType = type;
  filterValue = value;
  currentPage = 0;
  allLoaded = false;
  document.getElementById('game-list').innerHTML = '';
  const gameList = document.getElementById('game-list');
  if (gameList) gameList.className = 'game-matrix';
  gameList.innerHTML = '';
  if (value === "ALL") {
    filteredGames = games;
  } else if (type === "category") {
    filteredGames = games.filter(g => g.category && g.category.en === value);
  } else if (type === "tag") {
    filteredGames = games.filter(g => {
      const tagStr = (g.tags && (g.tags.en || g.tags['en'])) || '';
      return tagStr.split(',').map(x=>x.trim()).includes(value);
    });
  }
  renderNextPage();
}

// ==== 搜索事件自动绑定
document.addEventListener('DOMContentLoaded', function(){
  const searchInput = document.getElementById('game-search-input');
  const searchBtn = document.getElementById('game-search-btn');
  if(searchInput){ searchInput.addEventListener('input', doSearch); }
  if(searchBtn){ searchBtn.addEventListener('click', doSearch); }
  // Make entire game card clickable via event delegation
  const gameListEl = document.getElementById('game-list');
  if (gameListEl) {
    gameListEl.addEventListener('click', function(e){
      // If a real link was clicked, allow default behavior
      if (e.target.closest('a')) return;
      const card = e.target.closest('.game-card.is-clickable');
      if (card && card.dataset.url) {
        window.location.href = card.dataset.url;
      }
    });
    // Keyboard accessibility: Enter/Space activates the card
    gameListEl.addEventListener('keydown', function(e){
      if (e.key === 'Enter' || e.key === ' ') {
        const card = e.target.closest('.game-card.is-clickable');
        if (card && card.dataset.url) {
          e.preventDefault();
          window.location.href = card.dataset.url;
        }
      }
    });
  }
});

getGameData().then(data => {
  games = Object.values(data).flat();
  filteredGames = games;
  renderNextPage();
  setupLazyLoad();

  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.onclick = function(){
      document.querySelectorAll('.filter-btn.active').forEach(b=>b.classList.remove('active'));
      this.classList.add('active');
      applyFilter(this.dataset.filterType, this.dataset.filterValue);
    };
  });
});

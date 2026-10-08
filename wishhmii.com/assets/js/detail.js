
const i18n = {
  en: {category:"Category",tags:"Tags",play:"Play Now",detail:"Detail",description:"Description",instructions:"How to play",notfound:"Game not found", Adventure:"Adventure", Action:"Action", Puzzle:"Puzzle", Sports:"Sports", Shooting:"Shooting", Girls:"Girls", Strategy:"Strategy"},
  zh: {category:"分类",tags:"标签",play:"立即试玩",detail:"详情",description:"简介",instructions:"玩法说明",notfound:"游戏不存在", Adventure:"冒险", Action:"动作", Puzzle:"益智", Sports:"体育", Shooting:"射击", Girls:"女生", Strategy:"策略"},
  fr: {category:"Catégorie",tags:"Étiquettes",play:"Jouer",detail:"Détails",description:"Description",instructions:"Comment jouer",notfound:"Jeu introuvable", Adventure:"Aventure", Action:"Action", Puzzle:"Puzzle", Sports:"Sport", Shooting:"Tir", Girls:"Filles", Strategy:"Stratégie"},
  es: {category:"Categoría",tags:"Etiquetas",play:"Jugar Ahora",detail:"Detalle",description:"Descripción",instructions:"Cómo jugar",notfound:"Juego no encontrado", Adventure:"Aventura", Action:"Acción", Puzzle:"Rompecabezas", Sports:"Deportes", Shooting:"Disparos", Girls:"Chicas", Strategy:"Estrategia"}
};
let lang = localStorage.getItem('lang') || 'en';
document.getElementById('lang-switch').value = lang;
document.getElementById('lang-switch').onchange = function(){
  lang = this.value;
  localStorage.setItem('lang', lang);
  location.reload();
}
const id = new URLSearchParams(location.search).get('id');
getGameData().then(data=>{
  let allGames = Object.values(data).flat();
  let game = allGames.find(g=>g.id == id);
  if(!game){
    document.getElementById('game-detail').innerHTML = `<h2>${i18n[lang].notfound}</h2>`;
    return;
  }
  document.getElementById('game-detail').innerHTML = `
    <div class="detail-card">
      <img src="${game.thumb}" class="detail-cover"/>
      <h2>${game.title ? (game.title[lang] || game.title['en']) : ''}</h2>
      <p><b>${i18n[lang].description}：</b>${game.description ? (game.description[lang] || game.description['en']) : ''}</p>
      <p><b>${i18n[lang].instructions}：</b>${game.instructions ? (game.instructions[lang] || game.instructions['en']) : ''}</p>
      <p><b>${i18n[lang].category}：</b>${i18n[lang][game.category ? (game.category[lang] || game.category['en']) : ''] || (game.category ? (game.category[lang] || game.category['en']) : '')}</p>
      <p><b>${i18n[lang].tags}：</b>${(() => {
        let tagStr = '';
        if (game.tags && (game.tags[lang] || game.tags['en'])) {
          tagStr = game.tags[lang] || game.tags['en'];
        }
        if (!tagStr) return '';
        return tagStr.split(',').map(t => i18n[lang][t.trim()] || t.trim()).join(', ');
      })()}</p>

      <div class="ad-top-banner" style="width:100%;display:flex;justify-content:center;align-items:center;margin:24px auto;min-height:110px;">

      <a href="play.html?url=${encodeURIComponent(game.url)}&w=${game.w||1280}&h=${game.h||720}" class="play-btn">${i18n[lang].play}</a>
      <!--
      旧实现（直接跳转到 game.url 的 Play 按钮）已废弃：
      <a href="${game.url}" class="play-btn" target="_blank">${i18n[lang].play}</a>
      -->
    </div>
  `;

  // 推荐区：不区分类别，排除当前id，随机取10个
  let recommendList = allGames.filter(g=>g.id != id);
  if(recommendList.length > 10){
    recommendList = recommendList.sort(()=>Math.random()-0.5).slice(0,10);
  }
  if (recommendList.length > 0) {
    let recHtml = `
  <div class="recommend-block">
    <div class="recommend-title-row left">
      <span class="star-icon-filled">
        <svg width="40" height="40" viewBox="0 0 48 48" fill="white" stroke="#ffd700" stroke-width="2">
          <polygon points="24,6 29,19 43,19 32,28 36,42 24,34 12,42 16,28 5,19 19,19"/>
        </svg>
      </span>
      <span class="recommend-title-main">You may also like</span>
      <span class="recommend-title-outline">You may also like</span>
    </div>
    <div class="recommend-list-horizontal">`;
    recommendList.forEach(g => {
      recHtml += `
        <div class="recommend-card">
          <img src="${g.thumb}" alt="${g.title ? (g.title[lang] || g.title['en']) : ''}" class="recommend-thumb"/>
          <div class="recommend-title">${g.title ? (g.title[lang] || g.title['en']) : ''}</div>
          <a href="detail.html?id=${g.id}" class="detail-btn" style="margin-top:8px;">${i18n[lang].detail||'Detail'}</a>
        </div>
      `;
    });
    recHtml += `</div></div>`;
    document.getElementById('game-detail').innerHTML += recHtml;
    setTimeout(function() {
      const recommendListDom = document.querySelector('.recommend-list-horizontal');
      if(recommendListDom){
        recommendListDom.classList.add('anim-demo');
        setTimeout(()=>recommendListDom.classList.remove('anim-demo'), 1800);
      }
    }, 280);
  }
});

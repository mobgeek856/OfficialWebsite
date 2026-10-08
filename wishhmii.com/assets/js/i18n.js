
const i18n_ui = {
  en: {
    site_title: "WISHHMII GAMES - Casual Game Matrix",
    logo: "WISHHMII GAMES ",
    home: "Home",
    about: "About Us",
    contact: "Contact Us",
    privacy: "Privacy Policy",
    terms: "Terms of Service",
    footer: "All games are for entertainment. &copy; 2025 WISHHMII GAMES "
  },
  zh: {
    site_title: "WISHHMII GAMES - 休闲游戏矩阵",
    logo: "游戏世界",
    home: "首页",
    about: "关于我们",
    contact: "联系我们",
    privacy: "隐私政策",
    terms: "服务条款",
    footer: "所有游戏仅供娱乐。&copy; 2025 游戏世界"
  },
  fr: {
    site_title: "WISHHMII GAMES - Matrice de Jeux",
    logo: "Monde du Jeu",
    home: "Accueil",
    about: "À propos",
    contact: "Contactez-nous",
    privacy: "Politique de Confidentialité",
    terms: "Conditions d'utilisation",
    footer: "Tous les jeux sont pour le divertissement. &copy; 2025 Monde du Jeu"
  },
  es: {
    site_title: "WISHHMII GAMES - Matriz de Juegos",
    logo: "Mundo de Juegos",
    home: "Inicio",
    about: "Sobre Nosotros",
    contact: "Contáctanos",
    privacy: "Política de Privacidad",
    terms: "Términos de Servicio",
    footer: "Todos los juegos son para entretenimiento. &copy; 2025 Mundo de Juegos"
  }
};
function updateStaticI18n(lang) {
  const ui = i18n_ui[lang] || i18n_ui.en;
  document.querySelectorAll('[data-i18n]').forEach(el => {
    const key = el.getAttribute('data-i18n');
    if (el.tagName.toLowerCase() === 'title') {
      document.title = ui[key] || '';
    } else {
      el.innerHTML = ui[key] || '';
    }
  });
}
document.addEventListener('DOMContentLoaded', function(){
  let lang = localStorage.getItem('lang') || 'en';
  updateStaticI18n(lang);
});
// 语言切换逻辑：lang-switch/drawer-lang-switch 切换时调用 updateStaticI18n(lang)
document.addEventListener('DOMContentLoaded', function(){
  var langSel = document.getElementById('lang-switch');
  var drawerLangSel = document.getElementById('drawer-lang-switch');
  function onLangChange(e){
    var lang = this.value;
    localStorage.setItem('lang', lang);
    updateStaticI18n(lang);
    // 兼容其它JS刷新
    if (typeof syncLangSelects === 'function') syncLangSelects();
  }
  if (langSel) langSel.onchange = onLangChange;
  if (drawerLangSel) drawerLangSel.onchange = onLangChange;
});

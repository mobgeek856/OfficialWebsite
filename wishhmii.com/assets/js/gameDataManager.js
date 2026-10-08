
let gameDataCache = null;
function getGameData() {
  if (gameDataCache) {
    return Promise.resolve(gameDataCache);
  }
  return fetch('assets/config/games.json').then(r => r.json()).then(data => {
    gameDataCache = data;
    return data;
  });
}

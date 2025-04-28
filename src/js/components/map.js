let center = [56.450250, 84.981273];
const map = document.getElementById("map")
if (map) {

  ymaps.ready(init);

}


function init() {
  let map = new ymaps.Map('map', {
    center: center,
    zoom: 16,
  });




  map.controls.remove('geolocationControl'); // удаляем геолокацию
  map.controls.remove('searchControl'); // удаляем поиск
  map.controls.remove('trafficControl'); // удаляем контроль трафика
  map.controls.remove('typeSelector'); // удаляем тип
  map.controls.remove('fullscreenControl'); // удаляем кнопку перехода в полноэкранный режим
  map.controls.remove('zoomControl'); // удаляем контрол зуммирования
  map.controls.remove('rulerControl'); // удаляем контрол правил
  map.behaviors.disable(['scrollZoom']); // отключаем скролл карты (опционально)

  let placemark = new ymaps.Placemark(center, {
  });
  map.geoObjects.add(placemark);
}

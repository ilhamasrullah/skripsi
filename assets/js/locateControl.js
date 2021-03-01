var locateControl = L.control.locate({
  position: "topleft",
  drawCircle: true,
  follow: true,
  setView: true,
  keepCurrentZoomLevel: false,
  markerStyle: {
    weight: 1,
    opacity: 0.8,
    fillOpacity: 0.8,
  },
  circleStyle: {
    weight: 1,
    clickable: false,
  },
  icon: "fa fa-crosshairs",
  metric: true,
  strings: {
    title: "Klik untuk mengetahui lokasimu",
    popup: "Lokasimu sekarang di sini. Akurasi {distance} {unit}",
    outsideMapBoundsMsg: "Kamu berada di luar area peta"
  },
  locateOptions: {
    maxZoom: 15,
    watch: true,
    enableHighAccuracy: true,
    maximumAge: 10000,
    timeout: 10000
  },
});
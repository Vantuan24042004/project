import L from 'leaflet';

// Tạo một instance của bản đồ
const map = L.map('map').setView([51.505, -0.09], 13);

// Thêm layer Mapbox Streets vào bản đồ
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
}).addTo(map);

// Thêm marker
const marker = L.marker([51.5, -0.09]).addTo(map);

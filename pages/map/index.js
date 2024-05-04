const map = L.map('map')
map.setView([-19.206, 46.829], 5.5)


L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contribution'
}).addTo(map)



const data = {
    gatwick: {
        coords: [-18.1458, 49.3981],
        title: "Port Toamasina",
        type: "Refuge",
        icon: "./camp.png"
    },
    machester: {
        coords: [-22.629, 46.061],
        title: "Hopitaly Ihorombe",
        type: "Hopital",
        icon: "./hopital.png"
    },
    heathrow: {
        coords: [-18.9086, 47.5262],
        title: "Analakely",
        type: "Zone rouge",
        icon: "./danger.png"
    },
}

for (let key in data) {

    const place = data[key]
    const customIcon = L.icon({
        iconUrl: place.icon,
        iconSize: [60, 60]
    })
    L.marker(place.coords, {
        title: place.title,
        icon: customIcon,
    })
        .bindPopup(`<h2 style="color:green">${place.type}</h2>`)
        .addTo(map)
}


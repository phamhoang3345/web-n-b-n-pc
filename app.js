document.addEventListener("DOMContentLoaded", () => {
const products = {
    1: {
        name: "PC Gaming | RYZEN 9 9950X3D | RTX 5090 | 4K GAMING",
        price: "139.099.000đ",
        img: "./anh/PCGAMINGA.png",
    specs: [
        "CPU: AMD Ryzen 9 9950X3D",
        "GPU: NVIDIA GeForce RTX 5090",
        "RAM: RAM GEIL SPEAR V 32GB",
        "SSD: SSD WD GREEN SN3000 500GB",
        "PSU: VSP VXP 1000W TGD V2 Gold Full Range",
        "Mainboard: ASUS ROG Crosshair X870E",
    ],
    table: [
        ["1","CPU AMD Ryzen 9 9950X3D (16 Nhân 32 Luồng | Up To 5.7GHz | 128MB Cache | 170W)","1","36th"],
        ["2","Mainboard ASUS ROG Crosshair X870E","1","36th"],
        ["3","RAM GEIL SPEAR V 32GB (2x16GB) DDR5 Bus 5200MHz","1","36th"],
        ["4","Ổ cứng SSD Samsung 990 PRO 2TB M.2 NVMe M.2 2280 PCIe Gen4.0 x4","1","36th"],
        ["5","Card màn hình ASUS ROG Astral GeForce RTX 5090 32GB GDDR7 OC Edition","1","36th"],
        ["6","Nguồn máy tính SuperFlower Leadex VII PRO 1200W ATX3.1 80 Plus Platinum SF-1200F14XP","1","12th"],
        ["7","TẢN NHIỆT NƯỚC TRYX PANORAMA ARGB 360 (Màn AMOLED 6.5/Bơm ASETEK 8)","1","72th"],
        ["8","VỎ CASE HYTE Y70 - BLACK (ATX/MID TOWER/MÀU ĐEN)","1","12th"],
        ["9","Phụ kiện Fan Case JONSBO ZA-360 ARGB BLACK ","1","12th"],
    ],
    },


    2: {
        name: "PC Gaming | INTEL i9 14900K | RTX 4080 SUPER | 2K ULTRA",
        price: "61.290.000₫",
        img: "./anh/PCGAMINGA.png",
    specs: [
        "CPU: Intel Core i9-14900K",
        "GPU: NVIDIA RTX 4080 SUPER",
        "RAM: CORSAIR VENGEANCE 32GB DDR5",
        "SSD: SAMSUNG 980 PRO 1TB",
        "PSU: COOLER MASTER 1000W GOLD",
        "Mainboard: ASUS Z790-A PRIME"
    ],
    table: [
        ["1","CPU Intel Core i9 14900K (3.20 Ghz, up to 6.0GHz, 24 Nhân 32 Luồng, 36 MB Cache)","1","36th"],
        ["2","Mainboard ASUS TUF GAMING Z790-PRO WIFI (DDR5)","1","36th"],
        ["3","32GB (16GBx2) DDR5 bus 5600 Kingston / Corsair / Gskill","1","36th"],
        ["4","SSD Crucial P3 Plus 1TB NVMe M.2 PCIe Gen4 x4","1","36th"],
        ["5","MSI GeForce RTX 4080 SUPER 16G VENTUS 3X OC","1","36th"],
        ["6","Nguồn máy tính Thermalright 850W TG-850 80 Plus Gold","1","24th"],
        ["7","Tản nhiệt nước AIO Thermalright Hyper Vision 360 BLACK ARGB","1","72th"],
        ["8","Vỏ case Antec C8 Black (Vỏ bể cá, E-ATX, TOP 360 RAD)","1","12th"],
    ],
    },

    3: {
    name: "PC GAMING | I3 12100F | RTX 3050 | 1080P GAMING",
    price: "12.500.000₫", 
    img: "./anh/PCGAMINGB.png", 
    specs: [
        "CPU: Intel Core I3 12100F (Up to 4.3GHz, 4 Nhân 8 Luồng)",
        "Mainboard: ASROCK H610M-H2/M.2 DDR4",
        "RAM: SSTC 16GB Bus 3200MHz DDR4 Black",
        "SSD: TeamGroup CX2 256GB 2.5 inch SATA III",
        "PSU: AIGO VK550 - 550W (Màu Đen)",
        "GPU: ZOTAC GAMING GeForce RTX 3050 6GB",
        "Case: XIGMATEK ALPHARD M BLACK",
        "Cooler: Tản nhiệt khí Jonsbo CR-1200 RGB",
    ],
    table: [
        ["1", "CPU Intel Core I3 12100F (Up to 4.3GHz, 4 Nhân 8 Luồng) (Tray)", "1", "36th"],
        ["2", "Mainboard ASROCK H610M-H2/M.2 DDR4", "1", "36th"],
        ["3", "RAM SSTC 16GB Bus 3200MHz DDR4 Black Tản nhiệt", "1", "36th"],
        ["4", "Ổ cứng SSD TeamGroup CX2 256GB 2.5 inch SATA III", "1", "36th"],
        ["5", "Nguồn máy tính AIGO VK550 - 550W (Màu Đen)", "1", "36th"],
        ["6", "Card màn hình ZOTAC GAMING GeForce RTX 3050 6GB", "1", "36th"],
        ["7", "Vỏ Case XIGMATEK ALPHARD M BLACK", "1", "12th"],
        ["8", "Tản nhiệt khí Jonsbo CR-1200 RGB", "1", "12th"],
    ]
    },
    4: {
    name: "PC GAMING | RYZEN 7 7800X3D | RTX 4070 Ti | 4K GAMING",
    price: "53.980.000đ", 
    img: "./anh/PCGAMINGA1.png", 
    specs: [
        "CPU: AMD Ryzen 7 7800X3D (Up to 5.0GHz, 8 Cores 16 Threads) - TRAY",
        "Mainboard: Asus B650M-AYW WIFI-CSM DDR5",
        "RAM: GEIL SPEAR V 16GB Bus 5200MHz DDR5 Black",
        "SSD: PNY CS1031 500GB M.2 2280 NVMe PCIe Gen 3x4",
        "PSU: Thermalright TB-850S 850W (80 Plus Bronze, ATX 3.0, PCIe 5.0, Full Modular)",
        "GPU: Galax GeForce RTX 4070 Ti SUPER EX Gamer Black 1-Click OC 16GB",
        "Case: XIGMATEK CUBI M BLACK - kèm 3 fan ARGB",
        "Cooler: CoolerMaster T620S BLACK ARGB",
    ],
    table: [
        ["1", "CPU AMD RYZEN 7 7800X3D (Up to 5.0GHz / 8 Cores 16 Threads) - TRAY", "1", "36th"],
        ["2", "Mainboard Asus B650M-AYW WIFI-CSM DDR5", "1", "36th"],
        ["3", "RAM GEIL SPEAR V 16GB BUS 5200MHz DDR5 Black", "1", "36th"],
        ["4", "Ổ cứng SSD PNY CS1031 500GB M.2 2280 NVMe PCIe Gen 3x4", "1", "36th"],
        ["5", "Nguồn máy tính Thermalright TB-850S 850W (80 Plus Bronze, ATX 3.0, PCIe 5.0, Full Modular)", "1", "36th"],
        ["6", "Card đồ họa Galax GeForce RTX 4070 Ti SUPER EX Gamer Black 1-Click OC 16GB", "1", "36th"],
        ["7", "Vỏ Case XIGMATEK CUBI M BLACK - kèm 3 fan ARGB", "1", "12th"],
        ["8", "Tản nhiệt khí CoolerMaster T620S BLACK ARGB", "1", "12th"],
    ]
},
    5: {
    name: "PC GAMING | RYZEN 7 5700X | RTX 4060 | 2K GAMING",
    price: "17.580.000đ", 
    img: "./anh/PCGAMINGB1.jpg", 
    specs: [
        "CPU: AMD Ryzen 7 5700X (3.4GHz Boost 4.6GHz / 8 nhân 16 luồng / 32MB / AM4) - TRAY",
        "Mainboard: Asrock B450M-HDV R4.0",
        "RAM: VSP 16GB BUS 3200MHz DDR4 - Tản nhiệt",
        "SSD: HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)",
        "PSU: NGUỒN MÁY TÍNH AIGO VK650 - 650W (80 PLUS/ ACTIVE PFC/ SINGLE RAIL)",
        "GPU: COLORFUL GeForce RTX 4060 NB DUO 8GB-V",
        "Case: XIGMATEK ALPHARD M 3GF",
        "Cooler: Tản nhiệt khí JONSBO CR-1000 EVO"
    ],
    table: [
        ["1","CPU AMD Ryzen 7 5700X (3.4GHz Boost 4.6GHz / 8 nhân 16 luồng / 32MB / AM4) - TRAY","1","36th"],
        ["2","Mainboard Asrock B450M-HDV R4.0","1","36th"],
        ["3","RAM VSP 16GB BUS 3200MHz DDR4 - Tản nhiệt","1","36th"],
        ["4","Ổ cứng SSD HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)","1","36th"],
        ["5","NGUỒN MÁY TÍNH AIGO VK650 - 650W (80 PLUS/ ACTIVE PFC/ SINGLE RAIL)","1","36th"],
        ["6","CARD MÀN HÌNH COLORFUL GEFORCE RTX 4060 NB DUO 8GB-V","1","36th"],
        ["7","VỎ CASE XIGMATEK ALPHARD M 3GF","1","12th"],
        ["8","Tản nhiệt khí JONSBO CR-1000 EVO","1","12th"]
    ]
},

};

  // Lấy id từ URL
    const params = new URLSearchParams(window.location.search);
    const id = parseInt(params.get("id"));
    if (!id || !products[id]) {
    document.querySelector("main").innerHTML = "<p>Sản phẩm không tồn tại.</p>";
    return;
}

const product = products[id];

  // Chèn dữ liệu vào HTML
document.getElementById("product-img").src = product.img;
document.getElementById("product-name").textContent = product.name;
document.getElementById("product-price").textContent = product.price;

const specsList = document.getElementById("product-specs");
specsList.innerHTML = product.specs.map(item => `<li>${item}</li>`).join("");

const tableBody = document.getElementById("product-table-body");
tableBody.innerHTML = product.table.map(row => `
    <tr>
        <td class="center">${row[0]}</td>
        <td class="desc">${row[1]}</td>
        <td class="center">${row[2]}</td>
        <td class="center">${row[3]}</td>
    </tr>
`).join("");



});

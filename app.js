document.addEventListener("DOMContentLoaded", () => {
const products = {
    1: {
        name: "PC Gaming | RYZEN 9 9950X3D | RTX 5090 | 4K GAMING",
        price: "139.099.000đ",
        img: "./anh/PCGAMINGA.png",
    specs: [
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



    21 : {
    name: "PC WORKSTATION | Intel Core Ultra 7 265KF | RTX 4070",
    price: "38.980.000đ",
    img: "./anh/WORK1.jpg",
    specs: [
    ],
    table: [
        ["1","CPU Intel Core Ultra 7 265KF (Up to 5.5GHz , 20 nhân - 20 luồng ,30MB Cache, Arrow Lake-S) - TRAY","1","36th"],
        ["2","Mainboard GIGABYTE Z890M AORUS ELITE WIFI 7 DDR5","1","36th"],
        ["3","RAM GEIL SPEAR V 32GB (2x16GB) BUSS 5200MHZ DDR5 BLACK","1","36th"],
        ["4","Ổ cứng SSD HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)","1","36th"],
        ["5","Nguồn máy tính AIGO GB750 - 750W (80 Plus Bronze/Màu Đen)","1","36th"],
        ["6","VGA Gigabyte RTX 4070 WINDFORCE 2X OC V2 12GB (N4070WF2OCV2-12GD)","1","36th"],
        ["7","Vỏ Case AIGO C218M BLACK - KÈM 4 FAN ARGB","1","12th"],
        ["8","Tản nhiệt khí Thermalright Peerless Assassin 120 SE ARGB BLACK","1","12th"]
    ]
},

    22 : {
    name: "PC WORKSTATION | Intel Core i7-14700KF | RTX 4060",
    price: "25,980,000đ",
    img: "./anh/WORK2.jpg",
    specs : [

    ],
    table: [
        ["1","CPU Intel Core i7 14700KF (Intel LGA1700 - 20 Core - 28 Thread - Base 3.4Ghz - Turbo 5.6Ghz) TRAY","1","36th"],
        ["2","Mainboard GIGABYTE Z790 D AX WIFI DDR5","1","36th"],
        ["3","RAM GEIL SPEAR V 32GB (2x16GB) BUSS 5200MHZ DDR5 BLACK","1","36th"],
        ["4","Ổ cứng SSD HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)","1","36th"],
        ["5","Nguồn máy tính GIGABYTE GP-P750BS 750W (80 Plus Bronze, ATX)","1","36th"],
        ["6","CARD MÀN HÌNH COLORFUL GEFORCE RTX 4060 NB DUO 8GB-V","1","36th"],
        ["7","Vỏ Case ANTEC C3 BLACK - KÈM 4 FAN ARGB","1","12th"],
        ["8","Tản nhiệt khí Thermalright Peerless Assassin 120 ARGB BLACK","1","12th"]
    ]
},


    23 : {
    name: "PC WORKSTATION | Intel Core i9-14900KF | RTX 5070",
    price: "44,680,000đ",
    img: "./anh/WORK3.jpg",
    specs: [
    ],
    table: [
        ["1","CPU INTEL CORE I9-14900KF (UP TO 5.8GHZ, 24 NHÂN 32 LUỒNG, 36MB CACHE) TRAY","1","36th"],
        ["2","Mainboard GIGABYTE Z790 D WIFI DDR5","1","36th"],
        ["3","RAM APACER NOX 32GB(2x16GB) Bus 5200Mhz DDR5","1","36th"],
        ["4","Ổ cứng SSD HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)","1","36th"],
        ["5","Nguồn máy tính Darkflash PMT850 850W (ATX3.1 & PCIe 5.1, 80 Plus Gold, Full Modular)","1","36th"],
        ["6","Card màn hình Zotac Gaming GeForce RTX 5070 Twin Edge OC 12GB","1","36th"],
        ["7","Vỏ case ANTEC C3 Basic (ATX/Màu đen)","1","12th"],
        ["8","Tản nhiệt nước AIO ASUS PRIME LC 360 ARGB","1","12th"]
    ]
},

    24 : {
    name: "PC WORKSTATION | Intel Core i5-14600KF | RTX 3060",
    price: "20,980,000đ",
    img: "./anh/WORK2.jpg",
    specs : [

    ],
    table: [
        ["1","CPU Intel Core i5-14600KF (Up to 5.3Ghz, 14 NHÂN 20 LUỒNG, 24MB CACHE) TRAY","1","36th"],
        ["2","Mainboard ASUS B760M-E TUF GAMING DDR4","1","36th"],
        ["3","Ram SSTC 16GB Bus 3200Mhz DDR4 BLACK TẢN NHIỆT","1","36th"],
        ["4","Ổ cứng SSD HIKSEMI WAVE PRO 512GB M.2 2280 PCIe 3.0x4 (Đọc 3500MB/s, Ghi 1800MB/s)","1","36th"],
        ["5","Nguồn máy tính AIGO GB750 - 750W (80 Plus Bronze/Màu Đen)","1","36th"],
        ["6","Card Màn Hình ZOTAC GAMING GeForce RTX 3060 Twin Edge 12G","1","36th"],
        ["7","Vỏ Case AIGO C218M BLACK - KÈM 4 FAN ARGB BLACK","1","12th"],
        ["8","Tản nhiệt khí Thermalright Peerless Assassin 120 SE ARGB","1","12th"]
    ]
},

    25 : {
    name: "PC WORKSTATION | Ryzen 9 9900X | RTX 5090",
    price: "45,000,000đ",
    img: "./anh/WORK3.jpg",
    specs : [

    ],
    table: [
        ["1","CPU AMD Ryzen 9 9900X - TRAY NEW (4.4 GHz Boost 5.6 GHz | 12 nhân / 24 luồng | 64 MB Cache) - TRAY","1","36th"],
        ["2","Mainboard ASUS X870-P PRIME CSM DDR5","1","36th"],
        ["3","RAM GEIL SPEAR V 32GB (2x16GB) BUSS 5200MHZ DDR5 BLACK","1","36th"],
        ["4","Ổ cứng SSD KINGSTON NV3 1TB NVME M2 PCIE GEN4","1","36th"],
        ["5","Nguồn Thermaltake Toughpower GT 1200W | Gold, full modular, ATX 3.1, PCIe 5.1","1","36th"],
        ["6","Card màn hình MSI RTX 5090 32GB VENTUS 3X OC","1","36th"],
        ["7","Vỏ Case ANTEC C3 BLACK - KÈM 4 FAN ARGB","1","12th"],
        ["8","Tản nhiệt nước IDCOOLING FX360 INF ARGB 360MM","1","12th"]
    ]
},

    41 : {
    name: "PC WORKSTATION | Dual Xeon E5-2680 V4 | RTX 3060",
    price: "17.680.000đ",
    img: "./anh/GIALAP1.jpg",
    specs : [

    ],
    table: [
        ["1","CPU DUAL XEON E5-2680 V4 (28 nhân - 56 luồng, 2.40 GHz Turbo 3.30 GHz, 35MB Cache) TRAY","1","12th"],
        ["2","Main Huananzhi X99 DUAL 8D4 (DDR4, E-ATX, 2011-3)","1","12th"],
        ["3","Ram Samsung ECC 64GB/2133Mhz (4x16GB) DDR4","1","12th"],
        ["4","Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4","1","36th"],
        ["5","Nguồn máy tính AIGO VK750 - 750W (85 Plus / Active PFC / Single Rail)","1","36th"],
        ["6","VGA Gigabyte GeForce RTX 3060 WINDFORCE OC 12GB","1","36th"],
        ["7","Vỏ Case XIGMATEK DUO 3F","1","12th"],
        ["8","Tản nhiệt khí Thermalright Assassin X 120 REFINED RGB","2","12th"]
    ]
},

    42 :{
    name: "PC WORKSTATION | Dual Xeon E5-2696 V3 | GTX 1660 Super",
    price: "17.680.000đ",
    img: "./anh/GIALAP1.jpg",
    specs : [

    ],
    table: [
        ["1","CPU DUAL Xeon E5-2696 V3 (36 nhân – 72 luồng, 2.3GHz Turbo Up To 3.6GHz) TRAY","1","12th"],
        ["2","Mainboard HUANANZHI X99 F8D (RAM-4 / Dual-XEON / NVMe / Dual-LAN)","1","12th"],
        ["3","Ram Samsung ECC 96GB/2133Mhz (6x16GB) DDR4","1","12th"],
        ["4","Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4","1","36th"],
        ["5","Nguồn máy tính AIGO VK750 - 750W (85 Plus / Active PFC / Single Rail)","1","36th"],
        ["6","VGA OCPC GTX 1660 Super 6GB GDDR6","1","36th"],
        ["7","Vỏ Case XIGMATEK DUO 3F","1","12th"],
        ["8","Tản nhiệt khí Thermalright Assassin X 120 REFINED RGB","1","12th"]
    ]
},

    43: {
    name: "PC WORKSTATION | Dual Xeon E5-2680 V4 | GTX 1660 Super",
    price: "13.980.000đ", 
    img: "./anh/GIALAP1.jpg", 
    specs: [

    ],
    table: [
        ["1","CPU DUAL XEON E5-2680 V4 (28 nhân – 56 luồng, 2.40GHz Turbo 3.30GHz, 35MB Cache) TRAY","1","12th"],
        ["2","Main Huananzhi X99 DUAL 8D4 (DDR4, E-ATX, Socket 2011-3)","1","12th"],
        ["3","Ram Samsung ECC 64GB/2133Mhz (4x16GB) DDR4","1","12th"],
        ["4","Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4","1","36th"],
        ["5","Nguồn máy tính AIGO VK750 - 750W (85 Plus / Active PFC / Single Rail)","1","36th"],
        ["6","VGA OCPC GTX 1660 Super 6GB GDDR6","1","36th"],
        ["7","Vỏ Case XIGMATEK DUO 3F","1","12th"],
        ["8","Tản nhiệt khí Thermalright Assassin X 120 REFINED RGB","1","12th"]
    ]
},

    44: {
    name: "PC WORKSTATION | Dual Xeon E5-2696 V4 | RTX 3060",
    price: "28.680.000đ", 
    img: "./anh/GIALAP1.jpg", 
    specs: [

    ],
    table: [
        ["1","CPU DUAL Xeon E5-2696 V4 (44 nhân – 88 luồng, 2.2GHz Turbo 3.6GHz) TRAY","1","12th"],
        ["2","Mainboard HUANANZHI X99 F8D PLUS (RAM-4 / Dual-XEON / NVMe / Dual-LAN)","1","12th"],
        ["3","Ram Samsung ECC 128GB/2133Mhz (8x16GB) DDR4","1","12th"],
        ["4","Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4","1","36th"],
        ["5","Nguồn máy tính AIGO GB750 - 750W (80 Plus Bronze / Màu Đen)","1","36th"],
        ["6","VGA ZOTAC GAMING GeForce RTX 3060 Twin Edge 12GB","1","36th"],
        ["7","Vỏ Case XIGMATEK DUO 3F","1","12th"],
        ["8","Tản nhiệt khí Thermalright Assassin X 120 REFINED RGB","2","12th"]
    ]
},

    45: {
    name: "PC WORKSTATION | Dual Xeon E5-2696 V3 | RTX 3060",
    price: "20.680.000đ", 
    img: "./anh/GIALAP1.jpg", 
    specs: [

    ],
    table: [
        ["1","CPU DUAL Xeon E5-2696 V3 (36 nhân – 72 luồng, 2.3GHz Turbo 3.6GHz) TRAY","1","12th"],
        ["2","Mainboard HUANANZHI X99 F8D (RAM-4 / Dual-XEON / NVMe / Dual-LAN)","1","12th"],
        ["3","Ram Samsung ECC 96GB/2133Mhz (6x16GB) DDR4","1","12th"],
        ["4","Ổ cứng SSD OCPC MFL-300 512GB NVMe Gen 3x4","1","36th"],
        ["5","Nguồn máy tính AIGO VK750 - 750W (85 Plus / Active PFC / Single Rail)","1","36th"],
        ["6","VGA Gigabyte GeForce RTX 3060 WINDFORCE OC 12GB","1","36th"],
        ["7","Vỏ Case XIGMATEK DUO 3F","1","12th"],
        ["8","Tản nhiệt khí Thermalright Assassin X 120 REFINED RGB","1","12th"]
    ]
},

}

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
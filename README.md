Shopping Cart With Php and MySqli Database

Before you execute this project make sure you insert values in the database.
to insert values in the database just type this command.

```sql
"INSERT INTO Producttb (product_name, old_price,product_price, product_image, product_overview, point_1,point_2,point_3,product_video)
        VALUES ('Apple MacBook Pro ',122900.00,113790.00,'./upload/product1.png',
        '13.3-inch/33.78 cm, Apple M1 chip with 8‑core CPU and 8‑core GPU, 8GB RAM, 256GB SSD',
        'Apple-designed M1 chip for a giant leap in CPU, GPU, and machine learning performance
Get more done with up to 20 hours of battery life, the longest ever in a Mac',
        '8-core CPU delivers up to 2.8x faster performance to fly through workflows quicker than ever
8-core GPU with up to 5x faster graphics for graphics-intensive apps and games',
        '16-core Neural Engine for advanced machine learning
8GB of unified memory so everything you do is fast and fluid
Superfast SSD storage launches apps and opens files in an instant',
        './videos/product1.mp4'),
        ('HP Pavillion ',89000,74000,'./upload/product2.png',
        '5600H 15.6 inches FHD Gaming Laptop (8GB/512GB SSD/Windows 11 Home/NVIDIA GeForce GTX 1650 4GB Graphics/ Shadow Black & Ultra Violet/ 1.98 Kg), 15-ec2150AX,',
        'Memory: 8 GB DDR4-3200 (1 x 8 GB), Up to 16 GB DDR4-3200 SDRAM | Storage: 512 GB PCIe NVMe M.2 SSD',
        'Graphics & Networking: NVIDIA GeForce GTX 1650 (4 GB GDDR6 dedicated) | Realtek Wi-Fi 6 (2x2) and Bluetooth 5.2 combo, MU-MIMO supported',
        'Operating System & Software: Windows 11 Home 64 Plus Single',
        './videos/product2.mp4'),
        
          ('ALIENWARE M15 R6  ',264989.97,239989.97,'./upload/product3.png',
        ' 4GB NVIDIA GeForce RTX 3050 Graphics, Gaming Laptop (8GB/512GB SSD//Windows 10/Gray/2.4 Kg), G713IC-HX056T, Eclipse Gray',
        'Memory: 32 GB, 2X16 GB, DDR4,3200MHZ | Storage: ITB , M.2,PCle,SSD',
        'Graphics & Networking: NVIDIA GeForce RTX 3080 (8GB GDDR6 dedicated) | Realtek Wi-Fi 6 (2x2) and Bluetooth 5.2 combo, MU-MIMO supported',
        'Operating System & Software: Windows 11 Home SINGLE LANGUAGE',
        './videos/product3.mp4'),
          ('ASUS ROG Strix G17',111990.00,82990.00,'./upload/product4.png',
        '17.3 inch (43.94 cms) FHD 144Hz',
        'AMD Ryzen 7 4800H Mobile Processor (8C/16T, 12MB Cache, 4.2 GHz Max Boost)',
        '4-Zone RGB Backlit Chiclet Keyboard, 144Hz Refresh Rate, Optical Mechanical Per-Key RGB Keyboard, AI noise-canceling technology',
        'Operating System & Software:Windows 10 Home',
        './videos/product1.mp4')
        ";


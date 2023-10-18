-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2023 at 05:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websea`
--

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `Recipe_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`favorite_id`, `User_id`, `Recipe_id`) VALUES
(4, 27, 5),
(5, 27, 11),
(7, 27, 4),
(8, 27, 10),
(9, 27, 7),
(10, 28, 8),
(11, 6, 7),
(14, 30, 7),
(15, 30, 9),
(16, 30, 11),
(17, 30, 19);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `recipe_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL,
  `steps` longtext NOT NULL,
  `alat` longtext NOT NULL,
  `bahan` longtext NOT NULL,
  `link_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`recipe_id`, `User_id`, `nama_resep`, `link_video`, `steps`, `alat`, `bahan`, `link_photo`) VALUES
(1, 1, 'Chicken Fettuccine Alfredo Recipe', 'https://youtu.be/LPPcNPdq_j4', '1. Cook fettuccini in a pot of salted water (4 qts water, 1 Tbsp salt,) according to package instructions then drain and set aside.\r\n\r\n2. Meanwhile, slice chicken into strips and season all over with salt and pepper. In a large skillet, heat 2 Tbsp olive oil over medium/high heat and sauté chicken until lightly golden and cooked through (5 min). Remove chicken from the pan and cover to keep warm.\r\n\r\n3. In the same pan over medium/high, heat 1 Tbsp olive oil and 1 Tbsp of butter. Add onion and sauté 3 min until soft. Add sliced mushrooms and sauté until soft (5-7 min), stirring frequently. Add garlic and sauté 30 seconds, stirring constantly.\r\n\r\n4. Add half-n-half and simmer over medium/high heat 8-10 min, or until beginning to thicken. Add chicken back to the pan, add 1/4 cup parsley and season sauce to taste (1/2 to 1 tsp salt and 1/4 tsp pepper).\r\n\r\n5. Add cooked pasta and stir to combine. Heat another minute until warmed through then turn off the heat, cover and let rest 10-15 minutes then stir and serve garnished with parsley.', '1. Large Pan\r\n2. Deep Skillet\r\n3. Wooden Spatula\r\n', '1. 2 lbs Chicken Breast\r\n2. 3/4 lbs fettuccine pasta (or angel hair or vermicelli pasta)\r\n3. 1 lb white mushrooms thickly sliced\r\n4. 1 small onion finely chopped\r\n5. 3 cloves garlic minced\r\n6. 3 1/2 cups half and a half *\r\n7. 1/4 cup parsley, finely chopped, plus more for garnish\r\n8. 1 tsp sea salt or to taste, plus more for pasta water\r\n9. 1/4 tsp black pepper or to taste\r\n10. 3 Tbsp olive oil divided\r\n11. 1 Tbsp butter\r\n', 'https://natashaskitchen.com/wp-content/uploads/2017/03/Fetuchini-Alfredo-Pasta-3-600x900.jpg'),
(4, 4, 'Tuscan Salmon', 'https://youtu.be/hPpj-f23plI', '1. Season salmon fillets with 1/2 tsp salt, 1/2 tsp pepper and 1/2 tsp garlic powder.\r\n\r\n2. In a large nonreactive skillet over medium heat melt in oil and butter. Once the butter is done foaming, add the salmon fillets, skin side up and sauté for 3 to 5 minutes per side or until cooked through to a safe internal temperature of 145°F on an instant-read thermometer at the thickest part of the salmon. Transfer the salmon to a platter and tent with foil to rest and keep warm.\r\n\r\n3. In the same pan over medium heat, add more oil only if needed then add your sun-dried tomatoes, green onion and minced garlic. Sauté another one minute or until the garlic is fragrant, stirring constantly.\r\n\r\n4. Stir in the cream and sprinkle Parmesan over the top bring to a light boil, stirring frequently then reduce the heat and simmer for one minute until the sauce is slightly thickened.\r\n\r\n5. Add spinach and stir for 30 seconds or just until wilted. Season to taste with salt and pepper if needed.\r\n\r\n6. Remove the pan from the heat and add the salmon back to the pan and spoon warm sauce over it then garnish with chives if desired and serve.', '1. Large Non-reactive Skillet\r\n2. Wooden Spatula\r\n3. Instant Thermometer', '1. 4 salmon fillets, boneless and skinless (1 1/2 to 2 lbs)\r\n2. 1/2 tsp fine sea salt, plus more to taste\r\n3. 1/2 tsp freshly ground black pepper\r\n4. 1/2 tsp garlic powder\r\n5. 1 Tbsp olive oil\r\n6. 1 Tbsp unsalted butter\r\n7. 1/3 cup sun-dried tomatoes packed in oil, drained, and chopped\r\n8. 1/4 cup green onion, green parts, chopped\r\n9. 3 garlic cloves, minced\r\n10. 1 cup heavy whipping cream\r\n11. 1/4 cup parmesan cheese, finely shredded\r\n12. 2 cups fresh baby spinach leaves', 'https://natashaskitchen.com/wp-content/uploads/2023/06/Tuscan-Salmon-5.jpg'),
(5, 4, 'Chicken Fajitas', 'https://youtu.be/g-LT0igt9lo', '1. In a mixing bowl add 2 Tbsp oil, 2 Tbsp lime juice, and all of the seasonings: chili powder, cumin, paprika, onion powder, garlic powder, salt, and pepper. Stir to combine.\r\n\r\n2. Cut chicken breasts in half lengthwise and add cutlets to the seasoning mix, turning to evenly coat. Set that aside while you prep the remaining veggies. You can marinate for up to 4 hours.\r\n\r\n3. Cut bell peppers and onions into 1/4” thin slices, cutting with the grain.\r\n\r\n4. Set a large heavy skillet (such as cast iron) over medium heat. Add 1 Tbsp oil then add chicken in a single layer and sear for 3-5 minutes per side or until browned and cooked through to 165˚F in the center on an instant-read thermometer. Cook in batches if needed. Transfer chicken to a cutting board and let it rest while you cook the vegetables.\r\n\r\n5. In the same skillet over medium heat, add 1 Tbsp oil then add the onion and bell peppers and sauté until softened and browned in spots, about 5-6 minutes, stirring frequently. Season with salt and pepper to taste.\r\n\r\n6. While the veggies are cooking, slice the chicken into strips against the grain. When the veggies are done, add the chicken back to the pan, stir to combine, and remove from heat.\r\n\r\n7. Serve over warmed tortillas with a squeeze of fresh lime juice, garnished with cilantro and your favorite toppings.', '1. Heavy Skillet\r\n2. Instant-read Thermometer\r\n3. Wooden Spatula', '1. 2 large (1 1/2 lbs) boneless skinless chicken breasts\r\n2. 4 Tbsp olive oil, divided \r\n3. 2 Tbsp lime juice\r\n4. 1 tsp ground chili powder\r\n5. 1 tsp ground cumin\r\n6. 1 tsp paprika\r\n7. 1 tsp onion powder\r\n8. 1 tsp garlic powder \r\n9. 1 tsp fine sea salt, plus more to taste\r\n10. 1/2 tsp ground black pepper\r\n11. 3 Bell Peppers: Red, Yellow, and Green sliced into 1/4” thick slices\r\n12. 1 medium onion, thinly sliced', 'https://natashaskitchen.com/wp-content/uploads/2023/04/Chicken-Fajitas-2.jpg'),
(7, 22, 'Mango Sago', 'https://youtu.be/ek4q1P-Uqi4', '1. Didihkan air secukupnya sampai berbuih, masukan tapioca sago.\r\n2. Masak 20 menit dengan api kecil (buka tutup).\r\n3. Matikan api dan diamkan 5 menit.\r\n4. Masak lagi 15 menit api kecil.\r\n5. Dinginkan ke suhu ruang sblm di pakai.\r\n6. Blender mangga, es batu, santan dengan food processor/ blender sampai halus\r\n', '1. pisau\r\n2. mangkuk\r\n3. blender', '1. 100 gr tapioca sago\r\n2. 500 gr mangga frozen ( yg manis!)\r\n3. 1 bungkus Sasa Santan Omega 3 segitiga\r\n4. 1/4 cup es batu\r\n5. 1 scoop durian\r\n6. 1 buah mangga, potong dadu\r\n7. sedikit Sasa Santan Omega 3, agar warnanya semakin cantik', 'https://i.pinimg.com/564x/8e/4c/83/8e4c8388fe627255a000f6c2e22b5852.jpg'),
(8, 4, 'Creamy Shrimp Alfredo Pasta', 'https://youtu.be/5vy9HeL8mOc', '1. Add 3/4 lb pasta to a pot of boiling water with 1 Tbsp salt and cook according to package instructions until al-dente. Drain without rinsing and set aside.\r\n\r\n2. While pasta is cooking, prepare the shrimp and sauce. Season shrimp with 1/2 tsp salt, 1/4 tsp black pepper and 1/4 tsp paprika. Place a large, non-stick pan over medium/high heat and add 1 Tbsp oil. Once oil is hot, add shrimp in a single layer and cook 2 min per side or just until cooked through and no longer translucent. Remove to a separate dish to prevent overcooking.\r\n\r\n3. In the same hot pan, add 2 Tbsp butter with finely chopped onion and sauté until soft and golden (3-5 mins), stirring often. Add minced garlic and sauté another minute until fragrant. Stir in 1/3 cup white wine and boil down until there is only 25% of the liquid left.\r\n\r\n4. Stir in 2 cups cream, bring to a light boil then simmer 2 min. Sprinkle sauce with 1/3 cup parmesan cheese and stir just until creamy and smooth. Let it come just to a simmer without boiling then turn off the heat and season sauce with more salt, pepper and paprika to taste.\r\n\r\n5. Stir in the drained pasta and cooked shrimp, tossing until noodles are well coated in sauce. Serve in warm pasta bowls with a generous sprinkle of finely chopped parsley, more parmesan cheese and some freshly cracked black pepper.', '1. Cutting Board\r\n2. Mixing Bowls\r\n3. Pan with Lid\r\n4. 5 1/2 Oven Pot\r\n5. Knife', '1. 3/4 lb fettuccine or penne pasta\r\n2. 1 lb shrimp, peeled and deveined\r\n3. 1 Tbsp oil\r\n4. 1 small onion, finely chopped\r\n5. 2 Tbsp butter\r\n6. 1 garlic clove\r\n7. 1/3 cup white wine (I used Ste Chapelle Chardonnay ~$6)\r\n8. 2 cups heavy whipping cream\r\n9. 1/3 cup parmesan cheese\r\n10. S&P to taste\r\n11. Sprinkle of paprika\r\n12. Parsley or basil for garnish if desired', 'https://natashaskitchen.com/wp-content/uploads/2017/05/Creamy-Shrimp-Alfredo-Pasta-5-600x900.jpg'),
(9, 4, 'Pan Seared Salmon Recipe with Lemon Butter', 'https://youtu.be/-x2E7T3-r7k', '1. Season salmon on both sides with 1/2 salt and 1/8 tsp black pepper. Grate 1 tsp of lemon zest then squeeze 2 lemons for 4 Tbsp lemon juice. \r\n\r\n2. Heat a large (10-12\") light-colored pan over medium heat and right away add 4 Tbsp butter, swirling and stirring frequently to prevent splatter until it starts to turn light brown and the bits of butter solids turn brown (about 3-7 minutes depending on your heat).\r\n\r\n3. Add seasoned salmon and cook uncovered on the first side 3-4 minutes until golden brown then flip salmon and cook another 2 to 3 minutes or until flaky and fully cooked through with an internal temperature of 145˚F.\r\n\r\n4. In the last 2 minutes of cooking, add 1 tsp lemon zest and 4 Tbsp lemon juice to the pan. Spoon the sauce over the salmon as it cooks. Transfer salmon to plates, drizzle with sauce, and sprinkle the pan-cooked salmon with freshly chopped parsley and black pepper to taste. Serve right away.', '1. Large Pan\r\n2. Instant-read Thermometer\r\n3. Spatula', '1. 1 1/4 lb skinless boneless salmon filets cut into 4 filets (5 oz each about 1\" thick)\r\n2. 1/2 tsp salt\r\n3. 1/8 tsp black pepper\r\n4. 4 Tbsp unsalted butter\r\n5. 1 tsp grated lemon zest\r\n6. 4 Tbsp freshly squeezed lemon juice from 2 lemons\r\n7. 1 Tbsp fresh parsley, minced', 'https://natashaskitchen.com/wp-content/uploads/2018/05/Pan-Seared-Salmon-with-Lemon-Butter-Sauce-2-600x900.jpg'),
(10, 4, 'Creme Brulee', 'https://youtu.be/SDawdqxkqnA', '1. Preheat the oven to 300˚F. Pour heavy cream into a medium saucepan and set over medium heat, stirring frequently until steaming and almost at a simmer then add vanilla and remove from heat.\r\n\r\n2. In a medium bowl, whisk together 5 egg yolks, 1/2 cup sugar, and salt until blended. While whisking constantly, gradually drizzle in the hot cream. Start very slowly to avoid scrambling your eggs.\r\n\r\n3. Strain the mixture through a fine-mesh sieve into a large measuring cup with a pouring lip. Discard anything left in the sieve. Divide the mixture into 6 (4-oz) ramekins and place in a 9×13 casserole dish.\r\n\r\n4. Fill the baking dish with boiling water about halfway up the sides of the cups. Bake at 300˚F for 30-35 minutes, or until the centers are nearly set and have just a slight wiggle in the center. Carefully transfer ramekins from the water bath to a wire rack and cool to room temp then cover and refrigerate creme brulee until fully chilled (2 hours or up to 3 days).\r\n\r\n5. To Caramelize the Top:\r\nWhen ready to serve, put 1 1/2 to 2 tsp sugar on each custard, swirling to spread evenly. Torch the top – moving in a circular pattern until the whole surface is caramelized to a deep amber color.', '1. Medium Sauce Pan\r\n2. Medium Bowl\r\n3. Whisk\r\n4. Oven\r\n5. Baking Tray\r\n6. Fine-mesh Seive\r\n7. Blow Torch', '1. 2 cups heavy whipping cream\r\n2. 5 large egg yolks\r\n3. 1/2 cup sugar, plus extra for caramelizing\r\n4. 1 pinch of fine sea salt\r\n5. 1 tsp vanilla extract, or vanilla bean paste', 'https://natashaskitchen.com/wp-content/uploads/2020/02/Creme-Brule-Recipe-3.jpg'),
(11, 4, 'Classic Chicken Pot Pie Casserole', 'https://youtu.be/FFDZ95vGX34', '1. Preheat oven to 400 ̊F. Butter a 9×12 casserole dish.\r\n\r\n2. In a dutch oven or pot, melt 6 Tbsp butter. Add diced onions and carrots and saute 8 minutes over medium heat until soft.\r\n\r\n3. Add sliced mushrooms and minced garlic and saute another 3-5 minutes until mushrooms are softened.\r\n\r\n4. Add 1/3 cup flour and stir constantly for 2 minutes. Add chicken stock, and 1/2 cup heavy cream then bring to a simmer and cook 1 minute or until mixture is a thick gravy consistency. Add 2 tsp salt, 1/4 tsp black pepper, or season to taste. It should be well-seasoned.\r\n\r\n5. Add shredded cooked chicken, frozen peas, and 1/4 cup parsley. Stir to combine then turn remove from heat and cover to keep warm while you make the biscuit dough and cut out 10 biscuits (I usually get 8 biscuits and pull together the scraps to make an extra 2 biscuits for a total of 10).\r\n\r\n6. Spread the chicken mixture into the prepared casserole dish. Top with biscuits in a single layer and bake uncovered at 400 ̊F for 25-28 minutes or until biscuits are puffed and golden. Remove from the oven and brush the biscuits with 1/2 Tbsp melted butter and serve.', '1. Casserole Dish\r\n2. Dutch Oven\r\n3. Cup', '1. 4 cups cooked chicken, shredded*\r\n2. 6 Tbsp unsalted butter\r\n3. 1 medium yellow onion, (1 cup chopped)\r\n4. 2 medium carrots, (1 cup) thinly sliced\r\n5. 8 oz white or brown mushrooms, (stems discarded), sliced\r\n6. 3 garlic cloves, minced\r\n7. 1/3 cup all-purpose flour\r\n8. 2 1/2 cups chicken stock\r\n9. 1/2 cup heavy cream\r\n10. 2 tsp fine sea salt, or to taste, plus kosher salt to garnish\r\n11. 1/4 tsp black pepper, plus more to garnish\r\n12. 1 cup frozen peas, do not thaw\r\n13. 1/4 cup parsley, finely chopped\r\n14.  1 recipe of homemade biscuit dough', 'https://natashaskitchen.com/wp-content/uploads/2023/01/Chicken-Pot-Pie-Casserole-5.jpg'),
(15, 26, 'Crab Salad', 'https://youtu.be/m2dpoBiAb9I', '1.Campur semua bahan saus.\r\n2.Masukkan semua bahan salad (kecuali lettuce, kacang dan cabe) ke dalam mangkuk,  beri saus, dan aduk rata.\r\n3.Taruh salad di atas daun, beri taburan kacang dan cabe, sajikan.\r\n', '1.pisau\r\n2.mangkuk\r\n', '1.300 gram Kol\r\n2.175 gram Daun Ketumbar, cincang kasar\r\n3.1 buah Wortel Parut\r\n4.Daging kepiting siap saji\r\n5.40 gram Kacang Panggang Kering, cincang\r\n6.1 buah Cabe Merah, buang bijinya dan slice\r\n7.100 gram Bihun Rebus\r\n8.Lettuce\r\n9.80 ml Sasa Santan Cair\r\n10.1 ½ sdm Air Jeruk Nipis\r\n11.½ sdt Chili Fllakes\r\n12.1 sdt Gula Pasir\r\n13.3 sdm Kecap Ikan\r\n14.3 sdm Jeruk\r\n15.3 sdm Mayo\r\n', 'https://i.pinimg.com/564x/19/34/43/1934433216811f8aaf8c93a89d15f36d.jpg'),
(16, 26, 'Matcha Tiramisu', 'https://youtu.be/Qw02GvdZeVM', '1.Kocok whipped cream dan gula pasir hingga mengembang, berikan cream cheese dan Sasa Santan Cair.\r\n2.Larutkan matcha dengan air, rendam ladyfinger sebentar ke dalam larutan matcha.\r\n3.Susun ladyfinger, adonan cream, lady finger dan adonan cream, beri topping strawberry di atasnya.\r\n4.Panaskan Sasa Santan Cair dan bubuk matcha, tuang ke atas susuna tiramisu saat penyajian.\r\n', '1.pisau\r\n2.piring/mangkuk\r\n', '1.100 gram Cream Cheese\r\n2.150 gram Whipped Cream cair\r\n2 sdm Sasa Santan Cair\r\n3.3 sdm Gula Halus\r\n4.1 sdm Matcha Bubuk\r\n5.100 ml Air\r\n6.Ladyfinger Cookies secukupnya\r\n7.2 pax Strawberry, potong menjadi 2 bagian\r\n8.50 ml Sasa Santan Cair\r\n9.1 sdt Matcha Bubuk\r\n', 'https://i.pinimg.com/564x/45/72/07/457207646f71e49eb10db1273c4589c4.jpg'),
(17, 26, 'Rose Tteokbokki', 'https://youtu.be/9hh3STJ5_Xg', '1.Tuang minyak, tumis sosis hingga matang, lalu sisihkan.\r\n2.Masukkan bawang bombay, tumis sampai harum.\r\n3.Masukkan tteok, saus tteokbokki, sasa santan dan susu putih, aduk rata. Tambahkan air.\r\n4.Masukkan fish cake, sosis, telur rebus, dan keju. masak hingga mendidih,\r\n\r\n', '1.pisau\r\n2.piring\r\n', '1.2 butir Telur Rebus\r\n2.50 gram Fish Cake\r\n3.50 gram Sosis\r\n4.1 buah bawang bombay\r\n5.300 gram Tteok\r\n6.120 gram Saus Tteokbokki\r\n7.65 ml Sasa Santan Cair\r\n8.2 slice American Cheese\r\n9.200 ml Susu Putih Cair\r\n10.100 ml Air\r\n\r\n', 'https://i.pinimg.com/564x/b3/0a/64/b30a645ddcf2bfc498cefe37be166757.jpg'),
(18, 26, 'Sate Klatak', 'https://youtu.be/pYXZm4N4R0I', '1.Lumuri daging kambing dengan bawang putih, garam, dan air perasan jeruk nipis secara merata. Diamkan selama 40 menit. Sisihkan. \r\n2.Rebus tulang kambing bersama semua bahan kuah gule kambing termasuk Sasa Bumbu Ungkep Ayam Kuning hingga mendidih. Kecilkan api. Masak hingga kuah meresap. Angkat. Sisihkan. \r\n3.Ambil 1 tusuk satai, tusukkan daging kambing ke dalam tusuk satai. Ulangi proses serupa pada sisa bahan. \r\n4.Lumuri setiap sate dengan bumbu olesan secara merata. \r\n5.Panaskan grill pan, panggang sate hingga matang. Angkat. \r\n6.Sajikan sate dengan kuah gule kambing dan pelengkap.\r\n', '1.pisau\r\n2.grill pan\r\n', '1.600 gram Daging Paha Kambing, potong dadu 2 cm\r\n2.1 bungkus Sasa Bumbu Ekstrak Daging Sapi\r\n3.2 sdm Air Perasan Jeruk Limau \r\n4.170 ml Kecap Manis\r\n5.150 gram Margarin \r\n6.500 gram Tulang Kambing\r\n7.750 ml Air, untuk merebus\r\n8.150 ml Sasa Santan Cair\r\n9.1 bungkus Sasa Bumbu Ungkep Ayam Kuning\r\n10.5 lembar Daun Jeruk\r\n', 'https://i.pinimg.com/564x/52/12/7b/52127bc285883230c49abd272e135bd2.jpg'),
(19, 26, 'Laksa Singapura', ' https://youtu.be/I-GgvbPIgIQ', '1.Buat kaldu udang, rebus kepala udang dan kerang tahu dengan air sampai kerang terbuka dan air mendidih, buang buihnya lalu sisihkan\r\n2.Menghaluskan bumbu.\r\n3.Tumis bumbu halus sampai harum wangi, kemudian masukan santan Sasa dan kaldu udang. Aduk hingga rata.\r\n4.Bumbui dengan kaldu ayam sasa, gula, garam, dan lada. 5.Masak hingga air laksa menyusut.\r\n6.Sajikan dengan bahan pelengkap.\r\n', '1.pisau\r\n2.wajan\r\n3.mangkuk\r\n', '1.1 bungkus udon\r\n2.10 buah udang windu/tiger\r\n3.10 buah kulit/kepala udang kupas\r\n4.10 buah kerang tahu\r\n5.1000 ml air\r\n6.500 ml Sasa Santan Cair\r\n7.1 sdm gula\r\n8.1 sdt garam\r\n9.1 Sdm Sasa Bumbu Ekstrak Daging Ayam\r\n10.5 gr cabe merah kering\r\n11.25 gr ebi kering\r\n12.3 buah kemiri\r\n13.1 batang serai\r\n14.1 ruas jari lengkuas\r\n15.1 ruas jari kunyit\r\n16.1 buah cabe merah\r\n17.50 gr bawang merah\r\n18.25 gr bawang putih\r\n19.1 gr terasi\r\n20.2 sdm Minyak.\r\n', 'https://i.pinimg.com/564x/ab/0b/e9/ab0be9a2926250c6ec8bef6b3352983a.jpg'),
(20, 30, 'Prawn Curry', 'https://youtu.be/bZDVlhYbUns', '1.Panaskan minyak, tumis bawang bombai hingga harum dan kecoklatan. \r\n2.Masukkan daun kari, jahe, dan kunyit, masak hingga harum.\r\n3.Tambahkan tomat, ketumbar, dan cabai merah bubuk, masak hingga tomat layu. \r\n4.Masukan udang kupas, air, garam, merica putih bubuk, dan garam masala, aduk hingga rata, masak hingga udang matang. Angkat.\r\n5.Tuang ke dalam piring saji, taburkan pelengkap di atasnya. Sajikan selagi panas.\r\n', '1.pisau\r\n2.piring\r\n3.wajan\r\n', '1.3 sdm Minyak Goreng\r\n2.2 buah atau 200 gram Bawang Bombai, cincang halus\r\n3.2 tangkai Daun Kari\r\n4.8 cm Jahe, parut halus\r\n5.8 cm Kunyit, parut halus\r\n6.1 buah Tomat, cincang halus\r\n7.1½ sdt Ketumbar bubuk\r\n8.1½ sdt Cabai Merah bubuk\r\n9.50 ml Air\r\n10.50 ml Sasa Santan Cair\r\n11.800 gr Udang berukuran sedang, kupas kulit, kerat punggungnya\r\n12.1 sdt Garam Masala\r\n', 'https://i.pinimg.com/564x/21/d0/ef/21d0ef0cb34ef385d93a429c442278cf.jpg'),
(21, 30, 'Coconut milk chocolate mousse', 'https://youtu.be/BCAIcVrOBRA', '1.Panaskan sasa santan dan air, tapi jangan sampai mendidih.\r\n2.Matikan api dan tambahkan vanilla extract dan chocolate yang telah di potong.\r\n3.Diamkan selama 5 menit tanpa diaduk hingga coklatnya melembut.\r\n4.Setelah 5 menit, aduk secara perlahan hingga tercampur rata.\r\n5.Tuang mousse kedalam gelas dan masukkan kedalam kulkas min. 3 jam.\r\n6.Setelah 3 jam chocolate mousse siap disajikan!\r\n', '1.gelas\r\n2.panci\r\n', '1.130 ml Sasa Santan Cair\r\n2.1/2 sdt vanilla extract \r\n3.65 gr milk chocolate/dark chocolate \r\n4.Whipping cream dan serpihan coklat untuk topping (optional)\r\n', 'https://i.pinimg.com/564x/35/37/b2/3537b21616a80935521ec7285424a4c6.jpg'),
(22, 30, 'Soto Betawi', 'https://youtu.be/1FKLR2LvmZY', '1.Tumis bumbu halus hingga benar benar matang dan tanak sempurna.\r\n2.Tambahkan air secukupnya untuk merebus daging.\r\n3.Masukkan rempah rempah, salam sereh, lengkuas, kayumanis, kapulaga, dan cengkeh.\r\n4.Rebus daging hingga matang dan lunak.\r\n5.Setelah daging diangkat, masukkan Sasa Santan Bubuk, gula, Sasa Kaldu Sapi, dan merica sesuai selera.\r\n6.Sajikan bersama potongan tomat, perasan jeruk limau, emping, daging, dan juga daun bawang.\r\n', '1.pisau\r\n2.wajan\r\n3.blender\r\n4.mangkuk\r\n', '1.8 bawang merah\r\n2.5 bawang putih\r\n3.5 kunyit\r\n4.8 kemiri\r\n5.5 cabai merah besar\r\n6.1 kg daging sapi rebus\r\n7.5 lembar daun salam\r\n8.4 batang sereh\r\n9.30 gr lengkuas\r\n10.5 batang cengkeh\r\n11.5 kapulaga\r\n12.5 cm kayu manis\r\n13.Sasa Santan Bubuk\r\n14.Air\r\n15.Garam\r\n16.Merica\r\n17.Sasa Kaldu Sapi\r\n', 'https://i.pinimg.com/564x/f3/80/ce/f380ce84bab60653bba44fc2d44cf53f.jpg'),
(23, 30, 'Grilled Chicken Lettuce Wraps', ' https://youtu.be/0RUsgipA6aY', '1.Combine the water, soy sauce, brown sugar, mirin and garlic to a 1 gallon freezer bag and shake to mix well. Add the chicken, then seal the bag, pressing out as much air as you can. Let the chicken marinate for at least 1 hour, or preferably overnight in the refrigerator. \r\n2.While the chicken marinates, put the cucumbers in a bowl and sprinkle with the salt. Toss to coat evenly and let it stand for 30 minutes. When the cucumbers have started turning translucent, grab use your hands to squeeze out as much water as possible. The more water you squeeze out, the crunchier the pickles will be. \r\n3.To make the sauce, add the miso, ground sesame seeds, yuzu juice, and water to a bowl and whisk to combine. \r\n4.Remove the chicken from the marinade and discard the marinade. Get a charcoal grill going and grill the chicken, skin side down, until the skin is golden brown and crisp. If the chicken starts burning, move it over to the cooler side of the grill. Flip the chicken over and continue grilling until the chicken is cooked through (165 degrees F on an instant-read thermometer). Transfer the chicken to a cutting board and chop it into chunks. \r\n5.To make the lettuce wraps, have each person grab a leaf of lettuce and add a spoonful of grilled chicken. Top with some pickled cucumbers and drizzle with a little sesame miso sauce. Wrap and enjoy!\r\n', '1.knife\r\n2.pan\r\n3.plate\r\n', '1.1 head Boston lettuce, leaves washed and dried\r\n2.1/4 cup water\r\n3.1 tablespoon soy sauce\r\n4.1 tablespoon dark brown sugar\r\n5.1 tablespoon mirin\r\n6.1 clove garlic, grated\r\n7.4 to 6 boneless skin-on chicken thighs (about 1 pound)\r\n8.1 large seedless cucumber, sliced very thin (1/16-inch)\r\n9.1 teaspoon salt\r\n10.2 tablespoons miso\r\n11.2 tablespoons toasted sesame seeds, ground\r\n12.1 tablespoon yuzu or lemon juice\r\n13.1 tablespoon water\r\n', 'https://i.pinimg.com/564x/7d/ab/29/7dab29acd62ab147d687dbf7e0664a41.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(2255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `nama`, `email`, `password`) VALUES
(2, 'Aldo', 'aldolase@email.com', '123321'),
(3, 'Aldo', 'aldolase@email.com', '123321'),
(4, 'Faraday Bobe', 'bobebob@email.com', '123321'),
(5, 'Aldo', 'aldolase@email.com', '123321'),
(6, 'puanrani', 'puanpdipdihati@gmail.com', 'banteng1945'),
(7, 'Ryan', 'ryan@gmail.com', '123321'),
(8, 'Aldo', 'aldolase@email.com', '123321'),
(9, 'Aldo', 'aldolase@email.com', '123321'),
(10, 'Aldo', 'aldolase@email.com', '123321'),
(11, 'Bobe', 'boobee@email.com', 'iamboobee'),
(12, 'Ryan', 'ryan2@gmail.com', 'hihihihi'),
(13, 'Aldo', 'aldolase2@email.com', '123321'),
(14, 'Aldo', 'aldolase3@email.com', '123321'),
(15, 'Aldo', 'aldolase4@email.com', '123321'),
(16, 'Aldo', 'aldolase10@email.com', '123321'),
(17, 'Ryan', 'ryan10@gmail.com', '123321'),
(18, 'Aldo', 'aldolase@email.com9', '123321'),
(19, 'Ryan', 'ryan7@gmail.com', '123321'),
(20, 'Aldo', 'aldolase@email.com7', '123321'),
(21, 'Aldo', 'aldolase7@email.com', '123321'),
(22, 'meggbull', 'meggywati@gmail.com', 'meggbullsht'),
(23, 'Aldo', 'aldolase5@email.com', '123321'),
(24, 'Ryan', 'ryan4@gmail.com', '123321'),
(25, 'BOBE', 'bobebob2@email.com', '123321'),
(26, 'Boobe', 'apakek@email.com', '123321'),
(27, 'Boobe', 'apakeke@email.com', '123321'),
(28, 'Aldo', 'apakek7@email.com', '123321'),
(29, 'Ryan', 'ryan3@gmail.com', '123321'),
(30, 'Joko', 'joko@email.com', '123321');

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `Userdetail_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `kota` varchar(255) NOT NULL,
  `link_pp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`Userdetail_id`, `User_id`, `nama`, `email`, `kota`, `link_pp`) VALUES
(1, 13, 'Aldo', 'aldolase2@email.com', 'Bekasi', ' '),
(2, 16, 'Aldo', 'aldolase10@email.com', 'Bekasi', ' '),
(10, 11, 'Bobe', 'boobee@email.com', 'Indonesia', ''),
(11, 12, 'Ryan', 'ryan2@gmail.com', 'purwokerto', ' '),
(15, 17, 'Ryan', 'ryan10@gmail.com', 'purwokerto', ' '),
(16, 17, 'Ryan', 'ryan10@gmail.com', 'purwokerto', ' '),
(17, 18, 'Aldo', 'aldolase@email.com9', 'Bekasi', ' '),
(18, 18, 'Aldo', 'aldolase@email.com9', 'Bekasi', ' '),
(19, 19, 'Ryan', 'ryan7@gmail.com', 'purwokerto', ' '),
(20, 19, 'Ryan', 'ryan7@gmail.com', 'purwokerto', ' '),
(21, 20, 'Aldo', 'aldolase@email.com7', 'Bekasi', ' '),
(22, 20, 'Aldo', 'aldolase@email.com7', 'Bekasi', ' '),
(23, 21, 'Aldo', 'aldolase7@email.com', 'Bekasi', ' '),
(24, 22, 'meggbull', 'meggywati@gmail.com', 'jl.rengasdengklok', ' '),
(25, 23, 'Aldo', 'aldolase5@email.com', 'Bekasi', ' '),
(26, 23, 'Aldo', 'aldolase5@email.com', 'Bekasi', ' '),
(27, 24, 'Ryan', 'ryan4@gmail.com', 'purwokerto', ' '),
(28, 25, 'BOBE', 'bobebob2@email.com', 'Tangsel', 'tes'),
(29, 26, 'Boobe', 'apakek@email.com', 'Tangerang Selatan', ' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-ecN4tOqo080RKFtA_Qw-mfXq69Yri1rI2g&usqp=CAU'),
(30, 27, 'babeh', 'apakeke@email.com', 'Bandung', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEg9XrqbVocBbrLpYpv7KNhaqfRMzJIpWjSzueEyjIF4IJ00usLS_F3OJxBNRg3shTRhpjQ1ViT4653isW57pJXUuwl4Pg-i1BFD5GpqLEZQiqVP3Oj-LBOOY-VuG8OvX5xbl7xB3nfIjqdByRQCRAdstoPCH7m6KNreigCvta6ehA9uXGxj0Qq5h3mH/s736/mari'),
(31, 28, 'aldo', 'aldolase@email.com', 'Bekasi', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKYWCxjYO4x2d35NMmZdT7qV2mZCp729hKjw&usqp=CAU'),
(32, 29, 'Ryan', 'ryan3@gmail.com', 'purwokerto', ' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-ecN4tOqo080RKFtA_Qw-mfXq69Yri1rI2g&usqp=CAU'),
(33, 30, 'Joko', 'joko@email.com', 'Solo', ' https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSITADb7lYHRQ8Op0UKH9Dt4pZtjXe_W7bxsA&usqp=CAU');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`recipe_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD PRIMARY KEY (`Userdetail_id`),
  ADD KEY `User_id` (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `recipe_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_detail`
--
ALTER TABLE `user_detail`
  MODIFY `Userdetail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `User_id` FOREIGN KEY (`User_id`) REFERENCES `user` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2025 a las 16:40:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dokkan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartas`
--

CREATE TABLE `cartas` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `ki` varchar(50) DEFAULT NULL,
  `maxKi` varchar(50) DEFAULT NULL,
  `race` varchar(100) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(500) DEFAULT NULL,
  `affiliation` varchar(100) DEFAULT NULL,
  `deletedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cartas`
--

INSERT INTO `cartas` (`id`, `name`, `ki`, `maxKi`, `race`, `gender`, `description`, `image`, `affiliation`, `deletedAt`) VALUES
(1, 'Goku', '60.000.000', '90 Septillion', 'Saiyan', 'Male', 'El protagonista de la serie, conocido por su gran poder y personalidad amigable. Originalmente enviado a la Tierra como un infante volador con la misión de conquistarla. Sin embargo, el caer por un barranco le proporcionó un brutal golpe que si bien casi lo mata, este alteró su memoria y anuló todos los instintos violentos de su especie, lo que lo hizo crecer con un corazón puro y bondadoso, pero conservando todos los poderes de su raza. No obstante, en la nueva continuidad de Dragon Ball se establece que él fue enviado por sus padres a la Tierra con el objetivo de sobrevivir a toda costa a la destrucción de su planeta por parte de Freeza. Más tarde, Kakarot, ahora conocido como Son Goku, se convertiría en el príncipe consorte del monte Fry-pan y líder de los Guerreros Z, así como el mayor defensor de la Tierra y del Universo 7, logrando mantenerlos a salvo de la destrucción en innumerables ocasiones, a pesar de no considerarse a sí mismo como un héroe o salvador.', 'https://dragonball-api.com/characters/goku_normal.webp', 'Z Fighter', NULL),
(2, 'Vegeta', '54.000.000', '19.84 Septillion', 'Saiyan', 'Male', 'Príncipe de los Saiyans, inicialmente un villano, pero luego se une a los Z Fighters. A pesar de que a inicios de Dragon Ball Z, Vegeta cumple un papel antagónico, poco después decide rebelarse ante el Imperio de Freeza, volviéndose un aliado clave para los Guerreros Z. Con el paso del tiempo llegaría a cambiar su manera de ser, optando por permanecer y vivir en la Tierra para luchar a su lado contra las inminentes adversidades que superar. Junto con Piccolo, él es de los antiguos enemigos de Goku que ha evolucionando al pasar de ser un villano y antihéroe, a finalmente un héroe a lo largo del transcurso de la historia, convirtiéndose así en el deuteragonista de la serie.', 'https://dragonball-api.com/characters/vegeta_normal.webp', 'Z Fighter', NULL),
(3, 'Piccolo', '2.000.000', '500.000.000', 'Namekian', 'Male', 'Es un namekiano que surgió tras ser creado en los últimos momentos de vida de su padre, siendo su actual reencarnación. Aunque en un principio fue el archienemigo de Son Goku, con el paso del tiempo fue haciéndose menos malvado hasta finalmente convertirse en un ser bondadoso y miembro de los Guerreros Z. A través del tiempo, también comenzó a tomarle cariño a su discípulo Son Gohan, a quien veía como una especie de \"vástago\" y formando un lazo de amistad con este.', 'https://dragonball-api.com/characters/picolo_normal.webp', 'Z Fighter', NULL),
(4, 'Bulma', '0', '0', 'Human', 'Female', 'Bulma es la protagonista femenina de la serie manga Dragon Ball y sus adaptaciones al anime Dragon Ball, Dragon Ball Z, Dragon Ball Super y Dragon Ball GT. Es hija del Dr. Brief y su esposa Panchy, hermana menor de Tights y una gran amiga de Son Goku con quien inicia la búsqueda de las Esferas del Dragón. En Dragon Ball Z tuvo a Trunks, primogénito de quien sería su esposo Vegeta, a su hija Bra[3] y su hijo adulto del tiempo alterno Trunks del Futuro Alternativo.', 'https://dragonball-api.com/characters/bulma.webp', 'Z Fighter', NULL),
(5, 'Freezer', '530.000', '52.71 Septillion', 'Frieza Race', 'Male', 'Freezer es el tirano espacial y el principal antagonista de la saga de Freezer.', 'https://dragonball-api.com/characters/Freezer.webp', 'Army of Frieza', NULL),
(6, 'Zarbon', '20.000', '30.000', 'Frieza Race', 'Male', 'Zarbon es uno de los secuaces de Freezer y un luchador poderoso.', 'https://dragonball-api.com/characters/zarbon.webp', 'Army of Frieza', NULL),
(7, 'Dodoria', '18.000', '20.000', 'Frieza Race', 'Male', 'Dodoria es otro secuaz de Freezer conocido por su brutalidad.', 'https://dragonball-api.com/characters/dodoria.webp', 'Army of Frieza', NULL),
(8, 'Ginyu', '9.000', '25.000', 'Frieza Race', 'Male', 'Ginyu es el líder del la élite de mercenarios de mayor prestigio del Ejército de Freeza, la cual lleva el nombre de Fuerzas Especiales Ginew en su honor[9].', 'https://dragonball-api.com/characters/ginyu.webp', 'Army of Frieza', NULL),
(9, 'Celula', '250.000.000', '5 Billion', 'Android', 'Male', 'Cell conocido como Célula en España, es un bioandroide creado por la computadora del Dr. Gero, quien vino del futuro de la línea 3 con la intención de vengarse de Goku por haber acabado con el Ejército del Listón Rojo, y con ello el sueño de todo villano: dominar el mundo. Es el antagonista principal del Arco de los Androides y Cell.', 'https://dragonball-api.com/characters/celula.webp', 'Freelancer', NULL),
(10, 'Gohan', '45.000.000', '40 septillion', 'Saiyan', 'Male', 'Son Gohanda en su tiempo en España, o simplemente Gohan en Hispanoamérica, es uno de los personajes principales de los arcos argumentales de Dragon Ball Z, Dragon Ball Super y Dragon Ball GT. Es un mestizo entre saiyano y humano terrícola. Es el primer hijo de Son Goku y Chi-Chi, hermano mayor de Son Goten, esposo de Videl y padre de Pan.', 'https://dragonball-api.com/characters/gohan.webp', 'Z Fighter', NULL),
(11, 'Krillin', '1.000.000', '1 Billion', 'Human', 'Male', 'Amigo cercano de Goku y guerrero valiente, es un personaje del manga y anime de Dragon Ball. Es uno de los principales discípulos de Kame-Sen\'nin, Guerrero Z, y el mejor amigo de Son Goku. Es junto a Bulma uno de los personajes de apoyo principales de Dragon Ball, Dragon Ball Z y Dragon Ball Super. Aparece en Dragon Ball GT como personaje secundario. En el Arco de Majin Boo, se retira de las artes marciales, optando por formar una familia, como el esposo de la Androide Número 18 y el padre de Marron.', 'https://dragonball-api.com/characters/Krilin_Universo7.webp', 'Z Fighter', NULL),
(12, 'Tenshinhan', '2.400.000', '80.000.000', 'Human', 'Male', 'Maestro de las artes marciales y miembro de los Z Fighters.  Es un personaje que aparece en el manga y en el anime de Dragon Ball, Dragon Ball Z, Dragon Ball GT y posteriormente en Dragon Ball Super.', 'https://dragonball-api.com/characters/Tenshinhan_Universo7.webp', 'Z Fighter', NULL),
(13, 'Yamcha', '1.980.000', '4.000.000', 'Human', 'Male', 'Luchador que solía ser un bandido del desierto.', 'https://dragonball-api.com/characters/Final_Yamcha.webp', 'Z Fighter', NULL),
(14, 'Chi-Chi', '0', '0', 'Human', 'Female', 'Esposa de Goku y madre de Gohan. Es la princesa del Monte Fry-pan siendo la hija de la fallecida reina de esta montaña y el Rey Gyuma, ella terminaría conociendo a Son Goku cuando era tan solo una niña para años más tarde durante su adolescencia ser su esposa y convertirse en la estricta pero amorosa madre de Gohan y Goten.', 'https://dragonball-api.com/characters/ChiChi_DBS.webp', 'Z Fighter', NULL),
(15, 'Gotenks', '65.600.000', '34.8 Billion', 'Saiyan', 'Male', ' Gotenks también conocido inicialmente como Gotrunk en el doblaje al español de España, es el resultado de la Danza de la Fusión llevada a cabo correctamente por Goten y Trunks.', 'https://dragonball-api.com/characters/Gotenks_Artwork.webp', 'Z Fighter', NULL),
(16, 'Trunks', '50.000.000', '37.4 septllion', 'Saiyan', 'Male', 'Hijo de Vegeta y Bulma. Es un mestizo entre humano terrícola y Saiyano nacido en la Tierra, e hijo de Bulma y Vegeta, el cual es introducido en el Arco de los Androides y Cell. Más tarde en su vida como joven, se termina convirtiendo en un luchador de artes marciales, el mejor amigo de Son Goten y en el hermano mayor de su hermana Bra.', 'https://dragonball-api.com/characters/Trunks_Buu_Artwork.webp', 'Z Fighter', NULL),
(17, 'Master Roshi', '500.000', '350.000.000', 'Human', 'Male', 'Maestro de artes marciales y mentor de Goku. Conocido bajo el nombre de Muten Rosh, fue en su momento el terrícola más fuerte de la Tierra, y mucha gente lo recuerda como el \"Dios de las Artes Marciales\", pero antes de poder ostentar dicho título tuvo que trabajar y estudiar las artes marciales con su maestro Mutaito y su eterno rival Tsuru-Sen\'nin.', 'https://dragonball-api.com/characters/roshi.webp', 'Z Fighter', NULL),
(18, 'Bardock', '450.000', '180.000.000', 'Saiyan', 'Male', 'Es un saiyano de clase baja proveniente del Planeta Vegeta del Universo 7. Pertenece al Ejército Saiyano, que está bajo el liderazgo del Rey Vegeta, y es jefe de su escuadrón durante la anexión del planeta por parte de las fuerzas coloniales del Imperio de Freeza. Él es el esposo de Gine y padre biológico de Kakarotto y Raditz.', 'https://dragonball-api.com/characters/Bardock_Artwork.webp', 'Z Fighter', NULL),
(19, 'Launch', '0', '0', 'Human', 'Female', 'Personaje que sufre cambios de personalidad al estornudar. Es uno de los personajes principales del manga Dragon Ball y su anime homónimo; Lunch es una chica que sufre de un trastorno de personalidad doble que a raíz de sus reacciones alérgicas provoca que ella cambie entre dos personalidades diferentes, ninguna de las personalidades recuerda lo que la otra hizo o dijo.', 'https://dragonball-api.com/characters/Lunch_traje_de_sirvienta_en_el_manga.webp', 'Z Fighter', NULL),
(20, 'Mr. Satan', '450', '5.000', 'Human', 'Male', 'Luchador humano famoso por llevarse el mérito de las victorias de los Guerreros Z.', 'https://dragonball-api.com/characters/Mr_Satan_DBSuper.webp', 'Other', NULL),
(21, 'Dende', '3.200', '3.200', 'Namekian', 'Male', 'Sucesor de Piccolo como el nuevo Namekian protector de la Tierra. Es un pequeño namekiano, que vivía en el poblado de Moori, junto a su hermano Scargo y otros tantos de su especie. Es el hijo 108 del Gran Patriarca y posteriormente Dios de la Tierra, sustituyendo a Dios.', 'https://dragonball-api.com/characters/Dende_Artwork.webp', 'Z Fighter', NULL),
(22, 'Android 17', '320.000.000', '40 Quintillion', 'Android', 'Male', 'Antes de ser secuestrado, es el hermano mellizo de la Androide Número 18, quien al igual que ella antes de ser Androide era un humano normal hasta que fueron secuestrados por el Dr. Gero, y es por eso que lo odian. Tras su cambio de humano a Androide, le insertaron un chip con el objetivo de destruir a Son Goku, quien en su juventud extermino al Ejército del Listón Rojo. Al considerarse defectuoso porque no quería ser \'esclavo de nadie\', el Dr. Gero les había colocado a ambos hermanos, un dispositivo de apagado para detenerlos en cualquier momento de desobediencia, pero cuando el científico los despierta, el rencor y rebeldía de 17 eran tal que se encargó de destruir el control que lo volvería a encerrar y acto seguido mató sin piedad a su propio creador. Su situación se le iría en contra, ya que Cell tenía como misión absorber a 17 y 18 para completar su desarrollo y convertirse en Cell Perfecto.', 'https://dragonball-api.com/characters/17_Artwork.webp', 'Villain', NULL),
(23, 'Android 16', '440.000.000', '440.000.000', 'Android', 'Male', 'Android 16 es un androide gigante conocido por su amor a la naturaleza y la vida.', 'https://dragonball-api.com/characters/Androide_16.webp', 'Villain', NULL),
(24, 'Android 19', '122.000.000', '160,000,000', 'Android', 'Male', 'Android 19 es uno de los androides creados por el Dr. Gero.', 'https://dragonball-api.com/characters/Android19.webp', 'Villain', NULL),
(25, 'Android 20 (Dr. Gero)', '128.000.000', '158.100.000', 'Android', 'Male', 'Dr. Gero es el científico loco que creó a los androides 17, 18 y 19.', 'https://dragonball-api.com/characters/Dr._Gero nadroide 20.webp', 'Villain', NULL),
(26, 'Android 13', '195.000.000', '562.500.000', 'Android', 'Male', 'Android 13 es un androide peligroso que aparece en la película \"El Regreso de Cooler\".', 'https://dragonball-api.com/characters/Androide13normal.webp', 'Villain', NULL),
(27, 'Android 14', '192.500.000', '192.500.000', 'Android', 'Male', 'Android 14 es otro androide que aparece en la misma película que Android 13.', 'https://dragonball-api.com/characters/14Dokkan.webp', 'Villain', NULL),
(28, 'Android 15', '175.000.000', '175.000.000', 'Android', 'Male', 'Android 15 es otro androide que aparece en la misma película que Android 13.', 'https://dragonball-api.com/characters/15Dokkan.webp', 'Villain', NULL),
(29, 'Nail', '42.000 ', '42.000', 'Namekian', 'Male', 'Es un Namekiano (habitante del planeta Namek), que se caracteriza por formar parte de los escasos miembros de la \"estirpe guerrera\", y ser el más poderoso entre ellos junto a Piccolo.', 'https://dragonball-api.com/characters/Nail_Artwork.webp', 'Z Fighter', NULL),
(30, 'Raditz', '1.500 ', '1.500 ', 'Saiyan', 'Male', 'Es el hijo de Bardock y Gine, y hermano mayor de Son Goku. Él es uno de los pocos saiyanos que sobrevivieron a la destrucción del Planeta Vegeta, y formaba parte del equipo de Vegeta. Es el primer antagonista de Dragon Ball Z.', 'https://dragonball-api.com/characters/Raditz_artwork_Dokkan.webp', 'Army of Frieza', NULL),
(31, 'Babidi', '0', '0', 'Majin', 'Male', 'Conocido también como Bóbidi o Bábidi, es un poderoso hechicero madoshi, \"hijo\" del gran mago Bibbidi, fundador de la familia Majin. La \"M\" que llevan ambos en el cinturón de sus atuendos al igual que la frente de aquellos que han sido poseídos para formar parte de la familia Majin.', 'https://dragonball-api.com/characters/Babidi_Artwork.webp', 'Villain', NULL),
(32, 'Majin Buu', '8 Billion', '100 Trillion', 'Majin', 'Male', 'También conocido como Boo original, es la forma original y pura de Majin-Boo, y la última forma de Boo que aparece en Dragon Ball Z.', 'https://dragonball-api.com/characters/BuuGordo_Universo7.webp', 'Villain', NULL),
(33, 'Bills', '102 Billion', '100 septillion', 'God', 'Male', 'Dios de la Destrucción Beerus, conocido también como Beers, o Bills en Hispanoamérica e inicialmente en España[1], es un personaje que fue introducido en la película Dragon Ball Z: La batalla de los dioses, donde es el antagonista principal de la película, y que aparece en el manga y anime de Dragon Ball Super como un personaje principal. Ocupa el puesto de Dios de la Destrucción de todo el Universo 7 siendo el lugar donde se desarrolla la historia de Dragon Ball.', 'https://dragonball-api.com/characters/Beerus_DBS_Broly_Artwork.webp', 'Other', NULL),
(34, 'Whis', '15 septillion', '110 septillion', 'Angel', 'Male', 'Whis es uno de los hijos del Gran Sacerdote, hermano menor de Vados, Korn y Kus. Es el ángel guía encargado de asistir y servir como maestro al Dios de la Destrucción del Universo 7, Beerus.', 'https://dragonball-api.com/characters/Whis_DBS_Broly_Artwork.webp', 'Assistant of Beerus', NULL),
(35, 'Zeno', '500 Septillion', '500 Septillion', 'Unknown', 'Male', 'Zeno es el ser supremo del multiverso y tiene un poder abrumador .El Rey de Todo, también conocido como Zen Oo (Zeno Sama en España y Zen Oo Sama en Hispanoamerica) y apodado por Son Goku como Todito (全ぜんちゃん, Zen-chan), es el gobernante y dios absoluto de todos los universos y el máximo soberano de todo lo existente en Dragon Ball.', 'https://dragonball-api.com/characters/Zeno_Artwork.webp', 'Other', NULL),
(37, 'Kibito-Shin', '3.2 Billion', '3.2 Billion', 'God', 'Male', 'es la fusión entre Shin y Kibito. Ellos fueron unidos permanentemente mediante el uso de los míticos pendientes Pothala. Está actualmente separado gracias a un deseo concedido por las Esferas del Dragón namekianas.', 'https://dragonball-api.com/characters/Kibito_shin_Artwork.webp', 'Other', NULL),
(38, 'Jiren', '121 Quintillion', '12.1 Septillion', 'Jiren Race', 'Male', 'Jiren es un poderoso luchador del Universo 11 y uno de los oponentes más formidables en el torneo.', 'https://dragonball-api.com/characters/Jiren.webp', 'Pride Troopers', NULL),
(39, 'Toppo', '99 Quadrillion', '7.5 Sextillion', 'God', 'Male', 'Toppo es el líder de las Tropas del Orgullo, guerreros de la justicia del Universo 11 que actúan como protectores de la paz y superhéroes del bien. Él ha sido entrenado por el ángel guía Marcarita, convirtiéndose así en un candidato como futuro Dios de la Destrucción en su universo.', 'https://dragonball-api.com/characters/Toppo.webp', 'Pride Troopers', NULL),
(40, 'Dyspo', '50 Trillion', '150 Quintillion', 'God', 'Male', 'Dyspo es uno de los miembros del Equipo Universo 11 como uno de los soldados más poderosos de las Tropas del Orgullo junto con Jiren y su líder Toppo.', 'https://dragonball-api.com/characters/Dispo_render.webp', 'Pride Troopers', NULL),
(42, 'Marcarita ', '10 septillion', '99.5 septillion', 'Angel', 'Female', 'Marcarita es el ángel guía del Universo 11, sirviente y maestra de artes marciales del Dios de la Destrucción Vermoud. Es un personaje de la Arco de la Supervivencia Universal de Dragon Ball Super.', 'https://dragonball-api.com/characters/Marcarita.webp', 'Assistant of Vermoud', NULL),
(43, 'Vermoudh', '9.9 Septillion', '100 septillion', 'God', 'Male', 'Es el individuo que actualmente ostenta el cargo de Dios de la Destrucción en el Universo 11, puesto que obtuvo tras abandonar su membresía como Soldado del Orgullo dentro de las Tropas del Orgullo.', 'https://dragonball-api.com/characters/Vermoud.webp', 'Pride Troopers', NULL),
(44, 'Grand Priest ', '969 Googolplex', '969 Googolplex', 'Angel', 'Male', 'El Gran Sacerdote es el supervisor del torneo y uno de los seres más poderosos. Gran Ministro de los Omni-Reyes , es un ángel que actúa como asesor cercano y figura guía de Zenón y del Futuro Zenón . De vez en cuando hace cumplir los Decretos Divinos de los Zenos y da la bienvenida a los invitados a su palacio . El Gran Ministro es también padre de trece Ángeles, de los cuales doce sirven a los Dioses de la Destrucción . Por su posición y poder, es quizás el segundo ser más fuerte del Multiverso .', 'https://dragonball-api.com/characters/Grand priest.webp', 'Other', NULL),
(63, 'Kaio del norte (Kaito)', '6.000', '6.000', 'Nucleico benigno', 'Male', 'Se trata del dios encargado de administrar las Galaxias del Norte, el cuadrante boreal del Universo 7 y supervisar a los dioses de los planetas de dicho sector (como es el caso de Kami en la Tierra)', 'https://dragonball-api.com/characters/Kaio_del_Norte.webp', 'Other', NULL),
(64, 'Android 18', '280,000,000', '300,000,000', 'Android', 'Female', 'Es la hermana melliza del Androide Número 17 y una \"androide\" creada a partir de una base humana por el Dr. Gero con el único fin de destruir a Goku.', 'https://dragonball-api.com/characters/Androide_18_Artwork.webp', 'Z Fighter', NULL),
(65, 'Gogeta', '250 Billion', '15 septillion', 'Saiyan', 'Male', 'Gogeta es la fusión resultante de Son Goku y Vegeta, cuando realizan la Danza de la Fusión correctamente para enfrentarse a Broly. Su voz es una voz dual que contiene las voces de Goku y Vegeta. Junto con el poder todopoderoso de los dos, con la astucia y perspicacia de Vegeta, y la habilidad pródiga de las artes marciales de Goku, es uno de los guerreros más temibles para desafiar a una pelea.', 'https://dragonball-api.com/transformaciones/gogeta.webp', 'Z Fighter', NULL),
(66, 'Vegetto', '180 Billion', '10.8 Septillion', 'Saiyan', 'Male', 'Vegetto es el personaje más fuerte dentro del manga original y uno de los personajes más poderosos de toda la serie en general. Su poder es el resultado del máximo poder combinado de Goku y Vegeta, multiplicado varias veces su fuerza, siendo una de las fusiones más poderosas dentro de la franquicia.', 'https://dragonball-api.com/transformaciones/Vegetto.webp', 'Z Fighter', NULL),
(67, 'Janemba', '15 Billion', '75 Billion', 'Evil', 'Male', 'Janemba es un demonio de pura maldad y gran poder maligno. Creado a partir de las acciones de un adolescente ogro llamado Psyche Oni, quien era el responsable de vigilar la máquina purificadora de almas, la cual explota como consecuencia de la falta de cuidado del ogro, las almas malignas terminan por usar como huésped su cuerpo, creando así a este demonio.', 'https://dragonball-api.com/transformaciones/Janemba_artwork_SDBH.webp', 'Other', NULL),
(68, 'Broly', '7 quadrillion', '11.2 Septillion', 'Saiyan', 'Male', 'Broly es un Saiyajin que posee un poder gigantesco e incontrolable, el cual se manifiesta en toda su magnitud cuando se convierte en el Super Saiyajin Legendario. Incluso cuando apenas era un bebé su nivel de poder alcanzaba cifras inmensas que provocaban asombro y preocupación entre los de su raza', 'https://dragonball-api.com/transformaciones/Broly_DBS_Base.webp', 'Other', NULL),
(69, 'Kaio del Sur', 'unknown', 'unknown', 'Nucleico benigno', 'Male', 'El Kaio del Sur es la única referencia que tenemos de los otros dioses Kaiō en el manga, más allá del Kaiō Sama Norte ya que es el único Kaiō, junto con el Kaiō del Norte, en aparecer en el manga, y uno de los cuatro que aparecen en el anime, junto al Gran Kaio.', 'https://dragonball-api.com/characters/Kaio_del_sur_cuerpo_completo.webp', 'Other', NULL),
(70, 'Kaio del este', 'unknown', 'unknown', 'Nucleico benigno', 'Female', 'La Kaiō del Este es una Kaio que solo aparece en el anime. Le gustan los retos y de entrenar duramente a sus discípulos, que destacan por ser guerreros muy veloces, siendo el ejemplo más claro Chapuchai.', 'https://dragonball-api.com/characters/kaio del este.webp', 'Other', NULL),
(71, 'Kaio del Oeste', 'unknown', 'unknown', 'Nucleico benigno', 'Male', 'El Kaiō del Oeste es el rival del Kaio del Norte. Y como dice su nombre, el controla la galaxia del Oeste.', 'https://dragonball-api.com/characters/Kaio del oeste.webp', 'Other', NULL),
(72, 'Gran Kaio', 'unknown', 'unknown', 'Nucleico benigno', 'Male', 'Gran Kaio es el Kaio de mayor importancia del Otro Mundo y es el Dios que se encarga de administrar a los demás Kaiō para que se ocupen de cuyos sectores de la Galaxia. Su apariencia es la de un anciano con una barba larga y muy canosa, remarcada por unas gafas oscuras que nunca se quita en la serie. Cuenta con su propio planeta, el Planeta del Gran Kaio, en el cual la gravedad es 10 veces mayor a la del planeta Tierra.', 'https://dragonball-api.com/characters/Gran_kaio_sama12.webp', 'Other', NULL),
(73, 'Kaio-shin del Este', 'unknown', 'unknown', 'Nucleico', 'Male', 'Es uno de los Kaio-shin, los dioses de la creación que se encargan de crear vida en todo el Universo 7 y protegerlo de amenazas supremas.\nAnteriormente solía hacerse cargo de proteger la zona este del universo, ya que después de la muerte de los otros Kaio-shin a manos de Majin-Boo, se convirtió en el Kaio-shin principal del Universo 7.', 'https://dragonball-api.com/characters/Kaio-shin_del_este_Artwork.webp', 'Other', NULL),
(74, 'Kaio-shin del Norte', 'unknown', 'unknown', 'Nucleico', 'Male', 'El Kaiō-shin del Norte es otro de los Kaiō-shin que vivió junto a el resto de los Kaio-shin y Dai Kaio-shin hace 5 millones de años, y que luchó contra Majin Boo.', 'https://dragonball-api.com/characters/Kaio-shin del norte.webp', 'Other', NULL),
(75, 'Kaio-shin del Sur', 'unknown', 'unknown', 'Nucleico', 'Male', 'El Kaio-shin del Sur fue el gobernante del cuadrante sur del universo y era el más poderoso entre los Kaio-shin.', 'https://dragonball-api.com/characters/Kaio-shin_del_Sur_Dokkan.webp', 'Other', NULL),
(76, 'Kaio-shin del Oeste', 'unknown', 'unknown', 'Nucleico benigno', 'Female', 'La Kaiō-shin del Oeste es una Kaio-shin, que vivió junto a sus compañeros, fue la primera en morir en la terrible batalla librada contra Majin Boo hace 5 millones de años.', 'https://dragonball-api.com/characters/Kaio-shin_del_Oeste_Dokkan.webp', 'Other', NULL),
(77, 'Gran Kaio-shin', 'unknown', 'unknown', 'Nucleico benigno', 'Male', 'El Gran Kaio-shin, conocido también como Sagrado Kaiosama en Hispanoamérica, era el Kaio-shin principal del Universo 7 y supervisor de los otros Kaio-shin del mismo universo.\nTras ser absorbido por Majin Boo, el Gran Kaio-shin del Universo 7 se convirtió en la faceta más dominante en Boo Gordo, aún viviendo actualmente dentro de su cuerpo a través de su espíritu.', 'https://dragonball-api.com/characters/Gran_Kaio-shin_Artwork.webp', 'Other', NULL),
(78, 'Kibito', 'unknown', 'unknown', 'Nucleico', 'Male', 'Kibito es el ayudante y guardaespaldas del Kaio-shin del Este. Es un experto combatiente y con ciertos poderes curativos y mágicos como corresponde a su función. Su técnica más conocida es el Kai-Kai.', 'https://dragonball-api.com/characters/Kibito_Artwork.webp', 'Other', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tiradas`
--

CREATE TABLE `tiradas` (
  `id_tiradas` bigint(20) NOT NULL,
  `id_usuario` bigint(20) DEFAULT NULL,
  `fecha_tirada` datetime DEFAULT current_timestamp(),
  `id_personaje` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `piedra` int(11) DEFAULT 100,
  `nombre_usuario` varchar(255) DEFAULT NULL,
  `contraseña` varchar(255) DEFAULT NULL,
  `tipo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cartas`
--
ALTER TABLE `cartas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tiradas`
--
ALTER TABLE `tiradas`
  ADD PRIMARY KEY (`id_tiradas`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_personaje` (`id_personaje`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `correo` (`correo`),
  ADD UNIQUE KEY `nombre_usuario` (`nombre_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cartas`
--
ALTER TABLE `cartas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `tiradas`
--
ALTER TABLE `tiradas`
  MODIFY `id_tiradas` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tiradas`
--
ALTER TABLE `tiradas`
  ADD CONSTRAINT `tiradas_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
  ADD CONSTRAINT `tiradas_ibfk_2` FOREIGN KEY (`id_personaje`) REFERENCES `cartas` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

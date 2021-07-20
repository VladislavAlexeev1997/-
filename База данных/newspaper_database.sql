-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 10 2019 г., 21:03
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `newspaper_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `administrator`
--

CREATE TABLE `administrator` (
  `login` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `administrator`
--

INSERT INTO `administrator` (`login`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `article_id` varchar(30) NOT NULL,
  `editor_login` varchar(30) NOT NULL,
  `article_name` text NOT NULL,
  `text` text NOT NULL,
  `date_public` varchar(10) NOT NULL,
  `time_public` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article`
--

INSERT INTO `article` (`article_id`, `editor_login`, `article_name`, `text`, `date_public`, `time_public`) VALUES
('editor109.01.201913:52:35', 'editor1', 'В Курске прошел зимний автокросс', 'В первые дни наступившего года на пустыре возле улицы Воздушной в Курске было шумно и многолюдно. Ревели моторы, а машины лихо преодолевали виражи заснеженной трассы. Здесь проходил очередной этап чемпионата Курской области по зимнему автокроссу.\r\n\r\nСамому юному участнику кросса 9 лет. Егор Полищук занимается гонками не так давно, но уже уверенно держится на обледенелой трассе - он показал лучший результат в тренировочном заезде.\r\n\r\nЗаезды на более мощных автомобилях принесли зрителям немало острых ощущений. Самая ожесточенная борьба шла между спортсменами на переднеприводных машинах.\r\n\r\nТех, кто не прошел испытания ледовой трассой, извлекали из сугробов курские джиперы.\r\n\r\nЗдесь и прилив адреналина, и азарт, и при этом полная законность происходящего. Только вот, мероприятие, на котором собралось столько увлеченной молодежи, почему-то не вызвало интереса представителей ни областной, ни городской власти.', '09.01.2019', '13:52:35'),
('editor109.01.201914:55:23', 'editor1', 'В Курске прошла выставка необычных кошек', 'Накануне Рождества один из этажей комплекса «МегаГРИНН» в Курске превратился в настоящие пристанище «котомилоты». Здесь проходила традиционная выставка кошек.\r\n\r\n- Выставка «Кубок Черноземья уникальна тем, что проходит уже 20 лет. Единственная выставка, на которую зарегистрированы авторские права. География участников впечатляет - у нас представлены Сургут, Сахалин, Москва разумеется, - рассказывает один из организаторов выставки Наталья Шаланкова. - Порядка 150 участников, довольно редкие породы есть, например рэгдолл, а также классические гиганты мейн-куны.\r\n\r\nНа сей раз мейн-кунов было больше всего - эти огромные по размеру кошки в основном обладают весьма дружелюбным характером.\r\n\r\nВпрочем, настоящие сибирские кошки не так уж сильно отстают по росту от гигантских мейн-кунов. И также готовы дарить свою любовь и хозяевам, и сородичам.\r\n\r\nА вот бобтейлы - большая редкость. На первый взгляд, вполне привычные животные, однако хвост трубой они держать уж точно не будут - хвост у этой породы не больше кроличьего.\r\n\r\nРавнодушных зрителей на выставке не было. Тем более, что, как правило, посетители и сами держат у себя дома этих милых созданий.', '09.01.2019', '14:55:23'),
('editor109.01.201915:04:19', 'editor1', '15 января куряне отметят день рождения русского писателя Евгения Носова', 'Евгений Носов – лауреат Государственной премии и многих литературных наград (в том числе премии Александра Солженицына), ветеран войны, награждённый 26 орденами и медалями, Герой Социалистического Труда, действительный член Академии российской словесности.\r\n\r\nПришло время большой литературы\r\n\r\nСам Евгений Иванович Носов писал так: «Настоящий художник не может позволить себе пописывать просто так, ради одного удовольствия, тем паче, без всякой связи с жизнью. Он живёт и борется в литературе не ради самой литературы, а через её посредство – ради утверждения жизни и справедливости. Большая литература всегда с нами и в нас. Она лишь требует мира и тишины для её углубленного прочтения. И такое время придёт!».\r\n\r\nВ нашем городе установлены прекрасные памятники мастеру, – и на его могиле на Мемориале памяти павших, и недалеко от дома, где он жил – на пересечении улиц Блинова и Челюскинцев; на его доме, на школе №9, где он учился (ныне это финансово-экономический институт), на здании школы №27, там создан музей писателя «Мастер», как и в школе №2, установлены мемориальные доски. Учреждена премия имени Евгения Носова, ежегодно проводятся литературные чтения памяти писателя с изданием сборников с докладами.\r\n\r\nНо главный источник памяти о Евгении Ивановиче Носове – это его прекрасные книги, которые и сейчас помогают нам жить и верить во всё лучшее в жизни, и на долгие времена сохранят рассказ о нашем времени, о нашем Курском крае, его скромной неброской красоте и о наших прекрасных людях.\r\n\r\nЧеловека и писателя с таким могучим талантом, с такой светлой и мудрой душой, с такими прекрасными, добрыми и правдивыми страницами, заменить никем и никогда нельзя. Неслучайно известный критик А. Кондратович написал: «Из большой литературы Евгений Носов не выпадет, нет».', '09.01.2019', '15:04:19'),
('editor109.01.201919:31:24', 'editor1', 'В Курске пройдёт книжная выставка, посвящённая знаменитым врачам', 'В 2019 году в России отпразднуют юбилеи со дня рождения таких знаменитых докторов, как Иван Павлов, Петр Кащенко, Иван Сеченов, Николай Семашко и многих других.\r\n\r\nОткрытия российских врачей помогают лечить людей и сегодня. Так, например, Василий Образцов (1849-1920) разработал методику диагностирования органов брюшной полости методом глубокой пальпации. А уроженец Курска, российский хирург Николай Коротков (1874-1920) открыл звуковой метод определения артериального давления у человека. И сегодня во всем мире используют так называемые «тоны Короткова».\r\n\r\nУзнать больше о жизни и научной деятельности известных врачей помогут издания, представленные в экспозиции. Выставка будет действовать до 31 января.', '09.01.2019', '19:31:24'),
('editor110.01.201912:24:04', 'editor1', 'По Курску снова проедет «Читающий троллейбус»', 'Накануне дня рождения выдающегося курского писателя Евгения Носова все желающие могут принять участие в акции «Читающий маршрут». 14 января ровно в 11.00 от Знаменского собора поедет троллейбус, пассажиры которого смогут лично пообщаться с курскими литераторами, послушать стихи в исполнении самих авторов, а также получить автограф на память.\r\n\r\nЛитераторы поделятся воспоминаниями о Евгении Носове, прочитают отрывки из его произведений. По традиции, один из пассажиров станет «счастливым» — на остановке «Ул. Почтовая», неподалёку от которой располагается «Дом литератора», он получит приз от организаторов проекта — Централизованной системы библиотек города Курска.\r\n\r\nСледуя «Читающим маршрутом», можно будет также воспользоваться услугами «Книгообмена».', '10.01.2019', '12:24:04'),
('editor209.01.201914:01:36', 'editor2', 'В Курске впервые прошла новогодняя пробежка', 'В Курске 1 января впервые решили устроить новогоднюю пробежку. И акция, нацеленная на пропаганду здорового и трезвого образа жизни, состоялась. В полдень для всех желающих прошел молебен в Никитском храме. Затем состоялся забег к Театральной площади областного центра, где прошла зарядка. Финальная точка акции - Боевка.\r\n\r\nНовогоднее мероприятие #МуромскаяДорожка проходило в более чем 50 городах России. В Курске на пробежку вышли более сотни спортсменов, любителей и просто неравнодушных горожан. Вместе с ними на улицу вышел и председатель регионального спорткомитета Валерий Кобзев.\r\n\r\nТренировку у драмтеатра проводил опытный тренер, серебряный призер Чемпионата Мира по спортивной борьбе GRAPPLING Айказ Габрелян. Размявшись, участники пробежки отправились на Боевку, где состоялось совместное чаепитие.', '09.01.2019', '14:01:36'),
('editor209.01.201914:51:08', 'editor2', 'Срочный ремонт теплосетей в центре Курска обернулся «транспортным коллапсом»', 'Сегодня после полудня центр Курска застыл в многокилометровых пробках. Особенно не повезло тем, кто пытался ехать от Красной площади в сторону Перекальского, включая все параллельные улицы.\r\n\r\nКроме снежной каши на проезжей части, ситуацию усугубили срочные ремонтные работы на теплосетях. Рабочие перекопали дорогу у перекрестка улиц Димитрова и Гоголя.\r\n\r\nТе, кто попытался объехать затор по боковым узким улицам, застревали на льду. Ремонтные работы на Димитрова обещают завершить лишь после 8 часов вечера. Без тепла остаются как минимум 4 многоэтажки и детский сад.', '09.01.2019', '14:51:08'),
('editor209.01.201914:58:34', 'editor2', 'Курские чиновники вышли на «Студеный лед»', 'В Рождество, 7 января, курские чиновники скрестили… клюшки. На открытом катке в Железнодорожном округе областного центра прошел матч между представителями органов исполнительной власти Курской области и регионального центра. Сильнейших определила лишь серия буллитов.\r\n\r\n7 января в Курске прошла хоккейная классика. На открытом воздухе в рамках турнира среди любительских команд «Студеный лед» провели матч между командами администраций региона и областного центра.\r\n\r\n- Это смешанные команды, - рассказывает врио председателя комитета по физкультуре и спорту Курской области Валерий Кобзев. – Организации, учреждения, департаменты, комитеты. Инициативы – от Ночной хоккейной лиги.\r\n\r\nДве команды по девять человек в каждой сошлись в ледовой баталии. В первом периоде борьбы было много. Защита уверенно побеждала атаку. Счет открыть никому не удалось.', '09.01.2019', '14:58:34'),
('editor209.01.201915:08:56', 'editor2', 'Парковку у курского ЖД вокзала привели в порядок', 'До этого с резкой критикой на владельцев парковки обрушился Роман Старовойт.\r\n \r\n6 января глава региона заявил, что если собственник не справляется с тем, чтобы содержать парковку должным образом, то ее необходимо снести и создать людям условия, чтобы они могли бесплатно парковаться рядом с вокзалом, а не платить за мусор и снег.\r\n\r\nУже на следующий день, 7 января, парковка на Привокзальной площади выглядит уже по-другому. Весь снег, лежавший с начала декабря, наконец-то убрали и вывезли. На это потребовалось несколько часов.  ', '09.01.2019', '15:08:56'),
('editor309.01.201913:58:59', 'editor3', 'В Курске ночью во всех православных храмах встречали Рождество Христово', 'В ночь с 6-го на 7-е января православные куряне встречали один из главных праздников - Рождество Христово. Торжественные службы прошли во всех храмах региона. Накануне церкви «нарядили» в праздничное убранство и установили рождественские вертепы, которые напоминали ясли Младенца Христа в вифлеемской пещере. Прихожане задолго до начала всеночного бдения стали заполнять курские храмы. Куряне семьями шли на встречу Рождеству Христову.\r\n\r\nВерующие преклонялись перед иконами, ставили свечи и молились. В Михайловском храме Курска, что расположился на улице Карла Либкнехта, рождественское ночное бдение прошло под началом нового настоятеля - иерея Владимира Гвоздилина.\r\n\r\nМногочасовая служба для всех далась по-разному: кому-то легко, а кому-то пришлось приложить усилия, но людей разных возрастов и статусов согревала вера, что Спаситель пришел в мир, а значит, есть надежда на благополучное будущее.', '09.01.2019', '13:58:59'),
('editor309.01.201915:05:31', 'editor3', 'Курские волонтеры раздали бездомным горячие обеды', 'Курские волонтеры из группы помощи бездомным и нуждающимся людям организовали рождественский благотворительный обед. «Для обеда мы приготовили суп, тушеный картофель с грибами, котлеты и сельдь под шубой. Не обошлось и без горячего чая с конфетами и печеньем. Каждому желающему досталась и дополнительная порция еды. Кроме того, мы привезли с собой теплые мужские вещи, которые раздали тем, кто постоянно проживает на улице», - рассказала руководитель проекта Светлана Козина. Напомним, обеды проводятся на площадке за трамвайной остановкой «Железнодорожный вокзал». Зимой они организуются дважды в неделю — по средам и воскресеньям.', '09.01.2019', '15:05:31'),
('editor409.01.201915:00:39', 'editor4', 'В Курской области ожидаются снег и туман', 'В ближайшие сутки в Курской области будет облачно, ожидается небольшой снег, местами туман. Ветер юго-восточный ночью 4-9 м/с, днем 6-11 м/с. Температура по области ночью 6-11º, в низких местах до 14º, днем 1-6º мороза. Спасатели предупреждают население соблюдать правила безопасности на дорогах.', '09.01.2019', '15:00:39'),
('editor409.01.201919:43:08', 'editor4', 'Курские спасатели следят за безопасностью автомобилистов', 'В Курской области используется три системы видеонаблюдения: мониторинг на федеральной автодороге (13 камер), система «Безопасный город» (38 камер), лесопожарный мониторинг (6 камер, два тепловизора, две видеокамеры комитета лесного хозяйства). С помощью 13-и камер Росавтодора контролируется дорожное полотно на участках федеральных автомобильных трасс.\r\n\r\nКроме того, при необходимости к работе готовы приступить 36 стационарных пунктов питания и обогрева на 1566 человек. На базе пожарных частей №№3 и 6 созданы два мобильных пункта обогрева и питания, время развёртывания которых не превышает четырех часов.  ', '09.01.2019', '19:43:08');

-- --------------------------------------------------------

--
-- Структура таблицы `article_comment`
--

CREATE TABLE `article_comment` (
  `article_id` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `date_public` varchar(12) NOT NULL,
  `time_public` varchar(10) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article_comment`
--

INSERT INTO `article_comment` (`article_id`, `login`, `date_public`, `time_public`, `text`) VALUES
('editor109.01.201915:04:19', 'subscr1', '10.01.2019', '08:52:16', 'Слава и хвала Великому писателю!'),
('editor409.01.201915:00:39', 'subscr1', '10.01.2019', '08:53:42', 'Не надо такой погоды!');

-- --------------------------------------------------------

--
-- Структура таблицы `article_like`
--

CREATE TABLE `article_like` (
  `article_id` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `mark` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `article_photo`
--

CREATE TABLE `article_photo` (
  `article_id` varchar(30) NOT NULL,
  `photo_num` int(2) NOT NULL,
  `file_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `article_photo`
--

INSERT INTO `article_photo` (`article_id`, `photo_num`, `file_name`) VALUES
('editor109.01.201913:52:35', 1, 'articles/editor1_09.01.2019_13_52_35/автокросс.jpg'),
('editor109.01.201914:55:23', 1, 'articles/editor1_09.01.2019_14_55_23/кошки.jpg'),
('editor109.01.201915:04:19', 1, 'articles/editor1_09.01.2019_15_04_19/Е. Носов.jpg'),
('editor109.01.201919:31:24', 1, 'articles/editor1_09.01.2019_19_31_24/библиотека.jpg'),
('editor110.01.201912:24:04', 1, 'articles/editor1_10.01.2019_12_24_04/троллейбус.jpg'),
('editor209.01.201914:01:36', 1, 'articles/editor2_09.01.2019_14_01_36/пробежка.jpg'),
('editor209.01.201914:51:08', 1, 'articles/editor2_09.01.2019_14_51_08/коллапс.jpg'),
('editor209.01.201914:58:34', 1, 'articles/editor2_09.01.2019_14_58_34/хоккей.jpg'),
('editor209.01.201915:08:56', 1, 'articles/editor2_09.01.2019_15_08_56/парковка.jpg'),
('editor309.01.201913:58:59', 1, 'articles/editor3_09.01.2019_13_58_59/рождество.jpg'),
('editor309.01.201915:05:31', 1, 'articles/editor3_09.01.2019_15_05_31/бездомные.jpg'),
('editor409.01.201915:00:39', 1, 'articles/editor4_09.01.2019_15_00_39/туман.jpg'),
('editor409.01.201919:43:08', 1, 'articles/editor4_09.01.2019_19_43_08/МЧС.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `article_source`
--

CREATE TABLE `article_source` (
  `article_id` varchar(30) NOT NULL,
  `source_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `article_topic`
--

CREATE TABLE `article_topic` (
  `article_id` varchar(30) NOT NULL,
  `topic_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `editor`
--

CREATE TABLE `editor` (
  `login` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `editor`
--

INSERT INTO `editor` (`login`, `surname`, `name`, `email`) VALUES
('editor1', 'Сергеев', 'Иван', 'sergeev@yandex.ru'),
('editor2', 'Кузнецова', 'Анна', 'annkuz@mail.ru'),
('editor3', 'Александров', 'Сергей', 'alexan@yandex.ru'),
('editor4', 'Савельев', 'Николай', 'sav.nik@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `period_subscribe`
--

CREATE TABLE `period_subscribe` (
  `period_id` varchar(10) NOT NULL,
  `period_num` int(2) NOT NULL,
  `period_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `photoeditor`
--

CREATE TABLE `photoeditor` (
  `pheditor_id` int(5) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber`
--

CREATE TABLE `subscriber` (
  `login` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `patronymic` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscriber`
--

INSERT INTO `subscriber` (`login`, `surname`, `name`, `patronymic`) VALUES
('subscr1', 'Евгеньев', 'Сергей', 'Иванович'),
('subscr2', 'Сергиенко', 'Елена', 'Ивановна'),
('subscr3', 'Алексеев', 'Владислав', 'Андреевич'),
('subscr4', 'Сеченов', 'Иван', 'Федорович');

-- --------------------------------------------------------

--
-- Структура таблицы `subscriber_info`
--

CREATE TABLE `subscriber_info` (
  `login` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `subscriber_info`
--

INSERT INTO `subscriber_info` (`login`, `email`, `phone_number`) VALUES
('subscr1', 'vmn@yandex.ru', '+7-951-334-23-22'),
('subscr2', 'ram@ut.mail.ru', '+7-910-234-51-55'),
('subscr3', '', ''),
('subscr4', '', '+7-678-456-12-33');

-- --------------------------------------------------------

--
-- Структура таблицы `subscribe_newspaper`
--

CREATE TABLE `subscribe_newspaper` (
  `login` varchar(30) NOT NULL,
  `period_id` varchar(10) NOT NULL,
  `start_date` date NOT NULL,
  `date_subscribe` date NOT NULL,
  `finish_date` date NOT NULL,
  `sum` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `topic`
--

CREATE TABLE `topic` (
  `topic_id` int(5) NOT NULL,
  `topic_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status_id` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`login`, `password`, `status_id`) VALUES
('admin', 'admin', 'admin'),
('editor1', 'editor1', 'editor'),
('editor2', 'editor2', 'editor'),
('editor3', 'editor3', 'editor'),
('editor4', 'editor4', 'editor'),
('subscr1', 'subscr1', 'subscr'),
('subscr2', 'subscr2', 'subscr'),
('subscr3', 'subscr3', 'subscr'),
('subscr4', 'subscr4', 'subscr');

-- --------------------------------------------------------

--
-- Структура таблицы `user_view`
--

CREATE TABLE `user_view` (
  `status_id` varchar(6) NOT NULL,
  `status_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_view`
--

INSERT INTO `user_view` (`status_id`, `status_name`) VALUES
('admin', 'администратор'),
('editor', 'редактор'),
('subscr', 'подписчик');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`login`);

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`) USING BTREE,
  ADD KEY `EDITOR_ARTICLE_FK` (`editor_login`);

--
-- Индексы таблицы `article_comment`
--
ALTER TABLE `article_comment`
  ADD PRIMARY KEY (`article_id`,`login`,`date_public`,`time_public`) USING BTREE,
  ADD KEY `SUBSCRIBER_ARTICLE_COMMENT_FK` (`login`);

--
-- Индексы таблицы `article_like`
--
ALTER TABLE `article_like`
  ADD PRIMARY KEY (`article_id`,`login`),
  ADD KEY `SUBSCRIBE_ARTICLE_LIKE_FK` (`login`);

--
-- Индексы таблицы `article_photo`
--
ALTER TABLE `article_photo`
  ADD PRIMARY KEY (`article_id`,`photo_num`);

--
-- Индексы таблицы `article_source`
--
ALTER TABLE `article_source`
  ADD PRIMARY KEY (`article_id`);

--
-- Индексы таблицы `article_topic`
--
ALTER TABLE `article_topic`
  ADD PRIMARY KEY (`article_id`,`topic_id`),
  ADD KEY `TOPIC_ARTICLE_TOPIC_FK` (`topic_id`);

--
-- Индексы таблицы `editor`
--
ALTER TABLE `editor`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `EMAIL_UK` (`email`);

--
-- Индексы таблицы `period_subscribe`
--
ALTER TABLE `period_subscribe`
  ADD PRIMARY KEY (`period_id`);

--
-- Индексы таблицы `photoeditor`
--
ALTER TABLE `photoeditor`
  ADD PRIMARY KEY (`pheditor_id`) USING BTREE;

--
-- Индексы таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`login`);

--
-- Индексы таблицы `subscriber_info`
--
ALTER TABLE `subscriber_info`
  ADD PRIMARY KEY (`login`);

--
-- Индексы таблицы `subscribe_newspaper`
--
ALTER TABLE `subscribe_newspaper`
  ADD PRIMARY KEY (`login`,`period_id`,`start_date`),
  ADD KEY `PERIOD_SUBSCRIBE_SUBSCRIBE_NEWSPAPER_FK` (`period_id`);

--
-- Индексы таблицы `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topic_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`login`),
  ADD UNIQUE KEY `UK_USER` (`login`,`password`) USING BTREE,
  ADD KEY `USER_VIEW_USER_FK` (`status_id`);

--
-- Индексы таблицы `user_view`
--
ALTER TABLE `user_view`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photoeditor`
--
ALTER TABLE `photoeditor`
  MODIFY `pheditor_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `topic`
--
ALTER TABLE `topic`
  MODIFY `topic_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `USER_ADMINISTRATOR_FK` FOREIGN KEY (`login`) REFERENCES `user` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `EDITOR_ARTICLE_FK` FOREIGN KEY (`editor_login`) REFERENCES `editor` (`login`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_comment`
--
ALTER TABLE `article_comment`
  ADD CONSTRAINT `ARTICLE_ARTICLE_COMMENT_FK` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SUBSCRIBER_ARTICLE_COMMENT_FK` FOREIGN KEY (`login`) REFERENCES `subscriber` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_like`
--
ALTER TABLE `article_like`
  ADD CONSTRAINT `ARTICLE_ARTICLE_LIKE_FK` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `SUBSCRIBE_ARTICLE_LIKE_FK` FOREIGN KEY (`login`) REFERENCES `subscriber` (`login`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_photo`
--
ALTER TABLE `article_photo`
  ADD CONSTRAINT `ARTICLE_ARTICLE_PHOTO_FK` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_source`
--
ALTER TABLE `article_source`
  ADD CONSTRAINT `ARTICLE_ARTICLE_SOURCE_FK` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `article_topic`
--
ALTER TABLE `article_topic`
  ADD CONSTRAINT `ARTICLE_ARTICLE_TOPIC_FK` FOREIGN KEY (`article_id`) REFERENCES `article` (`article_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `TOPIC_ARTICLE_TOPIC_FK` FOREIGN KEY (`topic_id`) REFERENCES `topic` (`topic_id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `editor`
--
ALTER TABLE `editor`
  ADD CONSTRAINT `USER_EDITOR_FK` FOREIGN KEY (`login`) REFERENCES `user` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscriber`
--
ALTER TABLE `subscriber`
  ADD CONSTRAINT `USER_SUBSCRIBER_FK` FOREIGN KEY (`login`) REFERENCES `user` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscriber_info`
--
ALTER TABLE `subscriber_info`
  ADD CONSTRAINT `SUBSCRIBER_SUBSCRIBER_INFO_FK` FOREIGN KEY (`login`) REFERENCES `subscriber` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `subscribe_newspaper`
--
ALTER TABLE `subscribe_newspaper`
  ADD CONSTRAINT `PERIOD_SUBSCRIBE_SUBSCRIBE_NEWSPAPER_FK` FOREIGN KEY (`period_id`) REFERENCES `period_subscribe` (`period_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `SUBSCRIBER_SUBSCRIBE_NEWSPAPER_FK` FOREIGN KEY (`login`) REFERENCES `subscriber` (`login`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `USER_VIEW_USER_FK` FOREIGN KEY (`status_id`) REFERENCES `user_view` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

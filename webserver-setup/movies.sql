CREATE LOGIN applicatie WITH PASSWORD = 'testpassword!Hallo-1244!';
CREATE USER applicatie;
ALTER ROLE db_datareader ADD MEMBER applicatie;
ALTER ROLE db_datawriter ADD MEMBER applicatie;
ALTER DATABASE [Movies] SET MULTI_USER;
GO
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO

/****** Object:  Table [dbo].[Contract]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Contract](
	[contract_type] [varchar](10) NOT NULL,
	[price_per_month] [numeric](5, 2) NOT NULL,
	[discount_percentage] [numeric](2, 0) NOT NULL,
 CONSTRAINT [PK_Contract] PRIMARY KEY 
(
	[contract_type] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Country]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Country](
	[country_name] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Country] PRIMARY KEY 
(
	[country_name] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Customer]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Customer](
	[customer_mail_address] [varchar](255) NOT NULL,
	[admin] [integer] NOT NULL,
	[lastname] [varchar](50) NOT NULL,
	[firstname] [varchar](50) NOT NULL,
	[payment_method] [varchar](10) NOT NULL,
	[payment_card_number] [varchar](30) NOT NULL,
	[contract_type] [varchar](10) NOT NULL,
	[subscription_start] [date] NOT NULL,
	[subscription_end] [date] NULL,
	[user_name] [varchar](30) NOT NULL,
	[password] [varchar](255) NOT NULL,
	[country_name] [varchar](50) NOT NULL,
	[gender] [char](1) NULL,
	[birth_date] [date] NULL,
 CONSTRAINT [PK_Customer] PRIMARY KEY 
(
	[customer_mail_address] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Genre]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Genre](
	[genre_name] [varchar](50) NOT NULL,
	[description] [varchar](255) NULL,
 CONSTRAINT [PK_Genre] PRIMARY KEY 
(
	[genre_name] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Movie]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Movie](
	[movie_id] [int] NOT NULL,
	[title] [varchar](255) NOT NULL,
	[duration] [int] NULL,
	[description] [varchar](255) NULL,
	[publication_year] [int] NULL,
	[cover_image] [varchar](255) NULL,
	[previous_part] [int] NULL,
	[price] [numeric](5, 2) NOT NULL,
	[trailer] [varchar](255) NULL,
 CONSTRAINT [PK_Movie_1] PRIMARY KEY 
(
	[movie_id] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Movie_Cast]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Movie_Cast](
	[movie_id] [int] NOT NULL,
	[person_id] [int] NOT NULL,
	[role] [varchar](255) NOT NULL,
 CONSTRAINT [PK_Movie_Cast] PRIMARY KEY 
(
	[movie_id] ASC,
	[person_id] ASC,
	[role] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Movie_Director]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Movie_Director](
	[movie_id] [int] NOT NULL,
	[person_id] [int] NOT NULL,
 CONSTRAINT [PK_Movie_Directors] PRIMARY KEY 
(
	[movie_id] ASC,
	[person_id] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Movie_Genre]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Movie_Genre](
	[movie_id] [int] NOT NULL,
	[genre_name] [varchar](50) NOT NULL,
 CONSTRAINT [PK_Movie_Genre] PRIMARY KEY 
(
	[movie_id] ASC,
	[genre_name] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Payment]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Payment](
	[payment_method] [varchar](10) NOT NULL,
 CONSTRAINT [PK_Payment] PRIMARY KEY 
(
	[payment_method] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Person]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Person](
	[person_id] [int] NOT NULL,
	[lastname] [varchar](50) NOT NULL,
	[firstname] [varchar](50) NOT NULL,
	[gender] [char](1) NULL,
 CONSTRAINT [PK_Person] PRIMARY KEY 
(
	[person_id] ASC
)
) ON [PRIMARY]
GO
/****** Object:  Table [dbo].[Watchhistory]    Script Date: 19/11/2021 16:06:21 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Watchhistory](
	[movie_id] [int] NOT NULL,
	[customer_mail_address] [varchar](255) NOT NULL,
	[watch_date] [date] NOT NULL,
	[price] [numeric](5, 2) NOT NULL,
	[invoiced] [bit] NOT NULL,
 CONSTRAINT [PK_Movie_Watchhistory_1] PRIMARY KEY 
(
	[movie_id] ASC,
	[customer_mail_address] ASC,
	[watch_date] ASC
)
) ON [PRIMARY]
GO

INSERT [dbo].[Contract] ([contract_type], [price_per_month], [discount_percentage]) VALUES (N'Basic', CAST(4.00 AS Numeric(5, 2)), CAST(0 AS Numeric(2, 0)))
INSERT [dbo].[Contract] ([contract_type], [price_per_month], [discount_percentage]) VALUES (N'Premium', CAST(5.00 AS Numeric(5, 2)), CAST(20 AS Numeric(2, 0)))
INSERT [dbo].[Contract] ([contract_type], [price_per_month], [discount_percentage]) VALUES (N'Pro', CAST(6.00 AS Numeric(5, 2)), CAST(40 AS Numeric(2, 0)))

INSERT [dbo].[Country] ([country_name]) VALUES (N'Nederland')
INSERT [dbo].[Country] ([country_name]) VALUES (N'Belgie')
INSERT [dbo].[Country] ([country_name]) VALUES (N'Duitsland')

INSERT [dbo].[Genre] ([genre_name], [description]) VALUES (N'Action', N'Description of Action')
INSERT [dbo].[Genre] ([genre_name], [description]) VALUES (N'Drama', N'Description of Drama')
INSERT [dbo].[Genre] ([genre_name], [description]) VALUES (N'Science Fiction', N'Description of Science Fiction')
INSERT [dbo].[Genre] ([genre_name], [description]) VALUES (N'Comedy', N'Description of Comedy')

INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (371, N'Ghostbusters', 116, N'New York wordt bedreigd door een plaag van gevaarlijke geesten. Vier heldhaftige dames slaan de handen in elkaar om op de spoken te jagen.', 2016, 'ghostbusters.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (372, N'Wheres Waldo', 8, N'Gebaseerd op het Wheres Waldo-personage, maar met een horror-twist. Jij vindt hem niet, hij vindt jou.', 2017, 'whereswaldo.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (373, N'The Matrix', 136, N'Computerhacker Thomas A. Anderson komt op een vreemde manier in contact met Morpheus. Hij leidt Thomas binnen in de echte, maar ongekende wereld. De wereld die we kennen is volgens Morpheus een virtuele wereld, de Matrix genaamd.', 1999, 'matrix.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (374, N'Shawshank Redemption', 142, N'Andy Dufresne en Ellis Boyd "Red" Redding zijn twee lang gestrafte gevangenen in de Shawshank gevangenis. Ze overleven de sadistische daden van directeur Samuel Norton waarna voor beiden een soort verlossing wacht.', 1994, 'shawshank.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (375, N'Escape from Alcatraz', 112, N'Frank Morris, een crimineel die bekend staat om het feit dat hij makkelijk ontsnapt, wordt vastgezet op Alcatraz en besluit dat hij daar niet wil blijven. Samen met twee broers maakt hij een ontsnappingsplan.', 1979, 'escapefromalcatraz.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (376, N'The Green Mile', 189, N'In de jaren 30 ontwikkelt cipier Paul Edgecomb een bijzondere band met een zwarte gevangene die vastzit voor de verkrachting en moord op twee meisjes, en ter dood veroordeeld is. Paul denkt dat de man over een bovennatuurlijke gave beschikte.', 1999, 'greenmile.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (377, N'Spider-Man 1', 121, N'Nadat student Peter Parker gebeten wordt door een radioactieve spin, krijgt hij superkrachten. Hij moet snel aan zijn nieuwe kracht wennen, want hij zal het moeten opnemen tegen de maniakale Green Goblin.', 2002, 'spiderman1.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (378, N'Spider-Man 2', 127, N'Peter Parker heeft de grootste moeite om het hoofd boven water te houden. Naast al zijn persoonlijke problemen krijgt Peter als Spider-Man te maken met Doctor Octopus.', 2004, 'spiderman2.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (379, N'Spider-Man 3', 139, N'Het pak van Peter Parker wordt zwart en haalt het slechtste in hem naar boven. Ook moet Peter het opnemen tegen Sandman en Venom.', 2007, 'spiderman3.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (380, N'The Amazing Spider-Man 1', 136, N'Peter Parker gebruikt zijn nieuwe superkrachten om de misdaad te bestrijden als Spider-Man. Tegelijekrtijd worstelt hij met zijn verleden en de mysterieuze verdwijning van zijn ouders.', 2012, 'amazingspiderman1.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (381, N'The Amazing Spider-Man 2', 142, N'Peter Parker voelt zich goed in zijn nieuwe rol als held en verdeelt zijn tijd tussen Gwen Stacy en het beschermen van New York tegen misdadigers. Zijn grootste strijd komt wanneer Electro verschijnt.', 2014, 'amazingspiderman2.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (382, N'The Amazing Spider-Man 3', 137, N'Binnenkort', 2023, 'amazingspiderman3.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (383, N'Bee Movie', 91, N'Barry is een drukke bij die ontdekt dat de mensen zijn honing stelen. Hij klaagt samen met bloemist Vanessa Bloome de mensheid aan.', 2007, 'beemovie.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (384, N'Borat', 84, N'Een verslaggever uit Kazachstan reist naar Amerika om te ontdekken waarom het zon groots land is. Samen met zijn regisseur reist hij door Amerika en weet hij haast iedereen wel te beledigen.', 2006, 'borat.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (385, N'Bruno', 81, N'Een homoseksuele Oostenrijkse fashionista brengt zijn show naar Amerika. Daarmee doet hij een hoop stof opwaaien, en hij belandt continu in vreemde situaties.', 2009, 'bruno.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')
INSERT [dbo].[Movie] ([movie_id], [title], [duration], [description], [publication_year], [cover_image], [previous_part], [price], [trailer]) VALUES (386, N'The Dictator', 83, N'Aladeen is een rijke en meedogenloze dictator, die wordt gegijzeld. Hij probeert koste wat het kost te voorkomen dat zijn land in de verkeerde handen valt.', 2012, 'thedictator.jpg', NULL, CAST(2.50 AS Numeric(5, 2)), 'trailer.mp4')

INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (371, 1232, N'[Abby Yates]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (372, 1233, N'[Waldo]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (373, 1234, N'[Neo]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (374, 1237, N'[Andy Dufresne]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (375, 1238, N'[Frank Morris]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (376, 1239, N'[Paul Edgecomb]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (377, 1231, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (378, 1231, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (379, 1231, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (380, 1236, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (381, 1236, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (382, 1236, N'[Spider-Man]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (383, 1240, N'[Barry Bee Benson]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (384, 1235, N'[Borat]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (385, 1235, N'[Bruno]')
INSERT [dbo].[Movie_Cast] ([movie_id], [person_id], [role]) VALUES (386, 1235, N'[Aladeen]')

INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (371, 1244)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (372, 1245)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (373, 1246)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (374, 1243)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (375, 1247)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (376, 1243)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (377, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (378, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (379, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (380, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (381, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (382, 1241)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (383, 1240)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (384, 1234)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (385, 1242)
INSERT [dbo].[Movie_Director] ([movie_id], [person_id]) VALUES (386, 1242)

INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (371, N'Science Fiction')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (372, N'Horror')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (373, N'Science Fiction')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (374, N'Drama')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (375, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (376, N'Drama')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (377, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (378, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (379, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (380, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (381, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (382, N'Action')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (383, N'Comedy')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (384, N'Comedy')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (385, N'Comedy')
INSERT [dbo].[Movie_Genre] ([movie_id], [genre_name]) VALUES (386, N'Comedy')

INSERT [dbo].[Payment] ([payment_method]) VALUES (N'Amex')
INSERT [dbo].[Payment] ([payment_method]) VALUES (N'Mastercard')
INSERT [dbo].[Payment] ([payment_method]) VALUES (N'Visa')

INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1231, N'Maguire', N'Tobey', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1232, N'McCarthy', N'Melissa', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1233, N'Jordan', N'Julian', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1234, N'Reeves', N'Keanu', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1235, N'Baron Cohen', N'Sacha', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1236, N'Garfield', N'Andrew', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1237, N'Robbins', N'Tim', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1238, N'Eastwood', N'Clint', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1239, N'Hanks', N'Tom', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1240, N'Seinfeld', N'Jerry', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1241, N'Raimi', N'Sam', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1242, N'Charles', N'Larry', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1243, N'Darabont', N'Frank', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1244, N'Feig', N'Paul', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1245, N'Borene', N'Andrew H', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1246, N'Wachowski', N'Lana', NULL)
INSERT [dbo].[Person] ([person_id], [lastname], [firstname], [gender]) VALUES (1247, N'Siegel', N'Don', NULL)

GO
ALTER TABLE [dbo].[Customer]  WITH CHECK ADD  CONSTRAINT [FK_contract_type] FOREIGN KEY([contract_type])
REFERENCES [dbo].[Contract] ([contract_type])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Customer] CHECK CONSTRAINT [FK_contract_type]
GO
ALTER TABLE [dbo].[Customer]  WITH CHECK ADD  CONSTRAINT [FK_country] FOREIGN KEY([country_name])
REFERENCES [dbo].[Country] ([country_name])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Customer] CHECK CONSTRAINT [FK_country]
GO
ALTER TABLE [dbo].[Customer]  WITH CHECK ADD  CONSTRAINT [FK_payment_method] FOREIGN KEY([payment_method])
REFERENCES [dbo].[Payment] ([payment_method])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Customer] CHECK CONSTRAINT [FK_payment_method]
GO
ALTER TABLE [dbo].[Movie]  WITH CHECK ADD  CONSTRAINT [FK_previous_part] FOREIGN KEY([previous_part])
REFERENCES [dbo].[Movie] ([movie_id])
GO
ALTER TABLE [dbo].[Movie] CHECK CONSTRAINT [FK_previous_part]
GO
ALTER TABLE [dbo].[Movie_Cast]  WITH CHECK ADD  CONSTRAINT [FK2_movie_id] FOREIGN KEY([movie_id])
REFERENCES [dbo].[Movie] ([movie_id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Movie_Cast] CHECK CONSTRAINT [FK2_movie_id]
GO
ALTER TABLE [dbo].[Movie_Cast]  WITH CHECK ADD  CONSTRAINT [FK2_person_id] FOREIGN KEY([person_id])
REFERENCES [dbo].[Person] ([person_id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Movie_Cast] CHECK CONSTRAINT [FK2_person_id]
GO
ALTER TABLE [dbo].[Movie_Director]  WITH CHECK ADD  CONSTRAINT [FK_movie_id] FOREIGN KEY([movie_id])
REFERENCES [dbo].[Movie] ([movie_id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Movie_Director] CHECK CONSTRAINT [FK_movie_id]
GO
ALTER TABLE [dbo].[Movie_Director]  WITH CHECK ADD  CONSTRAINT [FK_person_id] FOREIGN KEY([person_id])
REFERENCES [dbo].[Person] ([person_id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO

ALTER TABLE [dbo].[Movie_Director] CHECK CONSTRAINT [FK_person_id]
GO
ALTER TABLE [dbo].[Movie_Genre]  WITH CHECK ADD  CONSTRAINT [FK_genre] FOREIGN KEY([genre_name])
REFERENCES [dbo].[Genre] ([genre_name])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Movie_Genre] CHECK CONSTRAINT [FK_genre]
GO
ALTER TABLE [dbo].[Movie_Genre]  WITH CHECK ADD  CONSTRAINT [FK3_movie_id] FOREIGN KEY([movie_id])
REFERENCES [dbo].[Movie] ([movie_id])
ON UPDATE CASCADE
ON DELETE CASCADE
GO
ALTER TABLE [dbo].[Movie_Genre] CHECK CONSTRAINT [FK3_movie_id]
GO
ALTER TABLE [dbo].[Watchhistory]  WITH CHECK ADD  CONSTRAINT [FK_customer] FOREIGN KEY([customer_mail_address])
REFERENCES [dbo].[Customer] ([customer_mail_address])
ON UPDATE CASCADE
GO
ALTER TABLE [dbo].[Watchhistory] CHECK CONSTRAINT [FK_customer]
GO
ALTER TABLE [dbo].[Watchhistory]  WITH CHECK ADD  CONSTRAINT [FK4_movie_id] FOREIGN KEY([movie_id])
REFERENCES [dbo].[Movie] ([movie_id])
ON UPDATE CASCADE
GO
ALTER TABLE [dbo].[Watchhistory] CHECK CONSTRAINT [FK4_movie_id]
GO


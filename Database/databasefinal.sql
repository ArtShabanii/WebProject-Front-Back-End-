USE [master]
GO

/****** Object:  Database [eLibraryWEB] ******/
CREATE DATABASE [eLibraryWEB]
 CONTAINMENT = NONE
 ON  PRIMARY 
( NAME = N'eLibraryWEB', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\eLibraryWEB.mdf' , SIZE = 8192KB , MAXSIZE = UNLIMITED, FILEGROWTH = 65536KB )
 LOG ON 
( NAME = N'eLibraryWEB_log', FILENAME = N'C:\Program Files\Microsoft SQL Server\MSSQL14.SQLEXPRESS\MSSQL\DATA\eLibraryWEB_log.ldf' , SIZE = 8192KB , MAXSIZE = 2048GB , FILEGROWTH = 65536KB )
GO
ALTER DATABASE [eLibraryWEB] SET COMPATIBILITY_LEVEL = 140
GO
IF (1 = FULLTEXTSERVICEPROPERTY('IsFullTextInstalled'))
begin
EXEC [eLibraryWEB].[dbo].[sp_fulltext_database] @action = 'enable'
end
GO
ALTER DATABASE [eLibraryWEB] SET ANSI_NULL_DEFAULT OFF 
GO
ALTER DATABASE [eLibraryWEB] SET ANSI_NULLS OFF 
GO
ALTER DATABASE [eLibraryWEB] SET ANSI_PADDING OFF 
GO
ALTER DATABASE [eLibraryWEB] SET ANSI_WARNINGS OFF 
GO
ALTER DATABASE [eLibraryWEB] SET ARITHABORT OFF 
GO
ALTER DATABASE [eLibraryWEB] SET AUTO_CLOSE OFF 
GO
ALTER DATABASE [eLibraryWEB] SET AUTO_SHRINK OFF 
GO
ALTER DATABASE [eLibraryWEB] SET AUTO_UPDATE_STATISTICS ON 
GO
ALTER DATABASE [eLibraryWEB] SET CURSOR_CLOSE_ON_COMMIT OFF 
GO
ALTER DATABASE [eLibraryWEB] SET CURSOR_DEFAULT  GLOBAL 
GO
ALTER DATABASE [eLibraryWEB] SET CONCAT_NULL_YIELDS_NULL OFF 
GO
ALTER DATABASE [eLibraryWEB] SET NUMERIC_ROUNDABORT OFF 
GO
ALTER DATABASE [eLibraryWEB] SET QUOTED_IDENTIFIER OFF 
GO
ALTER DATABASE [eLibraryWEB] SET RECURSIVE_TRIGGERS OFF 
GO
ALTER DATABASE [eLibraryWEB] SET  DISABLE_BROKER 
GO
ALTER DATABASE [eLibraryWEB] SET AUTO_UPDATE_STATISTICS_ASYNC OFF 
GO
ALTER DATABASE [eLibraryWEB] SET DATE_CORRELATION_OPTIMIZATION OFF 
GO
ALTER DATABASE [eLibraryWEB] SET TRUSTWORTHY OFF 
GO
ALTER DATABASE [eLibraryWEB] SET ALLOW_SNAPSHOT_ISOLATION OFF 
GO
ALTER DATABASE [eLibraryWEB] SET PARAMETERIZATION SIMPLE 
GO
ALTER DATABASE [eLibraryWEB] SET READ_COMMITTED_SNAPSHOT OFF 
GO
ALTER DATABASE [eLibraryWEB] SET HONOR_BROKER_PRIORITY OFF 
GO
ALTER DATABASE [eLibraryWEB] SET RECOVERY SIMPLE 
GO
ALTER DATABASE [eLibraryWEB] SET  MULTI_USER 
GO
ALTER DATABASE [eLibraryWEB] SET PAGE_VERIFY CHECKSUM  
GO
ALTER DATABASE [eLibraryWEB] SET DB_CHAINING OFF 
GO
ALTER DATABASE [eLibraryWEB] SET FILESTREAM( NON_TRANSACTED_ACCESS = OFF ) 
GO
ALTER DATABASE [eLibraryWEB] SET TARGET_RECOVERY_TIME = 60 SECONDS 
GO
ALTER DATABASE [eLibraryWEB] SET DELAYED_DURABILITY = DISABLED 
GO
ALTER DATABASE [eLibraryWEB] SET QUERY_STORE = OFF
GO
USE [eLibraryWEB]
GO

/****** Object:  Table [dbo].[[Book]]  ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Book](
	[Book_ID] [int] IDENTITY(1,1) NOT NULL,
	[Title] [varchar](100) NOT NULL,
	[Author] [varchar] (500) NOT NULL,
	[Photo] [varchar] (1000) NOT NULL,
	[ReadBook] [varchar] (1000),
	[Category_ID] [int] NOT NULL,
 CONSTRAINT [PK_Book] PRIMARY KEY CLUSTERED 
(
	[Book_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

/****** Object:  Table [dbo].[Category]  ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
CREATE TABLE [dbo].[Category](
	[Category_ID] [int] IDENTITY(1,1) NOT NULL,
	[Category_Name] [varchar](50) NULL,
 CONSTRAINT [PK_Category] PRIMARY KEY CLUSTERED 
(
	[Category_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'We Must Be Brave', N'Frances Liadert', N'Images/dramabook.png', N'../BooksPDF/WeMustBeBrave.pdf', 1)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Romeo and Juliet', N'William Shakespeare', N'Images/dramabook2.png', N'../BooksPDF/RMEOJLET.pdf', 1)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Harry Poter And The Cursed Child', N'J. K. Rowling, Jack Thorne, and John Tiffany', N'Images/dramabook3.png', N'../BooksPDF/HarryPotterandtheCursedChild.pdf', 1)

INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'The Notebook', N'Nicholas Sparks', N'Images/libriromance11.png', N'../BooksPDF/TheNotebook.pdf', 2)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Map of Stars', N'Catherine Law', N'Images/libraromance2.png', N'', 2)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Five Feet Apart', N'Mikki Daughtry, Rachael Lippincott, and Tobias Iaconis', N'Images/libraromance3.png', N'../BooksPDF/Five-Feet-Apart.pdf', 2)

INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'The Age of Augustus', N'Textbook by Werner Eck', N'Images/librahistori1.png', N'', 3)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'World History', N'Natasha Hanes', N'Images/librahistori2.png', N'../BooksPDF/WorldHistoryNatasha.pdf', 3)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'World History', N'Ellis Esler', N'Images/librahistori3.png', N'', 3)

INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Long Walk of Freedom', N'Nelson Mandela', N'Images/libribiography4.png', N'../BooksPDF/the-autobiography-of-nelson-mandela.pdf', 4)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'The Life, Lessons & Rules For Success', N'Steve Jobs', N'Images/librabiografi2.png', N'', 4)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'Mother Teresa', N'Kathryn Spink', N'Images/libribiography3.png', N'../BooksPDF/Mother-Teresa.pdf', 4)

INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'The Last Astronaut', N'David Wellington', N'Images/librafantashkence.png', N'../BooksPDF/TheLastAstronautbyDavidWellington.pdf', 5)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'To Be Taught, If Fortunate', N'Becky Chambers', N'Images/librafantashkence1.png', N'', 5)
INSERT [dbo].[Book] ([Title], [Author], [Photo], [ReadBook], [Category_ID]) VALUES (N'The Calculating Stars', N'Mary Robinette Kowal', N'Images/librafantashkence2.png', N'', 5)



INSERT [dbo].[Category] ([Category_Name]) VALUES (N'Drame')
INSERT [dbo].[Category] ([Category_Name]) VALUES (N'Romace')
INSERT [dbo].[Category] ([Category_Name]) VALUES (N'History')
INSERT [dbo].[Category] ([Category_Name]) VALUES (N'Biography')
INSERT [dbo].[Category] ([Category_Name]) VALUES (N'Sci-Fi')
SET IDENTITY_INSERT [dbo].[Category] OFF

ALTER TABLE [dbo].[Book]  WITH CHECK ADD  CONSTRAINT [FK_Book_Category] FOREIGN KEY([Category_ID])
REFERENCES [dbo].[Category] ([Category_ID])
GO
ALTER TABLE [dbo].[Book] CHECK CONSTRAINT [FK_Book_Category]
GO

CREATE TABLE [dbo].[Useri](
	[User_ID] [int] IDENTITY(1,1) NOT NULL,
	[Name] [varchar](250) NOT NULL,
	[Username] [varchar](50) NOT NULL,
	[Email] [varchar](50) NOT NULL,
	[Password] [varchar](550) NOT NULL,
	[RoleID] [int] NOT NULL,
 CONSTRAINT [PK_Useri] PRIMARY KEY CLUSTERED 
(
	[User_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

CREATE TABLE [dbo].[Role](
	[Role_ID] [int] IDENTITY(1,1) NOT NULL,
	[Name] [varchar](50) NULL,
 CONSTRAINT [PK_Role] PRIMARY KEY CLUSTERED 
(
	[Role_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

INSERT [dbo].[Useri] ([Name], [Username], [Email], [Password], [RoleID]) VALUES (N'Art Shabani', N'art.shabani', N'artshabani2000@gmail.com', N'arti123.', 1)
INSERT [dbo].[Useri] ([Name], [Username], [Email], [Password], [RoleID]) VALUES (N'Erion Bekteshi', N'erion.bekteshi', N'erionbekteshi3@gmail.com', N'erioni123.', 1)
INSERT [dbo].[Useri] ([Name], [Username], [Email], [Password], [RoleID]) VALUES (N'Ibrahim Nimani', N'ibrahim.nimani', N'in43857@ubt-uni.net', N'ibrahim123', 1)
INSERT [dbo].[Useri] ([Name], [Username], [Email], [Password], [RoleID]) VALUES (N'User User', N'user.user', N'user@gmail.com', N'user123.', 2)
INSERT [dbo].[Useri] ([Name], [Username], [Email], [Password], [RoleID]) VALUES (N'Filan Fisteku',N'filan.fisteku', N'filan.fisteku@gmail.com', N'filani12345', 2)

INSERT [dbo].[Role] ([Name]) VALUES (N'Admin')
INSERT [dbo].[Role] ([Name]) VALUES (N'User')

ALTER TABLE [dbo].[Useri]  WITH CHECK ADD  CONSTRAINT [FK_User_Role] FOREIGN KEY([RoleID])
REFERENCES [dbo].[Role] ([Role_ID])
GO
ALTER TABLE [dbo].[Useri] CHECK CONSTRAINT [FK_User_Role]
GO

CREATE TABLE [dbo].[Contact](
	[Contact_ID] [int] IDENTITY(1,1) NOT NULL,
	[UserID] [int] NOT NULL,
	[Message] [varchar] (1000) NOT NULL,
 CONSTRAINT [PK_Contact] PRIMARY KEY CLUSTERED 
(
	[Contact_ID] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]
GO

ALTER TABLE [dbo].[Contact]  WITH CHECK ADD  CONSTRAINT [FK_User_Contact] FOREIGN KEY([UserID])
REFERENCES [dbo].[Useri] ([User_ID])
GO
ALTER TABLE [dbo].[Contact] CHECK CONSTRAINT [FK_User_Contact]
GO

USE [master]
GO
ALTER DATABASE [eLibraryWEB] SET  READ_WRITE 
GO





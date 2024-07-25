    -- table creation and use database query in MYSQL
    create database online_fitnes_trainer;
    use online_fitnes_trainer;
    
    -- table creation querys
    -- Table: item
    CREATE TABLE IF NOT EXISTS item (
    INO INT NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    description TEXT,
    category VARCHAR(50),
    rate INT DEFAULT 0,
    price DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0,
  	CONSTRAINT item_pk PRIMARY KEY(INO)
    );
    
    -- Table: workout_plan
    CREATE TABLE IF NOT EXISTS workout_plan(
    WPNO INT NOT NULL UNIQUE,
    description TEXT,
    Diffcult_level VARCHAR(50) NOT NULL,
    duration VARCHAR(50) NOT NULL,
    CONSTRAINT workout_plan_pk PRIMARY KEY(WPNO)
    );
  
  -- Table: member
    CREATE TABLE IF NOT EXISTS member(
    MID INT NOT NULL UNIQUE,
    name VARCHAR(50) NOT NULL,
    gender VARCHAR(15),
    address TEXT,
    dob DATE,
    email VARCHAR(50) UNIQUE,
    height INT,
    weight INT,
    membership_status VARCHAR(25) DEFAULT 'active',
    WPNO INT,
    CONSTRAINT member_pk PRIMARY KEY (MID),
    CONSTRAINT workout_plan_fk FOREIGN KEY (WPNO) REFERENCES workout_plan(WPNO)
    );
    
    -- Table: cart
    CREATE TABLE IF NOT EXISTS cart(
    INO INT NOT NULL,
    MID INT NOT NULL,
    qty INT DEFAULT 1,
    CONSTRAINT cart_pk PRIMARY KEY (INO,MID),
    CONSTRAINT cart_fk1 FOREIGN KEY (INO) REFERENCES item(INO),
    CONSTRAINT cart_fk2 FOREIGN KEY (MID) REFERENCES member(MID)
    );
     
     -- Table: member_contact
     CREATE TABLE IF NOT EXISTS member_contact(
     MID INT NOT NULL,
     contact_no VARCHAR(20) NOT NULL,
     CONSTRAINT member_contact PRIMARY KEY (MID,contact_no),
     CONSTRAINT member_contact_fk FOREIGN KEY (mid) REFERENCES member(MID)
     );
     
     -- Table: payment_method
     CREATE TABLE IF NOT EXISTS payment_method(
     PID INT NOT NULL UNIQUE,
     name varchar(50),
     description TEXT,
     applies BOOLEAN DEFAULT 0,
     CONSTRAINT payment_method_pk PRIMARY KEY (PID)
     );
     
     -- Table: `order`
     CREATE TABLE IF NOT EXISTS `order` (
     OID int NOT NULL UNIQUE,
     date_time DATETIME DEFAULT CURRENT_TIMESTAMP,
     delivery_address TEXT NOT NULL,
     QTY INT NOT NULL,
     total_amount DECIMAL(10,2) NOT NULL,
     status VARCHAR(20) DEFAULT 'pending',
     MID INT NOT NULL,
     PID INT NOT NULL,
     CONSTRAINT order_pk PRIMARY KEY (OID),
     CONSTRAINT order_fk FOREIGN KEY (MID) REFERENCES member(MID),
     CONSTRAINT order_fk_2 FOREIGN KEY (PID) REFERENCES payment_method (PID)
     );
     
    -- Table: item_order
     CREATE TABLE IF NOT EXISTS item_order(
     INO INT NOT NULL,
     OID INT NOT NULL,
     Price float,
     qty INT,
     CONSTRAINT item_order_pk PRIMARY KEY (INO,OID),
     CONSTRAINT item_order_ino_fk FOREIGN KEY (INO) REFERENCES item(INO),
     CONSTRAINT item_order_oid_fk FOREIGN KEY (OID) REFERENCES `order`(OID)
      );   
     
     -- Table: workout
     CREATE TABLE IF NOT EXISTS workout(
     WID INT NOT NULL UNIQUE,
     workout_name VARCHAR(50) NOT NULL,
     repetition INT,
     CONSTRAINT workout_pk PRIMARY KEY (WID)
     );
     
     -- Table: workout_plan_workout
     CREATE TABLE IF NOT EXISTS workout_plan_workout(
     WPNO INT NOT NULL,
     WID INT NOT NULL,   
     CONSTRAINT workout_plan_workout_pk PRIMARY KEY (WPNO,WID),
     CONSTRAINT workout_plan_workout_wpno_fk FOREIGN KEY (WPNO) REFERENCES workout_plan(WPNO),
     CONSTRAINT workout_plan_workout_wid_fk FOREIGN KEY (WID) REFERENCES workout(WID)
     );
     
     -- Table: webmaster
     CREATE TABLE IF NOT EXISTS webmaster(
     WMID INT NOT NULL,
     name  VARCHAR(50),  
     email VARCHAR(50) UNIQUE,
     address TEXT,
     access_level  VARCHAR(20) ,  
     password  VARCHAR(20),
     CONSTRAINT webmaster_pk PRIMARY KEY (WMID)
     );
     
     -- Table: webmaster_contact
     CREATE TABLE IF NOT EXISTS webmaster_contact(
     WMID INT NOT NULL,
     contact_no VARCHAR(50) NOT NULL UNIQUE,
     CONSTRAINT webmaster_pk PRIMARY KEY (WMID,contact_no), 
     CONSTRAINT webmaster_contact_fk FOREIGN KEY (WMID) REFERENCES webmaster(WMID)
     );
     
     -- Table: request
     CREATE TABLE IF NOT EXISTS request(
     RID INT NOT NULL UNIQUE,
     Rtype VARCHAR(50),
     Description Text,
     status BOOLEAN DEFAULT 0,
     MID INT NOT NULL,
     CONSTRAINT request_pk PRIMARY KEY (RID),
     CONSTRAINT request_fk FOREIGN KEY (MID) REFERENCES member(MID)
     );
     
     -- Table: Announcement
     CREATE TABLE IF NOT EXISTS Announcement(
     annID INT,
     annTitle TEXT,
     annMessage TEXT,
     CONSTRAINT Announcement_pk PRIMARY KEY (annID)
     );
     
     -- Table: register
	CREATE TABLE `register` (
	  `name` varchar(40) NOT NULL,
	  `NIC` varchar(10) NOT NULL,
	  `dob` date NOT NULL,
	  `email` varchar(20) NOT NULL,
	  `gender` varchar(10) NOT NULL,
	  `user_name` varchar(10) NOT NULL,
	  `password` varchar(8) NOT NULL
	);

	-- Table: feedback
	CREATE TABLE `feedback` (
	  `feedback_id` int(11) NOT NULL,
	  `user_name` varchar(10) NOT NULL,
	  `age` int(11) NOT NULL,
	  `gender` varchar(10) NOT NULL,
	  `question1` varchar(20) NOT NULL,
	  `question2` varchar(20) NOT NULL,
	  `question3` varchar(20) NOT NULL,
	  `feedback` varchar(40) NOT NULL
	);

	CREATE TABLE `faq` (
	  `faq_id` int(11) NOT NULL,
	  `question` varchar(40) NOT NULL,
	  `answer` varchar(40) NOT NULL
	);
     


     -- insert item table data 
     -- Inserting values into the 'item' table
     INSERT INTO item VALUES (1, 'ABE – ALL BLACK EVERYTHING PRE-WORKOUT', 
				'ABE is the UK\'s best selling pre-workout delivers a unique blend of the most researched 
				ergogenic aids and performance ingredients to fuel your physical performance, reduce tiredness 
				& fatigue* and to enhance focus throughout your training session.', 'subriment', 3.3, 11000, 12);
     INSERT INTO item VALUES (2,'NUTREX CREATINE DRIVE 300G',
				'CREATINE DRIVE™ contains pure, safe and effective creatine monohydrate. Creatine monohydrate is 
				usually taken daily in multiple gram amounts over a fairly lengthy period. For this reason, the quality 
				of your creatine should be a critical factor in selecting a product. Your creatine can look like pure,
				white powder, but it can still be of inferior quality, containing toxicologically harmful impurities. 
				Our creatine monohydrate satisfies even the most discriminating consumer’s demands for quality, safety, and efficacy.
				Daily consumption of 1-2 small doses of CREATINE DRIVE rapidly supplies your muscles with creatine 
				leading to an increase in muscle mass and greater training capacity with noticeable strength gains. 
				CREATINE DRIVE is unflavored and can easily be added to any beverage of your choice.','subriment',2.3,9000,9);
     INSERT INTO item VALUES (3,'RONNIE COLEMAN PRE XS 30 SERVINGS',
				'Pre XS is an extreme energy and focus pre workout powder with clinically studied ingredients designed to help you crush your workout but NOT your bank account! Plus, the flavors are downright ridiculous.
				200mg Caffeine
				25mg TeaCrine
				550mg Choline
				1,600mg Beta-Alanine
				Made in the U.S.A
				cGMP Certifications
				Contains TeaCrine, which has been clinically studied to boost mental and physical energy without jitters or 
				crash while supporting a positive mood and motivation. Pairs perfectly with and enhances the effects of caffeine.
				Carnosyn beta alanine is another clinically studied ingredient shown to combat muscle fatigue while increasing 
				athletic peak performance and supporting muscle recovery.
				BioPerine is a clinically studied absorption enhancer that increases the bioavailability of nutrients so that 
				you can be sure that you are absorbing everything and getting the most out of your pre workout.','subriment',2.3,7500,2);
     INSERT INTO item VALUES (4,'RONNIE COLEMAN WHEY-XS 5LBS',
				'Ronnie Coleman Signature Series Whey XS is changing the protein 
				game by bringing you a delicious high quality whey protein powder at an affordable price.  Everyone knows 
				that protein is what helps you build muscle and achieve your physique goals. Everyone also knows that Whey 
				is the preferred source of protein. Whey XS delivers 22 quality grams of protein per scoop at a price that makes sense for you.
				High Quality Whey Protein – Contains 22G of protein per scoop with only 2G of fat and 4G of sugar
				Muscle Recovery – Whey XS contains 3.7G of glutamine, 4G BCAA’s and 8.6G of EAA’s per scoop to help your muscles recover
				Cost Effective – Whey XS was built to deliver a high quality protein powder that doesn’t require financing to buy it
				Premium Flavor – Despite Whey XS being an affordable whey protein powder we still used our most premium flavoring system','subriment',3.3,21000,8);
     INSERT INTO item VALUES (5,'NITROTECH 100% WHEY GOLD 2 LBS',
				'Incredible Pure Protein Powder Featuring Whey Protein Peptides And Whey Protein Isolate
				Superior whey protein peptides for better musclebuilding
				100% whey – no added active ingredients
				Limited-time bonus sizes – Get 6 lbs. for the price of 5 lbs.','subriment',4.5,16500,15);
  
     -- insert workout_plan table values    

     -- Inserting values into the 'workout_plan' table
    INSERT INTO workout_plan VALUES (1,'male','begginer','2 week');
    INSERT INTO workout_plan VALUES (2,'femail','begginer','2 week');
    INSERT INTO workout_plan VALUES (3,'male','intermidiant','2 month');
    INSERT INTO workout_plan VALUES (4,'femail','intermidiant','2 month'); 
    INSERT INTO workout_plan VALUES (5,'male','advance','3 month'); 
    INSERT INTO workout_plan VALUES (6,'femail','advance','3 month'); 

     -- Inserting values into the 'member' table
     INSERT INTO member VALUES(1001,'Nimal Perera','male','colombo','1999-03-07','nimalp123@gmail.com',165,70,'Active',3);
     INSERT INTO member VALUES(1002,'Sunil Dias','male','colombo','1976-04-23','sumild234@gmail.com',160,68,'Active',3);
     INSERT INTO member VALUES(1003,'Kasun Fernando','male','Galle','1989-05-23','kasunf45@gmail.com',155,65,'Active',1);
     INSERT INTO member VALUES(1004,'Chamari Akarsha','female','matara','1994-08-17','chamaria67@gmail.com',161,59,'Active',2);
     INSERT INTO member VALUES(1005,'Thushari Devisha','female','kandy','2000-10-29','thusharidev75@gmail.com',156,47,'Inactive',6);

     -- Inserting values into the 'cart' table
     INSERT INTO cart VALUES(1,1001,1);
     INSERT INTO cart VALUES(2,1003,2);
     INSERT INTO cart VALUES(2,1004,1);
     INSERT INTO cart VALUES(5,1002,1);
     INSERT INTO cart VALUES(3,1001,1);

     -- Inserting values into the 'member_contact' table
     INSERT INTO member_contact VALUES(1001,'0772345678');
     INSERT INTO member_contact VALUES(1001,'0782345679');
     INSERT INTO member_contact VALUES(1002,'0915467546');
     INSERT INTO member_contact VALUES(1002,'0773498712');
     INSERT INTO member_contact VALUES(1003,'0745489317');
     INSERT INTO member_contact VALUES(1004,'0746574534');
     INSERT INTO member_contact VALUES(1005,'0714546567');
     
      -- Inserting values into the 'payment_method' table
     INSERT INTO payment_method VALUES (6001,'master card','HNB bank in Hikkaduwa',1);
     INSERT INTO payment_method VALUES (6002,'visa card','HNB bank in Hikkaduwa',1);
     INSERT INTO payment_method VALUES (6003,'master card','BOC bank in Galle',1);
     INSERT INTO payment_method VALUES (6004,'pay pale','Rockstar company payple account',1);
     INSERT INTO payment_method VALUES (6005,'google pay','',0);  

     -- Inserting values into the 'order' table
     INSERT INTO `order` VALUES(2001,'2023-05-23 10:30:00','Tangalle',1,11000,'pending','1001','6001');
     INSERT INTO `order` VALUES(2002,'2023-04-22 11:45:00','Rathnapura',2,16500,'delivered',1002,'6002');
     INSERT INTO `order` VALUES(2003,'2023-05-23 11:00:00','Kaluthara',1,11000,'pending',1001,'6001');
     INSERT INTO `order` VALUES(2004,'2023-05-24 11:30:00','Hambanthota',2,42000,'pending',1003,'6001');
     INSERT INTO `order` VALUES (2005,'2023-05-25 08:30:00','Katharagama',1,16500,'pending',1004,'6001');

     -- Inserting values into the 'item_order' table
     INSERT INTO item_order VALUES (1,2001,11000,1);
     INSERT INTO item_order VALUES (2,2002,9000,1);
     INSERT INTO item_order VALUES (3,2002,7500,1);
     INSERT INTO item_order VALUES (2,2003,9000,1);
     INSERT INTO item_order VALUES (4,2004,21000,2);
     INSERT INTO item_order VALUES (5,2005,16500,1);

     -- Inserting values into the 'workout' table
     INSERT INTO workout VALUES (1,'Chest Day',10);
     INSERT INTO workout VALUES (2,'Legs and Glutes',10);
     INSERT INTO workout VALUES (3,'Back and Biceps',10);
     INSERT INTO workout VALUES (4,'Shoulders and Abs',10);
     INSERT INTO workout VALUES (5,'Cardio and Core',10);
     INSERT INTO workout VALUES (6,'push up',25);

     -- Inserting values into the 'workout_plan_workout' table
     INSERT INTO workout_plan_workout VALUES (1,1);
     INSERT INTO workout_plan_workout VALUES (1,2);
     INSERT INTO workout_plan_workout VALUES (2,2);
     INSERT INTO workout_plan_workout VALUES (3,3);
     INSERT INTO workout_plan_workout VALUES (3,4);
     INSERT INTO workout_plan_workout VALUES (4,5);
     INSERT INTO workout_plan_workout VALUES (4,6);
     INSERT INTO workout_plan_workout VALUES (5,1);
     INSERT INTO workout_plan_workout VALUES (5,2);

     -- Inserting values into the 'webmaster' table
     INSERT INTO webmaster VALUES (4001,"saman udarasinhe","saman123@gmail.com","colambo7","admin","saman@123");
     INSERT INTO webmaster VALUES (4002,"kasun chamara","kasunchamara45@gmail.com","gampaha","manager","kasun@123");
     INSERT INTO webmaster VALUES (4003,"pasindu chathuranga","pasindu97@gmail.com","galle","admin","pasindu@123");
     INSERT INTO webmaster VALUES (4004,"pubudu mihiranga","pubudu78@gmail.com","galle","manager","pubudu@123");
     INSERT INTO webmaster VALUES (4005,"dineka ruwanthi","dineka767@gmail.com","kurunagala","manager","dineka@123");

      -- Inserting values into the 'webmaster_contact' table
     INSERT INTO webmaster_contact VALUES (4001,"0743487430");
     INSERT INTO webmaster_contact VALUES (4001,"0776384388");
     INSERT INTO webmaster_contact VALUES (4002,"0773829323");
     INSERT INTO webmaster_contact VALUES (4003,"0778754575");
     INSERT INTO webmaster_contact VALUES (4003,"0773864863");
     INSERT INTO webmaster_contact VALUES (4004,"0715635757");
     INSERT INTO webmaster_contact VALUES (4005,"0789786564");

      -- Inserting values into the 'request' table
     INSERT INTO request VALUES (5001,"change password","",0,1001);
     INSERT INTO request VALUES (5002,"change password","",1,1003);
     INSERT INTO request VALUES (5003,"change sedule","",0,1001);
     INSERT INTO request VALUES (5004,"change password","",0,1002);
     INSERT INTO request VALUES (5005,"change sedule","",1,1004);
     INSERT INTO request VALUES (5006,"change password","",0,1004);
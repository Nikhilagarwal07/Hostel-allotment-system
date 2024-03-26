CREATE TABLE StudentWing (
  student_id VARCHAR(20) NOT NULL PRIMARY KEY,
   student_name VARCHAR(255),
  student_wingId INT,
  Year_of_study INT,
  preference_of_hostel VARCHAR(255)
);

CREATE TABLE Allotment (
  Hostel_name VARCHAR(255),
  Room_no INT,
  hostel_wingId INT,
  student_id VARCHAR(20) NOT NULL,
  student_name VARCHAR(255),
  Year_of_study INT,
  PRIMARY KEY (Room_no, student_id),
  FOREIGN KEY (student_id) REFERENCES StudentWing(student_id)
);
CREATE TABLE Hostel(
  Hostel_name VARCHAR(255),
  Room_no INT,
  hostel_wingId INT,
  no_of_unoccupied_beds INT,
  PRIMARY KEY (Hostel_name, hostel_wingId,Room_no)
  );

CREATE TABLE Count (
  Hostel_name VARCHAR(255) PRIMARY KEY,
  count_of_rooms_occupied INT
);

CREATE TABLE admin_users(
id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
username VARCHAR(50) NOT NULL,
password VARCHAR(255) NOT NULL);


INSERT INTO admin_users(id, username,password) VALUES
('1','admin','1234');

INSERT INTO StudentWing (student_id, student_name, student_wingId, Year_of_study, preference_of_hostel)
VALUES 
('2020AXPS0001', 'Raj', 2, 2, 'RAM'),
('2020AXPS0002', 'Aryan', 2, 2, 'RAM'),
('2020AXPS0003', 'Amit', 1, 2, 'RAM'),
('2020AXPS0004', 'Siddharth', 3, 2, 'BUDH'),
('2020AXPS0005', 'Vikram', 2, 2, 'RAM'),
('2020AXPS0006', 'Ankit', 2, 2, 'RAM'),
('2020AXPS0007', 'Rajat', 6, 2, 'BUDH'),
('2020AXPS0008', 'Gaurav', 7, 2, 'BUDH'),
('2020AXPS0009', 'Rahul', 2, 1, 'SR'),
('2020AXPS0010', 'Amitabh', 5, 1, 'SR'),
('2020AXPS0011', 'Alok', 1, 1, 'ASHOK'),
('2020AXPS0012', 'Nishant', 3, 1, 'ASHOK'),
('2020AXPS0013', 'Anurag', 9, 1, 'SR'),
('2020AXPS0014', 'Rohit', 8, 1, 'SR'),
('2020AXPS0015', 'Deepak', 6, 1, 'ASHOK'),
('2020AXPS0016', 'Vineet', 7, 1, 'ASHOK'),
('2020AXPS0017', 'Aditya', 5, 3, 'SHANKAR'),
('2020AXPS0018', 'Karan', 5, 3, 'SHANKAR'),
('2020AXPS0019', 'Arjun', 1, 3, 'VYAS'),
('2020AXPS0020', 'Abhishek', 3, 3, 'VYAS'),
('2020AXPS0021', 'Sushant', 5, 3, 'SHANKAR'),
('2020AXPS0022', 'Rajesh', 5, 3, 'SHANKAR'),
('2020AXPS0023', 'Yash', 6, 3, 'VYAS'),
('2020AXPS0024', 'Harsh', 7, 3, 'VYAS'),
('2020AXPS0025', 'Kunal', 2, 4, 'KRISHNA'),
('2020AXPS0026', 'Utkarsh', 5, 4, 'KRISHNA'),
('2020AXPS0027', 'Sagar', 1, 4, 'GANDHI'),
('2020AXPS0028', 'Ashish', 3, 4, 'GANDHI'),
('2020AXPS0029', 'Mayank', 9, 4, 'KRISHNA'),
('2020AXPS0030', 'Rishabh', 8, 4, 'KRISHNA'),
('2020AXPS0031', 'Sahil', 6, 4, 'GANDHI'),
('2020AXPS0032','Nikhil', 6, 4, 'GANDHI'),
('2020AXPS0033', 'Brijesh', 5, 3, 'SHANKAR'),
('2020AXPS0034', 'Karn', 5, 3, 'SHANKAR'),
('2020AXPS0035', 'Raman', 5, 3, 'SHANKAR'),
('2020AXPS0036', 'Mohit', 5, 3, 'SHANKAR');


CREATE DATABASE hostel_db;
USE hostel_db;

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

-- Inserting students
INSERT INTO StudentWing (student_id, student_name, student_wingId, Year_of_study, preference_of_hostel)
VALUES 
('2020AXPS0001', 'Raj', 2, 2, 'RAM'),
('2020AXPS0002', 'Aryan', 5, 2, 'RAM'),
('2020AXPS0003', 'Amit', 1, 2, 'BUDH'),
('2020AXPS0004', 'Siddharth', 3, 2, 'BUDH'),
('2020AXPS0005', 'Vikram', 9, 2, 'RAM'),
('2020AXPS0006', 'Ankit', 8, 2, 'RAM'),
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
('2020AXPS0017', 'Aditya', 2, 3, 'SHANKAR'),
('2020AXPS0018', 'Karan', 5, 3, 'SHANKAR'),
('2020AXPS0019', 'Arjun', 1, 3, 'VYAS'),
('2020AXPS0020', 'Abhishek', 3, 3, 'VYAS'),
('2020AXPS0021', 'Sushant', 9, 3, 'SHANKAR'),
('2020AXPS0022', 'Rajesh', 8, 3, 'SHANKAR'),
('2020AXPS0023', 'Yash', 6, 3, 'VYAS'),
('2020AXPS0024', 'Harsh', 7, 3, 'VYAS'),
('2020AXPS0025', 'Kunal', 2, 4, 'KRISHNA'),
('2020AXPS0026', 'Utkarsh', 5, 4, 'KRISHNA'),
('2020AXPS0027', 'Sagar', 1, 4, 'GANDHI'),
('2020AXPS0028', 'Ashish', 3, 4, 'GANDHI'),
('2020AXPS0029', 'Mayank', 9, 4, 'KRISHNA'),
('2020AXPS0030', 'Rishabh', 8, 4, 'KRISHNA'),
('2020AXPS0031', 'Sahil', 6, 4, 'GANDHI'),
('2020AXPS0032','Nikhil',6,4,'GANDHI');

Select * FROM StudentWing;


-- Insert Rooms


INSERT INTO Hostel (Hostel_name, Room_no, hostel_wingId, no_of_unoccupied_beds)
VALUES 
  ('SR', 1, 1, 2), ('SR', 2, 1, 2), ('SR', 3, 1, 2), ('SR', 4, 1, 2),
  ('SR', 5, 1, 2), ('SR', 6, 1, 2), ('SR', 7, 1, 2), ('SR', 8, 1, 2),
  ('SR', 9, 2, 2), ('SR', 10, 2, 2), ('SR', 11, 2, 2), ('SR', 12, 2, 2),
  ('SR', 13, 2, 2), ('SR', 14, 2, 2), ('SR', 15, 2, 2), ('SR', 16, 2, 2),
  ('SR', 17, 3, 2), ('SR', 18, 3, 2), ('SR', 19, 3, 2), ('SR', 20, 3, 2),
  ('SR', 21, 3, 2), ('SR', 22, 3, 2), ('SR', 23, 3, 2), ('SR', 24, 3, 2),
  ('SR', 25, 4, 2), ('SR', 26, 4, 2), ('SR', 27, 4, 2), ('SR', 28, 4, 2),
  ('SR', 29, 4, 2), ('SR', 30, 4, 2), ('SR', 31, 4, 2), ('SR', 32, 4, 2),
  ('SR', 33, 5, 2), ('SR', 34, 5, 2), ('SR', 35, 5, 2), ('SR', 36, 5, 2),
  ('SR', 37, 5, 2), ('SR', 38, 5, 2), ('SR', 39, 5, 2), ('SR', 40, 5, 2),
  ('SR', 41, 6, 2), ('SR', 42, 6, 2), ('SR', 43, 6, 2), ('SR', 44, 6, 2),
  ('SR', 45, 6, 2), ('SR', 46, 6, 2), ('SR', 47, 6, 2), ('SR', 48, 6, 2),
  ('SR', 49, 7, 2), ('SR', 50, 7, 2), ('SR', 51, 7, 2), ('SR', 52, 7, 2),
  ('SR', 53, 7, 2), ('SR', 54, 7, 2), ('SR', 55, 7, 2), ('SR', 56, 7, 2),
  ('SR', 57, 8, 2), ('SR', 58, 8, 2), ('SR', 59, 8, 2), ('SR', 60, 8, 2),
  ('SR', 61, 8, 2), ('SR', 62, 8, 2), ('SR', 63, 8, 2), ('SR', 64, 8, 2),
  ('SR', 65, 9, 2), ('SR', 66, 9, 2), ('SR', 67, 9, 2), ('SR', 68, 9, 2),
  ('SR', 69, 9, 2), ('SR', 70, 9, 2), ('SR', 71, 9, 2), ('SR', 72, 9, 2),
  ('SR', 73, 10, 2), ('SR', 74, 10, 2), ('SR', 75, 10, 2), ('SR', 76, 10, 2),
  ('SR', 77, 10, 2), ('SR', 78, 10, 2), ('SR', 79, 10, 2), ('SR', 80, 10, 2),
  
  ('ASHOK', 1, 1, 2), ('ASHOK', 2, 1, 2), ('ASHOK', 3, 1, 2), ('ASHOK', 4, 1, 2),
  ('ASHOK', 5, 1, 2), ('ASHOK', 6, 1, 2), ('ASHOK', 7, 1, 2), ('ASHOK', 8, 1, 2),
  ('ASHOK', 9, 2, 2), ('ASHOK', 10, 2, 2), ('ASHOK', 11, 2, 2), ('ASHOK', 12, 2, 2),
  ('ASHOK', 13, 2, 2), ('ASHOK', 14, 2, 2), ('ASHOK', 15, 2, 2), ('ASHOK', 16, 2, 2),
  ('ASHOK', 17, 3, 2), ('ASHOK', 18, 3, 2), ('ASHOK', 19, 3, 2), ('ASHOK', 20, 3, 2),
  ('ASHOK', 21, 3, 2), ('ASHOK', 22, 3, 2), ('ASHOK', 23, 3, 2), ('ASHOK', 24, 3, 2),
  ('ASHOK', 25, 4, 2), ('ASHOK', 26, 4, 2), ('ASHOK', 27, 4, 2), ('ASHOK', 28, 4, 2),
  ('ASHOK', 29, 4, 2), ('ASHOK', 30, 4, 2), ('ASHOK', 31, 4, 2), ('ASHOK', 32, 4, 2),
  ('ASHOK', 33, 5, 2), ('ASHOK', 34, 5, 2), ('ASHOK', 35, 5, 2), ('ASHOK', 36, 5, 2),
  ('ASHOK', 37, 5, 2), ('ASHOK', 38, 5, 2), ('ASHOK', 39, 5, 2), ('ASHOK', 40, 5, 2),
  ('ASHOK', 41, 6, 2), ('ASHOK', 42, 6, 2), ('ASHOK', 43, 6, 2), ('ASHOK', 44, 6, 2),
  ('ASHOK', 45, 6, 2), ('ASHOK', 46, 6, 2), ('ASHOK', 47, 6, 2), ('ASHOK', 48, 6, 2),
  ('ASHOK', 49, 7, 2), ('ASHOK', 50, 7, 2), ('ASHOK', 51, 7, 2), ('ASHOK', 52, 7, 2),
  ('ASHOK', 53, 7, 2), ('ASHOK', 54, 7, 2), ('ASHOK', 55, 7, 2), ('ASHOK', 56, 7, 2),
  ('ASHOK', 57, 8, 2), ('ASHOK', 58, 8, 2), ('ASHOK', 59, 8, 2), ('ASHOK', 60, 8, 2),
  ('ASHOK', 61, 8, 2), ('ASHOK', 62, 8, 2), ('ASHOK', 63, 8, 2), ('ASHOK', 64, 8, 2),
  ('ASHOK', 65, 9, 2), ('ASHOK', 66, 9, 2), ('ASHOK', 67, 9, 2), ('ASHOK', 68, 9, 2),
  ('ASHOK', 69, 9, 2), ('ASHOK', 70, 9, 2), ('ASHOK', 71, 9, 2), ('ASHOK', 72, 9, 2),
  ('ASHOK', 73, 10, 2), ('ASHOK', 74, 10, 2), ('ASHOK', 75, 10, 2), ('ASHOK', 76, 10, 2),
  ('ASHOK', 77, 10, 2), ('ASHOK', 78, 10, 2), ('ASHOK', 79, 10, 2), ('ASHOK', 80, 10, 2),
  
  ('RAM', 1, 1, 2), ('RAM', 2, 1, 2), ('RAM', 3, 1, 2), ('RAM', 4, 1, 2),
  ('RAM', 5, 1, 2), ('RAM', 6, 1, 2), ('RAM', 7, 1, 2), ('RAM', 8, 1, 2),
  ('RAM', 9, 2, 2), ('RAM', 10, 2, 2), ('RAM', 11, 2, 2), ('RAM', 12, 2, 2),
  ('RAM', 13, 2, 2), ('RAM', 14, 2, 2), ('RAM', 15, 2, 2), ('RAM', 16, 2, 2),
  ('RAM', 17, 3, 2), ('RAM', 18, 3, 2), ('RAM', 19, 3, 2), ('RAM', 20, 3, 2),
  ('RAM', 21, 3, 2), ('RAM', 22, 3, 2), ('RAM', 23, 3, 2), ('RAM', 24, 3, 2),
  ('RAM', 25, 4, 2), ('RAM', 26, 4, 2), ('RAM', 27, 4, 2), ('RAM', 28, 4, 2),
  ('RAM', 29, 4, 2), ('RAM', 30, 4, 2), ('RAM', 31, 4, 2), ('RAM', 32, 4, 2),
  ('RAM', 33, 5, 2), ('RAM', 34, 5, 2), ('RAM', 35, 5, 2), ('RAM', 36, 5, 2),
  ('RAM', 37, 5, 2), ('RAM', 38, 5, 2), ('RAM', 39, 5, 2), ('RAM', 40, 5, 2),
  ('RAM', 41, 6, 2), ('RAM', 42, 6, 2), ('RAM', 43, 6, 2), ('RAM', 44, 6, 2),
  ('RAM', 45, 6, 2), ('RAM', 46, 6, 2), ('RAM', 47, 6, 2), ('RAM', 48, 6, 2),
  ('RAM', 49, 7, 2), ('RAM', 50, 7, 2), ('RAM', 51, 7, 2), ('RAM', 52, 7, 2),
  ('RAM', 53, 7, 2), ('RAM', 54, 7, 2), ('RAM', 55, 7, 2), ('RAM', 56, 7, 2),
  ('RAM', 57, 8, 2), ('RAM', 58, 8, 2), ('RAM', 59, 8, 2), ('RAM', 60, 8, 2),
  ('RAM', 61, 8, 2), ('RAM', 62, 8, 2), ('RAM', 63, 8, 2), ('RAM', 64, 8, 2),
  ('RAM', 65, 9, 2), ('RAM', 66, 9, 2), ('RAM', 67, 9, 2), ('RAM', 68, 9, 2),
  ('RAM', 69, 9, 2), ('RAM', 70, 9, 2), ('RAM', 71, 9, 2), ('RAM', 72, 9, 2),
  ('RAM', 73, 10, 2), ('RAM', 74, 10, 2), ('RAM', 75, 10, 2), ('RAM', 76, 10, 2),
  ('RAM', 77, 10, 2), ('RAM', 78, 10, 2), ('RAM', 79, 10, 2), ('RAM', 80, 10, 2),
  
  ('BUDH', 1, 1, 2), ('BUDH', 2, 1, 2), ('BUDH', 3, 1, 2), ('BUDH', 4, 1, 2),
  ('BUDH', 5, 1, 2), ('BUDH', 6, 1, 2), ('BUDH', 7, 1, 2), ('BUDH', 8, 1, 2),
  ('BUDH', 9, 2, 2), ('BUDH', 10, 2, 2), ('BUDH', 11, 2, 2), ('BUDH', 12, 2, 2),
  ('BUDH', 13, 2, 2), ('BUDH', 14, 2, 2), ('BUDH', 15, 2, 2), ('BUDH', 16, 2, 2),
  ('BUDH', 17, 3, 2), ('BUDH', 18, 3, 2), ('BUDH', 19, 3, 2), ('BUDH', 20, 3, 2),
  ('BUDH', 21, 3, 2), ('BUDH', 22, 3, 2), ('BUDH', 23, 3, 2), ('BUDH', 24, 3, 2),
  ('BUDH', 25, 4, 2), ('BUDH', 26, 4, 2), ('BUDH', 27, 4, 2), ('BUDH', 28, 4, 2),
  ('BUDH', 29, 4, 2), ('BUDH', 30, 4, 2), ('BUDH', 31, 4, 2), ('BUDH', 32, 4, 2),
  ('BUDH', 33, 5, 2), ('BUDH', 34, 5, 2), ('BUDH', 35, 5, 2), ('BUDH', 36, 5, 2),
  ('BUDH', 37, 5, 2), ('BUDH', 38, 5, 2), ('BUDH', 39, 5, 2), ('BUDH', 40, 5, 2),
  ('BUDH', 41, 6, 2), ('BUDH', 42, 6, 2), ('BUDH', 43, 6, 2), ('BUDH', 44, 6, 2),
  ('BUDH', 45, 6, 2), ('BUDH', 46, 6, 2), ('BUDH', 47, 6, 2), ('BUDH', 48, 6, 2),
  ('BUDH', 49, 7, 2), ('BUDH', 50, 7, 2), ('BUDH', 51, 7, 2), ('BUDH', 52, 7, 2),
  ('BUDH', 53, 7, 2), ('BUDH', 54, 7, 2), ('BUDH', 55, 7, 2), ('BUDH', 56, 7, 2),
  ('BUDH', 57, 8, 2), ('BUDH', 58, 8, 2), ('BUDH', 59, 8, 2), ('BUDH', 60, 8, 2),
  ('BUDH', 61, 8, 2), ('BUDH', 62, 8, 2), ('BUDH', 63, 8, 2), ('BUDH', 64, 8, 2),
  ('BUDH', 65, 9, 2), ('BUDH', 66, 9, 2), ('BUDH', 67, 9, 2), ('BUDH', 68, 9, 2),
  ('BUDH', 69, 9, 2), ('BUDH', 70, 9, 2), ('BUDH', 71, 9, 2), ('BUDH', 72, 9, 2),
  ('BUDH', 73, 10, 2), ('BUDH', 74, 10, 2), ('BUDH', 75, 10, 2), ('BUDH', 76, 10, 2),
  ('BUDH', 77, 10, 2), ('BUDH', 78, 10, 2), ('BUDH', 79, 10, 2), ('BUDH', 80, 10, 2),
  
  ('SHANKAR', 1, 1, 2), ('SHANKAR', 2, 1, 2), ('SHANKAR', 3, 1, 2), ('SHANKAR', 4, 1, 2),
  ('SHANKAR', 5, 1, 2), ('SHANKAR', 6, 1, 2), ('SHANKAR', 7, 1, 2), ('SHANKAR', 8, 1, 2),
  ('SHANKAR', 9, 2, 2), ('SHANKAR', 10, 2, 2), ('SHANKAR', 11, 2, 2), ('SHANKAR', 12, 2, 2),
  ('SHANKAR', 13, 2, 2), ('SHANKAR', 14, 2, 2), ('SHANKAR', 15, 2, 2), ('SHANKAR', 16, 2, 2),
  ('SHANKAR', 17, 3, 2), ('SHANKAR', 18, 3, 2), ('SHANKAR', 19, 3, 2), ('SHANKAR', 20, 3, 2),
  ('SHANKAR', 21, 3, 2), ('SHANKAR', 22, 3, 2), ('SHANKAR', 23, 3, 2), ('SHANKAR', 24, 3, 2),
  ('SHANKAR', 25, 4, 2), ('SHANKAR', 26, 4, 2), ('SHANKAR', 27, 4, 2), ('SHANKAR', 28, 4, 2),
  ('SHANKAR', 29, 4, 2), ('SHANKAR', 30, 4, 2), ('SHANKAR', 31, 4, 2), ('SHANKAR', 32, 4, 2),
  ('SHANKAR', 33, 5, 2), ('SHANKAR', 34, 5, 2), ('SHANKAR', 35, 5, 2), ('SHANKAR', 36, 5, 2),
  ('SHANKAR', 37, 5, 2), ('SHANKAR', 38, 5, 2), ('SHANKAR', 39, 5, 2), ('SHANKAR', 40, 5, 2),
  ('SHANKAR', 41, 6, 2), ('SHANKAR', 42, 6, 2), ('SHANKAR', 43, 6, 2), ('SHANKAR', 44, 6, 2),
  ('SHANKAR', 45, 6, 2), ('SHANKAR', 46, 6, 2), ('SHANKAR', 47, 6, 2), ('SHANKAR', 48, 6, 2),
  ('SHANKAR', 49, 7, 2), ('SHANKAR', 50, 7, 2), ('SHANKAR', 51, 7, 2), ('SHANKAR', 52, 7, 2),
  ('SHANKAR', 53, 7, 2), ('SHANKAR', 54, 7, 2), ('SHANKAR', 55, 7, 2), ('SHANKAR', 56, 7, 2),
  ('SHANKAR', 57, 8, 2), ('SHANKAR', 58, 8, 2), ('SHANKAR', 59, 8, 2), ('SHANKAR', 60, 8, 2),
  ('SHANKAR', 61, 8, 2), ('SHANKAR', 62, 8, 2), ('SHANKAR', 63, 8, 2), ('SHANKAR', 64, 8, 2),
  ('SHANKAR', 65, 9, 2), ('SHANKAR', 66, 9, 2), ('SHANKAR', 67, 9, 2), ('SHANKAR', 68, 9, 2),
  ('SHANKAR', 69, 9, 2), ('SHANKAR', 70, 9, 2), ('SHANKAR', 71, 9, 2), ('SHANKAR', 72, 9, 2),
  ('SHANKAR', 73, 10, 2), ('SHANKAR', 74, 10, 2), ('SHANKAR', 75, 10, 2), ('SHANKAR', 76, 10, 2),
  ('SHANKAR', 77, 10, 2), ('SHANKAR', 78, 10, 2), ('SHANKAR', 79, 10, 2), ('SHANKAR', 80, 10, 2),
  
  ('VYAS', 1, 1, 2), ('VYAS', 2, 1, 2), ('VYAS', 3, 1, 2), ('VYAS', 4, 1, 2),
  ('VYAS', 5, 1, 2), ('VYAS', 6, 1, 2), ('VYAS', 7, 1, 2), ('VYAS', 8, 1, 2),
  ('VYAS', 9, 2, 2), ('VYAS', 10, 2, 2), ('VYAS', 11, 2, 2), ('VYAS', 12, 2, 2),
  ('VYAS', 13, 2, 2), ('VYAS', 14, 2, 2), ('VYAS', 15, 2, 2), ('VYAS', 16, 2, 2),
  ('VYAS', 17, 3, 2), ('VYAS', 18, 3, 2), ('VYAS', 19, 3, 2), ('VYAS', 20, 3, 2),
  ('VYAS', 21, 3, 2), ('VYAS', 22, 3, 2), ('VYAS', 23, 3, 2), ('VYAS', 24, 3, 2),
  ('VYAS', 25, 4, 2), ('VYAS', 26, 4, 2), ('VYAS', 27, 4, 2), ('VYAS', 28, 4, 2),
  ('VYAS', 29, 4, 2), ('VYAS', 30, 4, 2), ('VYAS', 31, 4, 2), ('VYAS', 32, 4, 2),
  ('VYAS', 33, 5, 2), ('VYAS', 34, 5, 2), ('VYAS', 35, 5, 2), ('VYAS', 36, 5, 2),
  ('VYAS', 37, 5, 2), ('VYAS', 38, 5, 2), ('VYAS', 39, 5, 2), ('VYAS', 40, 5, 2),
  ('VYAS', 41, 6, 2), ('VYAS', 42, 6, 2), ('VYAS', 43, 6, 2), ('VYAS', 44, 6, 2),
  ('VYAS', 45, 6, 2), ('VYAS', 46, 6, 2), ('VYAS', 47, 6, 2), ('VYAS', 48, 6, 2),
  ('VYAS', 49, 7, 2), ('VYAS', 50, 7, 2), ('VYAS', 51, 7, 2), ('VYAS', 52, 7, 2),
  ('VYAS', 53, 7, 2), ('VYAS', 54, 7, 2), ('VYAS', 55, 7, 2), ('VYAS', 56, 7, 2),
  ('VYAS', 57, 8, 2), ('VYAS', 58, 8, 2), ('VYAS', 59, 8, 2), ('VYAS', 60, 8, 2),
  ('VYAS', 61, 8, 2), ('VYAS', 62, 8, 2), ('VYAS', 63, 8, 2), ('VYAS', 64, 8, 2),
  ('VYAS', 65, 9, 2), ('VYAS', 66, 9, 2), ('VYAS', 67, 9, 2), ('VYAS', 68, 9, 2),
  ('VYAS', 69, 9, 2), ('VYAS', 70, 9, 2), ('VYAS', 71, 9, 2), ('VYAS', 72, 9, 2),
  ('VYAS', 73, 10, 2), ('VYAS', 74, 10, 2), ('VYAS', 75, 10, 2), ('VYAS', 76, 10, 2),
  ('VYAS', 77, 10, 2), ('VYAS', 78, 10, 2), ('VYAS', 79, 10, 2), ('VYAS', 80, 10, 2),
  
  ('KRISHNA', 1, 1, 2), ('KRISHNA', 2, 1, 2), ('KRISHNA', 3, 1, 2), ('KRISHNA', 4, 1, 2),
  ('KRISHNA', 5, 1, 2), ('KRISHNA', 6, 1, 2), ('KRISHNA', 7, 1, 2), ('KRISHNA', 8, 1, 2),
  ('KRISHNA', 9, 2, 2), ('KRISHNA', 10, 2, 2), ('KRISHNA', 11, 2, 2), ('KRISHNA', 12, 2, 2),
  ('KRISHNA', 13, 2, 2), ('KRISHNA', 14, 2, 2), ('KRISHNA', 15, 2, 2), ('KRISHNA', 16, 2, 2),
  ('KRISHNA', 17, 3, 2), ('KRISHNA', 18, 3, 2), ('KRISHNA', 19, 3, 2), ('KRISHNA', 20, 3, 2),
  ('KRISHNA', 21, 3, 2), ('KRISHNA', 22, 3, 2), ('KRISHNA', 23, 3, 2), ('KRISHNA', 24, 3, 2),
  ('KRISHNA', 25, 4, 2), ('KRISHNA', 26, 4, 2), ('KRISHNA', 27, 4, 2), ('KRISHNA', 28, 4, 2),
  ('KRISHNA', 29, 4, 2), ('KRISHNA', 30, 4, 2), ('KRISHNA', 31, 4, 2), ('KRISHNA', 32, 4, 2),
  ('KRISHNA', 33, 5, 2), ('KRISHNA', 34, 5, 2), ('KRISHNA', 35, 5, 2), ('KRISHNA', 36, 5, 2),
  ('KRISHNA', 37, 5, 2), ('KRISHNA', 38, 5, 2), ('KRISHNA', 39, 5, 2), ('KRISHNA', 40, 5, 2),
  ('KRISHNA', 41, 6, 2), ('KRISHNA', 42, 6, 2), ('KRISHNA', 43, 6, 2), ('KRISHNA', 44, 6, 2),
  ('KRISHNA', 45, 6, 2), ('KRISHNA', 46, 6, 2), ('KRISHNA', 47, 6, 2), ('KRISHNA', 48, 6, 2),
  ('KRISHNA', 49, 7, 2), ('KRISHNA', 50, 7, 2), ('KRISHNA', 51, 7, 2), ('KRISHNA', 52, 7, 2),
  ('KRISHNA', 53, 7, 2), ('KRISHNA', 54, 7, 2), ('KRISHNA', 55, 7, 2), ('KRISHNA', 56, 7, 2),
  ('KRISHNA', 57, 8, 2), ('KRISHNA', 58, 8, 2), ('KRISHNA', 59, 8, 2), ('KRISHNA', 60, 8, 2),
  ('KRISHNA', 61, 8, 2), ('KRISHNA', 62, 8, 2), ('KRISHNA', 63, 8, 2), ('KRISHNA', 64, 8, 2),
  ('KRISHNA', 65, 9, 2), ('KRISHNA', 66, 9, 2), ('KRISHNA', 67, 9, 2), ('KRISHNA', 68, 9, 2),
  ('KRISHNA', 69, 9, 2), ('KRISHNA', 70, 9, 2), ('KRISHNA', 71, 9, 2), ('KRISHNA', 72, 9, 2),
  ('KRISHNA', 73, 10, 2), ('KRISHNA', 74, 10, 2), ('KRISHNA', 75, 10, 2), ('KRISHNA', 76, 10, 2),
  ('KRISHNA', 77, 10, 2), ('KRISHNA', 78, 10, 2), ('KRISHNA', 79, 10, 2), ('KRISHNA', 80, 10, 2),
  
  ('GANDHI', 1, 1, 2), ('GANDHI', 2, 1, 2), ('GANDHI', 3, 1, 2), ('GANDHI', 4, 1, 2),
  ('GANDHI', 5, 1, 2), ('GANDHI', 6, 1, 2), ('GANDHI', 7, 1, 2), ('GANDHI', 8, 1, 2),
  ('GANDHI', 9, 2, 2), ('GANDHI', 10, 2, 2), ('GANDHI', 11, 2, 2), ('GANDHI', 12, 2, 2),
  ('GANDHI', 13, 2, 2), ('GANDHI', 14, 2, 2), ('GANDHI', 15, 2, 2), ('GANDHI', 16, 2, 2),
  ('GANDHI', 17, 3, 2), ('GANDHI', 18, 3, 2), ('GANDHI', 19, 3, 2), ('GANDHI', 20, 3, 2),
  ('GANDHI', 21, 3, 2), ('GANDHI', 22, 3, 2), ('GANDHI', 23, 3, 2), ('GANDHI', 24, 3, 2),
  ('GANDHI', 25, 4, 2), ('GANDHI', 26, 4, 2), ('GANDHI', 27, 4, 2), ('GANDHI', 28, 4, 2),
  ('GANDHI', 29, 4, 2), ('GANDHI', 30, 4, 2), ('GANDHI', 31, 4, 2), ('GANDHI', 32, 4, 2),
  ('GANDHI', 33, 5, 2), ('GANDHI', 34, 5, 2), ('GANDHI', 35, 5, 2), ('GANDHI', 36, 5, 2),
  ('GANDHI', 37, 5, 2), ('GANDHI', 38, 5, 2), ('GANDHI', 39, 5, 2), ('GANDHI', 40, 5, 2),
  ('GANDHI', 41, 6, 2), ('GANDHI', 42, 6, 2), ('GANDHI', 43, 6, 2), ('GANDHI', 44, 6, 2),
  ('GANDHI', 45, 6, 2), ('GANDHI', 46, 6, 2), ('GANDHI', 47, 6, 2), ('GANDHI', 48, 6, 2),
  ('GANDHI', 49, 7, 2), ('GANDHI', 50, 7, 2), ('GANDHI', 51, 7, 2), ('GANDHI', 52, 7, 2),
  ('GANDHI', 53, 7, 2), ('GANDHI', 54, 7, 2), ('GANDHI', 55, 7, 2), ('GANDHI', 56, 7, 2),
  ('GANDHI', 57, 8, 2), ('GANDHI', 58, 8, 2), ('GANDHI', 59, 8, 2), ('GANDHI', 60, 8, 2),
  ('GANDHI', 61, 8, 2), ('GANDHI', 62, 8, 2), ('GANDHI', 63, 8, 2), ('GANDHI', 64, 8, 2),
  ('GANDHI', 65, 9, 2), ('GANDHI', 66, 9, 2), ('GANDHI', 67, 9, 2), ('GANDHI', 68, 9, 2),
  ('GANDHI', 69, 9, 2), ('GANDHI', 70, 9, 2), ('GANDHI', 71, 9, 2), ('GANDHI', 72, 9, 2),
  ('GANDHI', 73, 10, 2), ('GANDHI', 74, 10, 2), ('GANDHI', 75, 10, 2), ('GANDHI', 76, 10, 2),
  ('GANDHI', 77, 10, 2), ('GANDHI', 78, 10, 2), ('GANDHI', 79, 10, 2), ('GANDHI', 80, 10, 2);
  
--   Inserting 10 entries in allotment table
-- (student_id, student_name, student_wingId, Year_of_study, preference_of_hostel)
-- ('2020AXPS0009', 'Rahul', 2, 1, 'SR')
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('SR', 11,2,'2020AXPS0009', 'Rahul', 1);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'SR' AND Room_no = 11 AND hostel_wingId = 2;

-- ('2020AXPS0022', 'Rajesh', 8, 3, 'SHANKAR'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('SHANKAR', 65,8,'2020AXPS0022', 'Rajesh', 3);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'SHANKAR' AND Room_no = 19 AND hostel_wingId = 3;

-- ('2020AXPS0030', 'Rishabh', 8, 4, 'KRISHNA'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('KRISHNA', 66,8,'2020AXPS0020', 'Abhishek', 3);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'KRISHNA' AND Room_no = 66 AND hostel_wingId = 8;

-- ('2020AXPS0028', 'Ashish', 3, 4, 'GANDHI'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('GANDHI', 17,3,'2020AXPS0020', 'Ashish', 4);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'GANDHI' AND Room_no = 17 AND hostel_wingId = 3;

-- ('2020AXPS0016', 'Vineet', 7, 1, 'ASHOK'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('ASHOK', 58,7,'2020AXPS0016', 'Vineet', 1);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'ASHOK' AND Room_no = 58 AND hostel_wingId = 7;

-- ('2020AXPS0032','Nikhil',6,4,'GANDHI');
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('GANDHI', 49,6,'2020AXPS0032', 'Nikhil', 4);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'GANDHI' AND Room_no = 49 AND hostel_wingId = 6;

-- ('2020AXPS0023', 'Yash', 6, 3, 'VYAS'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('VYAS', 50,6,'2020AXPS0023', 'Yash', 3);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'VYAS' AND Room_no = 50 AND hostel_wingId = 6;

-- ('2020AXPS0013', 'Anurag', 9, 1, 'SR'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('SR', 73,9,'2020AXPS0013', 'Anurag', 1);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'SR' AND Room_no = 73 AND hostel_wingId = 9;

-- ('2020AXPS0007', 'Rajat', 6, 2, 'BUDH'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('BUDH', 51,6,'2020AXPS0007', 'Rajat', 2);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'BUDH' AND Room_no = 51 AND hostel_wingId = 6;

-- ('2020AXPS0018', 'Karan', 5, 3, 'SHANKAR'),
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('SHANKAR', 42,5,'2020AXPS0018', 'Karan', 3);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'SHANKAR' AND Room_no = 42 AND hostel_wingId = 5;
  
  
  Select * FROM Hostel;
  
--   ('2020AXPS0020', 'Abhishek', 3, 3, 'VYAS')
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('VYAS', 17,2,'2020AXPS0020', 'Abhishek', 3);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'VYAS' AND Room_no = 17 AND hostel_wingId = 2;
Select * FROM Allotment;

    -- Deleting a room allotment:
DELETE FROM Allotment WHERE Room_no = '17' AND student_id ='2020AXPS0020' ;
Select * FROM Allotment;

Select * FROM StudentWing;
  -- Updating hostel preferences:
UPDATE StudentWing SET preference_of_hostel = 'VYAS' WHERE student_id = '2020AXPS0020';
Select * FROM StudentWing;

--   Allot a student a specific room
-- ('2020AXPS0001', 'Raj', 2, 2, 'RAM') 
Select * FROM Allotment;
INSERT INTO Allotment (Hostel_name, Room_no, hostel_wingId, student_id, student_name, Year_of_study) VALUES ('RAM', 9,2,'2020AXPS0001', 'RAJ', 2);
UPDATE Hostel SET no_of_unoccupied_beds = no_of_unoccupied_beds - 1 WHERE Hostel_name = 'RAM' AND Room_no = 9 AND hostel_wingId = 2;
Select * FROM Allotment;
  
-- View all free rooms   
 SELECT * FROM Hostel WHERE no_of_unoccupied_beds > 0;

 -- View wingies (neighbouring 8 room) info
SELECT * FROM Allotment WHERE hostel_wingId = 2 AND hostel_name = 'RAM';


-- Retrieving database of all students residing in specific hostel
SELECT * FROM StudentWing s 
JOIN Allotment a ON s.student_id = a.student_id 
WHERE a.Hostel_name = 'RAM';





  






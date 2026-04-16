-- Db Travel Agency 
create database if not exists bdprojetweb1 ;
use bdprojetweb1;
CREATE TABLE users (
    id int PRIMARY KEY auto_increment, -- changed by rayen
    username VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('client','entreprise') DEFAULT 'client'
);

CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    departure_city VARCHAR(100),
    destination_city VARCHAR(100),
    from_airport VARCHAR(100),
    to_airport VARCHAR(100),
    departure_date DATE,
    departure_time TIME,
    price FLOAT,
    available_seats INT,
    airline VARCHAR(100)
);

CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id int, -- changed by rayen
    rating FLOAT,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id int NOT NULL,  -- 🔥 corrigé -- changed by rayen
    flight_id INT NOT NULL,
    seats INT NOT NULL DEFAULT 1,
    total_price DECIMAL(10,2) NOT NULL,
    stripe_session_id VARCHAR(255) UNIQUE,
    qr_token VARCHAR(64) UNIQUE NOT NULL,
    status ENUM('confirmed','cancelled') DEFAULT 'confirmed',
    qr_validated_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (flight_id) REFERENCES flights(id) ON DELETE CASCADE
);



-- Data Filling
INSERT INTO users (id, username, email,`password`, role) VALUES
(null, 'yassin','yassinbenslama13@gmail.com', '123456', 'client'), -- changed by rayen
(null, 'admin', 'yassinbenslama133@gmail.com','admin123', 'entreprise'); -- changed by rayen



INSERT INTO reviews (user_id, rating, comment) VALUES
(1, 5, 'Excellent service, très satisfait !'),
(1, 4, 'Bon service, mais peut mieux faire.'),
(2, 3, 'Correct, mais il y a des points à améliorer.');


INSERT INTO flights(departure_city, destination_city, from_airport, to_airport, departure_date, departure_time, price, available_seats, airline)
VALUES
('Tunis', 'Paris', 'TUN', 'CDG', '2026-04-10', '08:30:00', 450, 20, 'Air France'),
('Tunis', 'Rome', 'TUN', 'FCO', '2026-04-12', '10:00:00', 300, 5, 'Alitalia'),
('Paris', 'London', 'CDG', 'LHR', '2026-04-15', '14:00:00', 200, 0, 'British Airways'),
('Tunis', 'Dubai', 'TUN', 'DXB', '2026-05-01', '22:00:00', 800, 15, 'Emirates');



select * from flights;
delete from flights where id >=5;
select * from reservations;
select * from users ;
create database if not exists bdprojetweb1 ;
use bdprojetweb1;
CREATE TABLE users (
    id varchar(25) PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('client','admin') DEFAULT 'client'
);
CREATE TABLE reviews (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id varchar(25),
    rating FLOAT,
    comment TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);
INSERT INTO users (id, username, email,password, role) VALUES
('TN123456', 'yassin','yassinbenslama13@gmail.com', '123456', 'client'),
('AA987654', 'admin', 'yassinbenslama133@gmail.com','admin123', 'admin');
INSERT INTO reviews (user_id, rating, comment) VALUES
('TN123456', 5, 'Excellent service, très satisfait !'),
('TN123456', 4, 'Bon service, mais peut mieux faire.'),
('AA987654', 3, 'Correct, mais il y a des points à améliorer.');
select * from users ;
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
INSERT INTO flights 
(departure_city, destination_city, from_airport, to_airport, departure_date, departure_time, price, available_seats, airline)
VALUES
('Tunis', 'Paris', 'TUN', 'CDG', '2026-04-10', '08:30:00', 450, 20, 'Air France'),
('Tunis', 'Rome', 'TUN', 'FCO', '2026-04-12', '10:00:00', 300, 5, 'Alitalia'),
('Paris', 'London', 'CDG', 'LHR', '2026-04-15', '14:00:00', 200, 0, 'British Airways'),
('Tunis', 'Dubai', 'TUN', 'DXB', '2026-05-01', '22:00:00', 800, 15, 'Emirates');
select * from flights;
delete from flights where id >=5;
CREATE TABLE reservations (
    id INT AUTO_INCREMENT PRIMARY KEY,

    user_id VARCHAR(25) NOT NULL,  -- 🔥 corrigé
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
select * from reservations;
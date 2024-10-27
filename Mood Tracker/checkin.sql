CREATE TABLE checkins (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    mood VARCHAR(20),
    notes TEXT,
    checkin_date DATE,
    FOREIGN KEY (user_id) REFERENCES users(id)
);

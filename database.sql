-- Run this once to create the database
CREATE TABLE users (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  username TEXT NOT NULL,
  password TEXT NOT NULL
);

-- Insert a weak user
INSERT INTO users (username, password) VALUES ('admin', 'password123');

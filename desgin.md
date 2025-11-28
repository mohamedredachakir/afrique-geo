-- countries
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
population BIGINT,
languages VARCHAR(255),
continent VARCHAR(50) DEFAULT 'Afrique'

-- cities
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100) NOT NULL,
description TEXT,
type ENUM('capital','other') DEFAULT 'other',
country_id INT,
FOREIGN KEY (country_id) REFERENCES countries(id) ON DELETE CASCADE

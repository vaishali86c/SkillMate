DROP Table leaderboard;
DROP TABLE photo_comments;
DROP TABLE photo_likes;
DROP TABLE photos;
DROP TABLE chat_messages;
DROP TABLE friend_requests;
DROP TABLE recommendations;
DROP TABLE friendships;
DROP TABLE user_interests;
DROP TABLE interests;
DROP TABLE users;

-- users Table
CREATE TABLE users (
    user_id SERIAL PRIMARY KEY,
    fullName VARCHAR(255) NOT NULL,
    username VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    age INTEGER NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    profile_photo VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- interests Table
CREATE TABLE interests (
    interest_id SERIAL PRIMARY KEY,
    interest_name VARCHAR(255) NOT NULL
);

-- user_interests Table
CREATE TABLE user_interests (
    user_interest_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(user_id),
    interest_id INT REFERENCES interests(interest_id)
);

CREATE TABLE friendships (
    friendship_id SERIAL PRIMARY KEY,
    user_id1 INT REFERENCES users(user_id),
    user_id2 INT REFERENCES users(user_id),
    status VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE recommendations (
    recommendation_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(user_id),
    recommended_user_id INT REFERENCES users(user_id),
    num_similar_interests INT,
    UNIQUE(user_id, recommended_user_id)
);

CREATE TABLE friend_requests (
    request_id SERIAL PRIMARY KEY,
    sender_id INT REFERENCES users(user_id),
    receiver_id INT REFERENCES users(user_id),
    status VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE chat_messages (
    message_id SERIAL PRIMARY KEY,
    sender_id INT REFERENCES users(user_id),
    receiver_id INT REFERENCES users(user_id),
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE photos (
    photo_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(user_id),
    image_path VARCHAR(255) NOT NULL,
    caption TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE photo_likes (
    like_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(user_id),
    photo_id INT REFERENCES photos(photo_id),
    UNIQUE(user_id, photo_id)
);

CREATE TABLE photo_comments (
    comment_id SERIAL PRIMARY KEY,
    user_id INT REFERENCES users(user_id),
    photo_id INT REFERENCES photos(photo_id),
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE leaderboard (
    user_id INT REFERENCES users(user_id),
    ranking INT,
    PRIMARY KEY (user_id),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

INSERT INTO interests (interest_name) VALUES
('Basic programming'),
('Graphic designing'),
('Digital marketing'),
('Data entry and analysis'),
('Photography'),
('Video editing'),
('Blogging'),
('Language learning'),
('Web development'),
('Basic IT skills'),
('Public speaking'),
('Cooking'),
('Meditation'),
('DIY Home repairs'),
('Basic carpentry');
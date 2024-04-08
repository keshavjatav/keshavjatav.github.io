-- Quiz Table
CREATE TABLE Quiz (
    quiz_id VARCHAR(10) PRIMARY KEY,
    quiz_name VARCHAR(255),
    quiz_description TEXT
);

-- Question Table
CREATE TABLE Question (
    question_id VARCHAR(10) PRIMARY KEY ,
    quiz_id VARCHAR(10),
    question_text TEXT,
    FOREIGN KEY (quiz_id) REFERENCES Quiz(quiz_id)
);

-- Option Table
CREATE TABLE Option (
    option_id VARCHAR(10) PRIMARY KEY,
    question_id VARCHAR(10),
    option_text TEXT,
    is_correct BOOLEAN,
    FOREIGN KEY (question_id) REFERENCES Question(question_id)
);

-- User Score Table
CREATE TABLE UserScore (
    user_id VARCHAR(10),
    quiz_id VARCHAR(10),
    score INT,
    PRIMARY KEY (user_id, quiz_id),
    FOREIGN KEY (quiz_id) REFERENCES Quiz(quiz_id)
);

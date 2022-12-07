CREATE TABLE dyhs.prob_hard_sqli(
  id VARCHAR(100) PRIMARY KEY,
  pw VARCHAR(100)
);

INSERT into dyhs.prob_hard_sqli VALUE (
    "admin",
    "DY{flag}"
);